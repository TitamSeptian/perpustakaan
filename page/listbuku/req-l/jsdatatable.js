
  $(document).ready(function(){
    $('#myTable').DataTable( {
      "ajax": "http://localhost/project_1/page/listbuku/buku-db.php",
      "columns": [
        {"data" : "gambar_buku", "render" : function ( data ) {
          return '<img src="../../resources/img/'+data+'" class="img-thumbnail">';
        }},
        {"data" : "kode_buku"},
        {"data" : "judul_buku"},
        {"data" : "penulis"},
        {"data" : "penerbit"},
        {"data" : "tahun_terbit"},
        {"data" : "jumlah_halaman"},
        {"data" : "sinopsis"},
        {"data" : "kode_buku", "render" : function ( kode ) {
          return '<a href="ubah-buku.php?kodeBuku='+kode+'" class="btn btn-primary" ><i class="fas fa-wrench"></i></a>\
          <a href="hapus-buku.php?kodeBuku='+kode+'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
        }},
      ]
    });
  });

  