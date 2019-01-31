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
              <div class="container">
                <h1 class="display-4">Data Anggota</h1>
                <p class="lead">Anda sedang berada dalam laman Data Anggota.</p>
              </div>
            </div>
              <div class="container-fluid">
                 <form class="form-inline" method="post" action="proses-search.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword">
                    <input type="submit" name="btn-search" class="btn btn-outline-success my-2 my-sm-0"  value="Search">
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                  </form>
          <br>
          <br>
          <a href="tambah-data-anggota.php"><i class="fas fa-plus"></i>Tambah</a>
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
                </table>
              </div>
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
    <script src="../../resources/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#myTable').DataTable( {
          "ajax": "anggota-db.php",
          "columns": [
            {"data" : "nama_anggota"},
            {"data" : "alamat_anggota"},
            {"data" : "jk_anggota"},
            {"data" : "no_tlp_anggota"},
            {"data" : "id_anggota"},
            {"data" : "id_anggota", "render" : function ( id ) {
              return '<a href="ubah-data-anggota.php?id='+id+'" class="btn btn-primary" ><i class="fas fa-wrench"></i></a>\
              <a href="hapus-data-anggota.php?id='+id+'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
            }},
          ]
        });
      });
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <script>   
      function hapus_confirm(){
       var msg = "Apakah anda yakin untuk menghapusnya"
       agree = confirm(msg)
        if (agree)
          return true
        else
          return false
        }
    </script>
</body>

</html>