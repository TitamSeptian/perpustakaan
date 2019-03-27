<?php

include "../../koneksi.php";



$level = $_GET['lvl'] ?? '';
// $jk = $_GET['jk'] ?? '';

$wh = "";
$wh .= !empty($level) ?"level_user = '{$level}' and " : "";
$wh = !empty($wh) ? "where ".substr($wh, 0, -4) : "";

$view = $mysqli->query("SELECT * FROM user_login {$wh}");
$row = $view->fetch_all(MYSQLI_ASSOC);


header('Content-type: application/json');
echo json_encode([
  'data' => $row
]);

?>