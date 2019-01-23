
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resources/css/tambah-data-anggota.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/all.css">
  <link rel="stylesheet" href="../../resources/css/select2.min.css"  />  
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../../Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Tambah Anggota</b></h3>
        <form method="post" action="proses-tambah-anggota.php">
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Lengkap</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap" name="form_nama_anggota" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Alamat</label>
          <textarea class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="form_alamat_anggota"></textarea>
          <small id="emailHelp" class="form-text text-muted">Isi alamat anggota dengan Lengkap!.</small>
        </div>

        <select class="form-control" name="form_jk_anggota" required id="jk">
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Wanita">Wanita</option>
        </select>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1">No.Telepon</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No.Telepon" name="form_no_tlp_anggota" required>
        </div>

        <div class="" align="center">
        <input type="submit" name="form_tambah" value="Tambah" class="btn btn-dark">
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol tambah!.</small>  
        </div>
      </form>
  </div>
</body>
<script type="text/javascript" src="../../resources/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../../resources/js/select2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#jk")
      placeholder:"Jenis Kelamin"
    
  });
</script>
</html>