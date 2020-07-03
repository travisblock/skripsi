<?php

if (!empty($_POST)) {
	require_once '../../koneksi/koneksi.php';
	include_once '../../additional/flash.php';
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = md5($_POST['password']);

	$login = mysqli_query($conn, "SELECT * FROM vendor WHERE username='$username' AND password='$password' AND status=1");

	if (mysqli_num_rows($login) > 0) {

		$data = mysqli_fetch_assoc($login);
		session_start();
		$_SESSION['login_vendor'] = TRUE;
		$_SESSION['data_vendor']	= $data;
		header('location: ../dashboard');

	} else {
		session_start();
		Msg::setMsg('error', 'Login gagal, username / password salah');
		header('location: ../index.php');
		exit();
	}

} else {
	session_start();
	Msg::setMsg('error', 'Login gagal, username / password salah');
	header('location: ../index.php');
	exit();
}
