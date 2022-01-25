<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

define( 'Carbon_Fields\DIR', get_parent_theme_file_path( 'vendor/htmlburger/carbon-fields/' ) );




if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	// define( '_S_VERSION', '1.0.0' );
	define( '_S_VERSION', time() );
}

if ( ! function_exists( 'best_of_shop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function best_of_shop_setup() {

        require_once( 'vendor/autoload.php' );
        \Carbon_Fields\Carbon_Fields::boot();


		require_once get_template_directory() . '/functions-ls.php';
		require_once get_template_directory() . '/functions-ak.php';
		require_once get_template_directory() . '/classes/require_classes.php';
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on best-of-shop, use a find and replace
		 * to change 'best-of-shop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'best-of-shop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'woocommerce' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'best-of-shop' ),
				'menu-2' => esc_html__( 'Footer', 'best-of-shop' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'best_of_shop_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'best_of_shop_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function best_of_shop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'best_of_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'best_of_shop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function best_of_shop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'best-of-shop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'best-of-shop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'best_of_shop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function best_of_shop_scripts() {
    wp_enqueue_style( 'best-of-shop-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'best-of-shop-style', 'rtl', 'replace' );

	wp_enqueue_style( 'fonts-bos', get_stylesheet_directory_uri().'/assets/fonts/stylesheet.css', array(), _S_VERSION );
	wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'flags-icon', 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css', array(), _S_VERSION );
//	wp_enqueue_style( 'select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', array(), _S_VERSION );
//	wp_enqueue_style( 'range-slider', 'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css', array(), _S_VERSION );
//	wp_enqueue_style( 'range-slider', get_template_directory_uri() .'/assets/libs/ion-rangeslider/ion.rangeSlider.min.css', array(), _S_VERSION );

//	wp_enqueue_style( 'slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), _S_VERSION );
//	wp_enqueue_style( 'flexslider-style', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/main.css', array(), _S_VERSION );

//	wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'best-of-shop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

//	wp_enqueue_script( 'rangeslider',  'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js', array(), _S_VERSION, true );
//	wp_enqueue_script( 'rangeslider-bos',  get_template_directory_uri().'/assets/libs/ion-rangeslider/ion.rangeSlider.min.js', array(), _S_VERSION, true );

//  wp_enqueue_script( 'select2-bos',  'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array(), _S_VERSION, true );
//	wp_enqueue_script( 'slick',  'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), _S_VERSION, true );
//	wp_enqueue_script( 'flexslider',  'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js', array(), _S_VERSION, true );
//	wp_enqueue_script( 'dropzone',  'https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js', array(), _S_VERSION, true );
//	wp_enqueue_script( 'dropzone',  get_template_directory_uri().'/assets/libs/dropzone/dropzone.js', array(), _S_VERSION, true );

//	wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/js/main.js', array('rangeslider','select2'), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script( 'main', 'ali', [
		'ajax_url' => admin_url('admin-ajax.php'),
	]);
}
add_action( 'wp_enqueue_scripts', 'best_of_shop_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
