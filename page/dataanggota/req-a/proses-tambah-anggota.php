<?php
  include "../../../koneksi.php";
  function id_a()
  {
    include "../../../koneksi.php"; 
    $sql_id_a = "SELECT max(id_anggota) FROM data_anggota_perpus";
    $query = mysqli_query($mysqli, $sql_id_a) or die (mysql_error());
   
    $id_a = $query->fetch_array();

    if($id_a){
      $nilai = substr($id_a[0], 4);
      $kode = (int) $nilai;
      //tambahkan sebanyak + 1
      $kode = $kode + 1;
      $auto_kode = "IDPX" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
      return $auto_kode;
    } else {
      $auto_kode = "IDPX0001";
      return $auto_kode;
    }
   
  }
  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if ($action){
      $sql  ="
            INSERT INTO data_anggota_perpus SET 
            id_anggota ='".id_a()."', 
            nama_anggota ='".$mysqli->real_escape_string($_POST['form_nama_anggota'])."',
            alamat_anggota ='".$mysqli->real_escape_string($_POST['form_alamat_anggota'])."',
            jk_anggota = '".$mysqli->real_escape_string($_POST['form_jk_anggota'])."',
            no_tlp_anggota ='".$mysqli->real_escape_string($_POST['form_no_tlp_anggota'])."',
            tanggal_entri_akun=NOW();";
            if($mysqli->query($sql)){
              header('location: ../data-anggota.php');
            }else{
              echo "
                <script>
                  alert('Gagal Mendaftar!');
                  window.location='../data-anggota.php';
                </script>
              ";
            }
            }
  
  ?>