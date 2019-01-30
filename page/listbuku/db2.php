<?php

include "../../koneksi.php";

$view = $mysqli->query("SELECT * FROM list_buku WHERE kode_buku = 20");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
$json = json_encode($row);
// $phparray = json_encode($json, true);
// echo $phparray;
echo $json;
?>