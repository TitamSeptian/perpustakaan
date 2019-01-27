<option></option>
<?php 
  include '../../../koneksi.php';
  $view_id = $mysqli->query("SELECT * FROM list_buku WHERE kode_buku ;");
  $num_result_id = $view_id->num_rows;
  if ($num_result_id >0) {
    while ($row_buku = $view_id->fetch_assoc()) {
      $kode_buku = $row_buku['kode_buku'];
      $judul_buku = $row_buku['judul_buku'];
      echo "<option value=".$row_buku['kode_buku'].">".$judul_buku;echo "(".$kode_buku.")"."</option>";
    }
  }
?>