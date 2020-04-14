<?php
//KNTLCMS v2
$config = include 'config.php';
//mysql
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
// Check connection
if ($conn->connect_error) {
    die("KNTLCMS v2 SQL Error -> " . $conn->connect_error);
}
function IsTorExitPoint(){
    if (gethostbyname(ReverseIPOctets($_SERVER['REMOTE_ADDR']).".".$_SERVER['SERVER_PORT'].".".ReverseIPOctets($_SERVER['SERVER_ADDR']).".ip-port.exitlist.torproject.org")=="127.0.0.2") {
        return true;
    } else {
       return false;
    } 
}
function ReverseIPOctets($inputip){
    $ipoc = explode(".",$inputip);
    return $ipoc[3].".".$ipoc[2].".".$ipoc[1].".".$ipoc[0];
}

//ANTI TOR 
/*
if (IsTorExitPoint) {
	die("ini bukan deepweb goblok gak usah pake tor");
}*/

//function
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'Tidak Diketahui';
    return $ipaddress;
}
$vua = $conn->escape_string($_SERVER['HTTP_USER_AGENT']);
$vip = $conn->escape_string(get_client_ip());



//get nama

$nama = $conn->escape_string($_GET['nama']);
$nama = substr($nama,0,16);
$nama = strtolower($nama);
$lname = htmlentities($nama, ENT_QUOTES, 'UTF-8');
$vip = substr($vip,0,32);
$vua = substr($vua,0,256);
/* SCRAPPED KARENA ERROR + EXPLOIT DoS
// -------------------------
$sqlc = "SELECT MAX(vid) FROM vid";
$resultc = $conn->query($sqlc);
$vidcount = mysqli_fetch_array($resultc);
$vidcount2 = implode("/" , $vidcount);
$vidcount3 = explode("/" , $vidcount2);
$vidcount4 = (int)$vidcount3[0];
$vidcount5 = $vidcount4 + 1;
$vidcount6 = intval($vidcount5);
//----------------------------
 if(!isset($_COOKIE['vid'])) {
	 $sqlvid = "INSERT INTO `vid` (`vid`, `timeadd`, `ltime`, `lname`, `lip`, `lua`) VALUES ('$vidcount4', NOW() , NOW(), '$lname', '$vip', '$vua');";
    setcookie('vid', $vidcount, time() + (86400 * 30), "/");
	$visitorid = $vidcount;
} else {
	$sqlvid = "UPDATE `vid` SET `ltime` = NOW() , `lname` = '$lname' , `lip` = '$vip' , `lua` = '$vua' WHERE `vid`.`vid` = $_COOKIE[vid];";
	 setcookie('vid', $_COOKIE['vid'], time() + (86400 * 30), "/");
	 $visitorid = $_COOKIE['vid'];
}
$resultvid = $conn->query($sqlvid);*/
//echo $resultvid . $conn->error ;
//-------------------------------
$visitorid = "0";//SEMENTARA DIMATIKAN
$cadel = FALSE;
//easter egg nama
if ($nama == "lampung" OR $nama == "john cena") {
	$nama = " ";
} else if ($nama == "pekalongan") {
	$nama = "cheater";
} else if ($nama == "tiktok") {
	$nama = "aplikasi goblog";
} else if ($nama == "bbenk") {
	$nama = "automatot";
} else if ($nama == "mobilelegends") {
	$nama = "moba plagiat";
} else if ($nama == "miya" OR $nama == "balmond" OR $nama == "saber" OR $nama == "alice" OR $nama == "nana" OR $nama == "tigreal" OR $nama == "karina" OR $nama == "akai" OR $nama == "franco" OR $nama == "bane" OR $nama == "bruno" OR $nama == "rafaela" OR $nama == "eudora" OR $nama == "zilong" OR $nama == "fanny" OR $nama == "layla" OR $nama == "minotaur" OR $nama == "lolita" OR $nama == "hayabusa" OR $nama == "freya" OR $nama == "gord" OR $nama == "natalia" OR $nama == "kagura" OR $nama == "chou" OR $nama == "sun" OR $nama == "alpha" OR $nama == "ruby" OR $nama == "yss" OR $nama == "moskov" OR $nama == "johnson" OR $nama == "cyclops" OR $nama == "estes" OR $nama == "hilda" OR $nama == "aurora" OR $nama == "lapulapu" OR $nama == "lapu-lapu" OR $nama == "vexana" OR $nama == "roger" OR $nama == "karrie" OR $nama == "gatotkaca" OR $nama == "harley" OR $nama == "irithel" OR $nama == "grock" OR $nama == "argus" OR $nama == "odette" OR $nama == "lancelot" OR $nama == "diggie" OR $nama == "hylos" OR $nama == "zhask" OR $nama == "helcurt" OR $nama == "pharsa" OR $nama == "lesley" OR $nama == "angela" OR $nama == "gusion" OR $nama == "valir" OR $nama == "martis" OR $nama == "uranus" OR $nama == "hanabi" OR $nama == "change" OR $nama == "selena" OR $nama == "kaja" OR $nama == "vale" OR $nama == "claude" OR $nama == "alduos") {
	$nama = "Hero Moba Analog";
} else if ($nama == "rahmattarigan") {
	$nama = "Penipu harga diri 30k";
} else if( strpos( $nama, "<script>" ) !== false) {
    $nama = "hacker";
} else if ($nama == "alucard" ) {
	$nama = "feeder";
} else if ($nama == "erickolim") {
	$nama = "kontoru";
} else if ($nama == "garok" OR $nama == "garox" OR $nama == "garoque") {
	$nama = "Zeeber";
} else if ($nama == "warpath") {
	$nama = "walpath";
	$cadel = TRUE;
} else if ($nama == "dyland pros" OR $nama == "dylandpros") {
	$nama = "dyland plos";
	$cadel = TRUE;
} else if ($nama == "dyland pros" OR $nama == "dylandpros") {
	$nama = "dyland plos";
	$cadel = TRUE;
} else if ($nama == "MLPh1zz" OR $nama == "CODACSRF") {
	$nama = "Sekrip Pesing";
} else if ($nama == "aov" OR $nama == "arenaofvalor") {
	$nama = "moba 7m";
} else if ($nama == "vg" OR $nama == "vainglory") {
	$nama = "moba ded gim";
} else if ($nama == "loss") {
	$nama = "| || || |_";
} else if ($nama == "bowo" OR $nama == "prabowo") {
	$nama = "botol";
}
 else if ($nama == "jessnolimit") {
	$nama = "Jess Yesn't Limit";
}  else if ($nama == "flag" OR $nama == "flag.html" OR $nama == "flag.py" OR $nama == "flag.php") {
	$nama = "CTF{bukan_ctf_goblok}";
}

//Anti badword
if ($nama == "anjing") {
	$nama = "yoga";
} else if ($nama == "kontol" OR $nama == "kontlo") {
	$nama = "fajar";
} else if ($nama == "ngentot" OR $nama == "ngentod" OR $nama == "entot" OR $nama == "entod") {
	$nama = "riski";
} else if ($nama == "biadab" OR $nama == "savage") {
	$nama = "reza";
} else if ($nama == "saaih" OR $nama == "saai" OR $nama == "saaihalilintar") {
	$nama = "palkon";
} else if ($nama == "lonte") {
	$nama = "irithel";
} else if ($nama == "waria") {
	$nama = "hilda";
} else if ($nama == "banci" OR $nama == "bencong") {
	$nama = "lancelot";
}


//ANTI XSS XSS CLUB
$nama = htmlentities($nama, ENT_QUOTES, 'UTF-8');

//kntlcms

if ($nama === "") {
$display = $config['title'];
$displayslogan = "Masukan nama kamu diatas untuk mulai . " . $config['webinfo'];
$image_url = $config['default_image'];
$tabutton = "display:none";
} else {
	$insertname = "display:none";
	$sqlx = "SELECT title , image_url FROM entri ORDER BY RAND() LIMIT 0,1 ";
$resultx = $conn->query($sqlx);
$display = $config['judul'];
if ($resultx->num_rows > 0 AND strpos($display, "#entri") !== false ) {
    while($row = $resultx->fetch_assoc()) {
	
    $display = str_replace("#nama","<b>" . $nama . "</b>",$display);
	$display = str_replace("#entri",htmlentities($row['title'], ENT_QUOTES, 'UTF-8'),$display);
	$display = str_replace("#random", rand($config['rangemin'],$config['rangemax']) ,$display);
	$image_url = $row['image_url'];
	//echo $image_url;
	if ($image_url == "KOSONG") {
		$image_url = $config['default_image'] ;
	}
    }
} else {

    $display = str_replace("#nama","<b>" . $nama . "</b>",$display);
	$display = str_replace("#entri","",$display);
	$display = str_replace("#random", rand($config['rangemin'],$config['rangemax']) ,$display);
$image_url = $config['default_image'] ;
}

$displayslogan = $config['slogan'] ;
$displayslogan = str_replace("#nama","<b>" . $nama . "</b>",$displayslogan);
}






//bancheck

$sqlb = "SELECT * FROM ban WHERE ip = '$vip' and endd >= CURDATE() ";
$resultb = $conn->query($sqlb);
if ($resultb->num_rows > 0) {
    
    while($row = $resultb->fetch_assoc()) {
	$enddb = $row['endd'];
	$reasond = $row['reason'];
	die("Anda telah dibanned dari situs ini sampai $enddb karena $reasond");
    }
} else {
 
}


//visitor counter

$url = strtolower($_SERVER['REQUEST_URI'])  ;
$sqlv = "INSERT INTO visitor (vid , time , url , ip , ua ) VALUES ('$visitorid' , CURRENT_TIMESTAMP(), '$url' , '$vip','$vua')";
//user agent filter 
if (strpos($vua, "sqlmap") !== false ) {
	
	$brs = "[AUTOBANNED] TERCYDUCK HACKING MySQL Injection";
	$sqlv = "INSERT INTO ban (startd ,endd , ip , reason ) VALUES (CURRENT_TIMESTAMP() ,  SUBTIME(NOW(), '-168:00:00') , '$vip' , '$brs' )";
    $resultq = $conn->query($sqlv);
	$sqlvxp = "INSERT INTO log (time ,type , vuid , msg , ip , ua ) VALUES (CURRENT_TIMESTAMP() , 'hack' , '$visitorid' , 'IP ini terdeteksi melakukan MySQL Injection dan sudah di ban-ip 7 hari' , '$vip' , '$vua'); ";
	$sqlvx = "INSERT INTO log (time ,type , vuid , msg , ip , ua ) VALUES (CURRENT_TIMESTAMP() , 'ban' , '$visitorid' , CONCAT('banned akibat $brs dari ' , CURRENT_TIMESTAMP() , ' - ' , SUBTIME(NOW(), '-168:00:00')) , '$vip' , '$vua'); ";
     $resultqxp = $conn->query($sqlvxp);
	$resultqx = $conn->query($sqlvx);
	
	die("Mau ngehack ya? terciduk kau");
	}

$resultq = $conn->query($sqlv);

//CADELerz
	if ($cadel == TRUE) {
		$display = str_replace("r","l",$display);
		$display = str_replace("R","L",$display);
		$displayslogan = str_replace("r","l",$displayslogan);
		$displayslogan = str_replace("R","L",$displayslogan);
	}
?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $config['desc']?>">
    <meta name="author" content="KNTLCMS">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $config['title'] ?></title>
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $display ?>" />
<meta property="og:description"        content="<?php echo $displayslogan ?>"/>
<meta property="og:image"              content="<?php echo $image_url ?>" />
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap4.css"  type="text/css"  rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/jumbotron/jumbotron.css" rel="stylesheet">
	<script>
function ngentod() {
	location.reload();
}
</script>
<style>
body {
    display: block !important ;
}
.jumbotron {

	background-color: rgba(0, 0, 0, 0.6);
	    height:100%;
}
.kontol {
		    background-image:url('<?php echo $image_url ?>');
		    background-size:100% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
@media (min-width: 576px) { 
    .jumbotron{
		padding: 2rem 2rem;
	}


@media (min-width: 768px) { 
.jumbotron {
    padding: 20rem 2rem;
	}
	}
</style>
<link href="https://getbootstrap.com/docs/4.1/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><?php echo $config['title'] ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Powered By KNTLCMS V.2</a>
          </li>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="kontol">
	<div class="jumbotron">
	
        <div class="container">
          <h3 class="display-4" style="color:#ffffff;     font-size: 3.0rem;" ><?php echo $display ?></h3>
		  <div class="fajarkontol" style="<?php echo $insertname ?>">
		  		<form action="" method="GET">
		<div class="form-label-group">

        <input type="text" id="inputEmail" class="form-control" placeholder="Masukan nama kamu" name="nama" required="" autofocus="">
        <label for="inputEmail">Masukan Nama kamu</label>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Mulai</button>
	
      </div>
	  	</form>
		  </div>
          <p style="color:#ffffff"><?php echo $displayslogan ?></p>
          <p><a class="btn btn-primary btn-lg" style="<?php echo $tabutton ?>" href="#" onclick="ngentod()" role="button">Coba Lagi</a></p>
        </div>
		</div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
		  <div class="col-md-6">
            <h2>Info Website</h2>
            <p><?php echo $config['webinfo'] ?></p>

          </div>
          <div class="col-md-6">
            <h2>Powered By KNTLCMS V.2</h2>
			<img src="KasihLogoLu.png"></img>
            <p>Website ini diberdayakan oleh KNTLCMS sebuah CMS yang digunakan untuk membuat situs seperti situs ini . semua konten yang berada di situs ini adalah tanggung jawab pemilik situs . </p>
            <p><a class="btn btn-secondary" href="#" role="button">Informasi Lebih Lanjut</a></p>
          </div>

        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p><?php echo $config['author'] ?> 2020 . Powered By KNTLCMS V.2</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  

</body></html>
