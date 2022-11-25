<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_logistic"; 

$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_error()) {
    echo "Connect Fail: ".mysqli_connect_error();
}else{
//    echo "success";
}
