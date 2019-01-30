$(document).ready(function () {
            
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
            

            $.ajax({
              type: 'get',
              url: 'user.php',
              dataType: 'json',
              success: function(result) {
                
                $('#datatable').html(`
                  <table class="table table-hover">
                    <tr>
                      <td>Kode Buku PJN</td>
                      <td>ID PJN</td>
                      <td>ID Anggota Peminjaman</td>
                      <td>Tanggal Entri PJN</td>
                      <td>Jumlah Hari PJN</td>
                      <td>Tanggal Pengembalian</td>
                      <td>Opsi</td>
                    </tr>
                    <tbody>

                    </tbody>
                  </table>

                `);

                $.each(result.rows, function(i, rows){
                    $('#datatable').find('tbody').append(`
                        <tr>
                          <td>${rows.kode_buku_pjn}</td>
                          <td>${rows.id_pjn}</td>
                          <td>${rows.id_anggota_peminjaman}</td>
                          <td>${rows.tanggal_entri_pjn}</td>
                          <td>${rows.jumlah_hari_pjn}</td>
                          <td>${rows.tgl_pengembalian}</td>

                          <td>
                            <a href='ubah-data-peminjaman.php?id=${rows.id_pjn}'>
                              <button type='button' class='btn btn-primary'><i class='fas fa-wrench'></i></button>
                            </a>
                            <a href='kelola-pengembalian.php?id=${rows.id_pjn}&id_x=${rows.id_anggota_peminjaman}&kodeBuku=${rows.kode_buku_pjn}' onclick='return confirm(\" Apakah Anda Benar Buku Akan di Kembalikan ? \");'>
                              <button type='button' class='btn btn-danger'><i class='fas fa-check'></i></button>
                            </a>
                          </td>
                        </tr> 
                    `);
                });  

              }
            });
});