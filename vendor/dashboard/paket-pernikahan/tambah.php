<?php

if (!empty($_POST)) {

	require_once '../../../koneksi/koneksi.php';
	session_start();
	$nama 	= mysqli_real_escape_string($conn, $_POST['nama']);
	$harga  = mysqli_real_escape_string($conn, $_POST['harga']);
	$ket		= mysqli_real_escape_string($conn, $_POST['keterangan']);
	$id_v		= $_SESSION['data_vendor']['id_vendor'];

	$tambah = mysqli_query($conn, "INSERT INTO paket_pernikahan(id_vendor,nama,harga,keterangan,is_delete) VALUES('$id_v', '$nama', '$harga', '$ket', 0) ");

	echo "<script>alert('Berasil Tambah Paket Pernikahan');
	window.location.href='../index.php?page=paket';
	</script>";

} else {
	header('location: ../index.php?page=paket');
	exit();
}
