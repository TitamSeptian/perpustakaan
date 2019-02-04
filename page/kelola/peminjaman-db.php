<?php

include "../../koneksi.php";


$id_pjn = $_GET['id'] ?? '';

$wh = "";
$wh .= !empty($id_pjn) ?"id_pjn = '{$id_pjn}' and " : "";
$wh = !empty($wh) ? "where ".substr($wh, 0, -4) : "";


$view = $mysqli->query("SELECT * FROM data_peminjaman {$wh}");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
echo json_encode([
  'data' => $row
]);

?>