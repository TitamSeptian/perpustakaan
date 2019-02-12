$(document).ready(function () {
  $('#myTable').DataTable( {
    "ajax": "riwayat-db.php",
    "columns": [
      {"data" : "id_pjn_ryt"},
      {"data" : "id_anggota_ryt"},
      {"data" : "kode_buku_ryt"},
      {"data" : "tgl_pjn_ryt"},
      {"data" : "jumlah_hari_pjn_ryt"},
      {"data" : "tgl_pengembalian_ryt"},
      {"data" : "tgl_peng_user"},
      {"data" : "id_pjn_ryt", "render" : function ( id ) {
        return '<a href="hapus-riwayat.php?id='+id+'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
      }},
    ]
  });
});