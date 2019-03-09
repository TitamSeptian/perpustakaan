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
    <link rel="stylesheet" href="../../resources/css/laporan.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../resources/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="../../resources/js/solid.js"></script>
    <script defer src="../../resources/js/fontawesome.js"></script>
    <link rel="stylesheet" href="../../resources/css/datatables.css"/>
    <link rel="stylesheet" href="../../resources/css/jquery.dataTables.min.css"/>

</head>

<body>
  <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
          <div class="sidebar-header">
              <h3>e-Perpustakaan</h3>
          </div>

          <ul class="list-unstyled components">
              <!-- <li class="active"> -->
                
              <li>
                  <a href="../../Dashboard.php"><i class="fas fa-home" style="margin-right: 5px;"></i>Home</a>
              </li>
              <li>
                  <a href="../listbuku/list-buku2.php"><i class="fas fa-book" style="margin-right: 5px;"></i>List Buku</a>
              </li>
              <li>
                  <a href="../kelola/kelola-peminjaman.php"><i class="fas fa-wrench" style="margin-right: 5px;"></i>kelola</a>
              </li>
              <li>
                  <a href="../dataanggota/data-anggota.php"><i class="fas fa-address-book" style="margin-right: 5px;"></i>Data Anggota</a>
              </li>
              <li>
                  <a href="../riwayat/riwayat.php"><i class="fas fa-trash-alt" style="margin-right: 5px;"></i>Riwayat</a>
              </li>
              <li class="active">
                  <a href="laporan.php"><i class="fas fa-sync-alt" style="margin-right: 5px;"></i>Laporan</a>
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
                <a class="nav-link" href="../../Dashboard.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../listbuku/list-buku2.php">List Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../kelola/kelola-peminjaman.php">kelola</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="../dataanggota/data-anggota.php">Data Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../riwayat/riwayat.php">Riwayat</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="laporan.php">Laporan</a>
              </li>
            </ul>
            <a class="btn btn-outline-light" href="../../logout.php" role="button">Logout;</a>
          </div>
        </nav>
          </nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4">Laporan</h1>
              <p class="lead">Anda sedang berada dalam laman Laporan.</p>
            </div>
          </div>
            <div class="container-fluid">
              <div class="table-responsive">
                <br>
                <h3>Seluruh Data Anggota</h3>
                <div id="tAgt"><!-- Table anggota --></div>
            </div>
                <h3>Buku Yang Masuk Bulan Januari</h3>
                <div id="tBk0"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Februari</h3>
                <div id="tBk1"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Maret</h3>
                <div id="tBk2"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan April</h3>
                <div id="tBk3"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Mei</h3>
                <div id="tBk4"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Juni</h3>
                <div id="tBk5"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Juli</h3>
                <div id="tBk6"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Agustus</h3>
                <div id="tBk7"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan September</h3>
                <div id="tBk8"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Oktober</h3>
                <div id="tBk9"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan November</h3>
                <div id="tBk10"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <h3>Buku Yang Masuk Bulan Desember</h3>
                <div id="tBk11"><!-- Table Buku Masuk Berdaskan Bulan --></div><br>
                <hr>
                <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col col-md-6">
                    <div id="tPbk"><!-- Peminjaman : Buku Yang Sering Di pinjam --></div>
                  </div>
                  <div class="col col-md-6">
                    <div id="tPid"><!-- Peminjaman : Buku Yang Sering Di pinjam --></div>
                  </div>
                </div>
                </div>
                </div>
                </div>
                
                
            </div>
      </div>
  </div>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="../../resources/js/jquery-3.3.1.min.js"></script>
  <!-- Popper.JS -->
  <script src="../../resources/js/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="../../resources/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="../../resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../resources/js/jquery.dataTables.min.js"></script>
  <script src="../../resources/js/scrollbar.js" ></script>
  <script src="../../resources/js/laporan.js"></script>
</body>

</html>