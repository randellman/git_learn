<?php

class Front_Ajax_SK
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
new Front_Ajax_SK();