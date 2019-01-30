<?php
  include "../../koneksi.php";
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
      window.location = 'data-anggota.php?id=".$id_anggota."';
      </script>
      ";
      }else{
        echo "
        <script>
        alert('Data gagal diperbaharui !');
        window.location = 'data-anggota.php?id=".$id_anggota."';
        </script>
        ";
      }
    }
   ?>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resources/css/ubah-data-anggota.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/all.css"> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../../Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
    <form method="POST">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Ubah Data Anggota</b></h3>
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">ID Anggota</label>
            <input type="text" class="form-control" placeholder="ID Anggota" name="form_id_anggota" value="<?php echo $row_select["id_anggota"]; ?>" readonly>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="form_nama_anggota" value="<?php echo $row_select["nama_anggota"]; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Alamat</label>
          <textarea class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="form_alamat_anggota"><?php   echo $row_select["alamat_anggota"]; ?></textarea>
          <br>

        <select class="form-control" name="form_jk_anggota">
        <?php include 'req-a/jk.php'; ?>
        
        </select>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1">No.Telepon</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="form_no_tlp_anggota" placeholder="No.Telepon" value="<?php echo $row_select["no_tlp_anggota"]; ?>">
        </div>

        <div class="" align="center">
          <input type="submit" name="form_edit" value="Perbaharui" class="btn btn-dark">
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol ubah!.</small>  
        </div>
  </div>
</form>
</body>
</html>