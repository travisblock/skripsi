<?php

if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'profil':
				require_once 'profil.php';
				break;
		case 'verifikasi_vendor':
				require_once '../dashboard/verifikasi-vendor/index.php';
				break;
		case 'data_konsumen':
				require_once '../dashboard/konsumen/index.php';
				break;
		case 'data_vendor':
				require_once '../dashboard/data-vendor/index.php';
				break;
		default:
				require_once '../dashboard/home/index.php';
			break;
	}
} else {
	require_once '../dashboard/home/index.php';
}
