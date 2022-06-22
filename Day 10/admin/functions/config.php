<?php

$db_name = 'csphp';
$db_user = 'root';
$db_pass ='';
$db_host = 'localhost';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn){
    echo "Database Connection Error!";
}

?>