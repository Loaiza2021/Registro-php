<?php

$url = "localhost"; 
$username = "root";
$password = "";
$conn = mysqli_connect($url, $username, $password, "registro");
if (!$conn) {
  die("Connection failed: ".mysqli_error());
}


?>