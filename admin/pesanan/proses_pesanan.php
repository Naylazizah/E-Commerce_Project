<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['id'];
   $_nama = $_POST['tanggal'];
   $_harga = $_POST['produk_id'];
   $_harga = $_POST['quantity'];
   

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id; // ? 2
   $ar_data[]=$_tanggal;// 3
   $ar_data[]=$_produk_id;
   $ar_data[]=$_quantity;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (id,tanggal,produk_id,quantity) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET id=?,tanggal=?,produk_id=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php?hal=pesanan/pesanan');
?>