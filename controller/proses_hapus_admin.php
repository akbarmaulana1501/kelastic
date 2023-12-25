<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/olahadmin.php");
}
 ?>