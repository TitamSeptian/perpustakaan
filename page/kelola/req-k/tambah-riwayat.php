<?php   
include '../../../koneksi.php';
$id_pjn = $_GET['id'] ?? '';
$action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if($action){
    $date = date("F j, Y, g:i a");
    $sql="
      INSERT INTO riwayat SET id_pjn_ryt='".$mysqli->real_escape_string($_POST['form_id_pjn_ryt'])."', 
      id_anggota_ryt='".$mysqli->real_escape_string($_POST['form_id_anggota_ryt'])."', 
      kode_buku_ryt='".$mysqli->real_escape_string($_POST['form_kode_buku_ryt'])."', 
      tgl_pjn_ryt='".$mysqli->real_escape_string($_POST['form_tgl_entri_pjn'])."', 
      jumlah_hari_pjn_ryt='".$mysqli->real_escape_string($_POST['form_jumlah_hari_pjn_ryt'])."',
      tgl_pengembalian_ryt='".$mysqli->real_escape_string($_POST['form_tgl_pengembalian'])."',
      tgl_peng_user='".$date."';";
      
      if ($mysqli->query($sql)) {
          header("location:../nextpengembalian.php?id={$id_pjn}");
      }else{
        echo "
          <script>
            alert('gagal Dikembalikan!');
            window.location='../kelola-peminjaman.php';
          </script>
        ";
      }
  }   
 ?>