<?php

if(!empty($_POST)){

	require_once '../../../koneksi/koneksi.php';

	$idpaket = intval($_POST['id_paket']);
	$nama		 = mysqli_real_escape_string($conn, $_POST['nama']);
	$harga	 = mysqli_real_escape_string($conn, $_POST['harga']);
	$ket 		 = mysqli_real_escape_string($conn, $_POST['keterangan']);

	$edit = mysqli_query($conn, "UPDATE paket_pernikahan SET nama='$nama', harga='$harga', keterangan='$ket' WHERE id_paket=$idpaket ");

	if ($edit) {
		echo "<script>alert('Paket pernikahan berhasil diedit');
		window.location.href='../index.php?page=paket';
		</script>";
	} else {
		echo "<script>alert('Paket pernikahan gagal diedit');
		window.location.href='../index.php?page=paket';
		</script>";
	}

} else {
	header('location: ../index.php?page=paket');
}
