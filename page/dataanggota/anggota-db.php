<?php

include "../../koneksi.php";


$id = $_GET['id_anggota'] ?? '';

$wh = "";
$wh .= !empty($kdBuku) ?"id_anggota = '{$id}' and " : "";
$wh = !empty($wh) ? "where ".substr($wh, 0, -4) : "";


$view = $mysqli->query("SELECT * FROM data_anggota_perpus {$wh}");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
echo json_encode([
  'data' => $row
]);

?>