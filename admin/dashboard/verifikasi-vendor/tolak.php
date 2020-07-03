<?php

if (isset($_GET['id'])) {

	require_once '../../../koneksi/koneksi.php';

	$id = intval($_GET['id']);
	$terima = mysqli_query($conn, "UPDATE vendor SET status=0 WHERE id_vendor=$id");
	$vendor = mysqli_query($conn, "SELECT nama_vendor,email from vendor WHERE id_vendor=$id");
	$vendor = mysqli_fetch_assoc($vendor);

	require '../../../additional/PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'trystane.id.rapidplex.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'yudha@bokedroid.com';
	$mail->Password = 'Kentrung666';
	$mail->SMTPSecure = 'tls';
	$mail->Port = '587';
	$mail->setFrom("admin@weddingproject.com", "weddingproject");
	$mail->addReplyTo("admin@weddingproject.com", "weddingproject");
	$mail->addAddress("$vendor[email]");
	$mail->Subject = 'Verifikasi vendor';
	$mail->isHTML(true);
	$mailContent = "Maaf pendaftaran vendor $vendor[nama_vendor] <b>Ditolak</b> Karena tidak memenuhi syarat pendaftaran.";
	$mail->Body = $mailContent;
	if($mail->send()){
		echo "<script>alert('Y')</script>";
	}else{
		echo $mail->ErrorInfo;
	}

}else {
	header('location: ../index.php?page=verifikasi_vendor');
}
