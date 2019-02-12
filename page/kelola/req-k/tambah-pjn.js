
  $(document).ready(function() {

    $.ajax({
      type:'get',
      url:'../dataanggota/anggota-db.php',
      dataType:'json',
      success:function (result){
        $.each(result.data, function(i, data){
          $('#sel-a').append(`
              <option value="${data.id_anggota}">${data.id_anggota} ~${data.nama_anggota}~</option>
            `);
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
              <option value="${data.kode_buku}">${data.kode_buku} ~${data.judul_buku}~</option>
            `);
      });
      }
    });
    $("#sel-a").select2({
      placeholder: "ID Anggota",
      allowClear: true
    });
    $("#buku_select2").select2({
      placeholder: "Kode Buku",
      allowClear: true
    });
  });