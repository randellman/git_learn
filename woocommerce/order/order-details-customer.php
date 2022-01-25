<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>

<div class="page-order-info">
    <div class="page-order-info__content">
        <div class="page-order-info__content-top">
            <div class="order-number-wrpr">
                <div class="order-id">
                    <span>Order Number:</span> 8124026442400866
                </div>
                <div class="order-date">
                    <span> Date:</span> Jan. 05 2021
                </div>
            </div>
            <div class="order-remainder">
                <span>Reminder:</span>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. A nulla urna aliquam enim quis ac eget. Massa vel, eu lectus diam porttitor gravida leo sit.
                    <div class="wish-paymant__title">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Shield-Protected-Checkmark.svg" alt="">
                        <p>90-Day Buyer Protection. Money back guarantee on all orders.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-order-info__content-bottom">
            <div class="page-order-info__content-item">
                <h3 class="page-order-info__content-title">
                    Shipping Information
                </h3>
                <p>
                    <b>Silvia Tibbs</b>, +1 343 888 5543, 3354 Arbour Court Cheyenne, Wyoming, United States, 82003 john.smith@milinator.com
                </p>
            </div>
            <div class="page-order-info__content-item">
                <h3 class="page-order-info__content-title">
                    Billing Information
                </h3>
                <p>
                    <b>Silvia Tibbs</b>, +1 343 888 5543, 3354 Arbour Court Cheyenne, Wyoming, United States, 82003 john.smith@milinator.com
                </p>
            </div>
            <div class="page-order-info__content-item">
                <h3 class="page-order-info__content-title">
                    Payment Method
                </h3>
                <p>
                    <b>Credit/Debit Card</b>
                    <br>
                    8601 - Exp 10 / 2021
                </p>
            </div>
        </div>
    </div>
    <div class="page-order-info__sumary">
        <h2 class="cart-sidebar_title">Order Summary</h2>
        <div class="cart-sidebar_heading">
            <div class="cart-sidebar_heading-text">
                <h3>Total: US $<span>10,245</span>.43</h3>
                <span class="cart_saving">Savings: -US $2.50</span>
            </div>
            <div class="arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/arrow-top.svg"></div>
        </div>
    </div>
</div>

<?php if(false){ ?>
<section class="woocommerce-customer-details">

	<?php if ( $show_shipping ) : ?>

	<section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
		<div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">

	<?php endif; ?>

	<h2 class="woocommerce-column__title"><?php esc_html_e( 'Billing address', 'woocommerce' ); ?></h2>

	<address>
		<?php echo wp_kses_post( $order->get_formatted_billing_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>

		<?php if ( $order->get_billing_phone() ) : ?>
			<p class="woocommerce-customer-details--phone"><?php echo esc_html( $order->get_billing_phone() ); ?></p>
		<?php endif; ?>

		<?php if ( $order->get_billing_email() ) : ?>
			<p class="woocommerce-customer-details--email"><?php echo esc_html( $order->get_billing_email() ); ?></p>
		<?php endif; ?>
	</address>

	<?php if ( $show_shipping ) : ?>

		</div><!-- /.col-1 -->

		<div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
			<h2 class="woocommerce-column__title"><?php esc_html_e( 'Shipping address', 'woocommerce' ); ?></h2>
			<address>
				<?php echo wp_kses_post( $order->get_formatted_shipping_address( esc_html__( 'N/A', 'woocommerce' ) ) ); ?>
			</address>
		</div><!-- /.col-2 -->

	</section><!-- /.col2-set -->

	<?php endif; ?>

	<?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>

</section>
<?php } // false ?>

<a href="<?php echo wc_get_endpoint_url('tracking', $order->id); ?>">Track</a>
