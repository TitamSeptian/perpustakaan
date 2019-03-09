$(document).ready(function(){
  $('#myTable').DataTable( {
    responsive: false,
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
      {
        "data" : "sinopsis"
      },
      {"data" : "kode_buku", "render" : function ( kode ) {
        return '<a href="ubah-buku.php?kodeBuku='+kode+'" class="btn btn-primary" ><i class="fas fa-wrench"></i></a>\
        <a href="hapus-buku.php?kodeBuku='+kode+'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
      }},
    ],
    columnDefs: [{
      targets: [7],
      createdCell: function(cell) {
        var $cell = $(cell);

        $cell.attr('width',1000);
        $(cell).contents().wrapAll("<div class='content'></div>");
        var $content = $cell.find(".content");

        $(cell).append($("<button class='readmore'>readmore</button>"));
        $btn = $(cell).find(".readmore");

        $content.css({
          "height": "20px",
          "overflow": "hidden"
        })
        $cell.data("isLess", true);

        $btn.click(function() {
          var isLess = $cell.data("isLess");
          $content.css("height", isLess ? "auto" : "50px")
          $(this).text(isLess ? "Read less" : "Read more")
          $cell.data("isLess", !isLess)
        });
      }
    }]
  });
});

  