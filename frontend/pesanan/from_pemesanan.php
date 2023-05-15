<?php
  function hasil(){
    $namcus = $_POST['namcus'];
    $noTp = $_POST['noTp'];
    $jumlah = $_POST['jumlah'];
    $tipe = $_POST['tipe'];
    $alamat = $_POST['alamat'];
    $beras = 60000;
    $makanan = 10000;
    $minuman = 3000;
    $diskon;
    $total;
    error_reporting(0);
   
        //Output program dan Pemanggilan Array
        foreach($namcus as $key => $val){
        ?>
          <table border="0" width="500" cellpadding="1" cellspacing="1" >
      
          
            <tr>
              <td><?php echo '&nbsp Nama Customer';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$namcus[$key];?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp No Telpon';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$noTp[$key];?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Tipe produk';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$tipe;?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp jumlah';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jumlah.'';?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp alamat';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$alamat[$key];?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Diskon';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php
                //Menentukan Diskon 
                if($tipe){
                  if($jumlah == ""){
                      echo "jumlah belum diisi";
                  }elseif($tipe == "beras"){
                    $hasil = $beras * $jumlah;
                    $hasil;
                  }elseif($tipe == "makanan"){
                    $hasil = $makanan * $jumlah;
                    $hasil;
                  }elseif($tipe == "minuman"){
                    $hasil = $minuman * $jumlah;
                    $hasil;
                
                  }

                  if($hasil > 2000000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbspPotongan diskon 10%";
                  }elseif($hasil > 1500000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbspPotongan diskon 10%";
                  }else{
                    echo "&nbspAnda tidak berhak mendapatkan diskon";
                    }
                }?>
              </td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Total Bayar';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php 
                //Menentukan Total Biaya
                if($tipe){
                  if($jumlah == ""){
                      echo "jumlah belum diisi";
                  }elseif($tipe == "1"){
                    $hasil = $beras * $jumlah ;
                    $hasil;
                  }elseif($tipe == "2"){
                    $hasil = $makanan * $jumlah;
                    $hasil;
                  }elseif($tipe == "3"){
                    $hasil = $minuman * $jumlah;
                    $hasil;
          
                  }

                  if($hasil > 2000000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }elseif($hasil > 1500000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }else{
                    echo "&nbsp".$hasil;
                  }
                }?>
              </td>            
            </tr>
          </table>
            <?php 
          }
        }?>

<!-- Tampilan Awal Form Pemesanan -->
 <html>
 <form method="POST" name="frmpost" action="">
  <div> 
    <a href="from_pemesanan"></a>
    <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th><h2> Form Pemesanan </h2></th>
  </tr>
  <tr>
    <td>
      <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

       

        <tr height="30">
          <td width="200" valign="center">Nama Customer</td>
          <td width="10" valign="center"> : </td>
          <td><input name="namcus[]" type="text" size="20" /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">No telpon</td>
          <td width="10" valign="center"> : </td>
          <td><input name="noTp[]" type="text" size="40" /></td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Tipe </td>
          <td width="10" valign="center"> : </td>
          <td>
            <select name="tipe">
              <option name="-" value="-" hidden>-</option>
              <option name="beras" value="beras">Beras</option>
              <option name="makanan" value="makanan">Makanan Ringan </option>
              <option name="minuman" value="minuman">Minuman Botol</option>
    
            </select>
          </td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Jumlah</td>
          <td width="10" valign="center"> : </td>
          <td><input  name="jumlah" type="text" size="10"  /> </td>
        </tr>

        <tr height="30"> 
          <td width="200" valign="center">Alamat</td>
          <td width="10" valign="center"> : </td>
          <td><input name="alamat[]" type="text" size="40" /></td>
        </tr>

        <tr>
          <td align="right" colspan="2"><input type="submit" name="btnOk" value="Simpan" /></td>
          <td><input type="reset" name="btnCancel" value="Cancel" /></td>
        </tr>

      </table>
      </table>
      <br>
      <br>
      
 <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td>
            <?php
            //Pemanggilan Function
              hasil();
            ?>
          </td>
        </tr>
 </table>
</div>
 

</form>
</center>
</html>