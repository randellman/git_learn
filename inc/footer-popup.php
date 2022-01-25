<div class="popup_wrpr" id="login-popup">
	<div class="popup_wrpr_inner">
		<div class="popup">
			<a href="#" class="close_popup_btn" >
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/close-popup.svg" alt="">
			</a>
			<div class="popup_content">
				<div class="popup_content-inner">
					<h2 class="popup_title">Welcome to:</h2>
					<div class="popup_logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Logo-popup.svg" alt="">
					</div>
					<h3 class="popup_subtitle">All in one shopping worldwide</h3>
					<div class="popup_text">
						<p>
							<span>weekly giveaways</span> (register once, win a
							chance to choose every week 100% free
							items with free shipping)
						</p>
						<p>
							<span>$100 Store Credit</span> for every participant
							everyone wins
						</p>
						<p>
							<span>Special Coupons</span> to use immediately
						</p>
					</div>
					<div class="countdown" id="clockdiv">
						<div class="countdown_title">
							be the next winner!
						</div>
						<div class="countdown_clock">

							<div class="countdown_item">
								<span class="hours"></span>03h :
							</div>
							<div class="countdown_item">
								<span class="minutes"></span>55m :
							</div>
							<div class="countdown_item">
								<span class="seconds"></span>55s
							</div>
						</div>
					</div>
				</div>
				<div class="popup_login">

					<div class="tabs">
						<nav class = "tab-nav">
							<ul>
								<li class = "active" data-href = "#tab-50">
									<span>Register</span>
								</li>
								<li data-href = "#tab-51">
									<span>Sign In</span>
								</li>
							</ul>
						</nav>

						<div class="tab active" id="tab-50">
							<form class="popup_form">
								<div class="popup_form-item">
									<input class="input" type="email" placeholder="Email Address">
								</div>
								<div class="popup_form-item">
									<input class="input input-password" type="password" placeholder="Password">
									<a href="#" class="password-control"></a>
								</div>
								<button class="btn btn-gradient">Register</button>
								<a href="#" class="popup_form-forgot">Forgot Password</a>
							</form>
						</div>
						<div class="tab" id="tab-51">
							<form class="popup_form">
								<div class="popup_form-item">
									<input class="input" type="email" placeholder="Email Address">
								</div>
								<div class="popup_form-item">
									<input class="input input-password" type="password" placeholder="Password">
									<a href="#" class="password-control"></a>
								</div>
								<button class="btn btn-gradient">Sign In</button>
								<a href="#" class="popup_form-forgot">Forgot Password</a>
							</form>
						</div>

					</div>
					<div class="quick-access">
						<h3 class="quick-access_title">Quick Access With</h3>
						<div class="quick-access_inner">
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icons_google.svg" alt="google"></a>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icons_fb.svg" alt="facebook"></a>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icons_tw.svg" alt="twitter"></a>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icons_apple.svg" alt="apple"></a>
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icons_instagram.svg" alt="instagram"></a>
						</div>
					</div>
					<div class="popup_privacy">
						By Registering, you agree to our <a href="#">Privacy & Cookie Policy</a> and
						<a href="#">Terms & Conditions</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popup_wrpr  inner" id="add-to-card">
	<div class="popup_wrpr_inner">
		<div class="popup">
			<a href="#" class="close_popup_btn" >
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/close-popup.svg" alt="">
			</a>
			<div class="popup_header">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/checkmark.svg" alt="">
				A new item has been added to your Shopping Cart. You now have 1 item in your Shopping Cart.
			</div>
			<div class="popup_content">
				<div class="popup_content-title">
					Buyers who bought this item also bought:
				</div>
				<div class="popup-slilder">
					<?php for ( $i = 1; $i <= 14; ++ $i ): ?>
						<div class="popup-slilder__item">
							<div class="product type-product has-post-thumbnail product-type-simple">
								<div class="product_thumb">
									<a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pictures/product<?php echo $i ?>.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" >
									</a>
									<span class="product_like"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/like.svg"></span>
								</div>
								<div class="product-content">
									<h2 class="woocommerce-loop-product__title">Summer Women Clothes Set Tracksuits Sprin...</h2>
									<div class="product-bottom">
										<div class="product-bottom_left">
											<div class="price">
												<div class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">US $</span>
													<span class="price_integer">10</span>.12
												</div>
											</div>

											<div class="star-rating">
												(1)
												<div class="star-rating_inner">
													<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
													<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
													<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
													<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
													<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
												</div>
											</div>

										</div>

										<div class="product-bottom_right">
											<div class="product_shipping">
                                                <span class="free-shipping">
                                                    Free
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/delivery.svg" alt="delivery">
                                                </span>
												<a href="#" class="product_return">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/product-arrow.svg" alt="delivery">
												</a>
												<span class="product_sale">-21%</span>
											</div>
											<div class="product_orders">
												<span class="product-orders_quantity">(18)</span> Orders
											</div>
										</div>
									</div>
									<a href="#" class="btn btn-gradient">
										Add to Cart
									</a>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="popup_wrpr  inner" id="popup-sizes">
	<div class="popup_wrpr_inner">
		<div class="popup">
			<a href="#" class="close_popup_btn" >
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/close-popup.svg" alt="">
			</a>
			<div class="popup_content">
				<div class="popup-title">
					Measurement
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/question-3-circle-grey.svg" alt="">
				</div>
				<div class="tabs sizes">
					<nav class = "tab-nav">
						<ul>
							<li class = "active">
								<span data-href = "#size-1">CM</span>
							</li>
							<li>
								<span data-href = "#size-2">IN</span>
							</li>
						</ul>
						<select name="" id="" class="select">
							<option>Manufacturer Size</option>
							<option>Manufacturer Size</option>
							<option>Manufacturer Size</option>
						</select>
					</nav>
					<div class="tab active" id="size-1">
						<div class="table-actions">
							<a href="#">
								Size Chart
							</a>
							<a href="#">
								Slide the table to scroll
							</a>
						</div>
						<div class="table-scroll">
							<table class="table style2">
								<thead>
								<tr>
									<th>
										Size
									</th>
									<th>
										Bust
									</th>
									<th>
										Waist
									</th>
									<th>
										Hip
									</th>
									<th>
										Hollow to Hem
									</th>
								</tr>
								<tbody>
								<tr>
									<th>
										2
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										4
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										6
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										8
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										10
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										12
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										14W
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										16W
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										18W
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								<tr>
									<th>
										120W
									</th>
									<td>
										32.68
									</td>
									<td>
										25.59
									</td>
									<td>
										13.59
									</td>
									<td>
										13.59
									</td>
								</tr>
								</tbody>
								</thead>
							</table>
						</div>
					</div>
					<div class="tab" id="size-2">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="popup_wrpr" id="popup-shipping">
	<div class="popup_wrpr_inner">
		<div class="popup">
			<a href="#" class="close_popup_btn" >
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/close-popup.svg" alt="">
			</a>
			<div class="popup_content">
				<div class="popup_item">
					<h3>Ship to:</h3>
					<select class="my-select2 arrow-inner" style="min-width: 124px;">
						<option value="">United States</option>
						<option value="">United States</option>
						<option value="">United States</option>
					</select>
				</div>
				<div class="popup_item">
					<h3>Shipping Method:</h3>
					<table class="table table-shipping">
						<thead>
						<tr>
							<th>Cost</th>
							<th>Tracking</th>
							<th>Estimated Delivery</th>
							<th>Carrier</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-1" type="radio" name="cost-shipping" value="">
									<label for="radio-1">Free Shipping</label>
								</div>
							</td>
							<td>Partial</td>
							<td>02/06</td>
							<td>ePacket</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-2" type="radio" name="cost-shipping" value="">
									<label for="radio-2">Free Shipping</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Desilered before 04/04 or full<br> refund</td>
							<td>Besto Standard Shipping</td>
						</tr>

						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-3" type="radio" name="cost-shipping" value="">
									<label for="radio-3">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-4" type="radio" name="cost-shipping" value="">
									<label for="radio-4">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-5" type="radio" name="cost-shipping" value="">
									<label for="radio-5">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-6" type="radio" name="cost-shipping" value="">
									<label for="radio-6">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-7" type="radio" name="cost-shipping" value="">
									<label for="radio-7">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-8" type="radio" name="cost-shipping" value="">
									<label for="radio-8">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-9" type="radio" name="cost-shipping" value="">
									<label for="radio-9">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>
						<tr>
							<td>
								<div class="btn_radio">
									<input id="radio-10" type="radio" name="cost-shipping" value="">
									<label for="radio-10">US $0.32</label>
								</div>
							</td>
							<td>Partial</td>
							<td>Jan 28</td>
							<td>EMS</td>
						</tr>

						</tbody>
					</table>

				</div>
				<div class="popup_btn-wrap">
					<a href="#" class="btn btn-gradient">Apply</a>
				</div>
			</div>
		</div>
	</div>
</div>