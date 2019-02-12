var urlParams = new URLSearchParams(window.location.search);
var id = urlParams.get('id');
$(document).ready(function() {
  $.ajax({
    url:`peminjaman-db.php?id=${id}`,
    dataType:'json',
    success:function (result) {
      var x = result.data[0];
        $('#idPjn').attr('value',`${x.id_pjn}`);
        $('#idPjn').attr('value',`${x.id_pjn}`);
        $('#id-a').attr("value",`${x.id_anggota_peminjaman}`).html(`${x.id_anggota_peminjaman}`);
        $('#buku-pjn').attr("value",`${x.kode_buku_pjn}`).html(`${x.kode_buku_pjn} `);
        $('#jmlHariPjn').attr("value",`${x.jumlah_hari_pjn}`);
        $('#fmK').attr("action",`req-k/proses-ubah.php?id=${id}`);
        $('#sel-a').append(`<option selected value="${x.id_anggota_peminjaman}">${x.id_anggota_peminjaman}</option>`);
        $('#buku_select2').append(`<option selected value="${x.kode_buku_pjn}">${x.kode_buku_pjn}</option>`);
      
    }
  });
   $.ajax({
    type:'get',
    url:`../dataanggota/anggota-db.php`,
    dataType:'json',
    success:function (result){
      $.each(result.data, function(i, data){
        $('#sel-a').append(`<option value="${data.id_anggota}">${data.id_anggota} (${data.nama_anggota})</option>`);
    });
    }
  });
   $.ajax({
    type:'get',
    url:'../listbuku/buku-db.php',
    dataType:'json',
    success:function (result){
      $.each(result.data, function(i, data){
        $('#buku_select2').append(`
            <option value="${data.kode_buku}">${data.kode_buku} (${data.judul_buku})</option>
          `);
    });
    }
  });
  
  $("#sel-a").select2({
  });
  $("#buku_select2").select2({
  });
});