<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$query = "SELECT * from barang where id = '$id'";
	$sql = mysqli_query($koneksi,$query);
	$row = mysqli_fetch_array($sql);
	$kode = $row['kode'];
	$nama = $row['nama'];
	$deskripsi = $row['deskripsi'];
	$stok = $row['stok'];
	$harga = $row['harga'];
	$berat = $row['berat'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="update.php" method="post">
		<table>
				<tr>
					<td>kode : </td>x
					<td><input type="text" name="kode" value="<?php echo $kode ?>"></td>
				</tr>
				<tr>
					<td>nama :</td>
					<td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
				</tr>
				<tr>
					<td>Deskripsi :</td>
					<td><textarea name="deskripsi"><?php echo $deskripsi ?></textarea></td>
				</tr>
				<tr>
					<td>stok :</td>
					<td><input type="text" name="stok" value="<?php echo $stok ?>"></td>
				</tr>
				<tr>
					<td>harga :</td>
					<td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
				</tr>
				<tr>
					<td>berat :</td>
					<td><input type="text" name="berat" value="<?php echo $berat ?>"></td>
				</tr>
				<tr>
				<td><input type="submit" name="submit" value="submit"></td>
				</tr>		
		</table>
		<a href="index.php">lihat</a>
	</form>
</body>
</html>