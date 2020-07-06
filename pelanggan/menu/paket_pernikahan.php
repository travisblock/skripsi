<!--shop  area start-->
<div class="shop_area shop_fullwidth mt-60 mb-60">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!--shop wrapper start-->
				<!--shop toolbar start-->
				<div class="shop_toolbar_wrapper">
					<div class="shop_toolbar_btn">

						<button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip" title="3"></button>

						<button data-role="grid_4" type="button" class="active btn-grid-4" data-toggle="tooltip" title="4"></button>
					</div>
					<div class="page_amount">
						<p>Showing 1–9 of 21 results</p>
					</div>
				</div>
				<!--shop toolbar end-->
				<div class="row shop_wrapper">
					<?php
					require_once 'koneksi/koneksi.php';
					$data = mysqli_query($conn, "SELECT * FROM paket_pernikahan INNER JOIN vendor ON paket_pernikahan.id_vendor = vendor.id_vendor");
					while ($d = mysqli_fetch_array($data)) {
					?>
						<div class="col-lg-3 col-md-4 col-12 ">
							<article class="single_product">
								<figure>
									<div class="product_thumb">
										<a class="primary_img" href="product-details.html"><img src="assets/images/paket/<?php echo $d['foto_paket']; ?>" alt=""></a>

										<div class="add_to_cart">
											<a href="cart.html" title="">Lihat</a>
										</div>
									</div>
									<div class="product_content grid_content">
										<div class="price_box">
											<span class="current_price">Rp. <?= number_format($d['harga'], 0, ".", ".") ?></span>
										</div>
										<h3 class="product_name grid_name"><a href="product-details.html"><?= $d['nama'] ?></a></h3>
									</div>
								</figure>
							</article>
						</div>
					<?php } ?>
				</div>

				<div class="shop_toolbar t_bottom">
					<div class="pagination">
						<ul>
							<li class="current">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#">next</a></li>
							<li><a href="#">>></a></li>
						</ul>
					</div>
				</div>
				<!--shop toolbar end-->
				<!--shop wrapper end-->
			</div>
		</div>
	</div>
</div>
<!--shop  area end-->