<?php
  include "../../../koneksi.php";

  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if ($action){

      $lama_hari =$mysqli->real_escape_string($_POST['form_jumlah_hari_pjn']);
      $date = date("F j, Y");
      $theDate = $date;
      $timeStamp = StrToTime($theDate);
      $indays = StrToTime('+'.$lama_hari.' days', $timeStamp);
      $days = "". date('F j, Y', $indays);
      $sql  ="
            INSERT INTO data_peminjaman SET 
            id_pjn =NULL, 
            id_anggota_peminjaman ='".$mysqli->real_escape_string($_POST['form_id_anggota_pjn'])."',
            kode_buku_pjn ='".$mysqli->real_escape_string($_POST['form_kode_buku_pjn'])."',
            jumlah_hari_pjn ='".$lama_hari."',
            tgl_pengembalian ='".$days."',
            tanggal_entri_pjn='".$date."';";
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