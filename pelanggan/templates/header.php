<?php error_log(0); ?>
<div class="off_canvars_overlay"></div>
<div class="Offcanvas_menu">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="canvas_open">
					<a href="javascript:void(0)"><i class="ion-navicon"></i></a>
				</div>
				<div class="Offcanvas_menu_wrapper">
					<div class="canvas_close">
						<a href="javascript:void(0)"><i class="ion-android-close"></i></a>
					</div>

					<!-- WISHLIST & CART -->
					<div class="middel_right_info">
						<?php
						session_start();
						if (!isset($_SESSION['login_pelanggan'])) {
							include 'keranjang_belum_login.php';
						} else {
							include 'keranjang_sudah_login.php';
						}
						?>
					</div>
					<!-- WISHLIST & CART -->


					<div id="menu" class="text-left ">
						<ul class="offcanvas_main_menu">

							<!-- Navbar -->
							<li><a href="?page=default">Home</a></li>
							<li><a href="?page=paket_pernikahan">Paket Pernikahan</a></li>
							<li><a href="?page=contact">Contact</a></li>
							<!-- Navbar -->

						</ul>
					</div>

					<div class="Offcanvas_footer">
						<span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
						<ul>
							<li class="facebook">
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li class="twitter">
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li class="pinterest">
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</li>
							<li class="google-plus">
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</li>
							<li class="linkedin">
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<header>
	<div class="header_top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="top_right text-right">
						<ul>
							<li><a href="vendor/register.php"> Menjadi vendor </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main_header">
		<!--header top start-->
		<div class="header_top">
			<div class="container">
				<div class="row align-items-center">
				</div>
			</div>
		</div>
		<!--header top start-->
		<!--header middel start-->
		<div class="header_middle">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-6">
						<div class="logo">
							<a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-lg-9 col-md-6">

						<div class="middel_right">

							<!-- WISHLIST & CART -->
							<div class="middel_right_info">
								<?php
								if (!isset($_SESSION['login_pelanggan'])) {
									include 'keranjang_belum_login.php';
								} else {
									include 'keranjang_sudah_login.php';
								}
								?>
							</div>
							<!-- WISHLIST & CART -->

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header middel end-->
		<!--header bottom satrt-->
		<div class="main_menu_area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-9 col-md-12">
						<div class="main_menu menu_position">
							<nav>
								<ul>

									<!-- Navbar -->
									<li><a href="?page=default">Home</a></li>
									<li><a href="?page=paket_pernikahan">Paket Pernikahan</a></li>
									<li><a href="?page=contact">Contact</a></li>
									<!-- Navbar -->

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header bottom end-->
	</div>
</header>