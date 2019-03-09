<?php

include "../../koneksi.php";


$kdBuku = $_GET['kodeBuku'] ?? '';
$nmBuku = $_GET['judul_buku'] ?? '';
$bulan = $_GET['b'] ?? '';

$wh = "";
$wh .= !empty($kdBuku) ?"kode_buku = '{$kdBuku}' and " : "";
$wh .= !empty($nmBuku) ?"judul_buku like '%{$nmBuku}' and " : "";
$wh = !empty($wh) ? "where ".substr($wh, 0, -4) : "";

if($bulan){
	$view = $mysqli->query("SELECT * FROM list_buku WHERE MONTH(tanggal_entri_buku)= '{$bulan}' ");
	$rows = $view->fetch_all(MYSQLI_ASSOC);
}else{
	$view = $mysqli->query("SELECT * FROM list_buku {$wh} ORDER BY kode_buku DESC ");
	$result = $view->fetch_all(MYSQLI_ASSOC);
	$rows = [];
	foreach($result as $row) {
		$row['sinopsis'] = htmlentities($row['sinopsis']);
		$row['judul_buku'] = htmlentities($row['judul_buku']);
		$row['penulis'] = htmlentities($row['penulis']);
		$row['penerbit'] = htmlentities($row['penerbit']);
		$rows[] = $row;
	}
}
header('Content-type: application/json');
echo json_encode([
  'data' => $rows
]);

?>