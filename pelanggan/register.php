<?php

if (!empty($_POST)) {

	require_once '../koneksi/koneksi.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$user	 = mysqli_real_escape_string($conn, $_POST['username']);
	$pass  = md5($_POST['password']);
	$nama  = mysqli_real_escape_string($conn, $_POST['nama']);
	$telp  = mysqli_real_escape_string($conn, $_POST['telp']);
	$tgl	 = date('Y-m-d');

	$daftar = mysqli_query($conn, "INSERT INTO pelanggan(nama,username,password,email,telp,tgl_daftar,alamat,ktp) VALUES('$nama', '$user', '$pass', '$email', '$telp', '$tgl', '', '')");

	if ($daftar) {
		echo "<script>alert('Pendaftaran berhasil, silahkan login');
		window.location.href='../index.php?page=login';
		</script>";
	} else{
		echo "<script>alert('Pendaftaran gagal, silahkan ulangi lagi');
		window.location.href='../index.php?page=login';
		</script>";
	}
}
