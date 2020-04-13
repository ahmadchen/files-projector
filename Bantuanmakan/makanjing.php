<?php
error_reporting(0);
ini_set('display_errors', 0);

include("function.php");

if (!file_exists('code.txt')) {
	echo "Error code.txt file not found \n";
	exit;
}

if (!file_exists('token.txt')) {
	touch('token.txt');
}


$file = file_get_contents('token.txt');
$tokenori = array_filter(explode(PHP_EOL, $file));
$token = array_unique($tokenori);
$token1 = count($tokenori);
$token2 = count($token);
$duplicate = $token1-$token2;

$file2 = file_get_contents('code.txt');
$code = array_filter(explode(PHP_EOL, $file2));
$tcode = count($code);

function nama()
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
	return $name[2][mt_rand(0, 14)];
}
function register($no)
{
	$nama = nama();
	$email = str_replace(" ", "", $nama) . mt_rand(100, 999);
	$data = '{"name":"' . $nama . '","email":"' . $email . '@mail.com","phone":"' . $no . '","signed_up_country":"ID"}';
	$register = request("/v5/customers", "", $data);
	echo "\n";
	echo "Nama: " . $nama . "\n";
	echo "Email: " . $email . "@mail.com\n";
	echo "\n";
	if ($register['success'] == 1) {
		return $register['data']['otp_token'];
	} else {
		save("error_log.txt", json_encode($register));
		return false;
	}
}
function verif($otp, $token)
{
	$data = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $token . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
	$verif = request("/v5/customers/phone/verify", "", $data);
	if ($verif['success'] == 1) {
		echo "\n";
		echo "Token: " . $verif['data']['access_token'] . "\n";
		echo "Saving token...\n";
		echo "\n";
		save("token.txt", $verif['data']['access_token']);
		return $verif['data']['access_token'];
	} else {
		save("error_log.txt", json_encode($verif));
		return false;
	}
}
function login($no)
{
	$data = '{"phone":"+1' . $no . '"}';
	$register = request("/v4/customers/login_with_phone", "", $data);

	if ($register['success'] == 1) {
		return $register['data']['login_token'];
	} else {
		save("error_log.txt", json_encode($register));
		return false;
	}
}
function veriflogin($otp, $token)
{
	$data = '{"client_name":"gojek:cons:android","client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e","data":{"otp":"' . $otp . '","otp_token":"' . $token . '"},"grant_type":"otp","scopes":"gojek:customer:transaction gojek:customer:readonly"}';
	$verif = request("/v4/customers/login/verify", "", $data);
	if ($verif['success'] == 1) {
		echo "\n";
		echo "Token: " . $verif['data']['access_token'] . "\n";
		echo "Saving token...\n";
		echo "\n";
		save("token.txt", $verif['data']['access_token']);
		return $verif['data']['access_token'];
	} else {
		save("error_log.txt", json_encode($verif));
		return false;
	}
}
function claim($token, $code)
{
	foreach ($code as $m => $b) {
		$data = '{"promo_code":"' . $b . '"}';
		$claim = request("/go-promotions/v1/promotions/enrollments", $token, $data);
		if ($claim['success'] == 1) {
			$num = $m + 1;
			echo "[$num] " . $b . "\n";
			echo $claim['data']['message'] . "\n";
			sleep(5);
		} else {
			$num = $m + 1;
			echo "[$num] " . $b . "\n";
			save("error_log.txt", json_encode($claim));
			echo $claim['errors']['0']['message'] . "\n";
			sleep(5);
		}
	}
}
function profile($token)
{
	$get = request("/gopoints/v3/wallet/vouchers?limit=10&page=1", $token);
	if ($get['success'] == 1) {
		if ($get['voucher_stats']['total_vouchers'] != 0) {
			$ok = null;
			echo "[*] Total Voucher: " . $get['voucher_stats']['total_vouchers'] . "\n";
			foreach ($get['data'] as $no => $data) {
				$num = $no + 1;
				echo "[$num] " . $data['title'] . " Exp: " . $data['expiry_date'] . "\n";
				if ($data['title'] == "Voucher Rp 20.000 pakai GoFood") {
					echo "You got 20k Voucher GoFood!!!\n";
					save('20k.txt', $token . " Exp: " . $data['expiry_date']);
					$ok = $token;
				}
			}
		} else { 
			echo "You doesn't have any Voucher \n";
		}
	} else {
		save("error_log.txt", json_encode($get));
		return false;
	}
	return $ok;
}
function check($token)
{
	$get = request("/gopoints/v3/wallet/vouchers?limit=10&page=1", $token);
	if ($get['success'] == 1) {
		$data = '{"promo_code":"GOJEK"}';
		$block = request("/go-promotions/v1/promotions/enrollments", $token , $data);
		if ($block['errors'][0]['code'] == "GPS-Proxy-CustomerBlocked"){
			echo "Account Blocked!!! \n";
			save("blocked.txt", $token);
			return "block";
	} else {
		save('valid.txt', $token);
		return "valid";
	}
	} else {
		echo "Invalid Token!!! \n";
		save("error_log.txt", json_encode($get));
		save("invalid.txt", $token);
		return "invalid";
	}

}
function voc($token)
{
	$req = request("/v2/customer/cards/food", $token);
	$json = json_encode($req);
	preg_match_all("/GOFOODSANTAI\d{2}/", $json, $voc);
	$vocd = isset($voc[0][0]) ? $voc[0][0] : null;
	if ($vocd != "") {
		echo $vocd . "\n";
		$data = '{"promo_code":"' . $vocd . '"}';
		$claim = request("/go-promotions/v1/promotions/enrollments", $token, $data);
		if ($claim['success'] == 1) {
			echo $claim['data']['message'] . "\n";
			sleep(5);
		} else {
			save("error_log.txt", json_encode($claim));
			echo $claim['errors']['0']['message'] . "\n";
			sleep(5);
		}
	} else {
		echo "No Promo for You:(\n";
	}
}
echo "\n";
echo "####################################### \n";
echo "# Tools Penggemuk Badan by Agong      # \n";
echo "####################################### \n";
echo "\n";
echo "Total Token: " . $token1 . "\n";
echo "Duplicate  : " . $duplicate . "\n";
echo "Your Token : " . $token2 . "\n";
echo "\n";
echo "Custom Code: " . $tcode . "\n";
echo "\n";
echo "What do you want?\n\n";
echo "1 => Register\n";
echo "2 => Login\n";
echo "3 => Claim code with Token\n";
echo "4 => Check Account Vouchers\n";
echo "\n";
echo "Option: ";
$type = trim(fgets(STDIN));
if ($type == 1) {
	echo "\n";
	echo "It's Register Way\n";
	echo "Input US Phone Number\n";
	echo "Enter Number: ";
	$nope = trim(fgets(STDIN));
	$register = register($nope);
	if ($register == false) {
		echo "Failed to Get OTP, Use Unregistered Number!\n";
	} else {
		otpr: echo "Enter Your OTP: ";
		$otp = trim(fgets(STDIN));
		$verif = verif($otp, $register);
		if ($verif == false) {
			echo "OTP code isn't valid! Try again\n";
			goto otpr;
		} else {
			echo "Ready to Claim... \n\n";
			if (empty($code)) {
				echo "Your Custom Code is empty \n\n";
				echo "[*] Your Promo: ";
				voc($verif);
				echo "\n";
				echo "[*] Your Voucher:\n";
				profile($verif);
				echo "\n";
			} else {
				echo "[*] Your Promo: ";
				voc($verif);
				echo "\n";
				echo "[*] Custom Code:";
				echo "\n";
				claim($verif, $code);
				echo "\n";
				echo "[*] Your Voucher:\n";
				profile($verif);
				echo "\n";
			}
		}
	}
} else if ($type == 2) {
	echo "\n";
	echo "It's Login Way\n";
	echo "Input US Phone Number\n";
	echo "Enter Number: ";
	$nope = trim(fgets(STDIN));
	$login = login($nope);
	if ($login == false) {
		echo "Failed to Get OTP!\n";
	} else {
		otpl: echo "Enter Your OTP: ";
		$otp = trim(fgets(STDIN));
		$verif = veriflogin($otp, $login);
		if ($verif == false) {
			echo "OTP code isn't valid! Try again\n";
			goto otpl;
		} else {
			echo "Ready to Claim... \n\n";
			if (empty($code)) {
				echo "Your Custom Code is empty \n\n";
				echo "[*] Your Promo: ";
				voc($verif);
				echo "\n";
				echo "[*] Your Voucher:\n";
				profile($verif);
				echo "\n";
			} else {
				echo "[*] Your Promo: ";
				voc($verif);
				echo "\n";
				echo "[*] Custom Code:";
				echo "\n";
				claim($verif, $code);
				echo "\n";
				echo "[*] Your Voucher:\n";
				profile($verif);
				echo "\n";
			}
		}
	}
} elseif ($type == 3) {
	echo "\n";
	echo "Ready to Claim... \n";
	echo "\n";
	if (empty($code)) {
		echo "Your Custom Code is empty \n\n";
		foreach ($token as $n => $a) {
			echo "Token: " . $a . "\n";
			echo "[*] Your Promo: ";
			voc($a);
			echo "\n";
			echo "[*] Your Voucher:\n";
			profile($a);
			echo "\n";
		}
	} else {
		foreach ($token as $n => $a) {
			echo "Token: " . $a . "\n";
			echo "[*] Your Promo: ";
			voc($a);
			echo "\n";
			echo "[*] Custom Code:";
			echo "\n";
			claim($a, $code);
			echo "\n";
			echo "[*] Your Voucher:\n";
			profile($a);
			echo "\n";
		}
	}
} elseif ($type == 4) {
	$voc = [];
	$block = [];
	$invalid =[];
	$valid = [];
	foreach ($token as $n => $a) {
		echo "\n";
		$num = $n + 1;
		echo "Token[$num]: " . $a;
		echo "\n";
		$check = check($a);
		if ($check == "block"){
			array_push($block,"block");
		} elseif ($check == "invalid"){
			array_push($invalid,"invalid");
		}  else {
			array_push($valid,"valid");
			$val = profile($a);
			if ($val != "") {
			array_push($voc, $val);
			}
		}
	}	
	$cvoc = count($voc);
	$cblock = count($block);
	$cinvalid = count($invalid);
	$cvalid = count($valid);
	echo "\n";
	echo "Total Account with Voucher 20k = " . $cvoc . "\n";
	echo "Token with 20k saved in 20k.txt";
	echo "\n\n";
	echo "Total Blocked Account = " . $cblock . "\n";
	echo "Blocked Token saved in blocked.txt";
	echo "\n\n";
	echo "Total Invalid Token = " . $cinvalid . "\n";
	echo "Invalid Token saved in invalid.txt";
	echo "\n\n";
	echo "Total Valid Token = " . $cvalid . "\n";
	echo "Valid Token saved in valid.txt";
	echo "\n\n";
}
