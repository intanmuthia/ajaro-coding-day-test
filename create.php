<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="create.php" method="post">
		<input type="text" name="kode" placeholder="masukan kode"><br/>
		<input type="text" name="nama" placeholder="masukan nama"><br/>
		<textarea name="deskripsi"></textarea><br/>
		<input type="text" name="stok" placeholder="masukan stok"><br/>
		<input type="text" name="harga" placeholder="masukan harga"><br/>
		<input type="text" name="berat" placeholder="masukan berat"><br/>
		<input type="submit" name="submit" value="submit"><br/>
	</form>
</body>
</html>
<?php
	include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$deskripsi = $_POST['deskripsi'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$berat = $_POST['berat'];

		$query = "INSERT INTO barang VALUES(null,'$kode','$nama','$deskripsi','$stok','$harga','$berat')";
		$sql = mysqli_query($koneksi,$query);
		if ($sql) {
			echo "Berhasil menambahkan data <a href='index.php'>lihat</a>";
		}
	}
?>