<?php 
 
$koneksi= mysqli_connect("localhost","root","","db_16_toko_eka");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>