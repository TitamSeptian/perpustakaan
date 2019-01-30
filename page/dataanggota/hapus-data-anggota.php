<?php
	include "../../koneksi.php";

	$id_anggota = isset($_GET["id"])?$_GET["id"]:"";
	$sql_select = "SELECT * FROM data_anggota_perpus WHERE id_anggota ='".$id_anggota."';";
	$select = $mysqli->query($sql_select);
	// db peminjaman
	$peminjaman = "SELECT * FROM data_peminjaman WHERE id_anggota LIKE '".$id_anggota."';";

	if ($peminjaman) {
		echo "
	 			<script>
	 				alert('Anggota gagal di hapus');
	 				window.location = 'data-anggota.php';
	 			</script>
	 		";
	}elseif ($select->num_rows >0){
		$sql 	= "
					DELETE FROM
						data_anggota_perpus
					WHERE
						id_anggota = '".$id_anggota."';
				";
		if($mysqli->query($sql)){
			echo"
				<script>
					alert('Anggota berhasil di hapus !');
					window.location = 'data-anggota.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Anggota gagal di hapus !');
					window.location = 'data-anggota.php';
				</script>
			";
		}
	}else{
		echo "
				<script>
					alert('ID tidak dikenali, coba lagi !');
					window.location = 'data-anggota.php';
				</script>
			";
	}

	$mysqli->close();
?>

		
	