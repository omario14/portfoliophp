<?php

$connection = mysqli_connect('localhost:3306','root');

mysqli_select_db($connection,"db_website-php");

$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`username`,`email`,`message`) VALUES ('$username','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>