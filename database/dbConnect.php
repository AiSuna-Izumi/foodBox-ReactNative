<?php
$servername = "localhost";
$username = "root";
$password = "";
$base ="foodbox";
// Create connection
$con = mysqli_connect($servername, $username, $password,$base);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?> 