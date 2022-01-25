<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>
<?php if(true){ ?>
<div class="link__account">
    <a>My account</a>
</div>
<ul class="account__current">
    <li class="current" rel="tab1">
        <a href="/my-account">Dashboard</a>
    </li>
    <li rel="tab2">
        <a href="/my-account/edit-account">Account Details</a>
    </li>
    <li rel="tab3">
        <a href="/my-account/edit-address">Addresses</a>
    </li>
    <li rel="tab4">
        <a href="/my-account/payment-methods">Payment Methods</a>
    </li>
    <li rel="tab5">
        <a href="/my-account/orders">Orders & Tracking</a>
    </li>
    <li rel="tab6">
        <a href="/my-account/wishlist">Wishlist</a>
    </li>
    <li rel="tab7">
        <div class="account_current-item">
            <div>
                <a href="/my-account/store-credit">Store Credit</a>
                <span>(US $100)</span>
            </div>
            <div>
                <a href="/my-account/reward-coupons">Reward Coupons</a>
                <span>24</span>
            </div>
            <div>
                <a href="/my-account/referral-coupons">Referal Coupons (Share & Earn)</a>
                <span>16</span>
            </div>
        </div>
    </li>
    <li class="border-bottom" rel="tab8">
        <a href="/my-account/free-items">100% Free Items (Giveaway)</a>
    </li>
    <li >
        <a href="/help-center">Help Center & Contact</a>
    </li>
    <li>
        <a href="/shipping-delivery">Shipping & Delivery</a>
    </li>
    <li>
        <a href="/returns-policy">Return Policy</a>
    </li>
    <li class="border-bottom">
        <a href="#">How To Order</a>
    </li>
    <li>
        <a href="/terms-and-conditions">Terms & Conditions</a>
    </li>
    <li>
        <a href="/privacy-policy">Privacy Policy</a>
    </li>
    <li class="border-bottom">
        <a href="/about-us">About Us</a>
    </li>
    <li class=" border-bottom" rel="tab15">
        <a href="#">Sign Out</a>
    </li>
    <li>
        <a href="#">Stay Connected</a>
        <ul class="account__linkt-socials">
            <li class="account__linkt-item">
                <a href="https://www.facebook.com/">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-facebook.svg" alt="icon">
                </a>
            </li>
            <li class="account__linkt-item">
                <a href="https://twitter.com/">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-twitter.svg" alt="icon">
                </a>
            </li>
            <li class="account__linkt-item">
                <a href="https://www.pinterest.com/">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-pinterest.svg" alt="icon">
                </a>
            </li>
            <li class="account__linkt-item">
                <a href="https://www.instagram.com/">
                    <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-instagram.svg" alt="icon">
                </a>
            </li>
        </ul>
    </li>
</ul>
<?php } ?>


<div class="link__account">
    <a><?php _e('My account', 'best-of-shop') ?></a>
</div>
<div class="account__current">
    <ul class="border-bottom">
        <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : 
            if($endpoint == 'customer-logout') continue; ?>
            <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php
    // account-left-1
    // account-left-2
    $locations = get_nav_menu_locations();
    $menu_items_1 = wp_get_nav_menu_items( $locations['account-left-1'] );
    $menu_items_2 = wp_get_nav_menu_items( $locations['account-left-2'] );
    ?>
    <?php if($menu_items_1) { ?>
        <ul class="border-bottom">
        <?php foreach ($menu_items_1 as $its){ ?>
            <li><a href="<?php echo $its->url ?>"><?php echo $its->title  ?></a></li>
        <?php } ?>
        </ul>
    <?php } ?>

    <?php if($menu_items_2) { ?>
        <ul class="border-bottom">
            <?php foreach ($menu_items_2 as $its){ ?>
                <li><a href="<?php echo $its->url ?>"><?php echo $its->title  ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <ul class="border-bottom">
        <li>
            <a href="<?php echo esc_url(wc_get_account_endpoint_url('customer-logout')); ?>"><?php echo _e( 'Sign Out', 'best-of-shop' ); ?></a>
        </li>
    </ul>

    <ul class="border-bottom">
        <li>
            <a href="#"><?php echo _e( 'Stay Connected', 'best-of-shop' ); ?></a>
            <ul class="account__linkt-socials">
                <li class="account__linkt-item">
                    <a href="#">
                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-facebook.svg" alt="icon">
                    </a>
                </li>
                <li class="account__linkt-item">
                    <a href="#">
                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-twitter.svg" alt="icon">
                    </a>
                </li>
                <li class="account__linkt-item">
                    <a href="#">
                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-pinterest.svg" alt="icon">
                    </a>
                </li>
                <li class="account__linkt-item">
                    <a href="#">
                        <img src = "<?php echo get_template_directory_uri() ?>/assets/img/svg/icon-instagram.svg" alt="icon">
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>



<?php do_action( 'woocommerce_after_account_navigation' ); ?>
