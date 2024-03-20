<?php
include("koneksi.php");

$namaproduk = $_POST['fnamaproduk'];
$harga = $_POST['fharga'];
$berat = $_POST['fberat'];



$sql="INSERT INTO produk VALUES ('','$namaproduk','$harga','$berat')";
$res=mysqli_query($kon,$sql);
header("location:produk.php");
?>