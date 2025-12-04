<?php
$idx=$_GET['id'];
require_once "../config.php";
$sql="select * from mahasiswa where id='$idx'";
if($db->query($sql)){
    $db->query("delete from mahasiswa where id='$idx'");
    echo"<div class='alert alert-success'>Data Berhasil Dihapus.<br>
    <a href='./?p=mahasiswa'>Lihat Data</a></div>";
} else {
    echo"<div class='alert alert-danger'>Data Gagal Dihapus.<br>
    <a href='./?p=mahasiswa'>Lihat Data</a></div>";
}