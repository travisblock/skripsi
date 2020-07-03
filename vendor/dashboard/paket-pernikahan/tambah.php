<?php

if (!empty($_POST)) {

	require_once '../../../koneksi/koneksi.php';
	session_start();
	$nama 	= mysqli_real_escape_string($conn, $_POST['nama']);
	$harga  = mysqli_real_escape_string($conn, $_POST['harga']);
	$ket		= mysqli_real_escape_string($conn, $_POST['keterangan']);
	$id_v		= $_SESSION['data_vendor']['id_vendor'];

	$foto 						= $_FILES['foto']['name'];
	$foto_tmp 				= $_FILES['foto']['tmp_name'];
	$foto_ext 				= pathinfo($foto, PATHINFO_EXTENSION);
	$foto_path				= "../../../assets/images/paket/";

	if ($foto_ext === 'png' || $foto_ext === 'jpg' || $foto_ext === 'jpeg') {
		$foto_new = explode('.', $foto);
		$foto_new = $foto_new[0].'-'.uniqid(true).'.' . end($foto_new);

		if(move_uploaded_file($foto_tmp, $foto_path . '/' . $foto_new)){
			$tambah = mysqli_query($conn, "INSERT INTO paket_pernikahan(id_vendor,nama,harga,foto_paket,keterangan,is_delete) VALUES('$id_v', '$nama', '$harga', '$foto_new', '$ket', 0) ");

			echo "<script>alert('Berasil Tambah Paket Pernikahan');
			window.location.href='../index.php?page=paket';
			</script>";
		}

	}else{
		echo "<script>alert('Foto paket harus png/jpg/jpeg');
		window.location.href='../index.php?page=paket';
		</script>";
	}

} else {
	header('location: ../index.php?page=paket');
	exit();
}
