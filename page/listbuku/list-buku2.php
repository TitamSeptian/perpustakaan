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
    <link rel="stylesheet" href="../../resources/css/kelola-peminjaman.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../resources/css/3.1.5/jquery.mCustomScrollbar.min.css">

    

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
                    <a href="../../Dashboard.php"><i class="fas fa-home" id="space"></i>Home</a>
                </li>
                <li class="active">
                    <a href="list-buku2.php"><i class="fas fa-book"id="space" ></i>List Buku</a>
                </li>
                <li>
                    <a href="../kelola/kelola-peminjaman.php"><i class="fas fa-wrench" id="space"></i>kelola</a>
                </li>
                <li>
                    <a href="../dataanggota/data-anggota.php"><i class="fas fa-address-book" id="space"></i>Data Anggota</a>
                </li>
                <li>
                    <a href="../riwayat/riwayat.php"><i class="fas fa-sync-alt" id="space"></i>Riwayat</a>
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
                <li class="nav-item active">
                  <a class="nav-link" href="list-buku2.php">List Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../kelola/kelola-peminjaman.php">kelola</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="../dataanggota/data-anggota.php">Data Anggota</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="..//riwayatriwayat.php">Riwayat</a>
                </li>
              </ul>
              <a class="btn btn-outline-light" href="../../logout.php" role="button">Logout;</a>
            </div>
          </nav>
            </nav>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">list-buku</h1>
                <p class="lead">Anda sedang berada dalam laman list Buku.</p>
              </div>
            </div>
              <div class="container-fluid">
                 <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                  <br>
                  <a href="tambah-buku.php"><i class="fas fa-plus"></i>Tambah</a>
                  <br>
                <div class="table-responsive" id="data">
    <!-- <table class="table">
  <thead class="thead-dark" align="center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Kode Buku</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Halaman</th>
      <th scope="col">Sinopsis</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody align="center">
    
</table> -->
            </div>
                </table>
              </div>
          </div>
        </div>
    </div>
    <!-- Font Awesome JS -->
    <script defer src="../../resources/js/solid.js"></script>
    <script defer src="../../resources/js/fontawesome.js"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <!-- Popper.JS -->
    <script src="../../resources/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../resources/js/bootstrap.min.js"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="../../resources/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="buku.js"></script>
</body>

</html>