<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

if(false) {

?>

<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

				<li class="woocommerce-order-overview__order order">
					<?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<li class="woocommerce-order-overview__date date">
					<?php esc_html_e( 'Date:', 'woocommerce' ); ?>
					<strong><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
					<li class="woocommerce-order-overview__email email">
						<?php esc_html_e( 'Email:', 'woocommerce' ); ?>
						<strong><?php echo $order->get_billing_email(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
					</li>
				<?php endif; ?>

				<li class="woocommerce-order-overview__total total">
					<?php esc_html_e( 'Total:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_formatted_order_total(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( $order->get_payment_method_title() ) : ?>
					<li class="woocommerce-order-overview__payment-method method">
						<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?>
						<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
					</li>
				<?php endif; ?>

			</ul>

		<?php endif; ?>

		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

	<?php endif; ?>

</div>
<?php } ?>

<div class="wrapper_main">
    <main class="content">
        <div class="container container1360">
            <section class="thank-you">
                <h2 class="thank-you__title"><span>Thank You For Shopping With Us!</span></h2>
                <div class="custom-row">
                    <div class="main-col-3">
                        <div class="thank-you__content">
                            <a href="#" class="header__logo logo">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/Logo.svg" alt="">
                                <span>All in one shopping worldwide</span>
                            </a>
                            <div class="product-page__share">
                                <div class="product-page__share-title">
                                    Share, Give 5% Off &amp; Get Now 5% Off Extra!
                                </div>
                                <div class="product-page__share-button">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/Share-prod.svg" alt="">
                                </div>
                            </div>
                            <div class="product-page__text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst nunc quis netus nisl dui, turpis arcu et. Leo, et nulla diam in consequat interdum non tortor, et. Libero in urna laoreet metus, risus, posuere cursus turpis egestas. Turpis sit nulla vulputate massa in. Sed porttitor risus leo id faucibus. Viverra lacus, consectetur mattis mattis ac, vel sociis. Ultricies quis gravida magnis nam tincidunt amet tempus lectus. Et in aenean elit nibh egestas. Dui venenatis fermentum volutpat nunc, nisl venenatis ullamcorper nunc. Risus non tincidunt pharetra venenatis metus molestie amet. Convallis tristique semper ac, pharetra. Habitant eu sagittis, etiam ornare ac in. At lacus libero malesuada enim morbi luctus auctor tincidunt elementum. Faucibus donec luctus vitae vitae et diam viverra. Imperdiet ultrices tortor donec quam vel sit consequat id ultrices. Duis proin ante congue faucibus viverra. Ipsum fringilla cras suspendisse sed mauris, laoreet gravida et proin. Tincidunt neque, odio adipiscing neque tellus lorem ac. Eu egestas cras pellentesque rutrum. Aliquam nam lectus tellus aliquam volutpat. Nulla adipiscing nunc ullamcorper porttitor duis pharetra. Id in at lectus orci cum. Arcu est risus risus etiam aliquet orci dolor imperdiet vitae. Sit faucibus eget varius vestibulum maecenas libero ullamcorper. Consectetur vitae sodales ullamcorper cursus. Est posuere mi lacus vestibulum blandit. Non ullamcorper pharetra pulvinar vitae posuere lorem vulputate tortor dolor. Aliquet orci neque diam diam viverra nec maecenas pellentesque tortor. Amet, eu vitae, posuere vitae elit porta. Volutpat at bibendum ac quisque faucibus egestas sagittis, mauris.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="main-col-3 pl40 pr40">
                        <div class="thank-you__content">
                            <h3 class="thank-you__content-title center">
                                Congratulations! Here Is Your Special Value Reward-Coupons.
                            </h3>
                            <div class="ticket-row">
                                <div class="ticket inner">
                                    <div class="chunk">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-min-orange.png">
                                        <div class="info">
                                            <div class="right-info">
                                                <h3>Us $1.00 <a href="#" class="white-link">Share</a></h3>
                                                <strong>Order over US $100.00</strong>
                                                <span>Expires Dec 9, 04:36 PM PT</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="ticket inner">
                                    <div class="chunk">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-min-orange.png">
                                        <div class="info">
                                            <div class="right-info">
                                                <h3>Us $1.00 <a href="#" class="white-link">Share</a></h3>
                                                <strong>Order over US $100.00</strong>
                                                <span>Expires Dec 9, 04:36 PM PT</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="ticket inner">
                                    <div class="chunk">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-min-orange.png">
                                        <div class="info">
                                            <div class="right-info">
                                                <h3>Us $1.00 <a href="#" class="white-link">Share</a></h3>
                                                <strong>Order over US $100.00</strong>
                                                <span>Expires Dec 9, 04:36 PM PT</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="ticket inner">
                                    <div class="chunk">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-min-orange.png">
                                        <div class="info">
                                            <div class="right-info">
                                                <h3>Us $1.00 <a href="#" class="white-link">Share</a></h3>
                                                <strong>Order over US $100.00</strong>
                                                <span>Expires Dec 9, 04:36 PM PT</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="ticket inner">
                                    <div class="chunk">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-min-orange.png">
                                        <div class="info">
                                            <div class="right-info">
                                                <h3>Us $1.00 <a href="#" class="white-link">Share</a></h3>
                                                <strong>Order over US $100.00</strong>
                                                <span>Expires Dec 9, 04:36 PM PT</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>  
                                <div class="ticket inner">
                                    <div class="chunk">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/ticket-min-orange.png">
                                        <div class="info">
                                            <div class="right-info">
                                                <h3>Us $1.00 <a href="#" class="white-link">Share</a></h3>
                                                <strong>Order over US $100.00</strong>
                                                <span>Expires Dec 9, 04:36 PM PT</span>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <div class="main-col-3 pl25 pr25">
                        <div class="thank-you__content">
                            <h3 class="thank-you__content-title">
                                Order BSO14263 Summary:
                            </h3>
                            <div class="order-info">
                                <div class="order-info__item">
                                    <h3 class="thank-you__content-title">
                                        Shipping Address
                                    </h3>
                                    <ul class="order-info__list">
                                        <li>
                                            Test Test
                                        </li>
                                        <li>
                                            3354 Arbour Court
                                        </li>
                                        <li>
                                            Cheyenne, Wyoming
                                        </li>
                                        <li>
                                            US, 34542
                                        </li>
                                        <li>
                                            +1 343 888 5543
                                        </li>
                                        <li>
                                            john.smith@milinator.com
                                        </li>
                                    </ul>
                                </div>
                                <div class="order-info__item">
                                    <h3 class="thank-you__content-title">
                                        Billing Address
                                    </h3>
                                    <ul class="order-info__list">
                                        <li>
                                            Test Test
                                        </li>
                                        <li>
                                            3354 Arbour Court
                                        </li>
                                        <li>
                                            Cheyenne, Wyoming
                                        </li>
                                        <li>
                                            US, 34542
                                        </li>
                                        <li>
                                            +1 343 888 5543
                                        </li>
                                        <li>
                                            john.smith@milinator.com
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="order-info-card">
                                <div class="order-info-card__img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/order-info-card-1.jpg" alt="">
                                </div>
                                <div class="order-info-card__content">
                                    <div class="order-info-card__title">
                                        Autumn Winter The New O-neck and London Dress...
                                    </div>
                                    <div class="order-info-card__info">
                                        <span>Blue, One Size</span>
                                        <span>X 2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-info-card">
                                <div class="order-info-card__img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/order-info-card-2.jpg" alt="">
                                </div>
                                <div class="order-info-card__content">
                                    <div class="order-info-card__title">
                                        Autumn Winter The New O-neck and London Dress...
                                    </div>
                                    <div class="order-info-card__info">
                                        <span>Blue, One Size</span>
                                        <span>X 2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="order-info-price">
                                <div class="order-info-price__item">
                                    <div class="order-info-price__title">Discount</div>
                                    <div class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">- US $</span>
                                        <span class="price_integer">10,245</span>.43
                                    </div>
                                </div>
                                <div class="order-info-price__item">
                                    <div class="order-info-price__title">Total</div>
                                    <div class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">US $</span>
                                        <span class="price_integer">10,245</span>.43
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="popular-products">
                <span class="popular-products-heading">Popular today, You may also like...</span>
                <div class="products-category">
                    <div class="products-category_heading">
                        <h2 class="products-category_title">Popular in Woman’s Clothing</h2>
                        <a href="#" class="products-category_more popup-show">View All</a>
                    </div>
                    <div class="products slider category-slider">
                        <?php for ( $i = 1; $i <= 14; ++ $i ): ?>
                            <div>
                                <div class="product type-product has-post-thumbnail product-type-simple small-sizes">
                                    <div class="product_thumb">
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/product<?php echo $i ?>.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" >
                                        </a>
                                        <span class="product_like"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/like.svg"></span>
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
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="product-bottom_right">
                                                    <div class="product_shipping">
                                                        <span class="free-shipping">
                                                            Free
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/delivery.svg" alt="delivery">
                                                        </span>
                                                        <a href="#" class="product_return">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/product-arrow.svg" alt="delivery">
                                                        </a>
                                                        <span class="product_sale">-21%</span>
                                                    </div>
                                                    <div class="product_orders">
                                                        <span class="product-orders_quantity">(18)</span> Orders
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        <?php endfor; ?>

                    </div>
                </div>
                <div class="products-category">
                    <div class="products-category_heading">
                        <h2 class="products-category_title">Popular in Woman’s Clothing</h2>
                        <a href="#" class="products-category_more popup-show">View All</a>
                    </div>
                    <div class="products slider category-slider">
                        <?php for ( $i = 1; $i <= 14; ++ $i ): ?>
                            <div>
                                <div class="product type-product has-post-thumbnail product-type-simple">
                                    <div class="product_thumb">
                                        <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <img width="257" height="257" src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/product<?php echo $i ?>.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" >
                                        </a>
                                        <span class="product_like"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/like.svg"></span>
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
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="product-bottom_right">
                                                    <div class="product_shipping">
                                                        <span class="free-shipping">
                                                            Free
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/delivery.svg" alt="delivery">
                                                        </span>
                                                        <a href="#" class="product_return">
                                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/product-arrow.svg" alt="delivery">
                                                        </a>
                                                        <span class="product_sale">-21%</span>
                                                    </div>
                                                    <div class="product_orders">
                                                        <span class="product-orders_quantity">(18)</span> Orders
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        <?php endfor; ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

	<?php get_template_directory() . "/inc/inc/footer.php"; ?>
</div>