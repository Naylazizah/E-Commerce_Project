<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['id'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_harga = $_POST['berat'];
   $_harga = $_POST['jenis_produk_id'];
   

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 2
   $ar_data[]=$_tanggal;// 3
   $ar_data[]=$_produk_id;
   $ar_data[]=$_quantity;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (id,nama,stok,harga,berat,jenis_produk_id) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET id=?,nama=?,stok=?,harga=?,berat=?,tipe_pakaian_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php?hal=produk/produk');
?>