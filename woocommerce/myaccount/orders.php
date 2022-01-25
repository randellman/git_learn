<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
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
?>

    <div class="link__account">
        Order List
    </div>
    <div class="right-side">
        <div class="order-list">
            <div class="order-list__nav">
                <div class="wish-paymant__title gray">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Shield-Protected-Checkmark-grey.svg" alt="">
                    <p>90-Day Buyer Protection. Money back guarantee on all orders.</p>
                </div>
                <div class="table_pagination_block">
                    <select name="" id="" class="select">
                        <option value="">3/Page</option>
                        <option value="">5/Page</option>
                        <option value="">10/Page</option>
                        <option value="">20/Page</option>
                    </select>
                    <a href="#" class="pagination_arrow_btn left disable">
                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/pagination_arrow_right.svg" alt="">
                    </a>
                    <a href="#" class="pagination_arrow_btn right">
                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/pagination_arrow_right.svg" alt="">
                    </a>
                    <span>1/130</span>
                </div>
            </div>
            <table class="order-table">
                <thead>
                <tr>
                    <th>
                        Order Number/Products
                    </th>
                    <th>
                        Order Total
                    </th>
                    <th>
                        Order Status
                    </th>
                    <th>
                        Order Action
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="order-number-wrpr">
                            <div class="order-id">
                                <span>Order ID:</span> 8124026442400866
                            </div>
                            <div class="order-date">
                                <span>Date:</span> Jan. 05 2021
                            </div>
                        </div>
                    </th>
                    <th colspan="3">
                        <div class="order-price">
                            <div class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">US $</span>
                                <span class="price_integer">10,245</span><span>.43</span>
                            </div>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="order-page-product">
                            <div class="order-page-product__img">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/pictures/product1.jpg" alt="">
                                <div class="product-page__share">
                                    <div class="product-page__share-title">
                                        SHARE, GIVE 5% Off & GET NOW 5% Off Extra!
                                    </div>
                                    <div class="product-page__share-button">
                                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Share-prod.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="order-page-product__content">
                                <div class="order-page-product__title">
                                    Seamless Women Yoga Set High Waist Yoga Pants Gym Clothing Women Sportswear Sport Shorts Sports Bra T-shirt Workout Sports Set Lorem
                                </div>
                                <div class="order-page-product__prop">
                                    Product properties: Black and White
                                </div>
                                <div class="order-page-product__price">
                                    <div class="order-page-product__price-item">
                                        <span>Item price:</span> <div class="price_text_block"><div>US $</div>10,245<div>.43</div></div>
                                    </div>
                                    <div class="order-page-product__price-item">
                                        <span>Qty:</span>x1
                                    </div>
                                </div>
                                <div class="order-page-product__images">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Shield-Protected-Checkmark-grey.svg" alt="">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow_left_in_frame.svg" alt="">
                                </div>
                                <div class="order-page-product__notes">
                                    Notes:<br>Hi!<br>Please send products as soon as possible
                                </div>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="order-page-status">
                            <h3 class="order-page-status__title">
                                Shipped
                            </h3>
                            <p>
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/time-clock.svg" alt="">
                                Your order will be closed in: 81 days 2 hours 49 minutes
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="order-actions">
                            <a href="#" class="btn order-actions-btn">
                                Tracking
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Details
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Reorder
                            </a>
                            <a href="#" class="btn order-actions-btn blue">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/clarity_envelope-solid.svg" alt="">
                                Contact
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="order-page-product">
                            <div class="order-page-product__img">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/pictures/product1.jpg" alt="">
                                <div class="product-page__share">
                                    <div class="product-page__share-title">
                                        SHARE, GIVE 5% Off & GET NOW 5% Off Extra!
                                    </div>
                                    <div class="product-page__share-button">
                                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Share-prod.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="order-page-product__content">
                                <div class="order-page-product__title">
                                    Seamless Women Yoga Set High Waist Yoga Pants Gym Clothing Women Sportswear Sport Shorts Sports Bra T-shirt Workout Sports Set Lorem
                                </div>
                                <div class="order-page-product__prop">
                                    Product properties: Black and White
                                </div>
                                <div class="order-page-product__price">
                                    <div class="order-page-product__price-item">
                                        <span>Item price:</span> <div class="price_text_block"><div>US $</div>10,245<div>.43</div></div>
                                    </div>
                                    <div class="order-page-product__price-item">
                                        <span>Qty:</span>x1
                                    </div>
                                </div>
                                <div class="order-page-product__images">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Shield-Protected-Checkmark-grey.svg" alt="">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow_left_in_frame.svg" alt="">
                                </div>
                                <div class="order-page-product__notes">
                                    Notes:<br>Hi!<br>Please send products as soon as possible
                                </div>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="order-page-status">
                            <h3 class="order-page-status__title">
                                Shipped
                            </h3>
                            <p>
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/time-clock.svg" alt="">
                                Your order will be closed in: 81 days 2 hours 49 minutes
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="order-actions">
                            <a href="#" class="btn order-actions-btn">
                                Tracking
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Details
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Reorder
                            </a>
                            <a href="#" class="btn order-actions-btn blue">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/clarity_envelope-solid.svg" alt="">
                                Contact
                            </a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <table class="order-table">
                <thead>
                <tr>
                    <th>
                        Order Number/Products
                    </th>
                    <th>
                        Order Total
                    </th>
                    <th>
                        Order Status
                    </th>
                    <th>
                        Order Action
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="order-number-wrpr">
                            <div class="order-id">
                                <span>Order ID:</span> 8124026442400866
                            </div>
                            <div class="order-date">
                                Date: Jan. 05 2021
                            </div>
                        </div>
                    </th>
                    <th colspan="3">
                        <div class="order-price">
                            <div class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">US $</span>
                                <span class="price_integer">10,245</span>43
                            </div>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="order-page-product">
                            <div class="order-page-product__img">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/pictures/product1.jpg" alt="">
                                <div class="product-page__share">
                                    <div class="product-page__share-title">
                                        SHARE, GIVE 5% Off & GET NOW 5% Off Extra!
                                    </div>
                                    <div class="product-page__share-button">
                                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Share-prod.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="order-page-product__content">
                                <div class="order-page-product__title">
                                    Seamless Women Yoga Set High Waist Yoga Pants Gym Clothing Women Sportswear Sport Shorts Sports Bra T-shirt Workout Sports Set Lorem
                                </div>
                                <div class="order-page-product__prop">
                                    Product properties: Black and White
                                </div>
                                <div class="order-page-product__price">
                                    <div class="order-page-product__price-item">
                                        <span>Item price:</span> <div class="price_text_block"><div>US $</div>10,245<div>.43</div></div>
                                    </div>
                                    <div class="order-page-product__price-item">
                                        <span>Qty:</span>x1
                                    </div>
                                </div>
                                <div class="order-page-product__images">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Shield-Protected-Checkmark-grey.svg" alt="">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow_left_in_frame.svg" alt="">
                                </div>
                                <div class="order-page-product__notes">
                                    Notes:<br>Hi!<br>Please send products as soon as possible
                                </div>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="order-page-status">
                            <h3 class="order-page-status__title">
                                Shipped
                            </h3>
                            <p>
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/time-clock.svg" alt="">
                                Your order will be closed in: 81 days 2 hours 49 minutes
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="order-actions">
                            <a href="#" class="btn order-actions-btn">
                                Tracking
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Details
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Reorder
                            </a>
                            <a href="#" class="btn order-actions-btn blue">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/clarity_envelope-solid.svg" alt="">
                                Contact
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="order-page-product">
                            <div class="order-page-product__img">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/pictures/product1.jpg" alt="">
                                <div class="product-page__share">
                                    <div class="product-page__share-title">
                                        SHARE, GIVE 5% Off & GET NOW 5% Off Extra!
                                    </div>
                                    <div class="product-page__share-button">
                                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Share-prod.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="order-page-product__content">
                                <div class="order-page-product__title">
                                    Seamless Women Yoga Set High Waist Yoga Pants Gym Clothing Women Sportswear Sport Shorts Sports Bra T-shirt Workout Sports Set Lorem
                                </div>
                                <div class="order-page-product__prop">
                                    Product properties: Black and White
                                </div>
                                <div class="order-page-product__price">
                                    <div class="order-page-product__price-item">
                                        <span>Item price:</span> <div class="price_text_block"><div>US $</div>10,245<div>.43</div></div>
                                    </div>
                                    <div class="order-page-product__price-item">
                                        <span>Qty:</span>x1
                                    </div>
                                </div>
                                <div class="order-page-product__images">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/Shield-Protected-Checkmark-grey.svg" alt="">
                                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow_left_in_frame.svg" alt="">
                                </div>
                                <div class="order-page-product__notes">
                                    Notes:<br>Hi!<br>Please send products as soon as possible
                                </div>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td>
                        <div class="order-page-status">
                            <h3 class="order-page-status__title">
                                Shipped
                            </h3>
                            <p>
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/time-clock.svg" alt="">
                                Your order will be closed in: 81 days 2 hours 49 minutes
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="order-actions">
                            <a href="#" class="btn order-actions-btn">
                                Tracking
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Details
                            </a>
                            <a href="#" class="btn order-actions-btn">
                                Reorder
                            </a>
                            <a href="#" class="btn order-actions-btn blue">
                                <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/clarity_envelope-solid.svg" alt="">
                                Contact
                            </a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>



<?php if(false){ ?>
<?php
do_action( 'woocommerce_before_account_orders', $has_orders ); ?>

<?php if ( $has_orders ) : ?>

	<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
		<thead>
			<tr>
				<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
					<th class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ( $customer_orders->orders as $customer_order ) {
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				$item_count = $order->get_item_count() - $order->get_item_count_refunded();
				?>
				<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
					<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
						<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( 'order-number' === $column_id ) : ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>">
									<?php echo esc_html( _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number() ); ?>
								</a>

							<?php elseif ( 'order-date' === $column_id ) : ?>
								<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php
								/* translators: 1: formatted order total 2: total order items */
								echo wp_kses_post( sprintf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) );
								?>

							<?php elseif ( 'order-actions' === $column_id ) : ?>
								<?php
								$actions = wc_get_account_orders_actions( $order );

								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
										echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
									}
								}
								?>
							<?php endif; ?>
						</td>
					<?php endforeach; ?>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'woocommerce' ); ?></a>
			<?php endif; ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

<?php else : ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php esc_html_e( 'Browse products', 'woocommerce' ); ?></a>
		<?php esc_html_e( 'No order has been made yet.', 'woocommerce' ); ?>
	</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>

<?php } // false ?>