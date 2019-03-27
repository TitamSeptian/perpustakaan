<?php

include "../../koneksi.php";



$angoota = $_GET['id'] ?? '';
$jk = $_GET['jk'] ?? '';

$wh = "";
$wh .= !empty($angoota) ?"id_anggota = '{$angoota}' and " : "";
$wh .= !empty($jk) ?"jk_anggota = '{$jk}' and " : "";
$wh = !empty($wh) ? "where ".substr($wh, 0, -4) : "";

$view = $mysqli->query("SELECT * FROM data_anggota_perpus {$wh}");
$row = $view->fetch_all(MYSQLI_ASSOC);

header('Content-type: application/json');
echo json_encode([
  'data' => $row
]);

?>