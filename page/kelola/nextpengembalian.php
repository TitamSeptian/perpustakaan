<!DOCTYPE html>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resources/css/nextpengembalian.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/all.css"> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <p class="navbar-brand" href="../../Dashboard.php"><h3><b>E-Perpustakaan</b></h3></p>
</nav> 
<form method="post">
  <div class="content" align="">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Ubah Data Peminjaman</b></h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="pengembalian.php">Informasi Peminjam</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pemasitian</li>
          </ol>
        </nav>
        <br>
        <div class="form-group">
          
          <small id="emailHelp" class="form-text text-muted">Tidak Perlu Diisi Jika Tidak Diperlukan!.</small>
          <label for="exampleInputPassword1">Buku Harus di Kembalikan</label>
          <input type="text" name="" id="tanggal" class="form-control" readonly=""><br>

          <label for="exampleInputPassword1">Lebih Hari</label>
          <input type="text" class="form-control" id="setDenda" placeholder="Lebih Hari" name="form_lebih_hari" readonly="">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Denda</label>
          <input type="text" class="form-control" id="getDenda" placeholder="Jumlah Denda" autofocus name="form_kode_buku_ryt" readonly>
        </div>

        <div class="" align="center">
        <a class="btn btn-dark" role="button" id="verivikasi"><b>Verivikasi<b/></a>
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol Verifikasi!.</small>  
        </div>
      </div>
    </div>
</form>
<script src="../../resources/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="peminjaman.js"></script>  
</body>
</html>

