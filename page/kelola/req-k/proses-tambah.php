<?php
  include "../../../koneksi.php";
  function id()
  {
    include "../../../koneksi.php";
    $sql_id = "SELECT max(id_pjn) FROM data_peminjaman";
    $query = mysqli_query($mysqli, $sql_id) or die (mysql_error());
   
    $id = $query->fetch_array();

    if($id){
      $nilai = substr($id[0], 4);
      $kode = (int) $nilai;
      //tambahkan sebanyak + 1
      $kode = $kode + 1;
      $auto_kode = "PJNX" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
      return $auto_kode;
    } else {
      $auto_kode = "PJNX0001";
      return $auto_kode;
    }
   
  }
  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if ($action){
      $stts = 'I';
      $lama_hari =$mysqli->real_escape_string($_POST['form_jumlah_hari_pjn']);
      $date = date("Y/m/j");
	  
      $theDate = $date;
      $timeStamp = StrToTime($theDate);
      $indays = StrToTime('+'.$lama_hari.' days', $timeStamp);
      $days = "". date('Y/m/j', $indays);
	  
      $sql  ="
            INSERT INTO data_peminjaman SET 
            id_pjn = '".id()."', 
            id_anggota_peminjaman ='".$mysqli->real_escape_string($_POST['form_id_anggota_pjn'])."',
            kode_buku_pjn ='".$mysqli->real_escape_string($_POST['form_kode_buku_pjn'])."',
            jumlah_hari_pjn ='".$lama_hari."',
            tgl_pengembalian ='".$days."',
            tanggal_entri_pjn='".$date."',
            status ='".$stts."',
            agt_kbml='';";
            if($mysqli->query($sql)){
              echo "
                <script>
                  alert('Buku Berhasil Dipinjamkan!');
                  window.location='../kelola-peminjaman.php';
                </script>
                ";
            }else{
              echo "
                <script>
                  alert('Buku Gagal Dipinjamkan!');
                  window.location='../kelola-peminjaman.php';
                </script>
              ";
            }
            }
  
  ?>