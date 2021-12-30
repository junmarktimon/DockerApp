<?php
$servername = "db";
$username = "admin";
$password = "admin_1234";
$database = "db_sia";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>