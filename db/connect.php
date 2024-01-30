<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webdienmay";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn ->set_charset("utf8");

// echo "Current character set is: " . $conn -> character_set_name();

// $conn -> close();
?>