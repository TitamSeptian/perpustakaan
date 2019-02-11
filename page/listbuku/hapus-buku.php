<?php 
include "../../koneksi.php";

	$kode_buku = isset($_GET["kodeBuku"])?$_GET["kodeBuku"]:"";
	$sql_select = "SELECT * FROM list_buku WHERE kode_buku ='".$kode_buku."';";
	$select = $mysqli->query($sql_select);
	// db peminjaman
	$peminjaman = "SELECT * FROM data_peminjaman WHERE kode_buku_pjn = '".$kode_buku."';";
	$pjn = $mysqli->query($peminjaman);

	if ($pjn->num_rows >0) {
		echo "
	 			<script>
	 				alert('Buku gagal di hapus(Masih dipinjam)');
	 				window.location = 'list-buku2.php';
	 			</script>
	 		";
	}else if ($select->num_rows >0){
		$sql 	= "
					DELETE FROM
						list_buku
					WHERE
						kode_buku = '".$kode_buku."';
				";
		if($mysqli->query($sql)){
			echo"
				<script>
					alert('buku berhasil di hapus !');
					window.location = 'list-buku2.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Buku gagal di hapus !');
					window.location = 'list-buku2.php';
				</script>
			";
		}
	}else{
		echo "
				<script>
					alert('ID tidak dikenali, coba lagi !');
					window.location = 'list_buku2.php';
				</script>
			";
	}

	$mysqli->close();
// include '../../koneksi.php';	
//  		$delete = mysqli_query($mysqli, "DELETE FROM list_buku WHERE kode_buku='".$_GET['kodeBuku']."'");

//  		if($delete){
//  			echo"
// 				<script>
// 					alert('Data Buku berhasil di hapus !');
// 					window.location = 'list-buku2.php';
// 				</script>
// 			";
//  		}else{
//  			echo"
// 				<script>
// 					alert('Data Buku Gagal di hapus !');
// 					window.location = 'list-buku2.php';
// 				</script>
// 			";
//  		}
 ?>