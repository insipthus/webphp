<?php
$servername = "localhost";
$username = "username";
$password = "password";
$abname = "db_insipthus";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$abname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>