<?php

include "../../koneksi.php";


$id_pjn = $_GET['id'] ?? '';
$stts = $_GET['q'] ?? '';
$terbanyak = $_GET['z']??'';

$wh = "";
$wh .= !empty($id_pjn) ?"id_pjn = '{$id_pjn}' and " : "";
$wh .= !empty($stts) ?"status = '{$stts}' and " : "";
$wh = !empty($wh) ? "where ".substr($wh, 0, -4) : "";


if ($terbanyak) {
	if($terbanyak == 'kd'){
		$view = $mysqli->query("SELECT kode_buku_pjn, COUNT(kode_buku_pjn) as jumlah FROM data_peminjaman GROUP BY kode_buku_pjn ORDER BY jumlah DESC");
		$row = $view->fetch_all(MYSQLI_ASSOC);
	}elseif ($terbanyak == 'id') {
		$view = $mysqli->query("SELECT id_anggota_peminjaman, COUNT(id_anggota_peminjaman) as jumlah FROM data_peminjaman GROUP BY id_anggota_peminjaman ORDER BY jumlah DESC");
		$row = $view->fetch_all(MYSQLI_ASSOC);
	}
}else{
	
	$view = $mysqli->query("SELECT * FROM data_peminjaman {$wh}");
	$row = $view->fetch_all(MYSQLI_ASSOC);
	
}


header('Content-type: application/json');
echo json_encode([
  'data' => $row
]);

?>