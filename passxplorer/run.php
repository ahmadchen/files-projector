<?php
error_reporting(0);
/*
** Saya Mencium Aroma2 ******************
*  ____                    _            *
* |  _ \ ___  ___ ___   __| | ___ _ __  *
* | |_) / _ \/ __/ _ \ / _` |/ _ \ '__| *
* |  _ <  __/ (_| (_) | (_| |  __/ |    *
* |_| \_\___|\___\___/ \__,_|\___|_|    *
********* HARGAI LAH TOLOL ! ************

Don't recode my tools ok? HARGAI PEMBUAT GOBLOK.

            PassXplorer
    { Password Cracking Tool }
    
    KEMARIN TEMEN SAYA NGE-RECODE TOOL SAYA,
    EH BESOKNYA JANTUNGNYA DIRECODE MALAIKAT.
    MATI DEH.
*/
function kamus(){
$kamus=array(
"myadmin123",
"sysadmin",
"administrator",
"admin",
"admin123",
"admin12345",
"root",
"root12345",
"root2017",
"admin2017",
"rahasia",
"4dm1n",
"admin!@#",
"admin#@!",
"root#2020",
"adminweb",
"operator",
"0987654321",
"1234567890",
"password",
"password123",
"whoami",
"@dm1n",
"Admin",
"system",
"hacker",
"anonymous",
"kuloadmin",
"sayaadmin",
"Telkomdso123",
"user",
"123456",
"iloveyou",
"sayang123",
"qwerty123",
"qwerty1234",
"qwerty12345",); #Tambahin sendiri
foreach ($kamus as $k){
echo "$k\n";
}
}
function sayang($sayang){
$tambahan=array('123','yk123','12345','1234','321','098','2017','2003','2018','2002','2001','1995',); #Tambahin sendiri
$sayang1=ucfirst($sayang);
echo "$sayang\n$sayang1\n";
foreach($tambahan as $plus){
    echo "$sayang"."$plus\n";
}
foreach($tambahan as $plus){
    echo "$sayang1"."$plus\n";
}
}
function tinggal($tempat){
    $tambahan=array('lor','kidul','kulon','wetan','utara','barat','selatan','timur'); #Tambahin sendiri
    $tempat1=ucfirst($tempat);
    echo "$tempat\n$tempat1\n";
    foreach($tambahan as $tambah){
        echo "$tempat"."$tambah\n";
    }
    foreach($tambahan as $tambah){
        echo "$tempat1"."$tambah\n";
    }
}
function kerja($kerja){
    $tambahan=array("123","1234","2018","2019"); #Tambahin sendiri
    $kerja1=ucfirst($kerja);
    echo "$kerja\n$kerja1\n";
    foreach($tambahan as $tambah)
    {
        echo "$kerja"."$tambah\n";
    }
    foreach($tambahan as $tambah)
    {
        echo "$kerja1"."$tambah\n";
    }
}
function clear(){
    system('clear');
}
function lahir($lahir)
{
    $convert1=array(
    "01"=>"januari",
    "02"=>"februari",
    "03"=>"maret",
    "04"=>"april",
    "05"=>"mei",
    "06"=>"juni",
    "07"=>"juli",
    "08"=>"agustus",
    "09"=>"september",
    "10"=>"oktober",
    "11"=>"november",
    "12"=>"desember"
    );
    $convert2=array(
    "01"=>"bulansatu",
    "02"=>"bulandua",
    "03"=>"bulantiga",
    "04"=>"bulanempat",
    "05"=>"bulanlima",
    "06"=>"bulanenam",
    "07"=>"bulantujuh",
    "08"=>"bulandelapan",
    "09"=>"bulansembilan",
    "10"=>"bulansepuluh",
    "11"=>"bulansebelas",
    "12"=>"bulanduabelas"
    );
    $convert3=array(
     "01"=>"bulan1",
    "02"=>"bulan2",
    "03"=>"bulan3",
    "04"=>"bulan4",
    "05"=>"bulan5",
    "06"=>"bulan6",
    "07"=>"bulan7",
    "08"=>"bulan8",
    "09"=>"bulan9",
    "10"=>"bulan10",
    "11"=>"bulan11",
    "12"=>"bulan12"
    );
    $a=$lahir[0];
    $b=$lahir[1];
    $c=$lahir[2];
    $b1=strtr($b,$convert1);
    $b2=strtr($b,$convert2);
    $b3=strtr($b,$convert3);
echo "$a$b$c
$a$c$b
$b$a$c
$b$c$a
$c$b$a
$c$a$b
$a$b1$c
$a$c$b1
$b1$a$c
$b1$c$a
$c$b1$a
$c$a$b1
$a$b2$c
$a$c$b2
$b2$a$c
$b2$c$a
$c$b2$a
$c$a$b2
$a$b3$c
$a$c$b3
$b3$a$c
$b3$c$a
$c$b3$a
$c$a$b3\n";
}
function nama($nama,$lahir,$kerja,$tempat_tinggal,$sayang,$no_hp)
{
    $tambahan=array("123",
        "1234",
        "yk123",
        "12345",
        "2016",
        "2017",
        "2018",
        "2019",
        "2020",
        "$lahir[0]",
        "$lahir[1]",
        "$lahir[2]",
        "$lahir[0]$lahir[1]",
        "$lahir[0]$lahir[2]",
        "$lahir[1]$lahir[0]",
        "$lahir[1]$lahir[2]",
        "$lahir[2]$lahir[0]",
        "$lahir[2]$lahir[1]",
        "$lahir[0]$lahir[1]$lahir[2]",
        "$lahir[0]$lahir[2]$lahir[1]",
        "$lahir[1]$lahir[0]$lahir[2]",
        "$lahir[1]$lahir[2]$lahir[0]",
        "$lahir[2]$lahir[1]$lahir[0]",
        "$lahir[2]$lahir[0]$lahir[1]",
        "$kerja",
        "$sayang",
        "$no_hp",
        "lama",
        "baru",
        "ganteng",
        "cantik",
        "gans",
        "cans",
        "lor",
        "kidul",
        "kulon",
        "wetan",
        "utara",
        "selatan",
        "sayang",
        "sayangku",
        "!@#",
        "#@!",
        "!@",
        "@!",
        "!#",
        "#!",
        "#@",
        "@#",
        "@#!",
        "@!#",
        "!@#$%",
        "%$#@!", 
        ); #Tambahin sendiri
    $i=count($nama);
    if($count < 3){
        $nama_tengah=NULL;
    }
    $nama_depan=strtolower($nama[0]);
    $nama_tengah=strtolower($nama[1]);
    $nama_belakang=strtolower($nama[2]);
    $nama_depanf=ucfirst(strtolower($nama[0]));
    $nama_tengahf=ucfirst(strtolower($nama[1]));
    $nama_belakangf=ucfirst(strtolower($nama[2]));
    echo "$nama_depan
$nama_tengah
$nama_belakang\n";
foreach($tambahan as $tambah){
echo "$nama_depan"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_tengah"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_belakang"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depan"."$nama_tengah"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depan"."$nama_belakang"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_tengah"."$nama_belakag"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depanf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_tengahf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_belakangf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depanf"."$nama_tengah"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depanf"."$nama_belakang"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_tengahf"."$nama_belakag"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depan"."$nama_tengahf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depan"."$nama_belakangf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_tengah"."$nama_belakagf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depanf"."$nama_tengahf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_depanf"."$nama_belakangf"."$tambah\n";
}
foreach ($tambahan as $tambah){
echo "$nama_tengahf"."$nama_belakagf"."$tambah\n";
}
}
echo "
   /////////////////////// { Password Cracking Tool }
  // Password Explorer //   PassXplorer 2020.1 rev.1
 //   Wordlist Maker  //    by Pace Usa
///////////////////////    --------------------------
\n\n
[1] Start\n[2] Exit\n\n> ";
$opt=trim(fgets(STDIN));
if($opt==1)
{
    echo "";
    echo "Aktifkan kamus? (bantu bf adlog web) (y/n) : ";
    $kamuz=trim(fgets(STDIN));
    echo "Nama Depan : ";
    $nama_depan=trim(fgets(STDIN));
    echo "Nama Tengah : ";
    $nama_tengah=trim(fgets(STDIN));
    echo "Nama Belakang : ";
    $nama_belakang=trim(fgets(STDIN));
    echo "Tanggal Lahir (dd[spasi]mm[spasi]yyyy) : ";
    $lahir=trim(fgets(STDIN));
    echo "Tempat Kerja / Sekolah (ex: smp1bantul) : ";
    $kerja=trim(fgets(STDIN));
    echo "Tempat Tinggal (ex: bakulan) : ";
    $tempat_tinggal=trim(fgets(STDIN));
    echo "Nama Orang Tersayang (Optional) : ";
    $sayang=trim(fgets(STDIN));
    echo "No. Handphone : ";
    $no_hp=trim(fgets(STDIN));
    echo "[+] Exploding ...";
    $convert=explode(" ",$lahir);
    $tanggal=$convert[0];
    $bulan=$convert[1];
    $tahun=$convert[2];
    sleep(3);
    clear();
    echo "{ Data Exploded }\n";
    echo "[1] Nama : $nama_depan $nama_tengah $nama_belakang\n";
    echo "[2] Tanggal Lahir : $tanggal/$bulan/$tahun\n";
    echo "[3] Tempat Kerja/Sekolah : $kerja\n";
    echo "[4] Tempat Tinggal : $tempat_tinggal\n";
    echo "[5] Orang Tersayang : $sayang\n";
    echo "[6] No. Handphone : $no_hp\n";
    sleep(1);
    echo "Generating ...\n";
    sleep(3);
    echo "Silahkan di Copy : \n\n";
    if($kamuz == "y"){
        kamus();
    }
    echo "$no_hp\n";
    nama(array("$nama_depan","$nama_tengah","$nama_belakang"),$convert,$kerja,$tempat_tinggal,$sayang,$no_hp);
    lahir($convert);
    kerja($kerja);
    tinggal($tempat_tinggal);
    sayang($sayang);
/*echo "$no_hp\n";
    
    $fh=fopen("$output","a");
    fwrite($fh,"$gennama");
    fwrite($fh,"$genlahir");
    if(fclose($fh)){
        echo "\nGenerated at -> $output\n";
    }else{
        echo "\nPermission Denied!\n";
    }
    cek($convert);
    cek(array("$kerja"));
    cek(array("$tempat_tinggal"));
    cek(array("$sayang"));
    cek(array("$no_hp"));
    */
}else
{
    echo "Good bye :)\n";
    exit();
}
?>
