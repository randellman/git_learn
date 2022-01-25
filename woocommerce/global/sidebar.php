<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// get_sidebar( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

$attr_taxes = wc_get_attribute_taxonomies();
?>

<div class="filter">
    <?php if($attr_taxes) { ?>
        <form id="attribbutes_filter" method="GET">
        <?php foreach($attr_taxes as $tax) { 
			$attr_args = [
				'taxonomy'      => [ 'pa_'.$tax->attribute_name ],
				'hide_empty'    => true,
			];
            $attrs = get_terms($attr_args);
        ?>
            <div class="attribbute <?= $tax->attribute_name ?>">
                <h4><?= $tax->attribute_label ?></h4>
                <?php 
                if($attrs) {
                    foreach($attrs as $attr) { 
                        /* echo '<pre>';
                        var_dump($attr);
                        echo '</pre>'; */

						$is_search = in_array($attr->slug , explode(',', urldecode($_GET['filter_'.$tax->attribute_name]) ) ) 
                ?>
                    <div class="attr_terms">
                        <input type="checkbox" id="<?= $attr->slug ?>" value="<?= $attr->slug ?>" <?php checked(true, $is_search) ?>>
                        <label for="<?= $attr->slug ?>"><?= $attr->name  ?></label>
                    </div>
                <?php }
                } ?>
				<input class="query_type" type="hidden" name="<?= $_GET['query_type_'. $tax->attribute_name] ? 'query_type_'. $tax->attribute_name : '' ?>" value="<?= $_GET['query_type_'. $tax->attribute_name] ? $_GET['query_type_'. $tax->attribute_name] : '' ?>" data-query_type_<?= $tax->attribute_name ?>="or">
				<input class="attr_name" type="hidden" name="<?= $_GET['filter_'.$tax->attribute_name] ? 'filter_'.$tax->attribute_name : '' ?>" value="<?= $_GET['filter_'.$tax->attribute_name] ? $_GET['filter_'.$tax->attribute_name] : '' ?>" data-attr_name="filter_<?= $tax->attribute_name ?>">
            </div>
        <?php } ?>
        <input type="submit" value="Submit">
        </form>
    <?php } ?>
</div>
