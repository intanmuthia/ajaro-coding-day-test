<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "barang";

	$koneksi = mysqli_connect($host,$user,$pass,$database);
	if (! $koneksi) {
		echo "koneksi gagal";
	}
?>