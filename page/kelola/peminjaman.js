$(document).ready(function () {
  $("#sidebar").mCustomScrollbar({
      theme: "minimal"
  });

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });
   $('#myTable').DataTable( {
    "ajax": "peminjaman-db.php",
    "columns": [
      {"data" : "kode_buku_pjn"},
      {"data" : "id_pjn"},
      {"data" : "id_anggota_peminjaman"},
      {"data" : "tanggal_entri_pjn"},
      {"data" : "jumlah_hari_pjn"},
      {"data" : "tgl_pengembalian"},
      {"data" : "id_pjn", "render" : function ( id ) {
        return '<a href="ubah-data-anggota.php?id='+id+'" class="btn btn-primary" ><i class="fas fa-wrench"></i></a>\
        <a href="hapus-data-anggota.php?id='+id+'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
      }},
    ]
  });
});