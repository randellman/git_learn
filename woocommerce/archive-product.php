<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); 
?>

<?php
$args = [
    'post_type' => 'product',
    'posts_per_page' => 15
];

$prods = new WP_Query($args);

/* echo '<pre>';
var_dump($prods);
echo '</pre>'; */
?>
<div class="wrapper_main main-page">
    <main class="content">
        <div class="container-big pl20 pr20">
            <?php for($i = 0; $i <= 2; $i++) { ?>
            <?php if( $prods->have_posts() ) { ?>
            <div class="products-category">
                <div class="products-category_heading">
                    <h2 class="products-category_title">Popular in Woman’s Clothing</h2>
                    <a href="#" class="products-category_more ">View All</a>
                </div>
                <div class="products slider category-slider">
                    <?php while( $prods->have_posts() ) { 
                        $prods->the_post(); 
                        $id = get_the_ID();
                        $product = wc_get_product($id);
                        $permalink = get_the_permalink();
                        $price = $product->get_price();
                        $f_pr = explode('.', $price);

                       /*  echo '<pre>';
                        var_dump($permalink);
                        echo '</pre>'; */
                    ?>
                        <div>
                            <div class="product type-product has-post-thumbnail product-type-simple">
                                <div class="product_thumb">
                                    <a href="<?= $permalink ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <img width="256" height="256" src="<?php echo get_the_post_thumbnail_url( $id, 'middle' ) ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" >
                                    </a>
                                    <span class="product_like"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/like.svg"></span>
                                </div>
                                <div class="product-content">
                                    <h2 class="woocommerce-loop-product__title">
                                        <a href="<?= $permalink ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' )  ?></a>
                                    </h2>
                                    <div class="product-bottom">
                                        <div class="product-bottom_left">
                                            <div class="price">
                                                <div class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">US $</span>
                                                    <span class="price_integer"><?= $f_pr[0] ?? '' ?></span><?= $f_pr[1] ? '.' . $f_pr[1] : '' ?>
                                                </div>
                                            </div>

                                            <div class="star-rating">
                                                (1)
                                                <div class="star-rating_inner">
                                                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/star.svg"></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="product-bottom_right">
                                            <div class="product_shipping">
                                                <span class="free-shipping">
                                                    Free
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/delivery.svg" alt="delivery">
                                                </span>
                                                <a href="#" class="product_return">
                                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/svg/product-arrow.svg" alt="delivery">
                                                </a>
                                                <span class="product_sale">-21%</span>
                                            </div>
                                            <div class="product_orders">
                                                <span class="product-orders_quantity">(18)</span> Orders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            <?php } ?>
        </div>
    </main>

    <?php get_footer( 'shop' ); ?>
</div>

<?php if(false) {

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

do_action( 'woocommerce_before_main_content' );

?>



<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

if ( is_active_sidebar( 'sidebar-1' ) ) : dynamic_sidebar( 'sidebar-1' ); endif;


get_footer( 'shop' );
}
