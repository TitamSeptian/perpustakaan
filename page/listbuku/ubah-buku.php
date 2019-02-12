<!DOCTYPE html>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resources/css/ubah-buku.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../resources/css/all.css">
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../../dashboard.html"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
      <div class="login-box">
        <form method="post"  id="fmBuku" enctype="multipart/form-data">
        <h3 class="txt" align="center"><b>Edit Buku</b></h3>
        <div class="form-group">
           <div class="form-group">
          Pilih Gambar :
          <br>
          <input type="file" id="gambarupload" hidden="hidden" id="custom-button" name="form_gambar_buku">
          <button type="button" id="custom-button"><b>CHOOSE A FILE</b></button>
          <span id="custom-text">No file choosen, yet.</span>
          <br>

          <img id="gambar"  class="img-thumbnail">
		
        </div>
          <label for="exampleInputPassword1">Judul Buku</label>
          <input type="text" class="form-control"  placeholder="Judul Buku" name="form_judul_buku" id="jBuku">
        </div>
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Penerbit</label>
            <input type="text" class="form-control" placeholder="Penerbit" name="form_penerbit" id="penerbit">
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Tahun Terbit</label>
            <input type="text" class="form-control" placeholder="Tahun Terbit" name="form_tahun_terbit" id="tTerbit">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Penulis</label>
            <input type="text" class="form-control" placeholder="Penulis" name="form_penulis" id="penulis">
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Jumlah Halaman</label>
            <input type="text" class="form-control" placeholder="Halaman" name="form_jumlah_Halaman" id="jHalaman">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Sinopsis</label>
          <textarea class="form-control" placeholder="Sinopsis" name="form_sinopsis" id="sinopsis"></textarea>
        </div>
        <div class="" align="center">
            <input type="submit" name="form_edit" class="btn btn-dark" value="Edit">
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol selanjutnya!.</small> 
        </div>
      </form>
      </div>
    </div>

  </div>
</body>
  <script src="../../resources/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="buku.js"></script>
</html>