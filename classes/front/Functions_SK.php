<?php

add_filter( 'woocommerce_single_product_carousel_options', 'sf_update_woo_flexslider_options' );
function sf_update_woo_flexslider_options( $options ) {

    $options['directionNav'] = true;

    return $options;
}

class Functions_SK
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Functions_SK();
        }
        return self::$instance;
    }


    public function __construct()
    {
        add_action ('init' , [$this , 'theme_init_custom_new_menu']);

        // disabled default woocommerce classes
        if(!is_admin()){
            add_filter( 'woocommerce_enqueue_styles', '__return_false' );
        }

    }


    public function theme_init_custom_new_menu()
    {

        register_nav_menu('account-left-1',__( 'Left Account menu 1', 'best-of-shop'));
        register_nav_menu('account-left-2',__( 'Left Account menu 2', 'best-of-shop'));

    }

    public static function get_taxonomy_hierarchy( $taxonomy, $parent = 0 , $param = []) {

        // only 1 taxonomy
        $taxonomy = is_array( $taxonomy ) ? array_shift( $taxonomy ) : $taxonomy;

        // get all direct decendents of the $parent

        $args = array('parent' => $parent);

        if(isset($param['args']) && is_array($param['args'])){
            $args = $args + $param['args'];
        }
        $terms = get_terms( $taxonomy, $args );

        // prepare a new array.  these are the children of $parent
        // we'll ultimately copy all the $terms into this new array, but only after they
        // find their own children
        $children = array();

        // go through all the direct decendents of $parent, and gather their children
        foreach( $terms as $term ) {
            // recurse to get the direct decendents of "this" term
            $term->children = self::get_taxonomy_hierarchy( $taxonomy, $term->term_id , $param );

            // add the term to our new array
            $children[ $term->term_id ] = $term;
        }

        // send the results back to the caller
        return $children;
    }

}
new Functions_SK();