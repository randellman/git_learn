<?php

/* $str = '<a href="http://study/product/test-product/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link" tabindex="0">
<img width="256" height="256" src="http://study/wp-content/uploads/woocommerce-placeholder.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy">
</a>
<span class="product_like"><img src="http://study/wp-content/themes/best-of-shop/assets/img/svg/like.svg"></span>';

$ddd = preg_match_all('/<img\s[^>]*>/', $str, $matches);

$i=0;
$res = [];
foreach($matches[0] as $match) {
    $pos = strpos($match, '>');

    $new_el = substr_replace($match, "data-id={$i}>", $pos);

    $res[] = $new_el;
    
    $i++;
}

    echo '<pre>';
    print_r( $res);
    echo '</pre>';
    echo '<hr>';
exit; */