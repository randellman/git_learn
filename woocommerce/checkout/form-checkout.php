<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if(false) {

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

<?php } ?>


<div class="wrapper_main">
    <main class="content">
        <div class="container container1355 ">
            <div class="cart cart-checkout">
                <div class="right-side">
                    <div class="cart_item cart_heading">
                        Order Overview
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
                    </div>
                    <div class="cart_item cart_item-shipping">
                        <div class="shipping-item">
                            <h2>Shipping Information</h2>
                            <div class="shipping-text">
                                <p><span>Silvia Tibbs,</span> +1 3203251454,</p>
                                <p>3352 Arbon Court</p>
                                <p>Cheyenna, Wyoming, United States, 02003</p>
                                <p>Silva.Tibbs@example.com</p>
                            </div>
                        </div>
                        <div class="shipping-item">
                            <h2>Billing Information</h2>
                            <div class="shipping-text">
                                <p><span>Silvia Tibbs,</span> +1 3203251454,</p>
                                <p>3352 Arbon Court</p>
                                <p>Cheyenna, Wyoming, United States, 02003</p>
                                <p>Silva.Tibbs@example.com</p>
                            </div>
                        </div>
                        <div class="shipping-links">
                            <a href="#">+ Add new Address</a>
                            <a href="#">Select other Addresses</a>
                        </div>
                    </div>
                    <div class="cart_item cart_item-shipping">
                        <div class="shipping-item">
                            <h2>Payment Methods</h2>
                            <div class="shipping-text">
                                <a href="#">Pay with Credit / Debit Card</a>
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
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-4.svg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="shipping-item">
                            <div class="shipping-text">
                                <a href="#">Other Payment Methods</a>
                                <div class="paymant-variabels">
                                    <div class="paymant-variabel__item">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-4.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-links">
                            <a href="#">+ Selected payment method</a>
                        </div>
                    </div>
                    <div class="cart_item cart_product">

                        <div class="cart_thumb"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/cart-product1.png"></div>
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
                                <span>Shipping: US $6.01</span>
                                via ePacket Estimated delivery on 02/08 <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg">
                            </div>
                            <a class="cart_msg" href="#">+ Leave Messages<img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg"></a>
                        </div>
                        <div class="cart_action">
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
                            <div class="cart-sidebar_heading">
                                <div class="cart-sidebar_heading-text">
                                    <h3>Total: US $<span>10,245</span>.43</h3>
                                    <span class="cart_saving">Savings: -US $2.50</span>
                                </div>
                                <div class="arrow"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-top.svg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_item cart_product">

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
                                <span>Shipping: US $6.01</span>
                                via ePacket Estimated delivery on 02/08 <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg">
                            </div>
                            <a class="cart_msg" href="#">+ Leave Messages<img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg"></a>
                        </div>
                        <div class="cart_action">
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
                            <div class="cart-sidebar_heading">
                                <div class="cart-sidebar_heading-text">
                                    <h3>Total: US $<span>10,245</span>.43</h3>
                                    <span class="cart_saving">Savings: -US $2.50</span>
                                </div>
                                <div class="arrow"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-top.svg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cart_item cart_product">

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
                                <span>Shipping: US $6.01</span>
                                via ePacket Estimated delivery on 02/08 <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg">
                            </div>
                            <a class="cart_msg" href="#">+ Leave Messages<img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/cart-arrow-right.svg"></a>
                        </div>
                        <div class="cart_action">
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
                            <div class="cart-sidebar_heading">
                                <div class="cart-sidebar_heading-text">
                                    <h3>Total: US $<span>10,245</span>.43</h3>
                                    <span class="cart_saving">Savings: -US $2.50</span>
                                </div>
                                <div class="arrow"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-top.svg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart_total left-side">
                    <h2 class="cart-sidebar_title">Cart Summary</h2>
                    <div class="cart-sidebar_heading">
                        <div class="cart-sidebar_heading-text">
                            <h3>Total: US $<span>10,245</span>.43</h3>
                            <span class="cart_saving">Savings: -US $2.50</span>
                        </div>
                        <div class="arrow"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-top.svg"></div>
                    </div>
                    <div class="cart-sidebar_content">
                        <div class="add-to-card-block">
                            <a href="/thank-you" class="btn btn-gradient">Checkout</a>
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
                                    <img src="<?php echo get_template_directory() ?>/assets/img/svg/varabel-img-5.png" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory() ?>/assets/img/svg/varabel-img-6.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory() ?>/assets/img/svg/varabel-img-7.svg" alt="">
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


