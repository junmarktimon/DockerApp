<?php

include('config.php'); 



if(isset($_POST['submit']))
{

$name = mysqli_real_escape_string($connection, $_POST['submit']);




$query = "INSERT INTO name (name) VALUES ('$name')";
$query_run = mysqli_query($connection,$query);

if($query_run)

{

$_SESSION['success'] = "Added Successfully";
header('Location: index.php');

}else{

$_SESSION['failed'] = "Error Adding Data!";
header('Location: index.php');
}
}

?>