<?php

if (!empty($_POST)) {

	require_once '../../koneksi/koneksi.php';

	$username 			= mysqli_real_escape_string($conn, $_POST['username']);
	$password 			= md5($_POST['password']);
	$nama_vendor 		= mysqli_real_escape_string($conn, $_POST['nama_vendor']);
	$pemilik_vendor = mysqli_real_escape_string($conn, $_POST['pemilik_vendor']);
	$alamat_vendor 	= mysqli_real_escape_string($conn, $_POST['alamat_vendor']);
	$no_telp 				= intval($_POST['telp']);
	$tgl						= date("Y-m-d");
	$email					= mysqli_real_escape_string($conn, $_POST['email']);

	$ktp 						= $_FILES['ktp']['name'];
	$ktp_tmp 				= $_FILES['ktp']['tmp_name'];
	$ktp_ext 				= pathinfo($ktp, PATHINFO_EXTENSION);
	$ktp_path				= "../../admin/img/";

	if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM vendor WHERE username='$username'")) < 1){

		if ($ktp_ext === 'png' || $ktp_ext === 'jpg' || $ktp_ext === 'jpeg') {
			$ktp_new = explode('.', $ktp);
			$ktp_new = md5($ktp) . uniqid() . '.' . end($ktp_new);

			if (move_uploaded_file($ktp_tmp, $ktp_path . '/' . $ktp_new)) {
				$register = mysqli_query($conn, "INSERT INTO vendor(nama_vendor, nama_pemilik, ktp, telp, tgl_daftar, tgl_verif, email, alamat, username, password, status) VALUES('$nama_vendor', '$pemilik_vendor', '$ktp_new', '$no_telp', '$tgl', '0000-00-00', '$email', '$alamat_vendor', '$username', '$password', 0) ");

				if ($register) {
					echo "<script>alert('Pendaftaran berhasil, silahkan tunggu verifikasi dari kami');
					window.location.href='../index.php';
					</script>";
				} else {
					echo "<script>alert('Pendaftaran Gagal, Silahkan ulangi');
					window.location.href='../register.php';
					</script>";
				}

			} else {
				echo "<script>alert('KTP gagal di upload');
				window.location.href='../register.php';
				</script>";
			}

		} else {
			echo "<script>alert('Format gambar harus png / jpg / jpeg !!!');
			window.location.href='../register.php';
			</script>";
		}

	} else {
		session_start();
		Msg::setMsg('error', 'Vendor sudah terdaftar');
		header('location: ../register.php');
		exit();
	}

}
