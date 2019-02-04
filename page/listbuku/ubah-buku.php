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

          <img id="gambar" style="margin-left:40px; margin-top: 30px; width:500px; height:300px;">
		
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
  <script type="text/javascript">
  const gambaruploadBtn = document.getElementById("gambarupload");
  const customBtn = document.getElementById("custom-button");
  const customTxt = document.getElementById("custom-text");
  customBtn.addEventListener("click", function(){
    gambaruploadBtn.click();
  });
  gambaruploadBtn.addEventListener("change", function(){
    if (gambaruploadBtn.value) {
      customTxt.innerHTML = gambaruploadBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    } else {
      customTxt.innerHTML = ">No file choosen, yet.";
    }
  });
  var urlParams = new URLSearchParams(window.location.search);
  var kdBuku = urlParams.get('kodeBuku');
  $(document).ready(function() {
    $.ajax({
      type:'get',
      url:'buku-db.php?kodeBuku='+kdBuku+'',
      datatype:'json',
      success:function (result) {
        $.each(result.data, function (i, data) {
          $('#gambar').attr("src", "../../resources/img/"+data.gambar_buku+"");
          $('#jBuku').attr("value", ""+data.judul_buku+"");
          $('#penerbit').attr("value", ""+data.penerbit+"");
          $('#tTerbit').attr("value", ""+data.tahun_terbit+"");
          $('#penulis').attr("value", ""+data.penulis+"");
          $('#jHalaman').attr("value", ""+data.jumlah_halaman+"");
          $('#sinopsis').html(""+data.sinopsis+"");
          $('#fmBuku').attr("action","req-l/proses-ubah.php?kodeBuku="+kdBuku+"");
        });
      }
    });
  });
  // src="../../resources/img/"
</script>
</html>
<?php 
$mysqli->close();
 ?>