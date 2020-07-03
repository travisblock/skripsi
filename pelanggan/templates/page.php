<?php

if(isset($_GET['page'])){
	switch ($_GET['page']) {
		case 'login':
			include_once 'pelanggan/templates/login.php';
			break;
		case 'dashboard':
			include_once 'pelanggan/dashboard/index.php';
			break;
		default:
			include_once 'pelanggan/templates/homepage.php';
			break;
	}

} else {
	include_once 'pelanggan/templates/homepage.php';
}

?>
