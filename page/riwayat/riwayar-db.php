<?php

include "../../koneksi.php";

$view = $mysqli->query("SELECT * FROM riwayat");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
echo json_encode([
  'rows' => $row
]);

?>