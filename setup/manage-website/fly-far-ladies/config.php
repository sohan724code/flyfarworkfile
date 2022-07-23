<?php 

$servername = "sg1-ts2.a2hosting.com";
$username = "flyfarin_flyfarladies";
$password = "@Kayes70455";
$dbname = "flyfarin_flyfarladies";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
die("Connection failed: " . $connect->connect_error);
}

?>