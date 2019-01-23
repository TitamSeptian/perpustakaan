<?php
  include "../../koneksi.php";

  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if ($action){

      $sql  ="
            INSERT INTO data_anggota_perpus SET 
            id_anggota =NULL, 
            nama_anggota ='".$mysqli->real_escape_string($_POST['form_nama_anggota'])."',
            alamat_anggota ='".$mysqli->real_escape_string($_POST['form_alamat_anggota'])."',
            jk_anggota = '".$mysqli->real_escape_string($_POST['form_jk_anggota'])."',
            no_tlp_anggota ='".$mysqli->real_escape_string($_POST['form_no_tlp_anggota'])."',
            tanggal_entri_akun=NOW();";
            if($mysqli->query($sql)){
              echo "
                <script>
                  alert('Selamat Anda Menjadi Anggota!');
                  window.location='data-anggota.php';
                </script>
                ";
            }else{
              echo "
                <script>
                  alert('Gagal Membuat Akun!');
                  window.location='data-anggota.php';
                </script>
              ";
            }
            }
  
  ?>