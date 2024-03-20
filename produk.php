<?php

include(koneksi.php);

$sql = "SELECT * FROM masyarakat";
$res = mysql_query($kon,$sql);

   while ($row = mysqli_fetch_array($res) ) {
   	echo "name: " . $row["nik"]. "nama : " . $row["tanggallahir"] . "pekerjaan:"  . $row["golongandarah"]. " alamat: " ".$row["umur"]."<br>";
   };

   //echo "halo";

   ?>
   <a href="tambah.php">Masyarakat</a>
   	
   


