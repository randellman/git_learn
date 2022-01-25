<?php


if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/


$w_list = Wishlist::getUserWishlist();

?>


<?php include get_template_directory()."/inc/inc/tabs/Profile-Order-Tracking-Wishlist.php"; ?>

<?php if(false){  ?>
<div class="tab-content active-tab" >
    <div class="my-account-content">
        <h2 class="my-account-content-title">
            <?php _e('Wishlist', 'jewellery') ?>
            <span class="border-dot rigth"></span>
        </h2>
        <div class="row">
            <?php if($w_list){  ?>

                <?php
                global $post;
                $delete_block = true;
                foreach ($w_list as $p_id){
                    $post = get_post( $p_id, OBJECT );
                    setup_postdata($post);?>
                    <div class="col-lg-4 item_block">
                        <?php  include get_template_directory() . '/woocommerce/content-product.php';  ?>
                    </div>
                <?php } $delete_block = false;  wp_reset_postdata();   ?>

            <?php } ?>

        </div>
    </div>
</div>

<?php } // false work ?>