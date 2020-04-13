<?php
$servername = "107.180.26.155";
$username = "austen_stone";
$password = "stone";
$dbname = "Thenewfacebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
