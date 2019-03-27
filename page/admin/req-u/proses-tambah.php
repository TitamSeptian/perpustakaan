<?php
  include "../../../koneksi.php";
  function createPassword ()
	{
	$template = 'X9AXX9';
	$length = strlen($template);
	$pass ='';
	for($i=0; $i<$length; $i++){
		switch($template[$i]){
			case '9' : $pass .= rand(0,9); break;
			case 'X' : $pass .= chr(rand(65,90)); break;
			case 'A' : $pass .= "A"; break;
		}
	}
	return $pass;
	}
  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if (!$action || $action){
  	$sql = "INSERT INTO user_login 
  		VALUES 
  		('".$mysqli->real_escape_string($_POST['form_usname'])."',
  		'".createPassword()."',
  		'".$mysqli->real_escape_string($_POST['form_lvl'])."');";
		if($mysqli->query($sql)){
      echo "
        <script>
          alert('Petugas Terdaftar!');
          window.location='../user-login.php';
        </script>
        ";
    }else{
      echo "
        <script>
          alert('Mohon cek kembali!');
          window.location='../user-login.php';
        </script>
      ";
    }
  }
  
  ?>