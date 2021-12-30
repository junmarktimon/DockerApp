<?php


//$servername = "db";
//$username = "admin";
//$password = "admin_1234";
//$database = "db_sia";

// Create connection
//$conn = new mysqli($servername, $username, $password,$database);

// Check connection
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";


$server_name ="db";
$db_username = "admin";
$db_password = "admin_1234";
$db_name = "db_sia";

   $connection = mysqli_connect("$server_name","$db_username","$db_password");
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
}
else
{
 echo "Database Connection Error";
}

?>