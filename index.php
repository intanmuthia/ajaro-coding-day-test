<!DOCTYPE html>
<html>
<head>
	<title>data barang</title>
</head>
<body>
	<a href="create.php">tambah</a>
	<table border="1">
		<tr>
			<th>Kode</th>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Stok</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Aksi</th>
		</tr>
		<?php
			include 'koneksi.php';
			$query = "SELECT * from barang";
			$sql = mysqli_query($koneksi,$query);
		while ($row = mysqli_fetch_array($sql)){
			echo "<tr>
				<td>$row[kode]</td>
				<td>$row[nama]</td>
				<td>$row[deskripsi]</td>
				<td>$row[stok]</td>
				<td>$row[harga]</td>
				<td>$row[berat]</td>
				<td><a href='edit.php?id=$row[id]'>edit</a> | <a href='delete.php?id=$row[id]'>delete</a></td>";

		}

		?>
	</table>
</body>
</html>