<title>Aus & Max Sick Site</title>
<link rel="icon" href="http://3.bp.blogspot.com/-r0cSTXYgMMc/UFFj5zUb5OI/AAAAAAAAIyg/EFb-1uiqunI/s1600/globe.png">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<?php session_start();
 ?>
<div class="mainheader">
	<div class="logo">
		<img src="http://3.bp.blogspot.com/-r0cSTXYgMMc/UFFj5zUb5OI/AAAAAAAAIyg/EFb-1uiqunI/s1600/globe.png">
	</div>
	<?php include 'nav.php'?>
	<div class="usertopright">
		<div class="usertopright1">
			<h2><?php echo "<p style='display:inline;'>Signed in as <div style='text-transform: capitalize;display:inline;'> " . $_SESSION['id']  . " </div>!</p>" ?></h2>
			<a style="font-size: .7em;color:inherit;text-decoration:none;" href="editprofile.php"><p>edit profile</p></a>
		</div>
		<div class="logout">
			<a href="logout.php"><p>LOG OUT</p></a>
		</div>
	</div>
</div>
