<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>e-Perpustakaan</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../resources/css/kelola-pengembalian.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../resources/css/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="../../resources/js/solid.js"></script>
    <script defer src="../../resources/js/fontawesome.js"></script>
</head>
<body>
  <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
          <div class="sidebar-header">
              <h3>e-Perpustakaan</h3>
          </div>

          <ul class="list-unstyled components">
              <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="fas fa-home" style="margin-right: 5px;"></i>Home</a>
              </li>
              <li>
                  <a href="#"><i class="fas fa-book" style="margin-right: 5px;"></i>List Buku</a>
              </li>
              <li class="active">
                  <a href="kelola-peminjaman.php"><i class="fas fa-wrench" style="margin-right: 5px;"></i></i>Kelola</a>
              </li>   
              <li>
                  <a href="../dataanggota/data-anggota.php"><i class="fas fa-address-book" style="margin-right: 5px;"></i>Data Anggota</a>
              </li>
              <li>
                  <a href="../riwayat/riwayat.php"><i class="fas fa-sync-alt" style="margin-right: 5px;"></i>Riwayat</a>
              </li>
          </ul>
      </nav>
      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fas fa-align-left"></i>
            <span></span>
          </button>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="list-buku.php">List Buku</a>
              </li>
               <li class="nav-item dropdown active">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kelola
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="kelola-peminjaman.php">Kelola Peminjaman</a>
                  <a class="dropdown-item" href="kelola-pengembalian.php">Kelola Pengembalian</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data-anggota.php">Data Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="riwayat.php">Riwayat</a>
              </li>
            </ul>
          </div>
        </nav>
          </nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4">Kelola Pengembalian</h1>
              <p class="lead">Anda sedang berada dalam laman Kelola Pengembalian.</p>
            </div>
          </div>
            <div class="container-fluid">
              <div class="table-responsive">
                <br>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID Peminjam</th>
                    <th scope="col">ID Anggota</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kode buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Hari Pinjam</th>
                    <th scope="col">Tanggal Pengembalian </th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <th id="th1"><!-- id peminjaman--></th>
                  <th id="th2"><!-- id anggota--></th>
                  <th id="th3"><!-- nama peminjam--></th>
                  <th id="th4"><!-- kode_buku--></th>
                  <th id="th5"><!-- judul--></th>
                  <th id="th6"><!-- penulis--></th>
                  <th id="th7"><!-- tanggal_pinjman--></th>
                  <th id="th8"><!--  hari_pinjma--></th>
                  <th id="th9"><!--  tanggal kembali--></th>
                  <th id="th10"><!-- aksi--></th>
                </tbody>
            </div>
        </div>
      </div>
  </div>
  
  <!-- jQuery CDN - Slim version -->
  <script src="../../resources/js/jquery-3.3.1.min.js"></script>
  <!-- Popper.JS -->
  <script src="../../resources/js/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="../../resources/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="../../resources/js/jquery.mCustomScrollbar.concat.min.js"></script>

  <script src="peminjaman.js"></script>
</body>
</html>
