<?php

class Category
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Category();
        }
        return self::$instance;
    }

    public function __construct()
    {
        self::actions();
    }

    public static function actions()
    {
        add_action('woocommerce_order_status_completed', [__CLASS__, 'add_cats_new_order']);
    }

    public function add_cats_new_order($order_id){
        try {
            $order = wc_get_order( $order_id );
            $items = $order->get_items();
            foreach ( $items as $item ) {
                $product = $item->get_product();
                // Now you have access to (see above)...
                $cats = $product->get_category_ids();
                self::add_cats_popularity($cats);
            }
        }
        catch (Exception $e){echo $e->getMessage(), "\n";}
    }

    public static function add_cats_popularity($cats){
        try {
            if (is_array($cats) && count($cats)){
                foreach ($cats as $cat){
                    $rate = carbon_get_term_meta($cat, 'get_top_cat');
                    carbon_set_term_meta($cat, 'get_top_cat', ++$rate);
                }
            }
        }
        catch (Exception $e){echo $e->getMessage(), "\n";}
    }

    public function get_categories($parent = 0){
        $res = array();
        $terms = get_terms( array(
            'hide_empty' => false,
            'taxonomy'    => 'product_cat',
            'parent'      => $parent,
            'meta_query' => [[
                'key' => 'get_top_cat',
                'type' => 'NUMERIC',
            ]],
            'orderby' => 'meta_value_num'
        ) );
        $res = $terms;

        $terms = get_terms( array(
            'hide_empty' => false,
            'taxonomy'    => 'product_cat',
            'parent'      => $parent,
            'exclude'     => array_column($terms, 'term_id')
        ) );
        $res = array_merge($res, $terms);
        var_dump($res);
        ?>
        <div class="cat">

        </div>
        <?php
    }
}

$cat_class = Category::getInstance();