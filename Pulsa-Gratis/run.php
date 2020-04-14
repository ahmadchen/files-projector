<?php
//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
//waktu
$today = date("d M Y");
$d = date("D");
echo $biru. "Tanggal :".$today;
echo $biru. "Hari ";
if($d == "Sun") {
	echo "Minggu";
}
elseif ($d == "Mon") {
	echo "Senin";
}
elseif ($d == "Tue") {
	echo "Selasa";
}
elseif ($d == "Wed") {
	echo "Rabu";
}
elseif ($d == "Thu") {
	echo "Kamis";
}
elseif ($d == "Fri") {
	echo "Jumat";
}
elseif ($d == "Sat") {
	echo "Sabtu";
}$nomor = "0818918191819";
//pilih
print $ijo."
____ _ _ _ ____ _
| _ \| | | | | / ___| / \
| |_) | | | | | \___ \ / _ \
| __/| |_| | |___ ___) / ___ \
|_| \___/|_____|____/_/ \_\".$t;
echo $putih. coded by : Pace Usa |"."Tool Hack Pulsa|".$t.$t;
echo $putih."K H U S U S P E N G G U N A T R E E ".$t;
sleep(2);
echo $ijo. "Masukan nomor : ".$t;
$nomer = trim(fgets(STDIN));
echo $ijo. "Masukan jumlah pulsa :".$t;
$pulsa = trim(fgets(STDIN));
echo "";
echo "";
echo "";
sleep(2);
echo $ijo. "SUKSES TERKIRIM !!".$t;
sleep(1);
echo "";
echo "";
echo "";
echo "";
echo "";
echo $biru." [>]".$ijo."Selamat Nomor ".$nomor." Mendapatkan Pulsa".$t;
echo $biru." [>]".$ijo."Sebesar Rp.".$pulsa." Jika Anda Butuh Bantuan". $t;
echo $biru." [>]".$ijo."Mohon Hubungi *123#. TERIMA KASIH". $t;
echo "";
?>
