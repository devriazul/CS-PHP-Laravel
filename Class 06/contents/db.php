<?php
$serverName = "localhost";
$userName = "root";
$passWord = "";

//Create connection

$conn = new mysqli($serverName,$userName,$passWord);

//check connection

if($conn->connect_error){
    die("connection failed"). $conn->connect_error;
}else{
    "Connection Successfully!";
}

?>