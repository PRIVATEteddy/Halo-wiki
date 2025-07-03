<?php
include("session.php");

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "halo-wiki";

$conn = mysqli_connect($servername, $username, $password, $DBname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";






?>