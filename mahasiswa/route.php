<?php
$p = $_GET['p'] ?? '';

switch ($p) {
    case 'detail-mhs':
        include "detail-mhs.php";
        break;

    default:
        include "index.php";
        break;
}
?>
