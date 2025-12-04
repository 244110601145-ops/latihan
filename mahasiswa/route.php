<?php

$p=$_GET['p'];

switch($p){
    case 'detail-mhs':
        include "detail-mhs.php";
        break;
   
    default:
        require_once "index.php";
        break;
}
?>