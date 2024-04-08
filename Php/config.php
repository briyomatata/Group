<?php

$dbhost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "welfare";

$conn = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error){
    die("Connection failed:");
}







?>