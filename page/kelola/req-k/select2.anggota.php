<?php 
  include '../../koneksi.php';
  $view_id = $mysqli->query("SELECT * FROM data_anggota_perpus WHERE id_anggota  ;");
  $num_result_id = $view_id->num_rows;
  if ($num_result_id >0) {
    while ($row_id = $view_id->fetch_assoc()) { 
      $id_anggota = $row_id['id_anggota']; 
      $nama_anggota = $row_id['nama_anggota'];
      $no_tlp_anggota = $row_id['no_tlp_anggota'];
      echo "<optgroup>
              <h3></h3>
            </optgroup>";
    }
    // <option value=".$row_id['id_anggota'].">".$nama_anggota;echo "(".$id_anggota.")"."</option>
    //           <option value=".$row_id['id_anggota'].">".$no_tlp_anggota;echo "(".$id_anggota.")"."</option>
  }
?>