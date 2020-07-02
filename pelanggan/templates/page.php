<?php

if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'paket':
				require_once '../dashboard/paket-pernikahan/index.php';
				break;
		case 'saldo':
				require_once '../dashboard/saldo/index.php';
				break;
		case 'verifikasi_pemesanan':
				require_once '../dashboard/verifikasi-pemesanan/index.php';
				break;
		default:
				require_once '../dashboard/home/index.php';
			break;
	}
} else {
	require_once '../dashboard/home/index.php';
}
