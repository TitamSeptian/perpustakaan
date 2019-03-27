var urlParams = new URLSearchParams(window.location.search);
var id = urlParams.get('id');
var lk = " <option value='Laki-Laki'>Laki-Laki</option><option value='Wanita'>Wanita</option>";
var wn = "<option value='Wanita'>Wanita</option><option value='Laki-Laki'>Laki-Laki</option>";
var els = "<option>Jenis Kelamin</option><option value='Laki-Laki'>Laki-Laki</option><option value='Wanita'>Wanita</option>";
$(document).ready(function () {
  function editModal() {
    console.info('okokokokokok');
  }
  $('.mamank').click(function () {
    
  });
});
// $.ajax({
//   type:'get',
//   url:'anggota-db.php?id='+id+'',
//   dataType:'json',
//   success:function (result) {

//   }
// });