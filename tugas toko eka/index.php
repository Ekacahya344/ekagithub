<!DOCTYPE html>
<html>
<head>
	<title>WARUNG EKA CAHYA</title>
</head>
<body>
 
	<h2> WARUNG EKA CAHYA</h2>
	<br/>
	<a href="tambah.php">+ Tambah Barang</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Satuan Barang</th>
            <th>Stok Barang</th>
            <th>Harga Barang</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_toko");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kodeBarang']; ?></td>
                <td><?php echo $d['namaBarang']; ?></td>
				<td><?php echo $d['satuanBarang']; ?></td>
				<td><?php echo $d['stokBarang']; ?></td>              
                <td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['idBarang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['idBarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>