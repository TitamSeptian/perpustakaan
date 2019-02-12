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
    <link rel="stylesheet" href="../../resources/css/riwayat.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../resources/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="../../resources/js/solid.js"></script>
    <script defer src="../../resources/js/fontawesome.js"></script>
    <link rel="stylesheet" href="../../resources/css/datatables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

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
              <li class="active">
                  <a href="riwayat.php"><i class="fas fa-sync-alt" style="margin-right: 5px;"></i>Riwayat</a>
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
              <li class="nav-item active">
                <a class="nav-link" href="../riwayat/riwayat.php">Riwayat</a>
              </li>
            </ul>
            <a class="btn btn-outline-light" href="../../logout.php" role="button">Logout;</a>
          </div>
        </nav>
          </nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4">Riwayat</h1>
              <p class="lead">Anda sedang berada dalam laman Riwayat.</p>
            </div>
          </div>
            <div class="container-fluid">
              <div class="table-responsive">
                <br>
              <table id="myTable" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>ID Peminjam</th>
                    <th>ID Anggota</th>
                    <th>Kode Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Lama Hari Pinjam</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Anggota Mengembalikan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID Peminjam</th>
                    <th>ID Anggota</th>
                    <th>Kode Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Lama Hari Pinjam</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Anggota Mengembalikan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
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
  <script src="riwayat.js"></script>
</body>

</html>