<?php   
include '../../../koneksi.php';
$id_pjn = $_GET['id'] ?? '';
$action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if($action){
    $date = date("F j, Y, g:i a");
    $sql="
      UPDATE data_peminjaman SET
      status = 'O',
      agt_kbml = '".$date."' WHERE id_pjn = '".$id_pjn."'
      ";
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