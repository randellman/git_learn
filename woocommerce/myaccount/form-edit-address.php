<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

$page_title = ( 'billing' === $load_address ) ? esc_html__( 'Billing address', 'woocommerce' ) : esc_html__( 'Shipping address', 'woocommerce' );
$customer_id = get_current_user_id();
$is_add_addr = isset($_GET['action']) && $_GET['action'] == 'add'; 
$is_edit_addr = isset($_GET['action']) && $_GET['action'] == 'edit'; 
$edit_index = isset($_GET['index']) ? $_GET['index'] : '';

if($is_edit_addr) {
	$custom_addrs = get_user_meta( $customer_id, '_custom_'. $load_address .'_addresses', true ) ?: [];
	$current_addr = $custom_addrs[$edit_index];
}

/* echo '<pre>';
var_dump('is_add_addr>>', $is_add_addr);
var_dump('is_edit_addr>>', $is_edit_addr);
var_dump('current_addr>>', $current_addr);
echo '</pre>'; */

do_action( 'woocommerce_before_edit_account_address_form' ); ?>

<?php if ( ! $load_address ) : ?>
	<?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php else : ?>
<?php if(false) { ?>
	<form method="post" <?php if($is_add_addr || $is_edit_addr) echo 'id="add_edit_address"'; ?> >

		<h3><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address ); ?></h3><?php // @codingStandardsIgnoreLine ?>

		<div class="woocommerce-address-fields">
			<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

			<div class="woocommerce-address-fields__field-wrapper">
				<?php
				foreach ( $address as $key => $field ) {
					if($is_add_addr) {
						$field_to_display = '';
					} elseif( isset($current_addr) ) {
						$field_to_display = $current_addr[$key];
					}

					$val = $field_to_display ?? $field['value'];

					woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $val ) );
				}
				?>
			</div>

			<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

			<p>
				<button type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save address', 'woocommerce' ); ?>"><?php esc_html_e( 'Save address', 'woocommerce' ); ?></button>
				<?php if($is_add_addr) { 

					wp_nonce_field( 'woocommerce-add_address', 'woocommerce-add-address-nonce' ); ?>
					<input type="hidden" name="action" value="add_address" />

				<?php } elseif($is_edit_addr) { 

					wp_nonce_field( 'woocommerce-edit-custom_address', 'woocommerce-edit-custom-address-nonce' ); ?>
					<input type="hidden" name="action" value="edit_custom_address" />
					<input type="hidden" name="index" value="<?= $edit_index ?>" />

				<?php } else { 
					// default woocommerce fields on add/edit addr
					wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>
					<input type="hidden" name="action" value="edit_address" />

				<?php } ?>

				<?php if('billing' === $load_address) { ?>
					<input type="hidden" name="address_type" value="billing">
				<?php } else { ?>
					<input type="hidden" name="address_type" value="shipping">
				<?php } ?>


			</p>
		</div>
	</form>

<?php } ?>

<?php //exit('TEsts>>.2222'); ?>
<div class="adress-add-new d-block">
    <div class="link__account">
        <a>Addresses</a>
    </div>
    <div class = "right-side">
        <form action method = "POST">
        <div class="acc-detalis">
            <div class="three-input">
                <div class="acc-input">
                    <h4>First Name<span>*</span></h4>
                    <input type="text" placeholder="StoreApps">
                </div>
                <div class="acc-input">
                    <h4>Middle Name</h4>
                    <input type="text">
                </div>
                <div class="acc-input">
                    <h4>Last Name<span>*</span></h4>
                    <input type="text" placeholder="Demo">
                </div>
            </div>
            <div class="one-input">
                <h4>Company name (optional)</h4>
                <input type="text" placeholder="StoreApps">
            </div>
            <div class="one-input">
                <h4>Country / Region<span>*</span></h4>
                <select class = "select">
                    <option>United Kingdom (UK)</option>
                    <option>United Kingdom (UK)</option>
                    <option>United Kingdom (UK)</option>
                </select>
            </div>
            <div class="one-input">
                <h4>Street address<span>*</span></h4>
                <input type="text" class = "one-input-style" placeholder="32-40, Easter Drylaw Place,">
                <input type="text" class = "one-input-style" placeholder="Apartment, suite, unit, etc. (optional)">
            </div>
            <div class="one-input">
                <h4>Town / City<span>*</span></h4>
                <input type="text" placeholder="Edinburgh">
            </div>
            <div class="one-input">
                <h4>Country (optional)</h4>
                <select class = "select">
                    <option>Select an option...</option>
                    <option>United Kingdom (UK)</option>
                    <option>United Kingdom (UK)</option>
                </select>
            </div>
            <div class="one-input">
                <h4>Postcode<span>*</span></h4>
                <input type="text" placeholder="EH4 2QF">
            </div>
            <div class="one-input">
                <h4>Phone<span>*</span></h4>
                <input type="text" placeholder="561-880-5153">
            </div>
            <div class="one-input">
                <h4>Email Address<span>*</span></h4>
                <input type="text" placeholder="john.smith@mailinator.com">
            </div>
            <div class = "acc-btn">
                <button type = "submit" class = "btn btn-gradient">Save Address</button>
            </div>
        </div>
        </form>
    </div>
</div>


<?php endif; ?>


<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>
