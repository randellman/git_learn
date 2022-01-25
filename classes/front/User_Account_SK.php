<?php

class User_Account_SK
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Wishlist();
        }
        return self::$instance;
    }


    public function __construct()
    {
        add_action ('init' , [$this , 'theme_init']); // // add my account endpoint
        add_action( 'woocommerce_account_wishlist_endpoint', [$this, 'theme_wishlist_endpoint_content'] ); // need re-save permalink in admin

        add_action( 'woocommerce_account_free-items_endpoint', [$this, 'theme_free_items_endpoint_content'] ); // need re-save permalink in admin

        add_action( 'woocommerce_account_store-credit_endpoint', [$this, 'theme_store_credit_endpoint_content'] ); // need re-save permalink in admin
        add_action( 'woocommerce_account_reward-coupons_endpoint', [$this, 'theme_store_credit_endpoint_content'] ); // need re-save permalink in admin
        add_action( 'woocommerce_account_referral-coupons_endpoint', [$this, 'theme_store_credit_endpoint_content'] ); // need re-save permalink in admin

        add_filter ( 'woocommerce_account_menu_items', [$this , 'bos_remove_my_account_links'] );
        add_filter( 'query_vars', [$this, 'theme_custom_query_vars'] , 0 ); // add my account endpoint


        add_filter('post_class', [$this, 'theme_custom_post_class'] );



    }
    public function theme_init()
    {

        add_rewrite_endpoint('wishlist', EP_ROOT | EP_PAGES ); // EP_ROOT |
        add_rewrite_endpoint('store-credit', EP_ROOT | EP_PAGES ); // EP_ROOT |
        add_rewrite_endpoint('reward-coupons', EP_ROOT | EP_PAGES ); // EP_ROOT |
        add_rewrite_endpoint('referral-coupons', EP_ROOT | EP_PAGES ); // EP_ROOT |
        add_rewrite_endpoint('referral-coupons', EP_ROOT | EP_PAGES ); // EP_ROOT |
        add_rewrite_endpoint('free-items', EP_ROOT | EP_PAGES ); // EP_ROOT |

    }
    public function theme_custom_query_vars( $vars )
    {

        $vars[] = 'wishlist';
        $vars[] = 'store-credit';
        $vars[] = 'reward-coupons';
        $vars[] = 'referral-coupons';
        $vars[] = 'free-items';

        return $vars;
    }
    // account menu
    public function bos_remove_my_account_links($menu_links)
    {
        $return_menu = ['dashboard'=>'', 'edit-account'=>'' , 'edit-address'=>'', 'payment-methods'=>'', 'orders'=>'' , 'wishlist'=>''
            , 'store-credit'=>'' , 'reward-coupons'=>'', 'referral-coupons'=> '', 'free-items'=>'' ];



        $menu_links_copy = $menu_links;
        unset( $menu_links_copy['downloads'] ); // Disable Downloads

        foreach ( $return_menu as $k=>$item ){
           if(isset($menu_links[$k])){
               $return_menu[$k] = $menu_links[$k];
               unset($menu_links_copy[$k]);
           }
        }

        $return_menu['wishlist'] = __('Wishlist', 'best-of-shop')  ;
        $return_menu['store-credit'] = __('Store Credit', 'best-of-shop')  ;
        $return_menu['reward-coupons'] = __('Reward Coupons', 'best-of-shop')  ;
        $return_menu['referral-coupons'] = __('Referral Coupons (Share & Earn)', 'best-of-shop')  ;

        $return_menu['free-items'] = __('100% Free Items (Giveaway)', 'best-of-shop')  ;

        $return_menu = $return_menu + $menu_links_copy;



        return $return_menu;

    }

    // account wishlist
    public function theme_wishlist_endpoint_content(){
        include get_template_directory().'/woocommerce/myaccount/wishlist.php';
    }
    // account free items
    public function theme_free_items_endpoint_content(){
        include get_template_directory().'/woocommerce/myaccount/free-items.php';
    }
    // account coupons
    public function theme_store_credit_endpoint_content(){
        include get_template_directory().'/woocommerce/myaccount/store-credit.php';
    }

    public function theme_custom_post_class($classes)
    {
        if(function_exists('is_wc_endpoint_url'))
        {
            if(is_wc_endpoint_url('orders')){
                $classes[] = 'order_tracking_page';
            }

        }

        return $classes;
    }

}
new User_Account_SK();