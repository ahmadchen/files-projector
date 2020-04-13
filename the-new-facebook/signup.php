<?php
require_once 'pdoconnection.php';

if(isset($_POST['signup'])){
    $username = $_POST['uname'];
    $password = $_POST['upassword'];
	$uemail = $_POST['uemail'];

    $checkusername = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' LIMIT 1");
    if ($checkusername -> num_rows > 0){
        echo "<h1><center>Username already taken</center></h1>";
    }else{
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $insert1 = mysqli_query($conn, "INSERT INTO users (username, password, email)
        VALUES ('$username', '$password_hash', '$uemail')");
        $insert2 = mysqli_query($conn, "INSERT INTO status (username)
        VALUES ('$username')");
        if ($insert1) {
            echo "<h1><center>Successful Registration</center></h1>";
            echo "<h1><center>Check your email for verification.</center></h1>";
			$to = $uemail;
			$subject = 'Welcome to our site ' . $username;
			$txt = "credentials... \nUsername: " . $username . "\nPassword: " . $password . "\nEmail: " . $uemail . "\n\nEnjoy!" ;
			$headers = "From: oursite@oursite.com" . "\r\n" .
			"CC: miltonlaxer@gmail.com";

			mail($to,$subject,$txt,$headers);
        } else {
            printf("Error: %s\n", mysqli_error($conn));
        }
    }
}



 ?>
<!DOCTYPE html>
<div class="signup">
	<?php require_once 'header.php';?>
	<div class="logincontainer">
	<form action="signup.php" class="form1" method="post" id="loginform">
		<h1>Sign Up</h1>
		<div class="imgcontainer">
		<div>
			<img src="">
		</div>
			<input type="text" placeholder="Username" name="uname" required><br>
			<input type="password" placeholder="Password" name="upassword" required><br>
			<input type="text" placeholder="E-mail" name="uemail" required><br>
			<button type="submit" name="signup" class="signin"><span>Register</span></button><br><br><br>
	</form>
		<a href="login.php">Already have an account?<br><div class="signin"><span>Log In</span></div><br></a>
	</div>
</div>


<?php include 'footer.php' ?>
