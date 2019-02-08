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
      {"data" : "id_pjn"},
      {"data" : "kode_buku_pjn"},
      {"data" : "id_anggota_peminjaman"},
      {"data" : "tanggal_entri_pjn"},
      {"data" : "jumlah_hari_pjn"},
      {"data" : "tgl_pengembalian"},
      {"data" : "id_pjn", "render" : function ( id,a, b, c, d ) {
       return`<a href="ubah-data-peminjaman.php?id=${b.id_pjn}" class="btn btn-primary" ><i class="fas fa-wrench"></i></a>
              <a href="kelola-pengembalian.php?id=${b.id_pjn}&id_x=${b.id_anggota_peminjaman}&kodeBuku=${b.kode_buku_pjn}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>`;
  
      }},
    ]
  });
});