<?php
$idx=$_GET['id'];
require_once "../config.php";
$sql="select * from dosen where id='$idx'";
if($db->query($sql)){
    $db->query("delete from dosen where id='$idx'");
    echo"<div class='alert alert-success'>Data Berhasil Dihapus.<br>
    <a href='./?p=dosen'>Lihat Data</a></div>";
} else {
    echo"<div class='alert alert-danger'>Data Gagal Dihapus.<br>
    <a href='./?p=dosen'>Lihat Data</a></div>";
}