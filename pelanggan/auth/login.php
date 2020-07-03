<?php

if (!empty($_POST)) {
	include_once '../../koneksi/koneksi.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = md5($_POST['password']);

	$login = mysqli_query($conn, "SELECT * FROM pelanggan WHERE username='$username' AND password='$password'");
	if (mysqli_num_rows($login) > 0) {
		$data = mysqli_fetch_assoc($login);

		session_start();
		$_SESSION['login_pelanggan']  = TRUE;
		$_SESSION['pelanggan']				= $data;

		header('location: ../../index.php?page=dashboard');

	} else {
		echo "<script>alert('Username atau Password salah');
		window.location.href='../../?page=login';
		</script>";
	}
}
