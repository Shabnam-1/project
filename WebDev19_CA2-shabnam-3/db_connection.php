<?php
//MAMP and phpMyAdmin
//$servername = "localhost:8889";
//Workbench / MySQL Server
//$servername = "127.0.0.1:3306";
//$username = "root";
//$password = "root";
//$password = " ";
$database = "user";
$servername = "localhost";
$username = "root";
$password = "root";
$database = "user";





// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
