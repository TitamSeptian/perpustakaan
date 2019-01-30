<?php

include "../../koneksi.php";

$view = $mysqli->query("SELECT * FROM data_peminjaman");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
echo json_encode([
  'rows' => $row
]);

?>