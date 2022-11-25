<?php
//kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'db_logistic');
if (!$conn) {
    echo"Kết nối không thành công." . mysqli_connect_error();
    die();
}