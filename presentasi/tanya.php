<?php
// Warna Terminal

$putih = "\e[37m";
$biru = "\e[34m";
$kuning = "\e[33m";
$cyan = "\e[96m";
$magenta = "\e[35m";
$hijau = "\e[92m";
$merah = "\e[91m";
echo "$merah

 
 
                         $hijau (https://github.com/ahmadchen)
";
echo "$biru \n Sebuah Tools Yang Berguna Saat Teman Mu Presentasi \n ";
echo "$cyan \n ( Cari kata yang berkaitan dengan presentasi teman mu) \n";
echo ' Pertanyaan :';
$tanya = trim(fgets(STDIN));
$naon = str_replace(' ', '%20', $tanya);
echo "\n \n";
$json_url = "http://web-tools.simplelearning.in/nanya/api.php?type=quora&q=$naon";
$aw = file_get_contents($json_url);
$json = json_decode($aw, true);
      foreach ($json as $tanya) {
    echo "$hijau Pertanyaan ? : \n ( $biru".$tanya['title'] . "$hijau ) $biru\n\n";
}
