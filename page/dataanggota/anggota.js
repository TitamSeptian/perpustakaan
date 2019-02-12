var urlParams = new URLSearchParams(window.location.search);
  var id = urlParams.get('id');
  var lk = " <option value='Laki-Laki'>Laki-Laki</option><option value='Wanita'>Wanita</option>";
  var wn = "<option value='Wanita'>Wanita</option><option value='Laki-Laki'>Laki-Laki</option>";
  var els = "<option>Jenis Kelamin</option><option value='Laki-Laki'>Laki-Laki</option><option value='Wanita'>Wanita</option>";
  $(document).ready(function () {
    $.ajax({
      type:'get',
      url:'anggota-db.php?id='+id+'',
      dataType:'json',
      success:function (result) {
        $.each(result.data, function (i, data) {
          $('#id').attr("value", ""+data.id_anggota+"");
          $('#nmAnggota').attr("value", ""+data.nama_anggota+"");
          $('#alamat').html(""+data.alamat_anggota+"");
          if (data.jk_anggota == 'Laki-Laki') {
            $('#jk').html(lk);
          }else if (data.jk_anggota == 'Wanita') {
            $('#jk').html(wn);
          }else{
            $('#jk').html(els);
          }
          $('#noTlp').attr("value", ""+data.no_tlp_anggota+"");
          $('#fmA').attr("action", "req-a/proses-ubah.php?id="+id+"");
        });
      }
    });
  });