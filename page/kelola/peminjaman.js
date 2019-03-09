var urlParams = new URLSearchParams(window.location.search);
var id = urlParams.get('id');
var id_x = urlParams.get('id_x');
var kodeBuku = urlParams.get('kodeBuku');
$(document).ready(function () {
  
   $.ajax({
    type:'get',
    url:"http://localhost/project_1/page/kelola/peminjaman-db.php",
    dataType:'json',
    data: {
      'id' : id
    },
    success:function(result){
      $.each(result.data, function(i, data){
        //kelola-peminjaman
        $('#th1').html(""+data.id_pjn+"");
        $('#th2').html(""+data.id_anggota_peminjaman+"");
        $('#th4').html(""+data.kode_buku_pjn+"");
        $('#th7').html(""+data.tanggal_entri_pjn+"");
        $('#th8').html(""+data.jumlah_hari_pjn+"");
        $('#th9').html(""+data.tgl_pengembalian+"");
          //kelola-pengembalian
        $('#th1-g').html(""+data.id_pjn+"");
        $('#th2-g').html(""+data.id_anggota_peminjaman+"");
        $('#th4-g').html(""+data.kode_buku_pjn+"");
        $('#th7-g').html(""+data.tanggal_entri_pjn+"");
        $('#th8-g').html(""+data.jumlah_hari_pjn+"");
        $('#th9-g').html(""+data.tgl_pengembalian+"");
          //ubah-peminjaman
        $('#in1').attr("value",""+data.id_pjn+"");
        $('#in2').attr("value",""+data.id_anggota_peminjaman+"");
        $('#in3').attr("value",""+data.kode_buku_pjn+"");
        $('#in4').attr("value",""+data.tanggal_entri_pjn+"");
        $('#in5').attr("value",""+data.jumlah_hari_pjn+"");
        $('#in6').attr("value",""+data.tgl_pengembalian+"");
        $('#fm').attr("action","req-k/tambah-riwayat.php?id="+data.id_pjn+"");

        $('#tanggal').attr('value' , `${data.tgl_pengembalian}`)
        
        $('#idPjn').attr('value',`${data.id_pjn}`);
        $('#idPjn').attr('value',`${data.id_pjn}`);
        $('#id-a').attr("value",`${data.id_anggota_peminjaman}`).html(`${data.id_anggota_peminjaman}`);
        $('#buku-pjn').attr("value",`${data.kode_buku_pjn}`).html(`${data.kode_buku_pjn} `);
        $('#jmlHariPjn').attr("value",`${data.jumlah_hari_pjn}`);

        $('#fmK').attr("action",`req-k/proses-ubah.php?id=${id}`);
        var xtgl = data.tgl_pengembalian;
        function selisih_tanggal(nDate){
         var tgl = new Date();
         var tgl2 = new Date(nDate);

         tgl.setHours(0);
         tgl.setMinutes(0);
         tgl.setSeconds(0);
         tgl.setMilliseconds(0);

         var selisih = Math.abs(tgl - tgl2)/86400000;
        if (tgl < tgl2) { return selisih = 'tidak di denda';}
        else{return selisih;}
         
        }
        var xselisih = selisih_tanggal(xtgl);
        if (xselisih == 'tidak di denda' ) {xselisih = 0} else{xselisih}
        $('#setDenda').attr('value', xselisih);
        var setDenda = $('#setDenda').val();
        $('#getDenda').attr('value',setDenda*1000);
      });
    }
  });
  $.ajax({
    url:'../dataanggota/anggota-db.php',
    dataType:'json',
    data: {
      'id_x': id_x
    },
    success: function (result) {
      const anggota = result.data[0];
      $('#th3-g').html(anggota.nama_anggota)
    }
  });
  $.ajax({
    url:'../listbuku/buku-db.php',
    dataType:'json',
    data:{
      'kodeBuku':kodeBuku
    },
    success: function (result) {
      const buku = result.data[0];
      $('#th5-g').html(buku.judul_buku);
      $('#th6-g').html(buku.penulis);
    }
  });
  //$('#th10').html('aaaaaaaa');
  $('#th10-g').html(`<a href="pengembalian.php?id=${id}&id_x=${id_x}&kodeBuku=${kodeBuku}" class="btn btn-primary">Lanjut</a>`);

  //VERIVIKASI
  $('#verivikasi').attr('href',`../riwayat/riwayat.php`);
  $('#verivikasi').click(function() {
    alert('Berhasil Dikembalikan')
  });
});