<?php

class Admin_Ajax_LS
{
    public function __construct()
    {
        self::actions();
    }

    public static function actions()
    {
        $actions = [
            ''
        ];
        foreach ($actions as $action) {
            add_action('wp_ajax_' . $action, [__CLASS__, $action]);
            add_action('wp_ajax_nopriv_' . $action, [__CLASS__, $action]);
        }
    }
}
new Admin_Ajax_LS();