$(document).ready(function () {
  $('#myTable').DataTable( {
    "ajax": "user-db.php",
    "columns": [
      {"data" : "name_user"},
      {"data" : "password_user"},
      {"data" : "level_user", "render" : function (lvl) {
        let level = '';
        switch(lvl){
          case 'ADMIN_1' : level = 'ADMIN';break;
          case 'USER_1' : level = 'USER';break;
        }
        return level;
      }},
      {"data" : "password_user", "render" : function (pwd) {
         let link = `<a href="req-u/hapus.php?p=${pwd}" class="badge badge-danger">Hapus</a>`;
         return link; 
      }},
    ] 
  });
  
  var doc = new jsPDF();
  var specialElementHandlers = {
      '#editor': function (element, renderer) {
          return true;
      }
  };

  $('#cmd').click(function () {
      doc.fromHTML($('#content').html(), 15, 15, {
          'width': 170,
              'elementHandlers': specialElementHandlers
      });
      doc.save('sample-file.pdf');
  });
});