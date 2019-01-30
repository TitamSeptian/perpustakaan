<?php 
include "../../../koneksi.php";

  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if ($action){
    

            $gambar_buku = $_FILES['form_gambar_buku']['name'];
            $source = $_FILES['form_gambar_buku']['tmp_name'];
            $folder = './../../../resources/img/';
            move_uploaded_file($source, $folder.$gambar_buku);
      $sql  =
            "INSERT INTO list_buku SET 
            kode_buku =NULL, 
            gambar_buku ='".$gambar_buku."',
            judul_buku ='".$mysqli->real_escape_string($_POST['form_judul_buku'])."',
            penerbit = '".$mysqli->real_escape_string($_POST['form_penerbit'])."',
            tahun_terbit ='".$mysqli->real_escape_string($_POST['form_tahun_terbit'])."',
            jumlah_halaman ='".$mysqli->real_escape_string($_POST['form_jumlah_Halaman'])."',
            sinopsis ='".$mysqli->real_escape_string($_POST['form_sinopsis'])."',
            penulis ='".$mysqli->real_escape_string($_POST['form_penulis'])."',
            tanggal_entri_buku=NOW();";
            if($mysqli->query($sql)){
              echo "
                <script>
                  alert('Buku Berahsil Ditambahkan!');
                  window.location='../list-buku2.php';
                </script>
                ";
            }else{
              echo "
                <script>
                  alert('Buku gagal Ditambahkan!');
                  window.location='../list-buku2.php';
                </script>
              ";
            }
            }
 ?>