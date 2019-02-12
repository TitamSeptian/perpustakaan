<!DOCTYPE html>
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
    <form method="post" id="fmA">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Ubah Data Anggota</b></h3>
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">ID Anggota</label>
            <input type="text" class="form-control" placeholder="ID Anggota" name="form_id_anggota" id="id" readonly>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="form_nama_anggota" id="nmAnggota">
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Alamat</label>
          <textarea class="form-control" placeholder="Alamat" name="form_alamat" id="alamat"></textarea>
          <br>

        <select class="form-control" name="form_jk" id="jk">
        
        </select>

        <br>
        <div class="form-group">
          <label for="exampleInputPassword1">No.Telepon</label>
          <input type="text" class="form-control" name="form_tlp" placeholder="No.Telepon" id="noTlp">
        </div>

        <div class="" align="center">
          <input type="submit" name="form_edit" value="Perbaharui" class="btn btn-dark">
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol ubah!.</small>  
        </div>
      </div>
  </div>
</form>
<script src="../../resources/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="anggota.js"></script>
</body>
</html>