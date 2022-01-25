<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

if(false) {

do_action( 'woocommerce_before_cart' ); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
				<th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<td class="product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						</td>

						<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>

						<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
<?php } ?>


<div class="wrapper_main">
    <main class="content">
        <div class="container container1355 ">

            <div class="cart">
                <div class="right-side">
                    <div class="cart_item cart_heading">
                        Cart Overview <span>(3)</span>
                    </div>
                    <div class="cart_item cart_time">
                        <div class="cart_time-inner">
                            <div class="cart_number" id="clockdiv">
                                <span class="minus">03</span> : <span class="seconds">50</span>
                            </div>
                            <p>
                                We’ve automatically applied the optimal bonuses for you<br>
                                This cart is reserved for You for one hour
                            </p>
                        </div>
                        <div class="cart_share">
                            <div class="bonuses" >
                                <div class="bonuses_title">All Bonuses</div>
                                <div class="bonuses_dropdown">
                                    <h3><span class="close_dropdown"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/close-dropdown.svg"></span>All Available Bonuses</h3>
                                    <div class="bonuses_top">
                                        <div class="bonuses_credit">
                                            <div class="tooltip">
                                                Store Credit <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/tooltip.svg">
                                            </div>
                                            <p>Your Store Credit is US $100.00</p>
                                        </div>
                                        <div class="promo">
                                            <div class="promo_top">
                                                <label class="promo_label">Promo Code</label>
                                                <a class="promo_apply" href="#">Apply</a>
                                            </div>
                                            <input class="input" type="text" placeholder="Enter here">
                                        </div>
                                    </div>
                                    <div class="ticket-wrap">
                                        <div class="bonuses_credit">
                                            <div class="tooltip">
                                                Reward Coupons <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/tooltip.svg">
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-orange.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>Us $50.00 Off</h3>
                                                        <strong>Order over US $100.00</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-orange.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>Us $50.00 Off</h3>
                                                        <strong>Order over US $100.00</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-orange.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>Us $50.00 Off</h3>
                                                        <strong>Order over US $100.00</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-orange.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>Us $50.00 Off</h3>
                                                        <strong>Order over US $100.00</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-wrap">
                                            <a class="more-ticket" href="#">More <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/more-arrow.svg"></a>
                                        </div>
                                    </div>
                                    <div class="ticket-wrap">
                                        <div class="bonuses_credit">
                                            <div class="tooltip">
                                                Referral Coupons <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/tooltip.svg">
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-red.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>5% Off</h3>
                                                        <strong>Storewide</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-red.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>5% Off</h3>
                                                        <strong>Storewide</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-red.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>5% Off</h3>
                                                        <strong>Storewide</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket">
                                            <div class="chunk">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-red.jpg">
                                                <div class="info">
                                                    <div class="right-info">
                                                        <h3>5% Off</h3>
                                                        <strong>Storewide</strong>
                                                        <span>Expires Dec 9, 04:36 PM PT</span>
                                                    </div>
                                                    <div class="left-info">
                                                        <a href="#" class="white-link">Applied</a>
                                                        <a href="#" class="white-link">Share</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-wrap">
                                            <a class="more-ticket" href="#">More <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/more-arrow.svg"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-page__share">

                                <div class="product-page__share-title">
                                    Share, Give 5% Off <br> Get Now 5% Off Extra!
                                </div>
                                <div class="product-page__share-button">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/Share-prod.svg" alt="">
                                </div>
                                <div class="share_dropdown">
                                    <span class="share-close">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/x-small.svg" alt="">
                                    </span>
                                    <p><u>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</u> Mi mattis et amet nisi molestie purus
                                        feugiat aenean. Amet tempus velit a luctus faucibus elit odio quis. Porttitor aenean facilisis
                                        commodo tempus massa sit. Venenatis sed magna neque, turpis tempor netus faucibus. Netus sagittis
                                        sed suspendisse phasellus in aliquam. Vulputate maecenas amet, viverra neque sem.</p>
                                    <p>Pellentesque semper id rhoncus magna lobortis diam massa nunc. Tristique quis metus id in. Massa,
                                        lorem suspendisse amet ac, nibh at mauris fringilla sem. Ipsum lacinia placerat odio velit semper.
                                        <b>Sapien, dictumst tristique aliquam posuere.</b></p>
                                    <div class="social">
                                        <a href="#" class="social_vchat"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc1.svg"></a>
                                        <a href="#" class="social_fbm"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc2.svg"></a>
                                        <a href="#" class="social_fb"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc3.svg"></a>
                                        <a href="#" class="social_tw"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc4.svg"></a>
                                        <a href="#" class="social_pint"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc5.svg"></a>
                                        <a href="#" class="social_mail"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc6.svg"></a>
                                        <a href="#" class="social_link"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc7.svg"></a>
                                        <a href="#" class="social_inst"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-soc8.svg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_item cart_select">
                        <label class="module__check module__check-2">
                            <input type="checkbox" name="privacy_policy" checked="">
                            <span class="check"></span>
                            <span class="text"> Select all items below</span>
                        </label>

                    </div>
                    <div class="cart_item cart_product">
                        <label class="module__check module__check-2">
                            <input type="checkbox" name="privacy_policy" checked="">
                            <span class="check"></span>
                        </label>
                        <div class="cart_thumb"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/cart-product1.png"></div>
                        <div class="cart_content">
                            <div class="cart_text">
                                Seamless Women Yoga Set High Waist Yoga Pants Gym Clothing Women Sportswear Sport Shorts
                                Sports Bra T-shirt Workout Sports Set Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>
                            <div class="cart_variation">
                                <div class="cart_variation-item">
                                    Color: 1 <input class="cart_color" type="color">
                                </div>
                                <div class="cart_variation-item">
                                    Size: L
                                </div>
                            </div>
                            <div class="cart_price">
                                <div class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">US $</span>
                                    <span class="price_integer">10,245</span>.43
                                </div>
                                <div class="product-page__price-old">
                                    <div class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">US $</span>
                                        <span class="price_integer">10,245</span>.43
                                    </div>
                                    <span class="product_sale">-21%</span>
                                </div>
                            </div>
                            <div class="cart_shipping">
                                <span class="popup-shipping">Shipping: US $6.01</span>
                                via ePacket Estimated delivery on 02/08 <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg">
                            </div>
                        </div>
                        <div class="cart_action">
                            <div class="cart_action-top">
                                <a href="#" class="cart_wish-list"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/heart.svg"></a>
                                <a href="#" class="cart_delete"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/lucide_trash-2.svg"></a>
                            </div>
                            <div class="quantity">
                                <div class="input-wrapper">
                                    <button type="button" class="quantity-btn minus">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-minus.svg" alt="">
                                    </button>
                                    <input type="text" class="input" value="1">
                                    <button type="button" class="quantity-btn plus">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="cart_sure">
                            <h4>Are you sure you want to remove the item?</h4>
                            <div class="cart_sure-action">
                                <a href="#">NO</a>
                                <a href="#">Yes</a>
                            </div>

                        </div>
                    </div>
                    <div class="cart_item cart_product">
                        <label class="module__check module__check-2">
                            <input type="checkbox" name="privacy_policy" checked="">
                            <span class="check"></span>
                        </label>
                        <div class="cart_thumb"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/cart-product2.png"></div>
                        <div class="cart_content">
                            <div class="cart_text">
                                Seamless Women Yoga Set High Waist Yoga Pants Gym Clothing Women Sportswear Sport Shorts
                                Sports Bra T-shirt Workout Sports Set Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>
                            <div class="cart_variation">
                                <div class="cart_variation-item">
                                    Color: 1 <input class="cart_color" type="color" value="#C4C4C4">
                                </div>
                                <div class="cart_variation-item">
                                    Size: L
                                </div>
                            </div>
                            <div class="cart_price">
                                <div class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">US $</span>
                                    <span class="price_integer">10,245</span>.43
                                </div>
                                <div class="product-page__price-old">
                                    <div class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">US $</span>
                                        <span class="price_integer">10,245</span>.43
                                    </div>
                                    <span class="product_sale">-21%</span>
                                </div>
                            </div>
                            <div class="cart_shipping">
                                <span class="popup-shipping">Shipping: US $6.01</span>
                                via ePacket Estimated delivery on 02/08 <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg">
                            </div>
                        </div>
                        <div class="cart_action">
                            <div class="cart_action-top">
                                <a href="#" class="cart_wish-list"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/heart.svg"></a>
                                <a href="#" class="cart_delete"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/lucide_trash-2.svg"></a>
                            </div>
                            <div class="quantity">
                                <div class="input-wrapper">
                                    <button type="button" class="quantity-btn minus">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-minus.svg" alt="">
                                    </button>
                                    <input type="text" class="input" value="1">
                                    <button type="button" class="quantity-btn plus">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="cart_sure">
                            <h4>Are you sure you want to remove the item?</h4>
                            <div class="cart_sure-action">
                                <a href="#">NO</a>
                                <a href="#">Yes</a>
                            </div>

                        </div>
                    </div>
                    <div class="cart_item cart_product">
                        <label class="module__check module__check-2">
                            <input type="checkbox" name="privacy_policy" checked="">
                            <span class="check"></span>
                        </label>
                        <div class="cart_thumb"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/cart-product3.png"></div>
                        <div class="cart_content">
                            <div class="cart_text">
                                Seamless Women Yoga Set High Waist Yoga Pants Gym Clothing Women Sportswear Sport Shorts
                                Sports Bra T-shirt Workout Sports Set Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>
                            <div class="cart_variation">
                                <div class="cart_variation-item">
                                    Color: 1 <input class="cart_color" type="color" value="#C4C4C4">
                                </div>
                                <div class="cart_variation-item">
                                    Size: L
                                </div>
                            </div>
                            <div class="cart_price">
                                <div class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">US $</span>
                                    <span class="price_integer">10,245</span>.43
                                </div>
                                <div class="product-page__price-old">
                                    <div class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">US $</span>
                                        <span class="price_integer">10,245</span>.43
                                    </div>
                                    <span class="product_sale">-21%</span>
                                </div>
                            </div>
                            <div class="cart_shipping">
                                <span class="popup-shipping">Shipping: US $6.01</span>
                                via ePacket Estimated delivery on 02/08 <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg">
                            </div>
                        </div>
                        <div class="cart_action">
                            <div class="cart_action-top">
                                <a href="#" class="cart_wish-list"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/heart.svg"></a>
                                <a href="#" class="cart_delete"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/lucide_trash-2.svg"></a>
                            </div>
                            <div class="quantity">
                                <div class="input-wrapper">
                                    <button type="button" class="quantity-btn minus">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-minus.svg" alt="">
                                    </button>
                                    <input type="text" class="input" value="1">
                                    <button type="button" class="quantity-btn plus">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-plus.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="cart_sure">
                            <h4>Are you sure you want to remove the item?</h4>
                            <div class="cart_sure-action">
                                <a href="#">NO</a>
                                <a href="#">Yes</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="cart_total left-side">
                    <h2 class="cart-sidebar_title">Cart Summary</h2>
                    <div class="cart-sidebar_heading">
                        <div class="cart-sidebar_heading-text">
                            <h3>Total: US $<span>10,245</span>.43</h3>
                            <span class="cart_saving" >Savings: -US $2.50</span>
                        </div>
                        <div class="arrow"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-top.svg"></div>
                    </div>
                    <div class="cart-sidebar_content">
                        <div class="add-to-card-block">
                            <a href="/checkout" class="btn btn-gradient">To Checkout</a>
                            <ul class="card-block-list">
                                <li class="card-block-item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/Shield-Protected-Checkmark.svg" alt="">
                                    <p>90-Day Buyer Protection. Money back guarantee. </p>
                                </li>
                                <li class="card-block-item">
                                    <label class="module__check">
                                        <input type="checkbox" name="privacy_policy" checked="">
                                        <span class="check"></span>
                                        <span class="text"> <span>Full Refund</span> if you don’t receive your order</span>
                                    </label>
                                </li>
                                <li class="card-block-item">
                                    <label class="module__check">
                                        <input type="checkbox" name="privacy_policy" checked="">
                                        <span class="check"></span>
                                        <span class="text"><b>Full Refund or Exchange</b> if the item is not as described</span>
                                    </label>
                                </li>
                                <li class="card-block-item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/padlock-gold-vector-1.svg" alt="">
                                    <span>100% Guaranteed Secure Checkout</span>
                                </li>
                            </ul>
                            <div class="paymant-variabels">
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-1.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-2.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-3.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-8.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-4.svg" alt="">
                                </div>

                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-5.png" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-6.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-7.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </main>

    <?php get_template_directory() . "/inc/inc/footer-empty.php"; ?>

</div>


