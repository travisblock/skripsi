<?php

if (!empty($_POST)) {

	require_once '../../../koneksi/koneksi.php';

	$nama 	= mysqli_real_escape_string($conn, $_POST['nama']);
	$harga  = mysqli_real_escape_string($conn, $_POST['harga']);
	$ket		= mysqli_real_escape_string($conn, $_POST['keterangan']);

	$tambah = mysqli_query($conn, "INSERT INTO paket_pernikahan(nama,harga,keterangan,is_delete) VALUES('$nama', '$harga', '$ket', 0) ");

	echo "<script>alert('Berasil Tambah Paket Pernikahan');
	window.location.href='../index.php?page=paket';
	</script>";

} else {
	header('location: ../index.php?page=paket');
	exit();
}
