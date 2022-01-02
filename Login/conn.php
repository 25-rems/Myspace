<?php
$server="localhost";
$username="root";
$password="";
$database = "LoginRegister";

$conn = new mysqli($server, $username, $password, $database);
// verifier connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
