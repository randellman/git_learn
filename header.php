<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package best-of-shop
 */
$all_curr = get_woocommerce_currencies();
$current_currency = get_option('woocommerce_currency');
$countries = apply_filters( 'woocommerce_countries', include WC()->plugin_path() . '/i18n/countries.php' );

if(is_user_logged_in()){
	$user_currency = get_user_meta( get_current_user_id(), 'currency', true );
	$user_country = get_user_meta( get_current_user_id(), 'country', true );
}
if(!isset($user_currency) || !$user_currency){
	$user_currency = $current_currency;
}
if(!isset($user_country) || !$user_country){
	$user_country = 'US';
}
$args = [
	'taxonomy'      => ['product_cat'], 
	'orderby'       => 'id',
	'order'         => 'ASC',
	'hide_empty'    => false,
    'parent'         => 0
];

$categories = get_terms($args);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php /*
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'best-of-shop' ); ?></a>
	<?php if($all_curr) { ?>
	<select name="lang_switcher" id="lang_switcher">
		<?php foreach($all_curr as $curr_code => $curr_name) { ?>
			<option value="<?= $curr_code ?>" <?php selected($curr_code, $current_currency) ?>><?= $curr_code ?></option>
		<?php } ?>
	</select>
	<?php } ?>

    <?php if($all_curr) { ?>
        <select name="user_currency">
            <?php foreach($all_curr as $curr_code => $curr_name) { ?>
                <option value="<?= $curr_code ?>" <?php selected($curr_code, $user_currency) ?>><?= $curr_code ?></option>
            <?php } ?>
        </select>
	<?php } ?>

    <?php if($countries) { ?>
        <select name="user_country">
            <?php foreach($countries as $country_code => $country_name) { ?>
                <option value="<?= $country_code ?>" <?php selected($country_code, $user_country) ?>><?= $country_name ?></option>
            <?php } ?>
        </select>
	<?php } ?>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$best_of_shop_description = get_bloginfo( 'description', 'display' );
			if ( $best_of_shop_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $best_of_shop_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'best-of-shop' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
    <ul id="site-header-cart" class="site-header-cart menu active">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.49727 7.20385H8.54727V7.15385V6.46154C8.54727 4.58808 10.0853 3.05 11.9588 3.05C13.8323 3.05 15.3703 4.58808 15.3703 6.46154V7.15385V7.20385H15.4203H18.7915L18.832 7.80531L18.832 7.80589L19.5243 20.2669L19.5243 20.267L19.5641 20.95H4.35286L4.39333 20.2677L4.39334 20.2675L5.08562 7.80653L5.08565 7.806L5.12546 7.20385H8.49727ZM14.0357 7.20385H14.0857V7.15385V6.46154C14.0857 5.89744 13.8616 5.35645 13.4628 4.95758C13.0639 4.5587 12.5229 4.33462 11.9588 4.33462C11.3947 4.33462 10.8537 4.5587 10.4548 4.95758C10.056 5.35645 9.83188 5.89744 9.83188 6.46154V7.15385V7.20385H9.88188H14.0357ZM6.37673 8.48846H6.32938L6.3268 8.53573L5.72173 19.6127L5.71885 19.6654H5.77165H18.1467H18.1995L18.1966 19.6127L17.5908 8.53573L17.5882 8.48846H17.5409H15.4203H15.3703V8.53846V10.5654H14.0857V8.53846V8.48846H14.0357H9.88188H9.83188V8.53846V10.5654H8.54727V8.53846V8.48846H8.49727H6.37673Z" fill="#4E4E4E" stroke="white" stroke-width="0.1"></path>
        </svg>
        <div class="bistro-header-count count">1</div>
    </ul>
    <div class="mini_cart_wrap">
    <?php woocommerce_mini_cart() ?>
    </div>
*/ ?>

<header class="header">
    <div class="header__top">
        <div class="container-big header__container">
            <div class="header__top-body">
                <div class="header__top-info">
                    <p>We Have Million’s of Products! Best 4 & 5 Stars Only!</p>
                    <div class="header__top-stars">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Star.svg" alt="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Star.svg" alt="">
                    </div>
                </div>
                <div class="header__top-list">
                    <div class="header__top-item">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Shield.svg" alt="">
                            <span>Buyer Protection</span>
                        </a>
                    </div>
                    <div class="header__top-item">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/fa-solid_phone-square-alt.svg" alt="">
                            <span>24/7 Fast Support</span>
                        </a>
                    </div>
                    <div class="header__top-item">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/bx_bxs-truck.svg" alt="">
                            <span>Track your Order</span>
                        </a>
                    </div>
                    <div class="header__top-item">
                        <div class="custom-select">
                            <div class="custom-select__button">
                                <div class="custom-select__current">
                                    Ship to
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/usa.svg" alt="">
                                </div>
                            </div>
                            <div class="custom-select__dropdown">
                                <div class="input-group">
                                    <label>Ship To</label>
                                    <select name="country" style="width: 100%;"></select>
                                </div>
                                <div class="input-group">
                                    <label>Language</label>
                                    <select name="lang" class="my-select2 select2-style" style="width: 100%;">
                                        <option value="" selected>English</option>
                                        <option value="">Русский</option>
                                        <option value="">Português</option>
                                        <option value="">Español</option>
                                        <option value="">Français</option>
                                        <option value="">Русский</option>
                                        <option value="">Português</option>
                                        <option value="">Español</option>
                                        <option value="">Français</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label>Currency</label>
                                    <select class="my-select2" style="width: 100%;">
                                        <option value="">US $</option>
                                        <option value="">US2 $</option>
                                        <option value="">US3 $</option>
                                        <option value="">US4 $</option>
                                        <option value="">US5 $</option>
                                        <option value="">US6 $</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-green">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="header__top-item">
                        <div class="custom-select">
                            <div class="custom-select__button">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/la_globe-americas.svg" alt="">
                                <div class="custom-select__current">
                                    English
                                </div>
                            </div>
                            <div class="custom-select__dropdown">
                                <div class="input-group">
                                    <label>Ship To</label>
                                    <select name="country" style="width: 100%;"></select>
                                </div>
                                <div class="input-group">
                                    <label>Language</label>
                                    <select name="lang" class="my-select2 select2-style" style="width: 100%;">
                                        <option value="" selected>English</option>
                                        <option value="">Русский</option>
                                        <option value="">Português</option>
                                        <option value="">Español</option>
                                        <option value="">Français</option>
                                        <option value="">Русский</option>
                                        <option value="">Português</option>
                                        <option value="">Español</option>
                                        <option value="">Français</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label>Currency</label>
                                    <select class="my-select2" style="width: 100%;">
                                        <option value="">US $</option>
                                        <option value="">US2 $</option>
                                        <option value="">US3 $</option>
                                        <option value="">US4 $</option>
                                        <option value="">US5 $</option>
                                        <option value="">US6 $</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-green">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="header__top-item">
                        <div class="custom-select">
                            <div class="custom-select__button">
                                <div class="custom-select__current">
                                    US $
                                </div>
                            </div>
                            <div class="custom-select__dropdown">
                                <div class="input-group">
                                    <label>Ship To</label>
                                    <select name="country" style="width: 100%;"></select>
                                </div>
                                <div class="input-group">
                                    <label>Language</label>
                                    <select name="lang" class="my-select2 select2-style" style="width: 100%;">
                                        <option value="" selected>English</option>
                                        <option value="">Русский</option>
                                        <option value="">Português</option>
                                        <option value="">Español</option>
                                        <option value="">Français</option>
                                        <option value="">Русский</option>
                                        <option value="">Português</option>
                                        <option value="">Español</option>
                                        <option value="">Français</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label>Currency</label>
                                    <select class="my-select2" style="width: 100%;">
                                        <option value="">US $</option>
                                        <option value="">US2 $</option>
                                        <option value="">US3 $</option>
                                        <option value="">US4 $</option>
                                        <option value="">US5 $</option>
                                        <option value="">US6 $</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-green">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__body">
        <div class="container-big header__container">
            <div class="header__body-top">
                <a href="/" class="header__logo logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/Logo.svg" alt="">
                    <span>All in one shopping worldwide</span>
                </a>
                <div class="header__search-wrpr">
                    <form action="" class="search">
                        <div class="search__categories">
                            <div class="search__current">
                                All categories
                            </div>
                            <div class="search__dropdown">
                                <ul class="category-search">
                                    <li class="category-search__item current"><a href="#">All categories</a></li>
                                    <li class="category-search__item"><a href="#">Indian</a></li>
                                    <li class="category-search__item"><a href="#">Indian</a></li>
                                    <li class="category-search__item"><a href="#">Chinese</a></li>
                                    <li class="category-search__item"><a href="#">Thai</a></li>
                                    <li class="category-search__item"><a href="#">Vietnamese</a></li>
                                    <li class="category-search__item"><a href="#">Korean</a></li>
                                    <li class="category-search__item"><a href="#">see more</a></li>
                                    <li class="category-search__item"><a href="#">Indian</a></li>
                                    <li class="category-search__item"><a href="#">Indian</a></li>
                                    <li class="category-search__item"><a href="#">Chinese</a></li>
                                    <li class="category-search__item"><a href="#">Thai</a></li>
                                    <li class="category-search__item"><a href="#">Vietnamese</a></li>
                                    <li class="category-search__item"><a href="#">Korean</a></li>
                                    <li class="category-search__item"><a href="#">see more</a></li>
                                    <li class="category-search__item"><a href="#">Chinese</a></li>
                                    <li class="category-search__item"><a href="#">Thai</a></li>
                                    <li class="category-search__item"><a href="#">Vietnamese</a></li>
                                    <li class="category-search__item"><a href="#">Korean</a></li>
                                    <li class="category-search__item"><a href="#">see more</a></li>
                                    <li class="category-search__item"><a href="#">Indian</a></li>
                                    <li class="category-search__item"><a href="#">Indian</a></li>
                                    <li class="category-search__item"><a href="#">Chinese</a></li>
                                    <li class="category-search__item"><a href="#">Thai</a></li>
                                    <li class="category-search__item"><a href="#">Vietnamese</a></li>
                                    <li class="category-search__item"><a href="#">Korean</a></li>
                                    <li class="category-search__item"><a href="#">see more</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-wrapper">
                            <input type="search" class="input input-search" placeholder="Search what you like, from Million’s of products...">
                            <div class="search-dropdown">
                                <div class="search-dropdown__item">
                                    <h4 class="search-dropdown__title">Category</h4>
                                    <ul class="search-dropdown__list">
                                        <li>
                                            <a href=""><span>phone case</span>  in Cases</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="search-dropdown__item">
                                    <h4 class="search-dropdown__title">Category</h4>
                                    <ul class="search-dropdown__list">
                                        <li>
                                            <a href=""><span>phone</span> case</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> pocket</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> holder</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> protection film</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> protection</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> expanding stand</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> expanding</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> cexpanding stand</a>
                                        </li>
                                        <li>
                                            <a href=""><span>phone</span> expanding</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="button">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/search-loupe.svg" alt="">
                        </button>
                    </form>
                    <div class="header__secure">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/McAfee__Secure-1.svg" alt="">
                    </div>
                </div>
                <div class="header__user-info">
                    <a href="#" class="header__user-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/money.svg" alt="">
                        <span>100% Free Items Every Week!</span>
                    </a>
                    <div class="header__actions-item mob_search_btn only_mob">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/search-loupe.svg" alt="">
                        </a>
                    </div>
                    <div class="header__actions-item wish only_mob">
                        <a href="#">
							<?php include get_stylesheet_directory() . "/assets/img/svg/bx_bx-heart.svg" ?>
                        </a>
                    </div>
                    <a href="/my-account" class="header__user-item <?php if( !is_user_logged_in() ) echo 'popup-login' ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/bx_bxs-user.svg" alt="">
                        <?php if( is_user_logged_in() ) { ?>
                        <span>My account</span>
                        <?php } else { ?>
                        <span>Login | Join <br> Get $100</span>
                        <?php } ?>
                    </a>
                </div>
                <div class="header__actions">
                    <div class="header__actions-item wish only_desktop">
                        <a href="/my-account/wishlist">
							<?php include get_stylesheet_directory() . "/assets/img/svg/bx_bx-heart.svg" ?>
                        </a>
                    </div>
                    <div class="header__actions-item shoping-card">
                        <a href="/cart">
							<?php include get_stylesheet_directory() . "/assets/img/svg/entypo_shopping-cart.svg" ?>
                            <span class="shoping-card-counter">3</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__body-bottom">
                <nav class="header__nav menu">
                    <ul class="acordeon-menu menu__list all-cat">
                        <li class="has-sub">
                            <a href="#" class="burger_btn">
                                <div class="burger-icon">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/menu-burger.svg" alt="">
                                </div>
                                <span class="desktop_text">All Departments</span>
                                <button class="menu__arrow">
									<?php include get_stylesheet_directory() . '/assets/img/svg/menu-arrow.svg' ?>
                                </button>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub_menu_mob_header">
                                    <div class="top_line">
                                        <div class="header__top-item">
                                            <div class="custom-select">
                                                <div class="custom-select__button">
                                                    <div class="custom-select__current">
                                                        Ship to
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/usa.svg" alt="">
                                                    </div>
                                                </div>
                                                <div class="custom-select__dropdown">
                                                    <div class="input-group">
                                                        <label>Ship To</label>
                                                        <select name="country" style="width: 100%;"></select>
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Language</label>
                                                        <select name="lang" class="my-select2 select2-style" style="width: 100%;">
                                                            <option value="" selected>English</option>
                                                            <option value="">Русский</option>
                                                            <option value="">Português</option>
                                                            <option value="">Español</option>
                                                            <option value="">Français</option>
                                                            <option value="">Русский</option>
                                                            <option value="">Português</option>
                                                            <option value="">Español</option>
                                                            <option value="">Français</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Currency</label>
                                                        <select class="my-select2" style="width: 100%;">
                                                            <option value="">US $</option>
                                                            <option value="">US2 $</option>
                                                            <option value="">US3 $</option>
                                                            <option value="">US4 $</option>
                                                            <option value="">US5 $</option>
                                                            <option value="">US6 $</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-green">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header__top-item">
                                            <div class="custom-select">
                                                <div class="custom-select__button">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/la_globe-americas.svg" alt="">
                                                    <div class="custom-select__current">
                                                        English
                                                    </div>
                                                </div>
                                                <div class="custom-select__dropdown">
                                                    <div class="input-group">
                                                        <label>Ship To</label>
                                                        <select name="country" style="width: 100%;"></select>
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Language</label>
                                                        <select name="lang" class="my-select2 select2-style" style="width: 100%;">
                                                            <option value="" selected>English</option>
                                                            <option value="">Русский</option>
                                                            <option value="">Português</option>
                                                            <option value="">Español</option>
                                                            <option value="">Français</option>
                                                            <option value="">Русский</option>
                                                            <option value="">Português</option>
                                                            <option value="">Español</option>
                                                            <option value="">Français</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Currency</label>
                                                        <select class="my-select2" style="width: 100%;">
                                                            <option value="">US $</option>
                                                            <option value="">US2 $</option>
                                                            <option value="">US3 $</option>
                                                            <option value="">US4 $</option>
                                                            <option value="">US5 $</option>
                                                            <option value="">US6 $</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-green">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header__top-item">
                                            <div class="custom-select">
                                                <div class="custom-select__button">
                                                    <div class="custom-select__current">
                                                        US $
                                                    </div>
                                                </div>
                                                <div class="custom-select__dropdown">
                                                    <div class="input-group">
                                                        <label>Ship To</label>
                                                        <select name="country" style="width: 100%;"></select>
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Language</label>
                                                        <select name="lang" class="my-select2 select2-style" style="width: 100%;">
                                                            <option value="" selected>English</option>
                                                            <option value="">Русский</option>
                                                            <option value="">Português</option>
                                                            <option value="">Español</option>
                                                            <option value="">Français</option>
                                                            <option value="">Русский</option>
                                                            <option value="">Português</option>
                                                            <option value="">Español</option>
                                                            <option value="">Français</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group">
                                                        <label>Currency</label>
                                                        <select class="my-select2" style="width: 100%;">
                                                            <option value="">US $</option>
                                                            <option value="">US2 $</option>
                                                            <option value="">US3 $</option>
                                                            <option value="">US4 $</option>
                                                            <option value="">US5 $</option>
                                                            <option value="">US6 $</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-green">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="middle_line">
                                        <a href="#">Sign In / Register <b>Get $100</b></a>
                                    </div>
                                    <div class="bottom_line">
                                        <a href="#" class="header_mob_tabs_trigger current_tab" data-tab="categories">Categories</a>
                                        <span>|</span>
                                        <a href="#" class="header_mob_tabs_trigger" data-tab="account">Account</a>
                                        <span>|</span>
                                        <a href="#">Recently Viewed</a>
                                    </div>
                                </li>
                                <?php if($categories) { ?>
                                <div class="header_tab categories current">
                                    <?php foreach($categories as $cat) { 
                                        if($cat->slug == 'uncategorized') continue;

                                        $first_lvl = $cat;

                                        $second_lvl = get_terms([
                                            'taxonomy'      => ['product_cat'], 
                                            /* 'orderby'       => 'id',
                                            'order'         => 'ASC', */
                                            'hide_empty'    => false,
                                            'parent'         => $first_lvl->term_id
                                        ]); 

                                    ?>
                                    <li class="sub-menu__item">
                                        <a href="<?= get_term_link( $first_lvl, 'product_cat' ); ?>">
                                            <?= $first_lvl->name ?>

                                            <?php if($second_lvl) { ?>
                                            <button class="menu__arrow">
												<?php include locate_template('assets/img/svg/sub-menu-arrow.svg'); ?>
                                            </button>
                                            <?php } ?>
                                        </a>
                                        <?php if($second_lvl) { ?>
                                        <ul class="sub-menu">
                                            <?php foreach($second_lvl as $sec_child) { 
                                                $third_lvl = get_terms([
                                                    'taxonomy'      => ['product_cat'], 
                                                    /* 'orderby'       => 'id',
                                                    'order'         => 'ASC', */
                                                    'hide_empty'    => false,
                                                    'parent'         => $sec_child->term_id
                                                ]); 

                                                /* if(isset($_GET['dev1'])) {
                                                    echo '<pre>';
                                                    var_dump($third_lvl);
                                                    echo '</pre>';
                                                } */
                                            ?>
                                            <li class="sub-menu__item">
                                                <a href="<?= get_term_link($sec_child, 'product_cat'); ?>">
                                                    <?= $sec_child->name ?>

                                                    <?php if($third_lvl) { ?>
                                                    <button class="menu__arrow">
														<?php include locate_template('assets/img/svg/sub-menu-arrow.svg'); ?>
                                                    </button>
                                                    <?php } ?>
                                                </a>

                                                <?php if($third_lvl) { ?>
                                                <ul class="sub-menu">
                                                    <?php foreach($third_lvl as $thrd_child) { 
                                                        $fourth_lvl = get_terms([
                                                            'taxonomy'      => ['product_cat'], 
                                                            /* 'orderby'       => 'id',
                                                            'order'         => 'ASC', */
                                                            'hide_empty'    => false,
                                                            'parent'         => $thrd_child->term_id
                                                        ]); 
                                                    ?>
                                                    <li class="sub-menu__item">
                                                        <a href="<?= get_term_link($thrd_child, 'product_cat'); ?>">
                                                            <?= $thrd_child->name ?>

                                                            <?php if($fourth_lvl) { ?>
                                                            <button class="menu__arrow">
																<?php include locate_template('assets/img/svg/sub-menu-arrow.svg'); ?>
                                                            </button>
                                                            <?php } ?>
                                                        </a>

                                                        <?php if($fourth_lvl) { ?>
                                                        <ul class="sub-menu">
                                                            <?php foreach($fourth_lvl as $fourth_child) { 
                                                                $fifth_lvl = get_terms([
                                                                    'taxonomy'      => ['product_cat'], 
                                                                    /* 'orderby'       => 'id',
                                                                    'order'         => 'ASC', */
                                                                    'hide_empty'    => false,
                                                                    'parent'         => $fourth_child->term_id
                                                                ]); 
                                                            ?>
                                                            <li class="sub-menu__item">
                                                                <a href="<?= get_term_link($fourth_child, 'product_cat'); ?>">
                                                                    <?= $fourth_child->name ?>

                                                                    <?php if($fifth_lvl) { ?>
                                                                    <button class="menu__arrow">
																		<?php include locate_template('assets/img/svg/sub-menu-arrow.svg'); ?>
                                                                    </button>
                                                                    <?php } ?>
                                                                </a>
                                                                <?php if($fifth_lvl) { ?>
                                                                <ul class="sub-menu">
                                                                    <?php foreach($fifth_lvl as $fifth_child) { ?>
                                                                    <li class="sub-menu__item">
                                                                        <a href="<?= get_term_link($fifth_child, 'product_cat'); ?>">
                                                                            <?= $fifth_child->name ?>
                                                                        </a>
                                                                    </li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <?php } ?>
                                                            </li>
                                                            <?php } ?>
                                                        </ul>
                                                        <?php } ?>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                                <?php } ?>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>
                                    </li>
                                    <?php } ?>
                                </div>
                                <?php } ?>
                                <div class="header_tab account">
                                    <ul class="account__current">
                                        <li class="current" rel="tab1">
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li rel="tab2">
                                            <a href="#">Account Details</a>
                                        </li>
                                        <li rel="tab3">
                                            <a href="#">Addresses</a>
                                        </li>
                                        <li rel="tab4">
                                            <a href="#">Payment Methods</a>
                                        </li>
                                        <li rel="tab5">
                                            <a href="#">Orders & Tracking</a>
                                        </li>
                                        <li rel="tab6">
                                            <a href="#">Wishlist</a>
                                        </li>
                                        <li rel="tab7">
                                            <div class="account_current-item">
                                                <div>
                                                    <a href="#">Store Credit</a>
                                                    <span>(US $100)</span>
                                                </div>
                                                <div>
                                                    <a href="#">Reward Coupons</a>
                                                    <span>24</span>
                                                </div>
                                                <div>
                                                    <a href="#">Referal Coupons (Share & Earn)</a>
                                                    <span>16</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="border-bottom" rel="tab8">
                                            <a href="#">100% Free Items (Giveaway)</a>
                                        </li>
                                        <li >
                                            <a href="#">Help Center & Contact</a>
                                        </li>
                                        <li>
                                            <a href="#">Shipping & Delivery</a>
                                        </li>
                                        <li>
                                            <a href="#">Return Policy</a>
                                        </li>
                                        <li class="border-bottom">
                                            <a href="#">How To Order</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li class="border-bottom">
                                            <a href="#">About Us</a>
                                        </li>
                                        <li class=" border-bottom" rel="tab15">
                                            <a href="#">Sign Out</a>
                                        </li>
                                        <li>
                                            <a href="#">Stay Connected</a>
                                            <ul class="account__linkt-socials">
                                                <li class="account__linkt-item">
                                                    <a href="#">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-facebook.svg" alt="icon">
                                                    </a>
                                                </li>
                                                <li class="account__linkt-item">
                                                    <a href="#">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-twitter.svg" alt="icon">
                                                    </a>
                                                </li>
                                                <li class="account__linkt-item">
                                                    <a href="#">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-pinterest.svg" alt="icon">
                                                    </a>
                                                </li>
                                                <li class="account__linkt-item">
                                                    <a href="#">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/icon-instagram.svg" alt="icon">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </li>
                    </ul>
                    <ul class="acordeon-menu menu__list">
                        <li class="has-sub">
                            <a href="#">
                                Home
                                <button class="menu__arrow">
									<?php include get_stylesheet_directory() . '/assets/img/svg/menu-arrow.svg' ?>
                                </button>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Chinese</a></li>
                                <li class="sub-menu__item"><a href="#">Thai</a></li>
                                <li class="sub-menu__item"><a href="#">Vietnamese</a></li>
                                <li class="sub-menu__item"><a href="#">Korean</a></li>
                                <li class="sub-menu__iteml"><a href="#">see more</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                Popular
                                <button class="menu__arrow">
									<?php include get_stylesheet_directory() . '/assets/img/svg/menu-arrow.svg' ?>
                                </button>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Chinese</a></li>
                                <li class="sub-menu__item"><a href="#">Thai</a></li>
                                <li class="sub-menu__item"><a href="#">Vietnamese</a></li>
                                <li class="sub-menu__item"><a href="#">Korean</a></li>
                                <li class="sub-menu__iteml"><a href="#">see more</a></li>
                            </ul>
                        </li class="has-sub">
                        <li>
                            <a href="#">
                                New Arrivals
                                <button class="menu__arrow">
									<?php include get_stylesheet_directory() . '/assets/img/svg/menu-arrow.svg' ?>
                                </button>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Chinese</a></li>
                                <li class="sub-menu__item"><a href="#">Thai</a></li>
                                <li class="sub-menu__item"><a href="#">Vietnamese</a></li>
                                <li class="sub-menu__item"><a href="#">Korean</a></li>
                                <li class="sub-menu__iteml"><a href="#">see more</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                Promotions
                                <button class="menu__arrow">
									<?php include get_stylesheet_directory() . '/assets/img/svg/menu-arrow.svg' ?>
                                </button>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Chinese</a></li>
                                <li class="sub-menu__item"><a href="#">Thai</a></li>
                                <li class="sub-menu__item"><a href="#">Vietnamese</a></li>
                                <li class="sub-menu__item"><a href="#">Korean</a></li>
                                <li class="sub-menu__iteml"><a href="#">see more</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                Recently Viewed
                                <button class="menu__arrow">
									<?php include get_stylesheet_directory() . '/assets/img/svg/menu-arrow.svg' ?>
                                </button>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Indian</a></li>
                                <li class="sub-menu__item"><a href="#">Chinese</a></li>
                                <li class="sub-menu__item"><a href="#">Thai</a></li>
                                <li class="sub-menu__item"><a href="#">Vietnamese</a></li>
                                <li class="sub-menu__item"><a href="#">Korean</a></li>
                                <li class="sub-menu__iteml"><a href="#">see more</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container-big header__container">
            <div class="header__bottom-body">
                Free or low flat rate shipping & Easy returns worldwide!
            </div>
        </div>
    </div>
</header>
