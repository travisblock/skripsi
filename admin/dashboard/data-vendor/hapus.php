<?php

if (isset($_GET['id'])) {

	require_once '../../../koneksi/koneksi.php';

	$id = intval($_GET['id']);
	$terima = mysqli_query($conn, "UPDATE vendor SET status=0 WHERE id_vendor=$id");
	if ($terima) {
		echo "<script>alert('Vendor berhasil dinonaktifkan');
		window.location.href='../index.php?page=data_vendor';
		</script>";

	} else {
		echo "<script>alert('Vendor gagal dinonaktifkan');
		window.location.href='../index.php?page=data_vendor';
		</script>";
	}

}else {
	header('location: ../index.php?page=data_vendor');
}
