<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

if(false) {
/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
	<p class="return-to-shop">
		<a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
			<?php
				/**
				 * Filter "Return To Shop" text.
				 *
				 * @since 4.6.0
				 * @param string $default_text Default text.
				 */
				echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'Return to shop', 'woocommerce' ) ) );
			?>
		</a>
	</p>
<?php endif; ?>

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
                            <a href="#" class="btn btn-gradient">To Checkout</a>
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
