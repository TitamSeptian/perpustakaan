<?php
	include "../../koneksi.php";

	$id_pjn = isset($_GET["id"])?$_GET["id"]:"";
	$sql_select = "SELECT * FROM data_peminjaman WHERE id_pjn ='".$id_pjn."';";
	$select = $mysqli->query($sql_select);

	if ($select->num_rows >0){
		$sql 	= "
					DELETE FROM
						data_peminjaman
					WHERE
						id_pjn = '".$id_pjn."';
				";
		if($mysqli->query($sql)){
			echo"
				<script>
					alert('Buku Berhasil Dikembalikan !');
					window.location = '../riwayat/riwayat.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Buku Tidak Berhasil Dikembalikan !');
					window.location = 'kelola-peminjaman.php';
				</script>
			";
		}
	}else{
		echo "
				<script>
					alert('ID Peminjaman tidak dikenali, coba lagi !');
					window.location = 'kelola-peminjaman.php';
				</script>
			";
	}

	$mysqli->close();
	?>

		
	