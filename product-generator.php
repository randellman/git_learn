<?php

if (php_sapi_name() !== 'cli') {
    die('This script is meant to be run from the command line');
}

set_time_limit(0);
ini_set('max_execution_time',0);

function find_wordpress_base_path() {
    $dir = dirname(__FILE__);
    do {
        echo $dir;
        if( file_exists($dir."/wp-config.php") ) {
            return $dir;
        }
    }while($dir = realpath("$dir/.."));
    return null;
}


function generateRandomString($length = 7) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


define('BASE_PATH', find_wordpress_base_path()."/");
define('WP_USE_THEMES', false);
global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;
require('/opt'.BASE_PATH.'wp-load.php');
for($i = 1; $i < $argv[1]; $i++){
    try{
        $sku = generateRandomString();
        $price = 99.99;

        $post_id = wp_insert_post(array(
            'post_title' => $sku
        , 'post_content' => 'Imported Product Content'
        , 'post_status'  => 'publish'
        , 'post_type' => 'product'
        ));

        wp_set_object_terms($post_id,'simple','product_type');
        update_post_meta( $post_id, '_visibility', 'visible' );
        update_post_meta( $post_id, '_stock_status', 'instock');
        update_post_meta( $post_id, 'total_sales', '0' );
        update_post_meta( $post_id, '_downloadable', 'no' );
        update_post_meta( $post_id, '_virtual', 'no' );
        update_post_meta( $post_id, '_regular_price', $price );
        update_post_meta( $post_id, '_sale_price', '' );
        update_post_meta( $post_id, '_purchase_note', '' );
        update_post_meta( $post_id, '_featured', 'no' );
        update_post_meta( $post_id, '_weight', '' );
        update_post_meta( $post_id, '_length', '' );
        update_post_meta( $post_id, '_width', '' );
        update_post_meta( $post_id, '_height', '' );
        update_post_meta( $post_id, '_sku', $sku );

        update_post_meta( $post_id, '_sale_price_dates_from', '' );
        update_post_meta( $post_id, '_sale_price_dates_to', '' );
        update_post_meta( $post_id, '_price', (float)$price );
        update_post_meta( $post_id, '_sold_individually', 'yes' );
        update_post_meta( $post_id, '_manage_stock', 'yes' );
        update_post_meta( $post_id, '_backorders', 'no' );
        update_post_meta( $post_id, '_stock', '100' );

        echo ($sku." generatedn");
    }catch(Exception $e){echo ($e->getMessage()."n");}
}