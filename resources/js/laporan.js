$(document).ready(function () {
    //data seluurh anggota
  $.ajax({
    url: '../dataanggota/anggota-db.php',
    dataType :'json',
    success:function(result) {
        $('#tAgt').html(`
        <table class="table table-sm table-hover">
          <tr>
            <td>ID Anggota</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>No Seluler</td>
            <td>Tanggal Mendaftar</td>
          </tr>
          <tbody id="tA">

          </tbody>
        </table>
      `);
      $.each(result.data,function (i, aData) {
        $('#tAgt').find('#tA').append(`
            <tr>
              <th scope="row">${aData.id_anggota}</th>
              <td>${aData.nama_anggota}</td>
              <td>${aData.alamat_anggota}</td>
              <td>${aData.jk_anggota}</td>
              <td>${aData.no_tlp_anggota}</td>
              <td>${aData.tanggal_entri_akun}</td>
            </tr>        
        `);
      });
    }
  });
  let bulan = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11','12'];
  for (let ibulan = 0; ibulan < bulan.length; ibulan++) {
    $.ajax({
    url: '../listbuku/buku-db.php?',
    dataType :'json',
    data:{
      'b': bulan[ibulan]
    },
    success:function(result) {
        $(`#tBk${ibulan}`).html(`
        <table class="table table-sm table-hover">
          <tr>
            <td>Kode Buku</td>
            <td>Judul</td>
            <td>Penerbit</td>
            <td>Penulis</td>
            <td>Tanggal Masuk</td>
          </tr>
          <tbody id="tb${ibulan}">

          </tbody>
        </table>
      `);
      $.each(result.data,function (i, bData) {
        myJSON = JSON.stringify(bData);
        $(`#tBk${ibulan}`).find(`#tb${ibulan}`).append(`
            <tr>
              <th scope="row">${bData.kode_buku}</th>
              <td>${bData.judul_buku}</td>
              <td>${bData.penerbit}</td>
              <td>${bData.penulis}</td>
              <td>${bData.tanggal_entri_buku}</td>
            </tr>
                  
        `);
      });
    }
  });
  }
   $.ajax({
    url: '../kelola/peminjaman-db.php?z=kd',
    dataType :'json',
    success:function(result) {
      $.each(result.data,function (i, kdData) {
        if ( i == 0 ) {
          $('#tPbk').append(`
              <div class="alert alert-primary" role="alert">
                <h5>Buku yang Sering Dipinjam Dengan Kode : ${kdData.kode_buku_pjn}</h5>
                <h5>Sebanyak : ${kdData.jumlah}</h5><br>
              </div>
            `);
        }else{
          $('#tPbk').append(`
                <h5>Buku yang Terpinjam Dengan Kode : ${kdData.kode_buku_pjn}</h5>
                <h5>Sebanyak : ${kdData.jumlah}</h5><br>
            `);
        }
      });
    }
  });
   $.ajax({
    url: '../kelola/peminjaman-db.php?z=id',
    dataType :'json',
    success:function(result) {
      $.each(result.data,function (i, kdData) {
        if ( i == 0 ) {
          $('#tPid').append(`
              <div class="alert alert-primary" role="alert">
                <h5>Anggota yang Sering Meminjam Dengan Kode : ${kdData.id_anggota_peminjaman}</h5>
                <h5>Sebanyak : ${kdData.jumlah}</h5><br>
              </div>
            `);
        }else{
          $('#tPid').append(`
                <h5>Anggota yang Meminjam Buku dengan Kode : ${kdData.id_anggota_peminjaman}</h5>
                <h5>Sebanyak : ${kdData.jumlah}</h5><br>
            `);
        }
      });
    }
  });
   //here
});