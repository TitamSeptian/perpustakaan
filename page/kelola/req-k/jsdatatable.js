$(document).ready(function(){
$('#myTable').DataTable( {
    "ajax": "peminjaman-db.php?q=I",
    "columns": [
      {"data" : "id_pjn"},
      {"data" : "kode_buku_pjn"},
      {"data" : "id_anggota_peminjaman"},
      {"data" : "tanggal_entri_pjn"},
      {"data" : "jumlah_hari_pjn"},
      {"data" : "tgl_pengembalian"},
      {"data": "tgl_pengembalian", "render":function (nTgl, a, b) {

        let now = new Date();
        let entry = new Date(nTgl);
        entry.setHours(0);
        entry.setMinutes(0);
        entry.setSeconds(0);
        entry.setMilliseconds(0);
        let stts = now < entry;
        function selisih_tanggal(nDate){
           var tgl2 = new Date(nDate);

           now.setHours(0);
           now.setMinutes(0);
           now.setSeconds(0);
           now.setMilliseconds(0);
           var selisih = Math.abs(now - tgl2)/86400000;
           let jmlHari = now < tgl2;
          if (!jmlHari) { 
            return selisih;
          }
          else{
            return selisih;
          }
        }
         var hTelat = selisih_tanggal(nTgl);
         function telat(nTelat) {
           if (nTelat == 0) {
            return'';
           }else{
            return`(${hTelat} Hari)` ;
           }
         }
        if ( stts ) {
          return `
              <div class="badge badge-success word-wrap">
                Masih dalam Peminjaman.
              </div>
            `
        }else{
          return `
              <div class="badge badge-danger">
                Sudah Telat.${telat(hTelat)}
              </div>
            `
        }
      }},
      {"data" : "id_pjn", "render" : function ( id,a, b, c, d ) {
       return`<a href="ubah-data-peminjaman.php?id=${b.id_pjn}" class="badge badge-primary" ><i class="fas fa-wrench"></i></a>
              <a href="kelola-pengembalian.php?id=${b.id_pjn}&id_x=${b.id_anggota_peminjaman}&kodeBuku=${b.kode_buku_pjn}" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>`;
  
      }}
    ]
  });
});