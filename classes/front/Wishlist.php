<?php

class Wishlist
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

        add_action('wp_ajax_nopriv_ajax_add_to_wishlist' , [__CLASS__, 'ajax_add_to_wishlist']);
        add_action('wp_ajax_ajax_add_to_wishlist' , [__CLASS__, 'ajax_add_to_wishlist']);


    }

    public static function ajax_add_to_wishlist(){
        $data = $_POST;


        if(!is_user_logged_in()){

        }
        $product_id = (int)$data['product_id'];
        $user_id = get_current_user_id();
        $r = self::addToWishlist($product_id , $user_id );
        $r['img'] = '';
        $r['success'] = true;
        if(isset($r['delete']) && $r['delete']){
            $r['img'] = get_template_directory_uri().'/assets/img/wish-list.svg';
        }elseif($r['add']){
            $r['img'] = get_template_directory_uri().'/assets/img/Heart-checked.svg';
        }

        wp_send_json($r);
    }

    public static function addToWishlist($p_id ='' , $uid =''){
        if(!$uid){
            $uid = get_current_user_id();
        }
        if(!$uid){
            return false;
        }
        $wishlist = get_user_meta($uid, '_wish_list' , true);
        $delete = $add = false;
        if(is_array($wishlist)){
            if(($key = array_search($p_id, $wishlist)) !== false){
                unset($wishlist[$key]);
                $delete = true;
            }else{
                $wishlist[] = $p_id;
                $add = true;
            }
        }else{
            $wishlist = [];
            $wishlist[] = $p_id;
            $add = true;
        }

        update_user_meta($uid, '_wish_list', $wishlist);

        return ['add'=> $add , 'delete'=> $delete ];

    }

    public static function checkProductWishlist($p_id ='' , $uid= ''){
        if(!$uid){
            $uid = get_current_user_id();
        }
        if(!$uid){ return false ; }

        $wishlist = get_user_meta($uid, '_wish_list' , true);
        if(!$wishlist || !is_array($wishlist)){
            $wishlist = [];
        }

        if(($key = array_search($p_id, $wishlist)) !== false ){
            $r = get_template_directory_uri().'/assets/img/Heart-checked.svg';
        }else{
            $r = get_template_directory_uri().'/assets/img/wish-list.svg';
        }
        return $r ;
    }

    public static function getUserWishlist($uid =''){
        if(!$uid){ $uid = get_current_user_id(); }
        if(!$uid){ return false ; }
        $wishlist = get_user_meta($uid, '_wish_list' , true);
        if(!$wishlist || !is_array($wishlist)){
            $wishlist = [];
        }
        return $wishlist;
    }


}

$wl = Wishlist::getInstance();
