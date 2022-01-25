<?php

class Product
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Product();
        }
        return self::$instance;
    }
}
$product_class = Product::getInstance();