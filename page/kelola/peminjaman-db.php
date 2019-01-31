<?php

include "../../koneksi.php";


$id = $_GET['id_pjn'] ?? '';

$wh = "";
$wh .= !empty($id) ?"id_pjn = '{$id}' and " : "";


$view = $mysqli->query("SELECT * FROM data_peminjaman {$wh}");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
echo json_encode([
  'data' => $row
]);

?>