<?php  
 

        $jk_output = $row_select['jk_anggota'];

        if ($jk_output == 'Laki-Laki') {
          echo "
          <option value='Laki-Laki'>Laki-Laki</option>
          <option value='Wanita'>Wanita</option>
          ";
        }elseif ($jk_output == 'Wanita') {
          echo "
          <option value='Wanita'>Wanita</option>
          <option value='Laki-Laki'>Laki-Laki</option>
          ";
        }else{
          echo "
          <option>Jenis Kelamin</option>
          <option value='Laki-Laki'>Laki-Laki</option>
          <option value='Wanita'>Wanita</option>
          ";
        }
?>