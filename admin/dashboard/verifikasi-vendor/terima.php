<?php

if (isset($_GET['id'])) {

	require_once '../../../koneksi/koneksi.php';

	$id = intval($_GET['id']);
	$terima = mysqli_query($conn, "UPDATE vendor SET status=1 WHERE id_vendor=$id");
	if ($terima) {
		echo "<script>alert('Vendor berhasil diverifikasi');
		window.location.href='../index.php?page=verifikasi_vendor';
		</script>";

	} else {
		echo "<script>alert('Vendor gagal diverifikasi');
		window.location.href='../index.php?page=verifikasi_vendor';
		</script>";
	}

} else {
	header('location: ../index.php?page=verifikasi_vendor');
}
