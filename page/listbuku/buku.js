$(document).ready(function () {
  $("#sidebar").mCustomScrollbar({
      theme: "minimal"
  });

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar, #content').toggleClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      
  });
       /* 
$.ajax({
    type: 'get',
    url: 'buku-db.php',
    dataType: 'json',
    success: function(result) {
      
      $('#data').html(`
        <table class="table">
          <thead class="thead-dark" align="center">
            <tr>
              <th scope="col">Gambar</th>
              <th scope="col">Kode Buku</th>
              <th scope="col">Judul</th>
              <th scope="col">Penulis</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Tahun Terbit</th>
              <th scope="col">Halaman</th>
              <th scope="col">Sinopsis</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody align="center">
        </table>

      `);

      $.each(result.rows, function(i, rows){
          $('#data').find('tbody').append(`
              <tr>
                <td><img src='../../resources/img/${rows.gambar_buku}' class='img-thumbnail' width='220px' height='250px'></td>
                <td>${rows.kode_buku}</td>
                <td>${rows.judul_buku}</td>
                <td>${rows.penulis}</td>
                <td>${rows.penerbit}</td>
                <td>${rows.tahun_terbit}</td>
                <td>${rows.jumlah_halaman}</td>
                <td>${rows.sinopsis}</td>

                <td>
                  <a href='ubah-buku.php?kodeBuku=${rows.kode_buku}'>
                    <button type='button' class='btn btn-primary'><i class='fas fa-wrench'></i></button>
                  </a>
                  <a href='hapus-buku.php?kodeBuku=${rows.kode_buku}' onclick='return confirm(\" Apakah Anda Benar Buku Akan di Kembalikan ? \");'>
                    <button type='button' class='btn btn-danger' name='btnEdit'><i class='fas fa-check'></i></button>
                  </a>
                </td>
              </tr> 
          `);
      });  

    }
  });
            */
// $('#my-ajax-table').dynatable({
//   dataset: {
//     ajax: true,
//     ajaxUrl: 'buku-db.php',
//     ajaxOnLoad: true,
//     records: []
//   }
// });

});