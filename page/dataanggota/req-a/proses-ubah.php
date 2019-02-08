<?php
  include "../../../koneksi.php";

  $id_anggota = isset ($_GET["id"])?$_GET["id"]:"";

  $action = isset ($_POST["form_edit"])?$_POST["form_edit"]:"";
  if ($action) {
    $id_anggota = $mysqli->real_escape_string($_POST['form_id_anggota']);
    $sql = "UPDATE data_anggota_perpus SET
    nama_anggota ='".$mysqli->real_escape_string($_POST['form_nama_anggota'])."',
    alamat_anggota ='".$mysqli->real_escape_string($_POST['form_alamat'])."',
    jk_anggota ='".$mysqli->real_escape_string($_POST['form_jk'])."',
    no_tlp_anggota ='".$mysqli->real_escape_string($_POST['form_tlp'])."'
    WHERE
    id_anggota = '".$id_anggota."';
    ";
    if ($mysqli->query($sql)) {
      echo "
      <script>
      alert('Laporan berhasil diperbaharui !');
      window.location = '../data-anggota.php';
      </script>
      ";
      }else{
        echo "
        <script>
        alert('Laporan gagal diperbaharui !');
        window.location = '../data-anggota.php';
        </script>
        ";
      }
    }else{
      echo "
        <script>
        alert('Laporan gagal diperbaharui !');
        window.location = '../data-anggota.php';
        </script>
        ";
    }
   ?>