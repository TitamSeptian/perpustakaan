<?php 
include '../../koneksi.php'; 
session_start(); 
 $jumlah_data_halaman = 5;
$data_halaman= $mysqli->query("SELECT * FROM riwayat");
$jumlah_data =mysqli_num_rows($data_halaman);
$jumlah_halaman = ceil($jumlah_data/$jumlah_data_halaman);
$halaman_aktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
$awal_data = ($jumlah_data_halaman * $halaman_aktif) - $jumlah_data_halaman;


$data = "";
 $view = $mysqli->query("SELECT * FROM riwayat ORDER BY id_pjn_ryt  LIMIT $awal_data,$jumlah_data_halaman;");
 $num_result = $view->num_rows;
 if($num_result > 0){
 $no = 1;
 while($row = $view->fetch_assoc()){
 extract($row);

 $data.="
 <tr>
 <td>".$no."</td>
 <td>{$id_pjn_ryt}</td>
 <td>{$id_anggota_ryt}</td>
 <td>{$kode_buku_ryt}</td>
 <td>{$tgl_pjn_ryt}</td>
 <td>{$jumlah_hari_pjn_ryt}</td>
 <td>{$tgl_pengembalian_ryt}</td>
<td>
  <a href='hapus-riwayat.php?id={$id_pjn_ryt}' onclick='return confirm(\" Yakin riwayat akan dihapus ? \")>
    <button type='button' class='btn btn-primary'><i class='fas fa-trash-alt'></i></button>
  </a>
</td>
 
 </tr>
 ";
 $no++;
 }
 }else{
 $data = "<h3><b>Riwayat Kosong.</b></h3>";
 }
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>e-Perpustakaan</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../resources/css/riwayat.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

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

        <!-- Page Content  -->
        <!-- <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button> -->
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
              <div class="container">
                <h1 class="display-4">Riwayat</h1>
                <p class="lead">Anda sedang berada dalam laman Riwayat.</p>
              </div>
            </div>
              <div class="container-fluid">
                 <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
          <br>
                <div class="table-responsive">
                  <br>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">ID Peminjam</th>
                      <th scope="col">ID Anggota</th>
                      <th scope="col">Kode Buku</th>
                      <th scope="col">Tanggal Pinjam</th>
                      <th scope="col">Lama Hari Pinjam</th>
                      <th scope="col">Tanggal Pengembalian</th>

                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php   
                        echo $data;
                       ?>
                  </tbody>
                </table>
              </div>
              <?php  if($halaman_aktif>1): ?>
                 <a href="?page=<?php echo $halaman_aktif - 1 ?>">&laquo;</a>
                <?php   endif; ?>
                 <?php  for ($i=1; $i <= $jumlah_halaman ; $i++) : ?>
                    <?php   if($i == $halaman_aktif): ?>
                        <a  style="color: red; font-weight: bold;" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php   else : ?>
                        <a  href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    <?php   endif ; ?>
                <?php   endfor; ?>
                
                <?php   if($halaman_aktif<$jumlah_halaman): ?>
                 <a href="?page=<?php echo $halaman_aktif + 1 ?>">&raquo;</a>
                <?php   endif; ?>
          </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
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