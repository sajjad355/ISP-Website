<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complain";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
  die('Connection Error: ' . mysqli_connect_error());
}

?>
