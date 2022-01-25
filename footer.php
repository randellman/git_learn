<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package best-of-shop
 */

?>

<?php /*
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'best-of-shop' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. *~/
				printf( esc_html__( 'Proudly powered by %s', 'best-of-shop' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. *~/
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'best-of-shop' ), 'best-of-shop', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
					)
				);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="block-preloader-full-wrp">
	<div class="block-preloader">
		<span class="block-preloader-spinner"></span>
	</div>
</div>
*/ ?>

<a href="" class="scroll_to_top">
    <div class="scroll-icon">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/to-top.svg">
    </div>
    Top
</a>
<footer class="footer">
    <button type="button" class="footer__button">
        Policies & More
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Arrow-gray.svg" alt="">
    </button>
    <div class="footer__body">
        <div class="container footer__container">
            <div class="footer__content">
                <nav class="footer__nav">
                    <div class="footer__nav-title">
                        <span>Welcome!</span> Sign In <span>or</span> Join (Get $100 + Free Bonuses)
                    </div>
                    <ul class="footer__nav-menu">
                        <li>
                            <a href="/about-us">About Us</a>
                        </li>
                        <li>
                            <a href="/privacy-policy">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="/terms-and-conditions">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="/payment-methods">Payment Methods</a>
                        </li>
                        <li>
                            <a href="/shipping-delivery">Shipping & Delivery</a>
                        </li>
                        <li>
                            <a href="/returns-policy">Returns Policy</a>
                        </li>
                        <li>
                            <a href="/help-center">Help Center & Contact</a>
                        </li>
                        <li>
                            <a href="/stay-connected">Stay Connected</a>
                        </li>
                        <li>
                            <ul class="account__linkt-socials">
                                <li class="account__linkt-item">
                                    <a href="https://www.facebook.com/">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-facebook.svg" alt="icon">
                                    </a>
                                </li>
                                <li class="account__linkt-item">
                                    <a href="https://twitter.com/">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-twitter.svg" alt="icon">
                                    </a>
                                </li>
                                <li class="account__linkt-item">
                                    <a href="https://www.pinterest.com/">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-pinterest.svg" alt="icon">
                                    </a>
                                </li>
                                <li class="account__linkt-item">
                                    <a href="https://www.instagram.com/">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-instagram.svg" alt="icon">
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p class="footer__nav-text">
                        Copyright 2016-2020. All Rights Reserved. 8 The Green, Dover, DE 19901. BestOfShopOnline.com
                    </p>
                </nav>

            </div>
        </div>
    </div>
</footer>

<?php include locate_template('inc/footer-popup.php'); ?>

<?php wp_footer(); ?>

</body>
</html>
