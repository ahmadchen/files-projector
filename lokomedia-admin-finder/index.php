<?php
include ".#"; //ini cuma buat background aja gak terlalu penting
?>
	<center>
	<form method="post" enctype='multipart/form-data'>
<body>
<style>
html,body { 
                background: url(<? print $bg; ?>) no-repeat center center fixed; 
                -webkit-background-size: 100% 100%;
                -moz-background-size: 100% 100%;
                -o-background-size: 100% 100%;
                background-size: 100% 100%;
            }

	<meta http-equiv='content-type' content='text/html;charset=utf-8' />
	<meta name='generator' content='Geany 1.22' />
	<script type='text/javascript' src='jquery.js'></script>
	<div id='container'>
		<title>Admin Finder - By Pace Usa<? print $tt; ?></title>
		<link rel="shortcut icon" href="<? print $titit; ?>">
		<br/>
		<h1><b><font color="red">F</font><font color="blue">i</font><font color="gold">n</font><font color="indigo">d</font><font color="brown">e</font><font color="yellow">r</font></b></h1>
		<h2><b><font color="<? print $trz; ?>">Lokomedia</font></b></h2>
		<br/>
		<br/>
		<b><font color="red">Enter Site Url</font></b>
		<br/>
		<input type="text" class="str" placeholder="Enter Site Url" size="30" id="str" name="str" required="required">
		<br/>
		<input type="submit" id="dkp" name="dkp" value="START"/><br/>
	<div id='result-bar'>
		<span class='hasil'>
<?php
$str = $_POST['str'];
$dkp = $_POST['dkp'];
$strr = "starting.php?str=" . $str;
if(isset($dkp)){
echo '<iframe align="center" src="'.$strr.'" height="600" width="100%" weight="100%" size="100%" frameborder="0" scrolling="auto" noresize></iframe>';
}
?>
