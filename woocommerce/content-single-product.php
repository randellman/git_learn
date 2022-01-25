<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

$gallery = $product->get_gallery_image_ids();
$thumb_id = $product->get_image_id(); 
$thumb_url = wp_get_attachment_image_url($thumb_id, 'full');

$sale_price = $product->get_sale_price();
$f_s_pr = explode('.', $sale_price);

$price = $product->get_regular_price();
$f_pr = explode('.', $price);

/* echo '<pre>';
var_dump($product->get_image());
echo '</pre>'; */

if(false) {
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php } ?>

<div class="wrapper_main">
    <main class="content">
        <div class="container-middle">
            <div class="breadcrambs">
                <div class="breadcrumbs__item">
                    <a href="#">Home</a>
                </div>
                <div class="breadcrumbs__item">
                    <a href="#">Women’s Clothing</a>
                </div>
                <div class="breadcrumbs__item">
                    <a href="#">Dresses</a>
                </div>
                <div class="breadcrumbs__item">
                    <span>Maxi Dresses</span>
                </div>
            </div>
            
            <div class="product-page"> 
                <div class="product-page__top">
                    <div class="product-page__slider">
                        <div id="carousel" class="">         
                            <ul class="slides prodoct-page__small-slider">
                                <li>
                                    <img src="<?php echo $thumb_url ?>" />
                                </li>
                                <?php if($gallery) { ?>
                                    <?php foreach($gallery as $img_id) { 
                                        $image = wp_get_attachment_image_url($img_id, 'thumbnail');  
                                    ?>
                                    <li>
                                        <img src="<?php echo $image ?>" />
                                    </li>
                                    <?php } ?>                     
                                <?php } ?>
                            </ul>
                        </div>

                        <div id="slider" class="prodoct-page__big-slider">
                            <ul class="slides">
                                <li>
                                    <img src="<?php echo $thumb_url ?>" />
                                </li>
                                <?php if($gallery) { ?>
                                    <?php foreach($gallery as $img_id) { 
                                        $image = wp_get_attachment_image_url($img_id, 'full');
                                    ?>
                                    <li>
                                        <img src="<?php echo $image ?>" />
                                    </li>
                                    <?php } ?>
                                <?php } ?>
                                                        
                            </ul>
                        </div> 
                    </div>
                    <div class="product-page__info">
                        <div class="product-page__info-top">
                            <div class="product-page__info-desc">
                                <?php the_title(); ?>
                            </div>
                            <div class="product-page__info-rate">
                                <div class="star-rating">
                                    4.8
                                    <div class="star-rating_inner">
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                    </div>
                                </div>
                                <div class="rate-title">
                                   <span>(134522)</span> Verified Buyer Votes
                                </div>
                                <div class="product_orders">
                                    <span class="product-orders_quantity">(546372)</span> Orders
                                </div>
                            </div>
                            <div class="product-page__price-info">
                                <div class="product-page__price-left">
                                    <div class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">US $</span>
                                        <span class="price_integer"><?= $f_pr[0] ?? '' ?></span><?= $f_pr[1] ? '.' . $f_pr[1] : '' ?>
                                        <!-- <span class="price_integer">-11,547</span>.12 -->
                                    </div>
                                    <div class="product-page__price-old">
                                        <div class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">US $</span>
                                            <span class="price_integer"><?= $f_s_pr[0] ?? '' ?></span><?= $f_s_pr[1] ? '.' . $f_s_pr[1] : '' ?>
                                            <!-- <span class="price_integer">-12,547</span>.24 -->
                                        </div>
                                        <span class="product_sale">-21%</span>
                                    </div>
                                </div>
                                <div class="product-page__price-right">
                                    <div class="product-page__share">
                                        <div class="product-page__share-title">
                                            Share, Give 5% Off & Get Now 5% <span>Off Extra!</span>
                                        </div>
                                        <div class="product-page__share-button">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/Share-prod.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-page__choose">
                            <div class="product-page__choose-head">
                                <h4 class="product-page__choose-title">Color: <span class="choose-text">Blue</span></h4>
                            </div>
                            <ul class="product-page__choose-list color">
                                <li class="product-page__choose-item" data-value='Blue'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Red'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Green'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Yellow'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Black'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item active" data-value='White'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>  
                                <li class="product-page__choose-item" data-value='Blue'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Red'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Green'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Yellow'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Black'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='White'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li> 
                                <li class="product-page__choose-item" data-value='Blue'>
                                    <img src="img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Red'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Green'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Yellow'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Black'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='White'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li> 
                                <li class="product-page__choose-item" data-value='Blue'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Red'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Green'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Yellow'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Black'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='White'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li> 
                                <li class="product-page__choose-item" data-value='Green'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>
                                <li class="product-page__choose-item" data-value='Yellow'>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/color-item.png" alt="">
                                </li>                       
                            </ul>
                        </div>
                        <div class="product-page__choose">
                            <div class="product-page__choose-head">
                                <h4 class="product-page__choose-title">Material: <span class="choose-text">Galaxy J6 2018</span></h4>
                            </div>
                            <ul class="product-page__choose-list ">
                                <li class="product-page__choose-item" data-value='Galaxy J4 2018'>
                                    Galaxy J4 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4plus 2018'>
                                    Galaxy J4plus 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J6 2018'>
                                    Galaxy J6 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4 2018'>
                                    Galaxy J4 2018
                                </li> 
                                <li class="product-page__choose-item active" data-value='Galaxy J4plus 2018'>
                                    Galaxy J4plus 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J6 2018'>
                                    Galaxy J6 2018
                                </li>   
                                <li class="product-page__choose-item" data-value='Galaxy J4 2018'>
                                    Galaxy J4 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4plus 2018'>
                                    Galaxy J4plus 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J6 2018'>
                                    Galaxy J6 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4 2018'>
                                    Galaxy J4 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4plus 2018'>
                                    Galaxy J4plus 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J6 2018'>
                                    Galaxy J6 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4 2018'>
                                    Galaxy J4 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4plus 2018'>
                                    Galaxy J4plus 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J6 2018'>
                                    Galaxy J6 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4 2018'>
                                    Galaxy J4 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J4plus 2018'>
                                    Galaxy J4plus 2018
                                </li> 
                                <li class="product-page__choose-item" data-value='Galaxy J6 2018'>
                                    Galaxy J6 2018
                                </li>                       
                            </ul>
                        </div>
                        <div class="product-page__choose">
                            <div class="product-page__choose-head">
                                <h4 class="product-page__choose-title">Size: <span class="choose-text">M</span></h4>
                                <a href="#" class="product-page__choose-btn popup-sizes-btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/size.svg" alt="">
                                    Size Info
                                </a>
                            </div>
                            <ul class="product-page__choose-list size">
                                <li class="product-page__choose-item" data-value='XS'>
                                    XS
                                </li>
                                <li class="product-page__choose-item" data-value='S'>
                                    S
                                </li>
                                <li class="product-page__choose-item active" data-value='M'>
                                    M
                                </li>
                                <li class="product-page__choose-item" data-value='L'>
                                    L
                                </li>
                                <li class="product-page__choose-item" data-value='XL'>
                                    XL
                                </li>
                                <li class="product-page__choose-item" data-value='M'>
                                    M
                                </li>
                                <li class="product-page__choose-item" data-value='L'>
                                    L
                                </li>                                                                                       
                            </ul>
                        </div>
                        <div class="product-page__choose">
                            <div class="product-page__choose-head">
                                <h4 class="product-page__choose-title">Ships From: <span class="choose-text">United States</span></h4>                                
                            </div>
                            <ul class="product-page__choose-list ">
                                <li class="product-page__choose-item" data-value='Global'>
                                    Global
                                </li>
                                <li class="product-page__choose-item" data-value='Czech Republic'>
                                    Czech Republic
                                </li>
                                <li class="product-page__choose-item active" data-value='United States'>
                                    United States
                                </li>
                                <li class="product-page__choose-item" data-value='Spain'>
                                    Spain
                                </li>
                                <li class="product-page__choose-item" data-value='Australia'>
                                    Australia
                                </li>
                                <li class="product-page__choose-item" data-value='Italy'>
                                    Italy
                                </li>
                                <li class="product-page__choose-item" data-value='Ukraine'>
                                    Ukraine
                                </li> 
                                <li class="product-page__choose-item" data-value='Poland'>
                                    Poland
                                </li>
                                <li class="product-page__choose-item" data-value='Russian Federation'>
                                    Russian Federation
                                </li>
                                <li class="product-page__choose-item" data-value='Global'>
                                    Global
                                </li>
                                <li class="product-page__choose-item" data-value='Czech Republic'>
                                    Czech Republic
                                </li>
                                <li class="product-page__choose-item active" data-value='United States'>
                                    United States
                                </li>
                                <li class="product-page__choose-item" data-value='Spain'>
                                    Spain
                                </li>
                                <li class="product-page__choose-item" data-value='Australia'>
                                    Australia
                                </li>
                                <li class="product-page__choose-item" data-value='Italy'>
                                    Italy
                                </li>
                                <li class="product-page__choose-item" data-value='Ukraine'>
                                    Ukraine
                                </li> 
                                <li class="product-page__choose-item" data-value='Poland'>
                                    Poland
                                </li>
                                <li class="product-page__choose-item" data-value='Russian Federation'>
                                    Russian Federation
                                </li>                                                                                    
                            </ul>
                        </div>
                        <div class="input-group quantity">
                            <label>Quantity:</label>
                            <div class="input-wrapper">
                                <button type="button" class="quantity-btn minus">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/minus.svg" alt="">
                                </button>
                                <input type="text" class="input" value="1">
                                <button type="button" class="quantity-btn plus">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/plus.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="sipping-info">
                            <div class="input-group">
                                <label>Shipping:</label>
                                <select name="shiping" class="arrow-inner" style="min-width: 106px;"></select>
                            </div>
                            <div class="input-group" >
                                <label>To:</label>
                                <select class="my-select2 arrow-inner" style="min-width: 124px;">
                                    <option value="">United States</option>
                                    <option value="">United States 1</option>
                                    <option value="">United States 2</option>                                    
                                </select>
                            </div>
                            <div class="question-shiping">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/question-3-circle.svg" alt="">
                            </div>
                        </div>
                        <div class="free-return">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/arrow-free.svg" alt="">
                            <span>FREE Return</span> for any reason within 15 days
                        </div>
                        <div class="add-to-card-block">
                            <div class="cart_time">
                                <div class="cart_time-inner">
                                    <div class="cart_number" id="clockdiv">
                                        <span class="minus">03</span> : <span class="seconds">50</span>
                                    </div>
                                    <p>
                                        Add to cart now, to see all bonuses you have!
                                    </p>
                                </div>
                            </div>
                            <div class="card-block-buttons">
                                <a href="#" class="card-block-wish">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/heart-inner.svg" alt="">
                                </a>
                                <a href="#" class="btn btn-gradient add-to-card-btn">Add to Cart</a>
                            </div>
                            <ul class="card-block-list">
                                <li class="card-block-item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/Shield-Protected-Checkmark.svg" alt="">
                                    <p>90-Day Buyer Protection. Money back guarantee. </p>
                                </li>
                                <li class="card-block-item">
                                    <label class="module__check">
                                        <input type="checkbox" name="privacy_policy" checked>
                                        <span class="check"></span>
                                        <span class="text"> <span>Full Refund</span> if you don’t receive your order</span>
                                    </label>
                                </li>
                                <li class="card-block-item">
                                    <label class="module__check">
                                        <input type="checkbox" name="privacy_policy" checked>
                                        <span class="check"></span>
                                        <span class="text"><b>Full Refund or Exchange</b> if the item is not as described</span>
                                    </label>
                                </li>
                                <li class="card-block-item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/padlock-gold-vector-1.svg" alt="">
                                    <span>100% Guaranteed Secure Checkout</span>
                                </li>
                            </ul>
                            <div class="paymant-variabels">
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-1.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-2.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-3.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-4.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-8.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-5.png" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-6.svg" alt="">
                                </div>
                                <div class="paymant-variabel__item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/varabel-img-7.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-page__bottom">
                    <div class="product-page__item spoiler-item active">
                        <div class="spoiler-item__header">
                            <div class="spoiler-item__header-text">
                                Specifications:
                                <div class="more">
                                    <span>Less</span>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow-green.svg" alt=""> 
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow.svg" alt="">
                        </div>
                        <div class="spoiler-item__content">
                            <ul class="product-specifications">
                                <li>
                                    Brand Name: <span>forefair</span>
                                </li>
                                <li>
                                    Origin: <span>CNO(origin)</span>
                                </li>
                                <li>
                                    Season: <span>Summer</span>
                                </li>
                                <li>
                                    Material <span>Polyester</span>
                                </li>
                                <li>
                                    Silhouette: <span>A-LINE</span>
                                </li>
                                <li>
                                    Age: <span>Ages 18-35 Years Old</span>
                                </li>
                                <li>
                                    Model Number: <span>k</span>
                                </li>
                                <li>
                                    Neckline: <span>V-Neck</span>
                                </li>
                                <li>
                                    Sleeve Lenth(cm): <span>Sleeveless</span>
                                </li>
                                <li>
                                    Sleeve Style: <span>Butterfly Sleeve</span>
                                </li>
                                <li>
                                    Gender: <span>WOMEN</span>
                                </li>
                                <li>
                                    Decoration: <span>Ruffles</span>
                                </li>
                                <li>
                                    Style: <span>Brand Style</span>
                                </li>
                                <li>
                                    Waistline: <span>Empire</span>
                                </li>
                                <li>
                                    Pattern Type: <span>Solid</span>
                                </li>
                                <li>
                                    Dresses Lenth: <span>Above Knee, Mini</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-page__item spoiler-item active">
                        <div class="spoiler-item__header">
                            <div class="spoiler-item__header-text">
                                Description:
                                <div class="more">
                                    <span>Less</span>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow-green.svg" alt=""> 
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow.svg" alt="">
                        </div>
                        <div class="spoiler-item__content">
                            <div class="spoiler-item__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/spoiler-item__img.png" alt="">
                            </div>
                            <div class="spoiler-item__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/spoiler-item__img-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product-page__item spoiler-item active">
                        <div class="spoiler-item__header">
                            <div class="spoiler-item__header-text">
                                Verified Buyer Votes/Reviews: (134522)
                                <div class="star-rating">
                                    4.8
                                    <div class="star-rating_inner">
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                        <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                    </div>
                                </div>
                                <div class="more">
                                    <span>Less</span>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow-green.svg" alt=""> 
                                </div>
                            </div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow.svg" alt="">
                        </div>
                        <div class="spoiler-item__content">
                            <div class="reviews">
                                <div class="reviews__item">
                                    <div class="reviews__item-left">
                                        <div class="reviews__item-user">
                                            <div class="star-rating_inner">
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                            </div>
                                            <span class="reviews__item-user-name">by de****d</span>
                                        </div>
                                        <div class="reviews__item-status">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/verified-buyer.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="reviews__item-center">
                                        <div class="reviews__item-product-option">
                                            <ul class="reviews__item-list">
                                                <li>
                                                    Color: picture color
                                                </li>
                                                <li>
                                                    Size: L
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="reviews__item-decs">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis ultrices ornare ornare odio metus varius.
                                            </p>
                                        </div>
                                        <div class="reviews__item-images">
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__item-reght">
                                        <time datetime="2021-10-19 19:00">19 Okt 2020</time>
                                    </div>
                                </div>
                                <div class="reviews__item">
                                    <div class="reviews__item-left">
                                        <div class="reviews__item-user">
                                            <div class="star-rating_inner">
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                            </div>
                                            <span class="reviews__item-user-name">by Besto Shopper</span>
                                        </div>
                                        <div class="reviews__item-status">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/verified-buyer.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="reviews__item-center">
                                        <div class="reviews__item-product-option">
                                            <ul class="reviews__item-list">
                                                <li>
                                                    Color: green
                                                </li>
                                                <li>
                                                    Size: L
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="reviews__item-decs">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis ultrices ornare ornare odio metus varius.
                                            </p>
                                        </div>
                                        <div class="reviews__item-images">
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__item-reght">
                                        <time datetime="2021-10-19 19:00">19 Okt 2020</time>
                                    </div>
                                </div>
                                <div class="reviews__item">
                                    <div class="reviews__item-left">
                                        <div class="reviews__item-user">
                                            <div class="star-rating_inner">
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                            </div>
                                            <span class="reviews__item-user-name">by Besto Shopper</span>
                                        </div>
                                        <div class="reviews__item-status">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/verified-buyer.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="reviews__item-center">
                                        <div class="reviews__item-product-option">
                                            <ul class="reviews__item-list">
                                                <li>
                                                    Color: green
                                                </li>
                                                <li>
                                                    Size: L
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="reviews__item-decs">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis ultrices ornare ornare odio metus varius.
                                            </p>
                                        </div>                                        
                                    </div>
                                    <div class="reviews__item-reght">
                                        <time datetime="2021-10-19 19:00">19 Okt 2020</time>
                                    </div>
                                </div>
                                <div class="reviews__item">
                                    <div class="reviews__item-left">
                                        <div class="reviews__item-user">
                                            <div class="star-rating_inner">
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                            </div>
                                            <span class="reviews__item-user-name">by de****d</span>
                                        </div>
                                        <div class="reviews__item-status">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/verified-buyer.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="reviews__item-center">
                                        <div class="reviews__item-product-option">
                                            <ul class="reviews__item-list">
                                                <li>
                                                    Color: picture color
                                                </li>
                                                <li>
                                                    Size: L
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="reviews__item-decs">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis ultrices ornare ornare odio metus varius.
                                            </p>
                                        </div>
                                        <div class="reviews__item-images">
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__item-reght">
                                        <time datetime="2021-10-19 19:00">19 Okt 2020</time>
                                    </div>
                                </div>
                                <div class="reviews__item">
                                    <div class="reviews__item-left">
                                        <div class="reviews__item-user">
                                            <div class="star-rating_inner">
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                <a href="#" tabindex="0"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                            </div>
                                            <span class="reviews__item-user-name">by Besto Shopper</span>
                                        </div>
                                        <div class="reviews__item-status">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/verified-buyer.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="reviews__item-center">
                                        <div class="reviews__item-product-option">
                                            <ul class="reviews__item-list">
                                                <li>
                                                    Color: green
                                                </li>
                                                <li>
                                                    Size: L
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="reviews__item-decs">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis ultrices ornare ornare odio metus varius.
                                            </p>
                                        </div>
                                        <div class="reviews__item-images">
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                            <div class="reviews__item-img">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/pictures/reviews__item-img.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__item-reght">
                                        <time datetime="2021-10-19 19:00">19 Okt 2020</time>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-controls">
                                <div class="reviews-controls__more">
                                    <div class="more more-item">
                                        <span>More</span>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow-green.svg" alt=""> 
                                    </div>
                                    <div class="less more-item">
                                        <span>Less</span>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow-green.svg" alt=""> 
                                    </div>
                                </div>
                                <div class="reviews-controls__arrows">
                                    <button class="reviews-controls__down">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow.svg" alt="">
                                    </button>
                                    <button class="reviews-controls__up">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/spoller-arrow.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_directory() . "/inc/inc/footer-single-product.php"; ?>
    </main>
</div>