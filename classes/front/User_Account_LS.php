<?php

class User_Account_LS
{
    private static $instance = null;

    function __construct() {
        // add_action('admin_post_add_address', [$this ,'add_acc_custom_address'] );

        add_filter('woocommerce_billing_fields', [$this, 'add_billing_addr_fields'], 10, 1);
        add_filter('woocommerce_shipping_fields', [$this, 'add_shipping_addr_fields'], 10, 1);

        add_action('woocommerce_checkout_update_order_meta', [ $this, 'custom_checkout_field_update_order_meta']);

        add_filter('woocommerce_admin_shipping_fields', [$this , 'add_woocommerce_admin_shipping_fields']);
        add_filter( 'woocommerce_customer_meta_fields', [$this, 'filter_add_customer_meta_fields'] );

        // add_action( 'woocommerce_edit_account_form', [$this, 'add_fields_edit_account_form'] );

        add_action( 'woocommerce_save_account_details_errors', [$this, 'action_woocommerce_save_account_details_errors'], 10, 1 );
        add_action( 'woocommerce_save_account_details', [$this, 'action_woocommerce_save_account_details'], 10, 1 );

        add_filter( 'woocommerce_currency', [$this, 'filter_function_name_6805'] );
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new User_Account_LS();
        }
        return self::$instance;
    }

    public function add_billing_addr_fields($fields) 
    {
        $fields['billing_middle_name']   = array(
            'label'        => __('Middle name', 'woocommerce'),
            'required'     => false,
            'class'        => array( 'form-row-wide', 'my-custom-class' ),
            'priority'     => 15,
        );

	    return $fields;
    }

    public function add_shipping_addr_fields($fields) 
    {
        $fields['shipping_middle_name']   = array(
            'label'        => __('Middle name', 'woocommerce'),
            'required'     => false,
            'class'        => array( 'form-row-wide', 'my-custom-class' ),
            'priority'     => 15,
        );

        $fields['shipping_phone']   = array(
            'label'        => __('Phone', 'woocommerce'),
            'required'     => true,
            'class'        => array( 'form-row-wide', 'my-custom-class' ),
            'priority'     => 95,
        );

        $fields['shipping_email']   = array(
            'label'        => __('Email address', 'woocommerce'),
            'required'     => true,
            'class'        => array( 'form-row-wide', 'my-custom-class' ),
            'priority'     => 100,
        );

	    return $fields;
    }

    function custom_checkout_field_update_order_meta($order_id)
    {
        if (!empty($_POST['shipping_middle_name'])) {
            update_post_meta($order_id, '_shipping_middle_name',sanitize_text_field($_POST['shipping_middle_name']));
        }

        if (!empty($_POST['shipping_phone'])) {
            update_post_meta($order_id, '_shipping_phone',sanitize_text_field($_POST['shipping_phone']));
        }

        if (!empty($_POST['shipping_email'])) {
            update_post_meta($order_id, '_shipping_email',sanitize_text_field($_POST['shipping_email']));
        }

    }

    // Make the custom billing field Editable in Admin order pages
    public function add_woocommerce_admin_shipping_fields($shipping_fields) 
    {
        $shipping_fields['middle_name'] = array( 'label' => __('Shipping Middle name', 'woocommerce') );
        $shipping_fields['phone'] = array( 'label' => __('Shipping Phone', 'woocommerce') );
        $shipping_fields['email'] = array( 'label' => __('Shipping Email', 'woocommerce') );

        return $shipping_fields;
    }

    public function filter_add_customer_meta_fields($args) 
    {
        $args['shipping']['fields']['shipping_middle_name'] = array(
            'label'       => __( 'Shipping middle name', 'woocommerce' ),
            'description' => '',
        );

        $args['shipping']['fields']['shipping_phone'] = array(
            'label'       => __( 'Shipping phone', 'woocommerce' ),
            'description' => '',
        );

        $args['shipping']['fields']['shipping_email'] = array(
            'label'       => __( 'Shipping email', 'woocommerce' ),
            'description' => '',
        );

        return $args;
    }

    function action_woocommerce_save_account_details_errors( $args )
    {
        if ( !isset( $_POST['gender'] ) && empty( $_POST['gender'] ) ) {
            $args->add('error', __( 'Gender is a required field', 'woocommerce') );
        }
        if ( !isset( $_POST['birthday'] ) && empty( $_POST['birthday'] ) ) {
            $args->add('error', __( 'Birthday is a required field', 'woocommerce') );
        }
    }

    function action_woocommerce_save_account_details( $user_id ) 
    {  
        if( isset( $_POST['middle_name'] ) && ! empty( $_POST['middle_name'] ) ) {
            update_user_meta( $user_id, 'middle_name', sanitize_text_field( $_POST['middle_name'] ) );
        }

        if( isset( $_POST['gender'] ) && ! empty( $_POST['gender'] ) ) {
            update_user_meta( $user_id, 'gender', sanitize_text_field( $_POST['gender'] ) );
        }

        if( isset( $_POST['birthday'] ) && ! empty( $_POST['birthday'] ) ) {
            update_user_meta( $user_id, 'birthday',  $_POST['birthday'] );
        }

        if( isset( $_POST['country'] ) && ! empty( $_POST['country'] ) ) {
            update_user_meta( $user_id, 'country',  sanitize_text_field($_POST['country']) );
        }

        if( isset( $_POST['language'] ) && ! empty( $_POST['language'] ) ) {
            update_user_meta( $user_id, 'language',  sanitize_text_field($_POST['language']) );
        }

        if( isset( $_POST['currency'] ) && ! empty( $_POST['currency'] ) ) {
            update_user_meta( $user_id, 'currency',  sanitize_text_field($_POST['currency']) );
        }
    }

    function filter_function_name_6805( $option )
    {
        // filter...

        if( isset($_GET['dev']) ) {
            $all_curr = get_woocommerce_currencies();

            echo '<pre>';
            var_dump($all_curr);
            var_dump($option);
            echo '</pre>';
            exit;
        }

        return $option;
    }

/*     function add_fields_edit_account_form() {
        $user_id = get_current_user_id();

        woocommerce_form_field(
            'account_middle_name',
            array(
                'type'        => 'text',
                'required'    => false, // remember, this doesn't make the field required, just adds an "*"
                'label'       => __('Middle name', 'best-of-shop'),
                'priority'     => 1
                // 'description' => 'Maybe it is Norway or New Zealand or...?',
            ),
            get_user_meta( $user_id, 'account_middle_name', true ) // get the data
        );
    } */
}

new User_Account_LS();