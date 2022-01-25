<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package best-of-shop
 */

get_header();
?>

    <?php /*
    <a href="<?php echo home_url(); ?>">Return to Homepage</a>

    <?php echo do_shortcode('[contact-form-7 id="89" title="Contact form 1"]'); ?>
    */ ?>

    <div class="wrapper_main">
        <main class="content">
            <section class = "error-404">
                <div class = "container">
                    <div class = "error-404-info">
                        <h2 class = "error-404-info-head"><?php _e('Sorry, the page you’re looking for is not available, but we may still have the product you like, please use search or contact support. We are here to help!', 'best-of-shop'); ?></h2>
                        <div class = "error-404-search header__search-wrpr">
                            <form action class="search">
                                <div class = "search__categories">
                                    <div class = "search__current">All categories</div>
                                    <div class = "search__dropdown"></div>
                                </div>
                                <input type = "search" class = "input" placeholder = "Search what you like, from Million’s of products...">
                                <button type = "submit" class = "button">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/search-loupe-big.svg">
                                </button>
                            </form>
                        </div>
                        <div class = "error-404-action-button">
                            <button class = "btn-gradient">Return to Homepage</button>
                        </div>

                        <form action class = "contact-form">
                            <span class = "contact-form-heading">Contact Us: 24/7 Fast Email Support</span>
                            <input type = "text" placeholder = "Name*" class = "input">
                            <input type = "email" placeholder = "Email Address*" class = "input">
                            <textarea class = "textarea" placeholder = "Message*"></textarea>
                            <div class = "upload-file">
                                <strong class = "upload-file-heading">Attach File</strong>
                                <span class = "upload-file-slog">Upload up to 5 files. Max total attachment size: 20MB</span>
                                <div class = "upload-file-dropzone">
                                    <div class="fallback dropzone" id="my-awesome-dropzone">
                                        <div class = "dz-default dz-message">
                                            <div class = "info-content">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/file.svg">
                                                <span>
                                                <span class = "green-span">Add file</span>
                                                or drag file here
                                            </span>
                                            </div>
                                        </div>
                                        <input name="file" type="file" multiple />
                                    </div>
                                </div>
                                <div class = "action-form">
                                    <button type = "submit" class = "btn-white">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class = "popular-products">
                        <span class = "popular-products-heading">Popular today, You may also like...</span>
                        <div class = "products-category">
                            <div class = "products-category_heading">
                                <h2 class = "products-category_title">Popular in Woman’s Clothing</h2>
                                <a href = "#" class = "products-category_more">View All</a>
                            </div>
                            <div class = "products category-slider">
								<?php for ( $i = 1; $i <= 14; ++ $i ): ?>
                                    <div>
                                        <div class="product type-product has-post-thumbnail product-type-simple">
                                            <div class="product_thumb">
                                                <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                    <img width="257" height="257" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pictures/product<?php echo $i ?>.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" >
                                                </a>
                                                <span class="product_like"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/like.svg"></span>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="woocommerce-loop-product__title">Summer Women Clothes Set Tracksuits Sprin...</h2>
                                                <div class="product-bottom">
                                                    <div class="product-bottom_left">
                                                        <div class="price">
                                                            <div class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">US $</span>
                                                                <span class="price_integer">10</span>.12
                                                            </div>
                                                        </div>

                                                        <div class="star-rating">
                                                            (1)
                                                            <div class="star-rating_inner">
                                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
                                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
                                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
                                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
                                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/star.svg"></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-bottom_right">
                                                        <div class="product_shipping">
                                                    <span class="free-shipping">
                                                        Free
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/delivery.svg" alt="delivery">
                                                    </span>
                                                            <a href="#" class="product_return">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/product-arrow.svg" alt="delivery">
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
								<?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php /*
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'best-of-shop' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'best-of-shop' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'best-of-shop' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley *~/
					$best_of_shop_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'best-of-shop' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$best_of_shop_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
    */ ?>

<?php
get_footer();
