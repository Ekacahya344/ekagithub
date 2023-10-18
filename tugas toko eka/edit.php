<!DOCTYPE html>
<html>
<head>
	<title>WARUNG EKA CAHYA</title>
</head>
<body>
 
	<h2>WARUNG EKA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_toko where idBarang='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>KODE BARANG</td>
					<td>
						<input type="hidden" name="idBarang" value="<?php echo $d['idBarang']; ?>">
						<input type="text" name="kodeBarang" value="<?php echo $d['kodeBarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA BARANG</td>
					<td><input type="text" name="namaBarang" value="<?php echo $d['namaBarang']; ?>"></td>
				</tr>
				<tr>
					<td>SATUAN BARANG</td>
					<td><input type="text" name="satuanBarang" value="<?php echo $d['satuanBarang']; ?>"></td>
				</tr>
                <tr>
					<td>STOK BARANG</td>
					<td><input type="number" name="stokBarang" value="<?php echo $d['stokBarang']; ?>"></td>
				</tr>
                <tr>
					<td>HARGA BARANG</td>
					<td><input type="number" name="hargaBarang" value="<?php echo $d['hargaBarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>