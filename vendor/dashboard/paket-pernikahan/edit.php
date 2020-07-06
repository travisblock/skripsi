<?php

if (!empty($_POST)) {

	require_once '../../../koneksi/koneksi.php';

	$idpaket = intval($_POST['id_paket']);
	$nama		 = mysqli_real_escape_string($conn, $_POST['nama']);
	$harga	 = mysqli_real_escape_string($conn, $_POST['harga']);
	$ket 		 = mysqli_real_escape_string($conn, $_POST['keterangan']);

	$foto 						= $_FILES['foto']['name'];
	$foto_tmp 				= $_FILES['foto']['tmp_name'];
	$foto_ext 				= pathinfo($foto, PATHINFO_EXTENSION);
	$foto_path				= "../../../assets/images/paket/";
	if ($foto) {
		if ($foto_ext === 'png' || $foto_ext === 'jpg' || $foto_ext === 'jpeg') {
			$foto_new = explode('.', $foto);
			$foto_new = $foto_new[0] . '-' . uniqid(true) . '.' . end($foto_new);

			if (move_uploaded_file($foto_tmp, $foto_path . '/' . $foto_new)) {
				$edit = mysqli_query($conn, "UPDATE paket_pernikahan SET nama='$nama', harga='$harga', foto_paket='$foto_new', keterangan='$ket' WHERE id_paket=$idpaket ");

				echo "<script>alert('Paket pernikahan berhasil diedit');
				window.location.href='../index.php?page=paket';
				</script>";
			}
		} else {
			echo "<script>alert('Foto harus png/jpg/jpeg');
			window.location.href='../index.php?page=paket';
			</script>";
		}
	} else {

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
	}
} else {
	header('location: ../index.php?page=paket');
}
