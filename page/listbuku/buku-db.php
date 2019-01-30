<?php

include "../../koneksi.php";


$kdBuku = $_GET['kodeBuku'] ?? '';
$nmBuku = $_GET['judul_buku'] ?? '';

$wh = "";
$wh .= !empty($kdBuku) ?"kode_buku = '{$kdBuku}' and " : "";
$wh .= !empty($nmBuku) ?"judul_buku like '%{$nmBuku}' and " : "";
$wh = !empty($wh) ? "where ".substr($wh, 0, -4) : "";


$view = $mysqli->query("SELECT * FROM list_buku {$wh}");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
echo json_encode([
  'data' => $row
]);

?>