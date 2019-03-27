<?php
	include "../../../koneksi.php";

	$pwd = isset($_GET["p"])?$_GET["p"]:"";
	$sql_select = "SELECT * FROM user_login WHERE password_user ='".$pwd."';";
	$select = $mysqli->query($sql_select);
	// db peminjaman

	if ($select->num_rows >0){
		$sql 	= "
					DELETE FROM
						user_login
					WHERE
						password_user = '".$pwd."';
				";
		if($mysqli->query($sql)){
			echo"
				<script>
					alert('Data petugas berhasil di hapus !');
					window.location = '../user-login.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Data Petugas gagal di hapus !');
					window.location = '../user-login.php';
				</script>
			";
		}
	}else{
		echo "
				<script>
					alert('ID tidak dikenali, coba lagi !');
					window.location = '../user-login.php';
				</script>
			";
	}

	$mysqli->close();
?>

		
	