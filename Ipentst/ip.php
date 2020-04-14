<?php

function index(){
    include 'config.php';
    @system("clear");
    print "\n";
    print "$cyan     ____$red ____             __       __ \n";
    print "$cyan    /  _/$red  __ \___  ____  / /______/ /_\n";
    print "$cyan    / /$red / /_/ / _ \/ __ \/ __/ ___/ __/\n";
    print "$cyan  _/ /$red / ____/  __/ / / / /_(__  ) /_  \n";
    print "$cyan /___/$red _/    \___/_/ /_/\__/____/\__/  \n\n";
    print "$white   Mini IP Penetration Testing Tool   \n\n";
}

function menu(){
    include 'config.php';
    print "$cyan   01$red :$white MTR Traceroute\n";
    print "$cyan   02$red :$white Test Ping\n";
    print "$cyan   03$red :$white DNS Lookup\n";
    print "$cyan   04$red :$white Reverse DNS\n";
    print "$cyan   05$red :$white Host Search\n";
    print "$cyan   06$red :$white Find Shared DNS Servers\n";
    print "$cyan   07$red :$white Zone Transfer Test\n";
	print "$cyan   08$red :$white Whois\n";
	print "$cyan   09$red :$white Geo IP Location Lookup\n";
	print "$cyan   10$red :$white Reverse IP Lookup\n";
	print "$cyan   11$red :$white Nmap Port Scan\n";
    print "$cyan   12$red :$white Subnet Lookup\n";
    print "$cyan   13$red :$white Autonomous System Lookup\n";
	print "$cyan   14$red :$white Banner Lookup\n";
	print "$cyan   15$red :$white HTTP Headers\n";
	print "$cyan   16$red :$white Page Links\n";
    print "$cyan   17$red :$white Analytics Lookup\n\n";
    print "$white $user.$host$red //$white ";
	$input = trim(fgets(STDIN));
	print "$white Target$red //$white ";
    $target = trim(fgets(STDIN));
    if ($input == '01' OR $input == '1'){
        api($mtr, $target);
    }elseif ($input == '02' OR $input == '2'){
        api($nping, $target);
    }elseif ($input == '03' OR $input == '3'){
        api($dnslookup, $target);
    }elseif ($input == '04' OR $input == '4'){
        api($reversedns, $target);
    }elseif ($input == '05' OR $input == '5'){
        api($hostsearch, $target);
    }elseif ($input == '06' OR $input == '6'){
        api($findshareddns, $target);
    }elseif ($input == '07' OR $input == '7'){
        api($zonetransfer, $target);
    }elseif ($input == '08' OR $input == '8'){
        api($whois, $target);
    }elseif ($input == '09' OR $input == '9'){
        api($geoip, $target);
    }elseif ($input == '10'){
        api($reverseiplookup, $target);
    }elseif ($input == '11'){
        api($nmap, $target);
    }elseif ($input == '12'){
        api($subnetcalc, $target);
    }elseif ($input == '13'){
        api($aslookup, $target);
    }elseif ($input == '14'){
        api($bannerlookup, $target);
    }elseif ($input == '15'){
        api($httpheaders, $target);
    }elseif ($input == '16'){
        api($pagelinks, $target);
    }elseif ($input == '17'){
        api($analyticslookup, $target);
    }else{
        menu();
    }
}

function api($link, $target){
    index();
    include 'config.php';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,"$link".$target);
	$result=curl_exec($ch);
	curl_close($ch);
	print $result."\n\n";
}

index();
menu();

?>
