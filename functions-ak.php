<?php
//add_action('woocommerce_before_single_product_summary', 'custom_hooks');
//function custom_hooks(){
//    if (isset($_GET['info'])){
//        global $product;
//
//        $cat = Category::getInstance();
//
////        var_dump(wc_get_order( 57 ));
//        $cat->get_categories();
////        $order = wc_get_order( 36 );
////        $items = $order->get_items();
////        foreach ( $items as $item ) {
////            $product = $item->get_product();
////            // Now you have access to (see above)...
////            echo 'product';
////            var_dump($product->get_category_ids());
////        }
////        var_dump($product->get_category_ids());
////        $query_args['meta_key'] = 'total_sales'; // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
////        $query_args['order']    = 'DESC';
////        $query_args['orderby']  = 'meta_value_num';
////        $cat->add_cats_new_order(36);
//
//    }
//}
//
//function ak_log($data, $rewrite=false){
//    $uid = get_current_user_id();
//    if ($rewrite){
//        carbon_set_user_meta($uid, 'user_log', json_encode([time() => $data]));
//    }else{
//        $log_data = json_decode(carbon_get_user_meta($uid, 'user_log'), true);
//        $log_data[time()] = $data;
//        carbon_set_user_meta($uid, 'user_log', json_encode($log_data));
//    }
//
//}