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
    <link rel="stylesheet" href="../../resources/css/data-anggota.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../resources/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../../resources/css/datatables.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
    <!-- Font Awesome JS -->
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
              <li class="active">
                  <a href="data-anggota.php"><i class="fas fa-address-book" style="margin-right: 5px;"></i>Data Anggota</a>
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
                <a class="nav-link" href="../../Dashboard.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../listbuku/list-buku2.php">List Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../kelola/kelola-peminjaman.php">kelola</a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="data-anggota.php">Data Anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../riwayat/riwayat.php">Riwayat</a>
              </li>
            </ul>
            <a class="btn btn-outline-light" href="../../logout.php" role="button">Logout;</a>
          </div>
        </nav>
          </nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
              <h1 class="display-4">Data Anggota</h1>
              <p class="lead">Anda sedang berada dalam laman Data Anggota.</p>
            </div>
          </div>
            <div class="container-fluid">
        <a href="tambah-data-anggota.php" data-toggle="modal" data-target="#exampleModalScrollable"><i class="fas fa-plus"></i>Tambah</a>
              <div class="table-responsive">
                <br>
              <table id="myTable" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>JK</th>
                    <th>No Tlp</th>
                    <th>ID Anggota</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>JK</th>
                    <th>No Tlp</th>
                    <th>ID Anggota</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form method="post" action="req-a/proses-tambah-anggota.php">
      <div class="content" align="">
        <div class="login-box">
          <h3 class="txt" align="center"><b>Tambah Anggota</b></h3>
          <form method="post" action="req-a/proses-tambah-anggota.php">
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap" name="form_nama_anggota" required>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <textarea class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="form_alamat_anggota"></textarea>
            <small id="emailHelp" class="form-text text-muted">Isi alamat anggota dengan Lengkap!.</small>
          </div>

          <select class="form-control"  name="form_jk_anggota" required id="jk">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Wanita">Wanita</option>
          </select>
          <br>
          <div class="form-group">
            <label for="exampleInputPassword1">No.Telepon</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No.Telepon" name="form_no_tlp_anggota" required>
          </div>

          <div class="" align="center">
          <input type="submit" name="form_tambah" value="Tambah" class="btn btn-primary" >
          <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol tambah!.</small>  
          </div>
        </form>
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        
      </div>
    </form>
    </div>
  </div>
</div>
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
  <script src="../../resources/js/scrollbar.js"></script>
  <script src="../../resources/js/jquery.dataTables.min.js"></script>
  <script src="req-a/jsdatatable.js"></script>
  <script type="text/javascript" src="../../resources/js/scrollbar.js"></script>
</body>

</html>