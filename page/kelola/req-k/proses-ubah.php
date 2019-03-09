<?php
include '../../../koneksi.php';
  $id_pjn = isset ($_GET["id"])?$_GET["id"]:"";

  $action = isset ($_POST["form_edit"])?$_POST["form_edit"]:"";
  
  if ($action) {
    $id_pjn = $mysqli->real_escape_string($_POST['form_id_pjn']);
    $sql = "UPDATE data_peminjaman SET
    id_anggota_peminjaman ='".$mysqli->real_escape_string($_POST['form_id_anggota_pjn'])."',
    kode_buku_pjn ='".$mysqli->real_escape_string($_POST['form_kode_buku_pjn'])."',
    jumlah_hari_pjn ='".$mysqli->real_escape_string($_POST['form_jumlah_hari_pjn'])."'
    WHERE
    id_pjn = '".$id_pjn."';
    ";
    if ($mysqli->query($sql)) {
      echo "
      <script>
      alert('Buku Berhasil Disimpan !');
      window.location = '../kelola-peminjaman.php';
      </script>
      ";
      }else{
        echo "
        <script>
        alert('Buku Gagal Dipinjamkan !');
        window.location = '../kelola-peminjaman.php';
        </script>
        ";
      }
    }
   ?>