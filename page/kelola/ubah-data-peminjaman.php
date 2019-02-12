<!DOCTYPE html>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resources/css/ubah-data-peminjaman.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/all.css"> 
  <link rel="stylesheet" href="../../resources/css/select2.min.css" /> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../../Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
    <form method="POST" id="fmK">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Ubah Data Peminjaman</b></h3>
        <div class="form-group">
          <label for="exampleInputPassword1">ID Peminjaman</label>
          <input type="text" id="idPjn" class="form-control" name="form_id_pjn" readonly>
        </div>
        <div class="form-group">           
          <label for="exampleInputPassword1">ID Anggota</label>
          <select class="form-control" id="sel-a" name="form_id_anggota_pjn" required>
            <option id="id-a"></option>
             <!-- lanjukan dijs -->
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Kode BUKU</label>
          <select class="form-control" id="buku_select2" name="form_kode_buku_pjn" required>
            <option id="buku-pjn"></option>

          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Hari Pinjam</label>
          <input type="text" class="form-control" id="jmlHariPjn" name="form_jumlah_hari_pjn" required>
        </div>
        <br>
        <div class="" align="center">
          <input type="submit" name="form_edit" value="Perbaharui" class="btn btn-dark">
        <!-- <a href="kelola-peminjaman.php"><button type="button" class="btn btn-dark"><b>Ubah</b></button></a> -->
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol ubah!.</small>  
        </div>
      </form>
    </div>/
  </div>
  </div>

</body>
<script src="../../resources/js/jquery-3.3.1.min.js"></script>
<script src="../../resources/js/select2.min.js"></script>
<script type="text/javascript" src="req-k/ubah-pjn.js"></script>
</html>