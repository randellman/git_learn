<?php
/**
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

defined( 'ABSPATH' ) || exit;

$customer_id = get_current_user_id();
$custom_bill_addrs = get_user_meta( $customer_id, '_custom_billing_addresses', true ) ?: [];
$custom_shipp_addrs = get_user_meta( $customer_id, '_custom_shipping_addresses', true ) ?: [];

/* echo '<pre>';
var_dump('11111>>', $custom_bill_addrs);
var_dump('22222>>', $custom_shipp_addrs);
echo '</pre>'; */

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Billing address', 'woocommerce' ),
			'shipping' => __( 'Shipping address', 'woocommerce' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Billing address', 'woocommerce' ),
		),
		$customer_id
	);
}

$oldcol = 1;
$col    = 1;

if(false) {
?>

<p>
	<?php echo apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'woocommerce' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	<div class="u-columns woocommerce-Addresses col2-set addresses">
<?php endif; ?>
	
<?php foreach ( $get_addresses as $name => $address_title ) : ?>
	<?php
		$address = wc_get_account_formatted_address( $name );
		$col     = $col * -1;
		$oldcol  = $oldcol * -1;
	?>
	<div class="add_new_address">
		<a href="<?php echo !$address ? esc_url( wc_get_endpoint_url( 'edit-address', $name ) ) : esc_url( wc_get_endpoint_url( 'edit-address', $name )  . '?action=add' ) ?>"><?php _e('Add new address', 'best-of-shop') ?></a>
	</div>
	<div class="u-column<?php echo $col < 0 ? 1 : 2; ?> col-<?php echo $oldcol < 0 ? 1 : 2; ?> woocommerce-Address addit_addr" data-addr-targ="<?= $name ?>">
		<div class="default_addr">
			<header class="woocommerce-Address-title title">
				<h3><?php echo esc_html( $address_title ); ?></h3>
			</header>
			<address>
				<?php
					echo $address ? '<span>'. wp_kses_post( $address ) .'</span>' : esc_html_e( 'You have not set up this type of address yet.', 'woocommerce' );
				?>
			</address>

			<?php if($address) { ?>
			<ul class="addr_controls">
				<li><a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit"><?php echo esc_html__( 'Edit', 'woocommerce' ) ?></a></li>
				<li><a class="delete_addr" href="#" data-addr-type="default"><?php _e('Delete' ,'best-of-shop') ?></a></li>
				<li><?php _e('Default' ,'best-of-shop') ?></li>
			</ul>
			<?php } ?>
		</div>

		<?php if($name == 'billing') { ?>
		<div class="custom_addr">
		<?php foreach($custom_bill_addrs as $i => $addr) { ?>
			<div class="address_data" data-num="<?= $i ?>">
				<address class="addr">
					<?php foreach($addr as $item) { 
						echo $item ? '<span>'. wp_kses_post( $item ) .'</span>' : esc_html_e( 'You have not set up this type of address yet.', 'woocommerce' ); } ?>
				</address>
				<ul class="addr_controls" data-num="<?= $i ?>">
					<li><a href="<?= esc_url( wc_get_endpoint_url( 'edit-address', 'billing' ) . '?action=edit&index=' . $i ) ?>" class="edit_cust_addr"><?php _e('Edit' ,'best-of-shop') ?></a></li>
					<li><a href="#" class="delete_addr" data-addr-type="custom"><?php _e('Delete' ,'best-of-shop') ?></a></li>
					<li><a href="#" class="set_def_addr"><?php _e('Set default' ,'best-of-shop') ?></a></li>
				</ul>
			</div>
		<?php } ?>
		</div>
		<?php } else { ?>
		<div class="custom_addr">
		<?php foreach($custom_shipp_addrs as $i => $addr) { ?>
			<div class="address_data" data-num="<?= $i ?>">
				<address class="addr">
					<?php foreach($addr as $item) { echo $item ? '<span>'. wp_kses_post( $item ) .'</span>' : esc_html_e( 'You have not set up this type of address yet.', 'woocommerce' ); } ?>
				</address>
				<ul class="addr_controls">
					<li><a href="<?= esc_url( wc_get_endpoint_url( 'edit-address', 'shipping' ) . '?action=edit&index=' . $i ) ?>" class="edit_cust_addr"><?php _e('Edit' ,'best-of-shop') ?></a></li>
					<li><a href="#" class="delete_addr" data-addr-type="custom"><?php _e('Delete' ,'best-of-shop') ?></a></li>
					<li><a href="#" class="set_def_addr"><?php _e('Set default' ,'best-of-shop') ?></a></li>
				</ul>
			</div>
		<?php } ?>
		</div>
		<?php } ?>
	</div>


<?php endforeach; ?>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	</div>
	<?php
endif; ?>

<?php } ?>


<div class="adress-list">
    <div class="link__account">
        <a>Payment Methods</a>
    </div>
    <div class = "right-side">
        <div class="tabs address_tab">
            <nav class = "tab-nav ">
                <ul>
                    <li class = "active" data-href = "#tab-13">
                        <span>Shipping Address</span>
                    </li>
                    <li data-href = "#tab-14">
                        <span>Billing Address</span>
                    </li>
                </ul>                                            
            </nav>
        </div>
        <div class="tab active address-inner" id="tab-13">
            <div class="address">
                <div class="address_tabs-content">
                    <div class="tab-content tab-content-1 address-active">
                        <div class="payment-btn-wrpr">
                            <a href="#" class="btn btn-gradient add-new-adress-btn" >Add a new address</a>
                        </div>
                        <div class="card-wrapper">
                            <div class="card-info">
                                <ul>
                                    <li>
                                        John Smith
                                    </li>
                                    <li>
                                        StoreApps
                                    </li>
                                    <li>
                                        32-40, Easter Drylaw Place
                                    </li>
                                    <li>
                                        Edinburgh
                                    </li>
                                    <li>
                                        Scotland 
                                    </li>
                                    <li>
                                        EH4 2QF
                                    </li>
                                </ul>
                                <div class="card-setings">
                                    <a href="#">Edit</a>
                                    <a href="#">Delete</a>
                                    <a class="card-setings-green" href="#">Default</a>
                                </div>
                                <div class="card-checkbox">
                                    <img src="img/svg/round-checkbox.svg" alt="">
                                </div>
                            </div>
                            <div class="card-info">
                                <ul>
                                    <li>
                                        John Smith
                                    </li>
                                    <li>
                                        StoreApps
                                    </li>
                                    <li>
                                        32-40, Easter Drylaw Place
                                    </li>
                                    <li>
                                        Edinburgh
                                    </li>
                                    <li>
                                        Scotland 
                                    </li>
                                    <li>
                                        EH4 2QF
                                    </li>
                                </ul>
                                <div class="card-setings">
                                    <a href="#">Edit</a>
                                    <a href="#">Delete</a>
                                    <a href="#">Set Default</a>
                                </div>
                                
                            </div>
                            <div class="card-info">
                                <ul>
                                    <li>
                                        John Smith
                                    </li>
                                    <li>
                                        StoreApps
                                    </li>
                                    <li>
                                        32-40, Easter Drylaw Place
                                    </li>
                                    <li>
                                        Edinburgh
                                    </li>
                                    <li>
                                        Scotland 
                                    </li>
                                    <li>
                                        EH4 2QF
                                    </li>
                                </ul>
                                <div class="card-setings">
                                    <a href="#">Edit</a>
                                    <a href="#">Delete</a>
                                    <a href="#">Set Default</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content tab-content-2">
                        <div class="payment-btn-wrpr">
                            <a href="#" class="btn btn-gradient">Add a new address</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab address-inner" id="tab-14">
            <div class="address">
                <div class="address_tabs-content">
                    <div class="tab-content tab-content-1 address-active">
                        <div class="payment-btn-wrpr">
                            <a href="#" class="btn btn-gradient add-new-adress-btn">Add a new address</a>
                        </div>
                            <div class="card-wrapper">
                                <div class="card-info">
                                    <ul>
                                        <li>
                                            John Smith
                                        </li>
                                        <li>
                                            StoreApps
                                        </li>
                                        <li>
                                            32-40, Easter Drylaw Place
                                        </li>
                                        <li>
                                            Edinburgh
                                        </li>
                                        <li>
                                            Scotland 
                                        </li>
                                        <li>
                                            EH4 2QF
                                        </li>
                                    </ul>
                                    <div class="card-setings">
                                        <a href="#">Edit</a>
                                        <a href="#">Delete</a>
                                        <a class="card-setings-green" href="#">Default</a>
                                    </div>
                                    <div class="card-checkbox">
                                        <img src="img/svg/round-checkbox.svg" alt="">
                                    </div>
                                </div>
                                <div class="card-info">
                                    <ul>
                                        <li>
                                            John Smith
                                        </li>
                                        <li>
                                            StoreApps
                                        </li>
                                        <li>
                                            32-40, Easter Drylaw Place
                                        </li>
                                        <li>
                                            Edinburgh
                                        </li>
                                        <li>
                                            Scotland 
                                        </li>
                                        <li>
                                            EH4 2QF
                                        </li>
                                    </ul>
                                    <div class="card-setings">
                                        <a href="#">Edit</a>
                                        <a href="#">Delete</a>
                                        <a href="#">Set Default</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content tab-content-2">
                            <div class="payment-btn-wrpr">
                                <a href="#" class="btn btn-gradient">Add a new address</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
