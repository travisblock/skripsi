<div class="customer_login mt-60">
		<div class="container">
				<div class="row">
					 <!--login area start-->
						<div class="col-lg-6 col-md-6">
								<div class="account_form">
										<h2>login</h2>
										<form action="pelanggan/auth/login.php" method="POST">
												<p>
														<label>Username or email <span>*</span></label>
														<input type="text" name="username">
												 </p>
												 <p>
														<label>Passwords <span>*</span></label>
														<input type="password" name="password">
												 </p>
												<div class="login_submit">
													 <a href="#">Lost your password?</a>
														<label for="remember">
																<input id="remember" type="checkbox">
																Remember me
														</label>
														<button type="submit">login</button>

												</div>

										</form>
								 </div>
						</div>
						<!--login area start-->

						<!--register area start-->
						<div class="col-lg-6 col-md-6">
								<div class="account_form register">
										<h2>Register</h2>
										<form action="pelanggan/register.php" method="post">
												<p>
														<label>Email address  <span>*</span></label>
														<input type="email" name="email">
												 </p>
												 <p>
 														<label>Nama  <span>*</span></label>
 														<input type="text" name="nama">
 												 </p>
												 <p>
 														<label>No. Telp  <span>*</span></label>
 														<input type="text" name="telp">
 												 </p>
												 <p>
 														<label>Username  <span>*</span></label>
 														<input type="text" name="username">
 												 </p>
												 <p>
														<label>Passwords <span>*</span></label>
														<input type="password" name="password">
												 </p>
												<div class="login_submit">
														<button type="submit">Register</button>
												</div>
										</form>
								</div>
						</div>
						<!--register area end-->
				</div>
		</div>
</div>
