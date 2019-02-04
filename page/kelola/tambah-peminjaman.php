<?php include "../../koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resources/css/tambah-peminjaman.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/all.css">
  <link rel="stylesheet" href="../../resources/css/select2.min.css"> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Tambah Peminjaman</b></h3>
        <form method="post" action="req-k/proses-tambah.php">
        <div class="form-group">
          <label for="exampleInputPassword1">Anggota</label>
          <select class="form-control" id="id-select" name="form_id_anggota_pjn" size="50" required>
            <?php include 'req-k/select2.anggota.php'; ?>
          </select>
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Buku</label>
          <select class="form-control" id="buku_select2" name="form_kode_buku_pjn" required>
           <?php include 'req-k/select2.buku.php'; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Hari Pinjam</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Hari" name="form_jumlah_hari_pjn" autocomplete="off" required>
        </div>
        <br>
        <!-- <select>
          <option>
            <label>aaaaa</label><br>
            <h2>nama</h2>
          </option>
           <option>
            <label>aaaaa</label><br>
            <h2>nama</h2>
          </option>
           <option>
            <label>aaaaa</label><br>
            <h2>nama</h2>
          </option>
        </select> -->
        <div class="" align="center">
          <input type="submit" name="form_tambah" value="Tambah" class="btn btn-dark">
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol tambah!.</small>  
        </div>
      </form>
  </div>

</body>
<script type="text/javascript" src="../../resources/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="../../resources/js/jquery-3.3.1.min.js"></script>
<script src="../../resources/js/select2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#id-select").select2({
      placeholder:"Anggota"
    });
    $("#buku_select2").select2({
      placeholder:"Buku"
    });
  });
</script>

</html>
<?php $mysqli->close(); ?>