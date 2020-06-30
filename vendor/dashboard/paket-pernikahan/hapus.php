<?php

if (isset($_GET['id'])) {

	require_once '../../../koneksi/koneksi.php';

	$id = intval($_GET['id']);
	$terima = mysqli_query($conn, "UPDATE paket_pernikahan SET is_delete=1 WHERE id_paket=$id");
	if ($terima) {
		echo "<script>alert('Paket pernikahan berhasil dihapus');
		window.location.href='../index.php?page=paket';
		</script>";

	} else {
		echo "<script>alert('Paket pernikahan gagal dihapus');
		window.location.href='../index.php?page=paket';
		</script>";
	}

}else {
	header('location: ../index.php?page=paket');
}
