<?php
$servername = "localhost";
$username = "root";
$password = "cdti1234";
$abname = "db insipthus";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$abname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>