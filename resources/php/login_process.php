<?php
session_start();
include 'connection.php' ;
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($email) && !empty($pwd)) {
		$sql = mysqli_query($mysqli, "SELECT * FROM user_login WHERE name_user = '$username' AND password_user = '$password' ");
		$result = mysqli_num_rows($sql);
		if ($result) {
			$get = mysqli_fetch_array($sql);
			$level = $get['level_user'];
			if ($level == 'ADMIN_1') {
				$_SESSION['login'] = "admin";
				header("location:admin.php");
			}elseif ($level == 'USER_1') {
				$_SESSION['login'] = "pegawai";
				header("location:Dashborad.html");
			}else{
				echo "status tidak ditemukan";
			}
		}else{
			echo "salah";
		}
	}

}else{
	header("location:../../index.html.php");
}

 ?>