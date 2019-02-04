<?php
  include "../../../koneksi.php";
  $kode_buku = isset ($_GET["kodeBuku"])?$_GET["kodeBuku"]:"";
  $sql_select= " SELECT * FROM list_buku WHERE kode_buku = '".$kode_buku."';";
  $select = $mysqli->query($sql_select);
  $row_select=$select->fetch_array();

  
  

  $action = isset ($_POST["form_edit"])?$_POST["form_edit"]:"";
  if ($action) {
    
    $nama_file = $_FILES['form_gambar_buku']['name'];
    $source = $_FILES['form_gambar_buku']['tmp_name'];
    $folder = './../....//resources/img/';
    
    if($nama_file != ''){
    move_uploaded_file($source, $folder.$nama_file);
    $sql = "UPDATE list_buku SET
    gambar_buku ='".$nama_file."',
    judul_buku ='".$mysqli->real_escape_string($_POST['form_judul_buku'])."',
    penerbit ='".$mysqli->real_escape_string($_POST['form_penerbit'])."',
    tahun_terbit ='".$mysqli->real_escape_string($_POST['form_tahun_terbit'])."',
    penulis ='".$mysqli->real_escape_string($_POST['form_penulis'])."',
    jumlah_halaman ='".$mysqli->real_escape_string($_POST['form_jumlah_Halaman'])."',
    sinopsis ='".$mysqli->real_escape_string($_POST['form_sinopsis'])."'
    WHERE
    kode_buku = '".$kode_buku."';
    ";

    if ($mysqli->query($sql)) {
      echo "
      <script>
      alert('Buku berhasil diperbaharui !');
      window.location = '../list-buku2.php;
      </script>
      ";
      }else{
        echo "
        <script>
        alert('Buku gagal diperbaharui !');
        window.location = '../list-buku2.php;
        </script>
        ";
      }
    }else{
      //$kode_buku2 = $conn->real_escape_string($_POST['form_id_gambar']);
    move_uploaded_file($source, $folder.$nama_file);
    $sql = "UPDATE list_buku SET
    judul_buku ='".$mysqli->real_escape_string($_POST['form_judul_buku'])."',
    penerbit ='".$mysqli->real_escape_string($_POST['form_penerbit'])."',
    tahun_terbit ='".$mysqli->real_escape_string($_POST['form_tahun_terbit'])."',
    jumlah_halaman ='".$mysqli->real_escape_string($_POST['form_jumlah_Halaman'])."',
    sinopsis ='".$mysqli->real_escape_string($_POST['form_sinopsis'])."',
    penulis ='".$mysqli->real_escape_string($_POST['form_penulis'])."'
    WHERE
    kode_buku = '".$kode_buku."';
    ";

    if ($mysqli->query($sql)) {
      echo "
      <script>
      alert('Buku berhasil diperbaharui !');
      window.location = '../list-buku2.php;
      </script>
      ";
      }else{
        echo "
        <script>
        alert('Buku gagal diperbaharui !');
        window.location = '../list-buku2.php;
        </script>
        ";
      }
    }
    }
   ?>