$(document).ready(function() {
  $('#myTable').DataTable( {
    "ajax": "anggota-db.php",
    "columns": [
      {"data" : "nama_anggota"},
      {"data" : "alamat_anggota"},
      {"data" : "jk_anggota"},
      {"data" : "no_tlp_anggota"},
      {"data" : "id_anggota"},
      {"data" : "id_anggota", "render" : function ( id ) {
        return `<a href="#" class="btn btn-primary" onclick="editModal()" data-toggle="modal" data-target="#exampleModalScrollable" data-id="${id}"><i class="fas fa-wrench"></i></a>
        <a href="hapus-data-anggota.php?id=${id}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>`;
      }},
    ]
  });
});