<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$result = "DELETE from barang WHERE id ='$id'";
	$sql = mysqli_query($koneksi,$result);
	if ($sql) {
		header("location: index.php");
	}
?>