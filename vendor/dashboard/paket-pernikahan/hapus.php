<?php

if (isset($_GET['id'])) {

	require_once '../../../koneksi/koneksi.php';
	session_start();
	$id = intval($_GET['id']);
	$id_v = $_SESSION['data_vendor']['id_vendor'];
	$terima = mysqli_query($conn, "UPDATE paket_pernikahan SET is_delete=1 WHERE id_paket=$id AND id_vendor ='$id_v' ");
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
