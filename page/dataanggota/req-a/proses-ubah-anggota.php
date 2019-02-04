<?php
  include "../../../koneksi.php";
  $id_anggota = isset ($_GET["id"])?$_GET["id"]:"";
  $sql_select= " SELECT * FROM data_anggota_perpus WHERE id_anggota = '".$id_anggota."';";
  $select = $mysqli->query($sql_select);
  $row_select=$select->fetch_array();
  
  $action = isset ($_POST["form_edit"])?$_POST["form_edit"]:"";
  if ($action) {
    $id_anggota = $mysqli->real_escape_string($_POST['form_id_anggota']);
    $sql = "UPDATE data_anggota_perpus SET
    nama_anggota ='".$mysqli->real_escape_string($_POST['form_nama_anggota'])."',
    alamat_anggota ='".$mysqli->real_escape_string($_POST['form_alamat_anggota'])."',
    jk_anggota = '".$mysqli->real_escape_string($_POST['form_jk_anggota'])."',
    no_tlp_anggota ='".$mysqli->real_escape_string($_POST['form_no_tlp_anggota'])."'
    WHERE
    id_anggota = '".$id_anggota."';
    ";
    if ($mysqli->query($sql)) {
      echo "
      <script>
      alert('Data Berhasil diperbaharui !');
      window.location = '../data-anggota.php;
      </script>
      ";
      }else{
        echo "
        <script>
        alert('Data gagal diperbaharui !');
        window.location = '../data-anggota.php;
        </script>
        ";
      }
    }
   ?>