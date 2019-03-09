const gambaruploadBtn = document.getElementById("gambarupload");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");
customBtn.addEventListener("click", function(){
  gambaruploadBtn.click();
});
gambaruploadBtn.addEventListener("change", function(){
  if (gambaruploadBtn.value) {
    customTxt.innerHTML = gambaruploadBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  } else {
    customTxt.innerHTML = ">No file choosen, yet.";
  }
});
var urlParams = new URLSearchParams(window.location.search);
var kodeBuku = urlParams.get('kodeBuku');
$(document).ready(function() {
    $.ajax({
      type:'get',
      url:'buku-db.php?kodeBuku='+kodeBuku+'',
      datatype:'json',
      success:function (result) {
        $.each(result.data, function (i, data) {
          $('#gambar').attr("src", "../../resources/img/"+data.gambar_buku+"");
          $('#jBuku').attr("value", ""+data.judul_buku+"");
          $('#penerbit').attr("value", ""+data.penerbit+"");
          $('#tTerbit').attr("value", ""+data.tahun_terbit+"");
          $('#penulis').attr("value", ""+data.penulis+"");
          $('#jHalaman').attr("value", ""+data.jumlah_halaman+"");
          $('#sinopsis').html(""+data.sinopsis+"");
          $('#fmBuku').attr("action","req-l/proses-ubah.php?kodeBuku="+kodeBuku+"");
        });
      }
    });
   
  });