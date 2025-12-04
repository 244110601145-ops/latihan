<?php

$p=$_GET['p'];

switch($p){

    case 'dosen':
        include "dosen.php";
        break;
    case 'mahasiswa':
        include "mahasiswa.php";
        break;
    case 'pegawai':
        include "pegawai.php";
        break;
    case 'gantipwd':
        include "gantipassword.php";
        break;
    case 'add-mhs':
        include "tambah-mahasiswa.php";
        break;
    case 'detail-mhs':
        include "detail-mahasiswa.php";
        break;
    case 'edit-mhs':
        include "edit-mahasiswa.php";
        break;
    case 'hapus-mhs':
        include "hapus-mahasiswa.php";
        break;
     case 'detail-dosen':
        require_once "detail-dosen.php";
        break;
    case 'add-dosen':
        require_once "tambah-dosen.php";
        break;
    case 'edit-dosen':
        require_once "edit-dosen.php";
        break;
    case 'hapus-dosen':
        require_once "hapus-dosen.php"; 
        break;
    default:
        require_once "dashboard.php";
        break;
   
}
?>