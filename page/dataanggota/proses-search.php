<?php 
include '../../koneksi.php';
if (isset($_POST["btn-search"])) {
	$keyword = $_POST["keyword"];
	echo $keyword;
	// $data ="";
	// $view = $mysqli->query("SELECT * FROM data_anggota_perpus ORDER BY id_anggota ASC LIMIT $awal_data,$jumlah_data_halaman;");
	// $num_result = $view->num_rows;
	// if($num_result > 0){
	// 	$no = 1
	// 	while($row = $view->fetch_assoc()){
	// 	extract($row);

	// 	$data.="
	// 	<tr>
	// 	<td>".$no."</td>
	// 	<td>{$nama_anggota}</td>
	// 	<td>{$alamat_anggota}</td>
	// 	<td>{$jk_anggota}</td>
	// 	<td>{$no_tlp_anggota}</td>
	// 	<td>{$id_anggota}</td>
	// 	<td>
	// 	<a href='ubah-data-anggota.php?id={$id_anggota}'>
	// 	    <button type='button' class='btn btn-primary'><i class='fas fa-wrench'></i></button>
	// 	</a>
		  
	// 	<a href='hapus-data-anggota.php?id={$id_anggota}' onclick='return confirm(\" Apakah benar laporan akan dihapus ? \");'>
	// 	    <button type='button' class='btn btn-danger'><i class='fas fa-trash-alt'></i></button>
	// 	  </a>
	// 	</td>
		 
	// 	 </tr>
	// 	 ";
	//  	$no++;
	//  	}
 // 	}else{
 // 		$data = "Daftar Kosong.";
 // 	}
}
?>