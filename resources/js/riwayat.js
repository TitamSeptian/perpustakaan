$(document).ready(function () {
  $('#myTable').DataTable( {
    "ajax": "http://localhost/project_1/page/kelola/peminjaman-db.php?q=O",
    "columns": [
      {"data" : "id_pjn"},
      {"data" : "id_anggota_peminjaman"},
      {"data" : "kode_buku_pjn"},
      {"data" : "tanggal_entri_pjn"},
      {"data" : "jumlah_hari_pjn"},
      {"data" : "tgl_pengembalian"},
      {"data" : "agt_kbml"},
      {"data" : "id_pjn", "render" : function ( id, b, c, d ) {
        return '<a href="../kelola/hapus-peminjaman.php?id='+id+'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
      }},
    ]
  });
});