<?php 
 
include 'koneksi.php';
$id = $_POST['idBarang'];
$kode = $_POST['kodeBarang'];
$nama = $_POST['namaBarang'];
$satuan = $_POST['satuanBarang'];
$stok = $_POST['stokBarang'];
$harga= $_POST['hargaBarang'];
 
mysqli_query($koneksi,"UPDATE tb_toko SET kodeBarang='$kode',namaBarang='$nama',satuanBarang='$satuan',stokBarang='$stok',hargaBarang='$harga' WHERE idBarang='$id'");
 

 
header("location:index.php?pesan=update");
?>