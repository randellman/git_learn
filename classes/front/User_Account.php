<?php

class User_Account
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new User_Account();
        }
        return self::$instance;
    }
}
$ua_ak = User_Account::getInstance();