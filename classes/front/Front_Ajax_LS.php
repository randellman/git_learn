<?php

class Front_Ajax_LS
{
    public function __construct()
    {
        $this->actions();
    }

    public function actions()
    {
        $actions = [
            'add_address',
            'edit_custom_address',
            'set_default_address',
            'delete_address',
            'change_currency'
        ];
        foreach ($actions as $action) {
            add_action('wp_ajax_' . $action, [$this, $action]);
            // add_action('wp_ajax_nopriv_' . $action, [__CLASS__, $action]);
        }

        /* add_action('wp_ajax_add_address', [$this ,'add_address'] );
        add_action('wp_ajax_edit_custom_address', [$this ,'edit_custom_address'] );
        add_action('wp_ajax_set_default_address', [$this ,'set_default_address'] );
        add_action('wp_ajax_delete_address', [$this ,'delete_address'] ); */
    }

    public function add_address() 
    {
        $data = $_POST;

        try {
            if(wp_verify_nonce( $data['woocommerce-add-address-nonce'], 'woocommerce-add_address') ) {
                $user_id = get_current_user_id();
                $add_addr = [];
                $united_arr = [];
                $is_valid = true;
                $addr_type = $data['address_type'];
    
                // ini_set('display_errors', true);
    
                if( isset($data['address_type']) ) {
                    
                    if(isset($data[$addr_type.'_first_name']) && $data[$addr_type.'_first_name']) {
                        $add_addr[$addr_type.'_first_name'] = $data[$addr_type.'_first_name'];
                    } else {
                        $is_valid = false;
                        $message = __('First name is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    if(isset($data[$addr_type.'_middle_name']) && $data[$addr_type.'_middle_name']) {
                        $add_addr[$addr_type.'_middle_name'] = $data[$addr_type.'_middle_name'];
                    }
    
                    if(isset($data[$addr_type.'_last_name']) && $data[$addr_type.'_last_name']) {
                        $add_addr[$addr_type.'_last_name'] = $data[$addr_type.'_last_name'];
                    } else {
                        $is_valid = false;
                        $message = __('Last name is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    if(isset($data[$addr_type.'_company']) && $data[$addr_type.'_company']) {
                        $add_addr[$addr_type.'_company'] = $data[$addr_type.'_company'];
                    }
    
                    if(isset($data[$addr_type.'_country']) && $data[$addr_type.'_country']) {
                        $add_addr[$addr_type.'_country'] = $data[$addr_type.'_country'];
                    } else {
                        $is_valid = false;
                        $message = __('Country is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    if(isset($data[$addr_type.'_address_1']) && $data[$addr_type.'_address_1']) {
                        $add_addr[$addr_type.'_address_1'] = $data[$addr_type.'_address_1'];
                    } else {
                        $is_valid = false;
                        $message = __('Street address is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    if(isset($data[$addr_type.'_address_2']) && $data[$addr_type.'_address_2']) {
                        $add_addr[$addr_type.'_address_2'] = $data[$addr_type.'_address_2'];
                    }
    
                    if(isset($data[$addr_type.'_city']) && $data[$addr_type.'_city']) {
                        $add_addr[$addr_type.'_city'] = $data[$addr_type.'_city'];
                    } else {
                        $is_valid = false;
                        $message = __('Town / City is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    if(isset($data[$addr_type.'_state']) && $data[$addr_type.'_state']) {
                        $add_addr[$addr_type.'_state'] = $data[$addr_type.'_state'];
                    }
    
                    if(isset($data[$addr_type.'_postcode']) && $data[$addr_type.'_postcode']) {
                        $add_addr[$addr_type.'_postcode'] = $data[$addr_type.'_postcode'];
                    } else {
                        $is_valid = false;
                        $message = __('Postcode is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    if(isset($data[$addr_type.'_phone']) && $data[$addr_type.'_phone']) {
                        $add_addr[$addr_type.'_phone'] = $data[$addr_type.'_phone'];
                    } else {
                        $is_valid = false;
                        $message = __('Phone is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    if(isset($data[$addr_type.'_email']) && $data[$addr_type.'_email']) {
                        $add_addr[$addr_type.'_email'] = $data[$addr_type.'_email'];
                    } else {
                        $is_valid = false;
                        $message = __('Email is a required field', 'woocommerce');
                        wc_add_notice( $message, 'error');
                    }
    
                    $exist_addr = get_user_meta($user_id, '_custom_'. $addr_type .'_addresses', true) ?: [];
    
                    array_push($exist_addr, $add_addr);
    
                    $is_update = update_user_meta($user_id, '_custom_'. $addr_type .'_addresses', $exist_addr);
    
                    /* echo '<pre>';
                    var_dump('$exist_addr>>>>>', $exist_addr);
                    var_dump('$is_update>>>>>', $is_update);
                    echo '</pre>';
                    exit; */
    
                    if($is_update && $is_valid) {
                        $message = __('The address was added successfully', 'woocommerce');
                        wc_add_notice( $message, 'success');

                        wp_send_json_success([
                            'response' => __('The address was added successfully', 'best-of-shop'),
                            'redirect' => wc_get_account_endpoint_url('edit-address')
                        ]);
                    } else {
                        wp_send_json_error([
                            'response' => __('Something went wrong. Page will be reload to show errors', 'best-of-shop'),
                        ]);
                    }
    
                    /* $location = preg_replace('{/$}', '', wc_get_account_endpoint_url('edit-address/billing/?action=add'));
                    wp_safe_redirect( $location ); */
                    exit;
                } 
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    function edit_custom_address() 
    {
        $data = $_POST;
        $addr_type = $data['address_type'];
        $user_id = get_current_user_id();
        $index = (int) $data['index'];
        $updated_addr = [];
        $is_valid = true;

        try {
            if( wp_verify_nonce($data['woocommerce-edit-custom-address-nonce'], 'woocommerce-edit-custom_address') ) {
                $custom_addrs = get_user_meta( $user_id, '_custom_'. $addr_type .'_addresses', true );
                $addr_to_edit = $custom_addrs[$index];

                if(isset($data[$addr_type.'_first_name']) && $data[$addr_type.'_first_name']) {
                    $updated_addr[$addr_type.'_first_name'] = $data[$addr_type.'_first_name'];
                } else {
                    $is_valid = false;
                    $message = __('First name is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                if(isset($data[$addr_type.'_middle_name']) && $data[$addr_type.'_middle_name']) {
                    $updated_addr[$addr_type.'_middle_name'] = $data[$addr_type.'_middle_name'];
                }

                if(isset($data[$addr_type.'_last_name']) && $data[$addr_type.'_last_name']) {
                    $updated_addr[$addr_type.'_last_name'] = $data[$addr_type.'_last_name'];
                } else {
                    $is_valid = false;
                    $message = __('Last name is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                if(isset($data[$addr_type.'_company']) && $data[$addr_type.'_company']) {
                    $updated_addr[$addr_type.'_company'] = $data[$addr_type.'_company'];
                }

                if(isset($data[$addr_type.'_country']) && $data[$addr_type.'_country']) {
                    $updated_addr[$addr_type.'_country'] = $data[$addr_type.'_country'];
                } else {
                    $is_valid = false;
                    $message = __('Country is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                if(isset($data[$addr_type.'_address_1']) && $data[$addr_type.'_address_1']) {
                    $updated_addr[$addr_type.'_address_1'] = $data[$addr_type.'_address_1'];
                } else {
                    $is_valid = false;
                    $message = __('Street address is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                if(isset($data[$addr_type.'_address_2']) && $data[$addr_type.'_address_2']) {
                    $updated_addr[$addr_type.'_address_2'] = $data[$addr_type.'_address_2'];
                }

                if(isset($data[$addr_type.'_city']) && $data[$addr_type.'_city']) {
                    $updated_addr[$addr_type.'_city'] = $data[$addr_type.'_city'];
                } else {
                    $is_valid = false;
                    $message = __('Town / City is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                if(isset($data[$addr_type.'_state']) && $data[$addr_type.'_state']) {
                    $updated_addr[$addr_type.'_state'] = $data[$addr_type.'_state'];
                }

                if(isset($data[$addr_type.'_postcode']) && $data[$addr_type.'_postcode']) {
                    $updated_addr[$addr_type.'_postcode'] = $data[$addr_type.'_postcode'];
                } else {
                    $is_valid = false;
                    $message = __('Postcode is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                if(isset($data[$addr_type.'_phone']) && $data[$addr_type.'_phone']) {
                    $updated_addr[$addr_type.'_phone'] = $data[$addr_type.'_phone'];
                } else {
                    $is_valid = false;
                    $message = __('Phone is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                if(isset($data[$addr_type.'_email']) && $data[$addr_type.'_email']) {
                    $updated_addr[$addr_type.'_email'] = $data[$addr_type.'_email'];
                } else {
                    $is_valid = false;
                    $message = __('Email is a required field', 'woocommerce');
                    wc_add_notice( $message, 'error');
                }

                /* foreach($addr_to_edit as $key => $val) {
                    $updated_addr[$key] = $data[$key];
                } */

                $result_arr = array_replace($addr_to_edit, $updated_addr);
                $custom_addrs[$index] = $result_arr;

                $ddd = update_user_meta($user_id, '_custom_'. $addr_type .'_addresses', $custom_addrs);
                
                if($ddd && $is_valid) {
                    $message = __('The address was changed successfully', 'woocommerce');
                    wc_add_notice( $message, 'success');

                    wp_send_json_success([
                        'response' => __('The address has been successfully changed.', 'best-of-shop'),
                        'redirect' => wc_get_account_endpoint_url('edit-address')
                    ]);
                } else {
                    wp_send_json_error([
                        'response' => __('Something went wrong. Page will be reload to show errors', 'best-of-shop'),
                    ]);
                }
                
            } else {
                wp_send_json_error([
                    'response' => __('Sorry, the verification data does not match.', 'best-of-shop')
                ]);
            }
        } catch(Exception $e) {
            echo 'Edit custom address error: ' . $e->getMessage();
        }
        
        exit;
    }

    public function set_default_address() 
    {
        $data = $_POST;
        $targ = $data['addr_target'];
        $index = $data['addr_index'];
        $user_id = get_current_user_id();
        $prev_def_addr = [];

        try {
            if($targ == 'billing') {
                $prev_def_addr = $this->get_billing_user_data($user_id);
            } else {
                $prev_def_addr = $this->get_shipping_user_data($user_id);
            }

            $addr = get_user_meta($user_id, '_custom_'. $targ .'_addresses', true);
            
            //set new default addr
            foreach($addr[$index] as $key => $val) {
                update_user_meta($user_id, $key, $val);
            }

            // put old addr in custom addr array
            array_splice($addr, $index, 1);
            $addr[] = $prev_def_addr;
            update_user_meta($user_id, '_custom_'. $targ .'_addresses', $addr);

            wp_send_json_success([
                'response' => __('The address has been set as default', 'best-of-shop')
            ]);

        } catch(Exception $e) {
            echo $e->getMessage();
        }

        exit;
    }

    public function get_billing_user_data($user_id) 
    {
        $result = [];

        $first_name = get_user_meta($user_id, 'billing_first_name', true);
        $middle_name = get_user_meta($user_id, 'billing_middle_name', true);
        $last_name = get_user_meta($user_id, 'billing_last_name', true);
        $billing_company = get_user_meta($user_id, 'billing_company', true);
        $billing_address_1 = get_user_meta($user_id, 'billing_address_1', true);
        $billing_address_2 = get_user_meta($user_id, 'billing_address_2', true);
        $billing_city = get_user_meta($user_id, 'billing_city', true);
        $billing_state = get_user_meta($user_id, 'billing_state', true);
        $billing_postcode = get_user_meta($user_id, 'billing_postcode', true);
        $billing_country = get_user_meta($user_id, 'billing_country', true);
        $billing_email = get_user_meta($user_id, 'billing_email', true);
        $billing_phone = get_user_meta($user_id, 'billing_phone', true);

        if( isset($first_name) && $first_name) {
            $result['billing_first_name'] = $first_name;
        }

        if( isset($middle_name) && $middle_name) {
            $result['billing_middle_name'] = $middle_name;
        }

        if( isset($last_name) && $last_name) {
            $result['billing_last_name'] = $last_name;
        }

        if( isset($billing_company) && $billing_company) {
            $result['billing_company'] = $billing_company;
        }

        if( isset($billing_address_1) && $billing_address_1) {
            $result['billing_address_1'] = $billing_address_1;
        }

        if( isset($billing_address_2) && $billing_address_2) {
            $result['billing_address_2'] = $billing_address_2;
        }

        if( isset($billing_city) && $billing_city) {
            $result['billing_city'] = $billing_city;
        }

        if( isset($billing_state) && $billing_state) {
            $result['billing_state'] = $billing_state;
        }

        if( isset($billing_postcode) && $billing_postcode) {
            $result['billing_postcode'] = $billing_postcode;
        }

        if( isset($billing_country) && $billing_country) {
            $result['billing_country'] = $billing_country;
        }

        if( isset($billing_email) && $billing_email) {
            $result['billing_email'] = $billing_email;
        }

        if( isset($billing_phone) && $billing_phone) {
            $result['billing_phone'] = $billing_phone;
        }

        return $result;
    }

    function get_shipping_user_data($user_id) 
    {
        $result = [];

        $first_name = get_user_meta($user_id, 'shipping_first_name', true);
        $middle_name = get_user_meta($user_id, 'shipping_middle_name', true);
        $last_name = get_user_meta($user_id, 'shipping_last_name', true);
        $shipping_company = get_user_meta($user_id, 'shipping_company', true);
        $shipping_address_1 = get_user_meta($user_id, 'shipping_address_1', true);
        $shipping_address_2 = get_user_meta($user_id, 'shipping_address_2', true);
        $shipping_city = get_user_meta($user_id, 'shipping_city', true);
        $shipping_state = get_user_meta($user_id, 'shipping_state', true);
        $shipping_postcode = get_user_meta($user_id, 'shipping_postcode', true);
        $shipping_country = get_user_meta($user_id, 'shipping_country', true);
        $shipping_email = get_user_meta($user_id, 'shipping_email', true);
        $shipping_phone = get_user_meta($user_id, 'shipping_phone', true);

        if( isset($first_name) && $first_name) {
            $result['shipping_first_name'] = $first_name;
        }

        if( isset($middle_name) && $middle_name) {
            $result['shipping_middle_name'] = $middle_name;
        }

        if( isset($last_name) && $last_name) {
            $result['shipping_last_name'] = $last_name;
        }

        if( isset($shipping_company) && $shipping_company) {
            $result['shipping_company'] = $shipping_company;
        }

        if( isset($shipping_address_1) && $shipping_address_1) {
            $result['shipping_address_1'] = $shipping_address_1;
        }

        if( isset($shipping_address_2) && $shipping_address_2) {
            $result['shipping_address_2'] = $shipping_address_2;
        }

        if( isset($shipping_city) && $shipping_city) {
            $result['shipping_city'] = $shipping_city;
        }

        if( isset($shipping_state) && $shipping_state) {
            $result['shipping_state'] = $shipping_state;
        }

        if( isset($shipping_postcode) && $shipping_postcode) {
            $result['shipping_postcode'] = $shipping_postcode;
        }

        if( isset($shipping_country) && $shipping_country) {
            $result['shipping_country'] = $shipping_country;
        }

        if( isset($shipping_email) && $shipping_email) {
            $result['shipping_email'] = $shipping_email;
        }

        if( isset($shipping_phone) && $shipping_phone) {
            $result['shipping_phone'] = $shipping_phone;
        }

        return $result;
    }

    function delete_address() 
    {
        $data = $_POST;
        $targ = $data['addr_target'];
        $user_id = get_current_user_id();
        $index = $data['addr_index'] ?? '';
        /* echo '<pre>';
        var_dump($def_empty_arr);
        echo '</pre>';
        exit; */

        try{
            $address = get_user_meta($user_id, '_custom_'. $targ .'_addresses', true);

            if($data['addr_type'] == 'default') {

                if($address) {
                    foreach($address[0] as $key => $val) {
                        update_user_meta($user_id, $key, $val);
                    }
                } else {
                    $def_empty_arr = [
                        $targ.'_first_name' => '', 
                        $targ.'_middle_name' => '', 
                        $targ.'_last_name' => '', 
                        $targ.'_company' => '', 
                        $targ.'_address_1' => '', 
                        $targ.'_address_2' => '', 
                        $targ.'_city' => '', 
                        $targ.'_state' => '', 
                        $targ.'_postcode' => '', 
                        $targ.'_country' => '', 
                        $targ.'_email' => '', 
                        $targ.'_phone' => ''
                    ];

                    foreach($def_empty_arr as $key => $val) {
                        update_user_meta($user_id, $key, $val);
                    }
                }
                
                array_splice($address, 0, 1);
            } else {
                array_splice($address, $data['addr_index'], 1);
            }
            
            update_user_meta($user_id, '_custom_'. $targ .'_addresses', $address);
            
            wp_send_json_success([
                'response' => __('The address has been successfully deleted', 'best-of-shop')
            ]);
            
        } catch(Exception $e) {
            echo 'Delete address error: '. $e->getMessage();
        }

       exit;
    }

    function change_currency() 
    {
        $data = $_POST;

        if($_COOKIE['current_currency']) {
            update_option('woocommerce_currency', $data['currency']);
        }

        wp_send_json_success();
    }

}
new Front_Ajax_LS();