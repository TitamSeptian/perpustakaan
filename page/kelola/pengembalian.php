<!DOCTYPE html>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resources/css/pengembalian.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/all.css"> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Pengembalian</b></h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Informasi Peminjam</li>
            <li class="breadcrumb-item"><a href="nextpengembalian.php">Verifikasi</a></li>
          </ol>
        </nav>

        <form id="fm" method="post" action="">
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">ID Peminjaman</label>
            <input type="text" class="form-control" placeholder="ID Peminjaman" name="form_id_pjn_ryt" id="in1" value="" readonly>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">ID Anggota</label>
            <input type="text" class="form-control" placeholder="ID Anggota" name="form_id_anggota_ryt" id="in2" value="" readonly>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">kode Buku</label>
          <input type="text" class="form-control"  placeholder="kode buku" name="form_kode_buku_ryt" id="in3" value="" readonly>
        </div>

        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Tanggal Pinjam</label>
            <input type="text" class="form-control" placeholder="Tanggal Pinjam" name="form_tgl_entri_pjn" id="in4" value="" readonly>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Hari Pinjam</label>
            <input type="text" class="form-control" placeholder="Jumlah Hari" name="form_jumlah_hari_pjn_ryt" id="in5" value="" readonly>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Tanggal Pengembalian</label>
            <input type="text" class="form-control"  placeholder="kode buku" name="form_tgl_pengembalian" id="in6" value="" readonly>
          </div>
        </div>
        <br><br>
        <div class="" align="center">
          <input type="submit" name="form_tambah" class="btn btn-dark" value="Selanjutnya">
        <!-- <button type="button" name="form_tambah" class="btn btn-dark"><b>Selanjutnya</b></button> -->
        <small id="emailHelp" class="form-text text-muted">Yakin akan melanjutkan? Jika yakin tekan tombol selanjutnya!.</small>  
        </div>
      </form>

  </div>
  <script src="../../resources/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="peminjaman.js">
  </script>
</body>
</html>
