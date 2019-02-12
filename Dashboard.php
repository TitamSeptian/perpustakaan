<?php 
include 'koneksi.php';
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>e-Perpustakaan</title>
    <!-- Bootstrap core CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="resources/css/Dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="height: 50px;">
      <a class="navbar-brand" href="#">e-Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
                  <a class="nav-link" href="Dashboard.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="page/listbuku/list-buku2.php">List Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="page/kelola/kelola-peminjaman.php">kelola</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="page/dataanggota/data-anggota.php">Data Anggota</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="page/riwayat/riwayat.php">Riwayat</a>
                </li>
        </ul>
        <a class="btn btn-outline-light" href="logout.php" role="button">Logout;</a>
      </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 50px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="resources/img/book-slide-1.jpg" alt="First slide" width="805" height="642">
           <div class="carousel-caption text-left">
            <h3>List Buku</h3>
            <p style="color: #fff">Berisi kumpulan buku-buku yang telah terdaftar, terdapat pula didalamnya keterangan-keterangan buku tersebut maupun sinopsis dari buku yang terdaftar.</p>
            <a href="page/listbuku/list-buku2.php"><button type="button" class="btn btn-primary" style="pointer-events: none;">Learn More</button></a>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resources/img/book-slide-2.jpg" alt="Second slide" width="805" height="642">
         <div class="carousel-caption">
                <h1>Data Anggota.</h1>
                <p style="color: #fff">Daftarkan orang yang akan meminjam buku disini, maka dari itu daftarkan terlebih dahulu agar menjadi anggota tetap, apabila jika suatu saat akan meminjam kembali, pengguna sudah memiliki nomer ID Anggota.</p>
                <p><a class="btn btn-lg btn-primary" href="page/dataanggota/data-anggota.php" role="button">Learn more</a></p>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resources/img/book-slide-3.jpg" alt="Third slide" width="805" height="642">
          <div class="carousel-caption text-right">
            <h1>Riwayat.</h1>
            <p  style="color: #fff">Melihat riwayat beberapa anggota yang sudah mengembalikan buku yang telah dipinjam.</p>
            <p><a class="btn btn-lg btn-primary" href="page/riwayat/riwayat.php" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container marketing" style="margin-top: 50px;">
      <div class="row">
            <div class="col">
              <center>
              <img class="rounded-circle" src="resources/img/list-book.png" alt="Generic placeholder image" width="140" height="140">
              <h2>List Buku</h2>
              <p>Berisi kumpulan buku-buku yang telah terdaftar, terdapat pula didalamnya keterangan-keterangan buku tersebut maupun sinopsis dari buku yang terdaftar.</p>
              <p><a class="btn btn-dark" href="page/listbuku/list-buku2.php" role="button">Lihat &raquo;</a></p>
              </center>
          </div><!-- /.col-lg-4 -->
          <div class="col"><center>
            <img class="rounded-circle" src="resources/img/pinjam-buku.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Kelola Pinjaman</h2>
            <p>Berisi buku buku yang di pinjamkan dan form pengembalian</p>
            <p><a class="btn btn-dark" href="page/kelola/kelola-peminjaman.php" role="button">Kelola &raquo;</a></p>
          </center></div><!-- /.col-lg-4 -->

          <div class="col"><center>
            <img class="rounded-circle" src="resources/img/pengembalian-buku.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Riwayat</h2>
            <p>Melihat riwayat beberapa anggota yang sudah mengembalikan buku yang telah dipinjam.</p>
           <p><a class="btn btn-dark" href="page/riwayat/riwayat.php" role="button">Kelola &raquo;</a></p>
        </center></div><!-- /.col-lg-4 -->
        <div class="col"><center>
            <img class="rounded-circle" src="resources/img/user_dashboard.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Data Anggota</h2>
            <p>Daftarkan orang yang akan meminjam buku disini, maka dari itu daftarkan terlebih dahulu agar menjadi anggota tetap, apabila jika suatu saat akan meminjam kembali, pengguna sudah memiliki nomer ID Anggota.</p>
           <p><a class="btn btn-dark" href="page/dataanggota/data-anggota.php" role="button">Lihat &raquo;</a></p>
        </center></div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
    <footer class="container">
      <hr>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
      <br><br><br>
    <script src="resources/js/jquery-3.2.1.min.js"></script>
    <script src="resources/js/popper.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/jquery-3.3.1.slim.min.js"></script>
    <script src="resources/js/popper.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
  </body>
</html>
