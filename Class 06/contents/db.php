<?php
$serverName = "localhost";
$userName = "root";
$passWord = "";
$dbName = "csphp";

//Create connection

$conn = new mysqli($serverName,$userName,$passWord);

//check connection

if($conn->connect_error){
    die("connection failed"). $conn->connect_error;
}else{
    "Connection Successfully!";
}

// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=csphp", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
?>