<?php
include 'connect_db.php';
require './login/url.php';
$id = (int)$_GET['id'];

$sql = "DELETE FROM `ship_order` WHERE `id` = {$id}";

if(mysqli_query($conn, $sql)) {
    redirect("?page=list_order");
}
?>