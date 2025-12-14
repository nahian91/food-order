<?php
/**
 * Awesome Food Order functions and definitions
 *
 * @package Awesome_Food_Order
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*--------------------------------------------------------------
# Theme Setup
--------------------------------------------------------------*/
function awesome_food_order_setup() {

	// Translation ready
	load_theme_textdomain( 'awesome-food-order', get_template_directory() . '/languages' );

	// Title tag
	add_theme_support( 'title-tag' );

	// Featured image
	add_theme_support( 'post-thumbnails' );

	// HTML5 support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// Custom logo
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 220,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// RSS feed
	add_theme_support( 'automatic-feed-links' );

	// Menus
	register_nav_menus(
		array(
			'primary_menu' => __( 'Primary Menu', 'awesome-food-order' ),
			'footer_menu'  => __( 'Footer Menu', 'awesome-food-order' ),
		)
	);
}
add_action( 'after_setup_theme', 'awesome_food_order_setup' );

/*--------------------------------------------------------------
# Content Width
--------------------------------------------------------------*/
function awesome_food_order_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'awesome_food_order_content_width', 1200 );
}
add_action( 'after_setup_theme', 'awesome_food_order_content_width', 0 );

/**
 * Enqueue Theme Styles & Scripts
 */
function awesome_food_order_assets() {

	$ver = wp_get_theme()->get( 'Version' );
	$uri = get_template_directory_uri() . '/assets';

	/* --------------------
	 * Styles
	 * -------------------- */
	wp_enqueue_style( 'bootstrap',        $uri . '/css/bootstrap.min.css', [], $ver );
	wp_enqueue_style( 'font-awesome',     $uri . '/css/font-awesome.min.css', [], $ver );
	wp_enqueue_style( 'flaticon',          $uri . '/css/flaticon-set.css', [], $ver );
	wp_enqueue_style( 'magnific-popup',    $uri . '/css/magnific-popup.css', [], $ver );
	wp_enqueue_style( 'swiper',             $uri . '/css/swiper-bundle.min.css', [], $ver );
	wp_enqueue_style( 'animate',            $uri . '/css/animate.min.css', [], $ver );
	wp_enqueue_style( 'datepicker',         $uri . '/css/bootstrap-datepicker3.css', [], $ver );
	wp_enqueue_style( 'validnavs',           $uri . '/css/validnavs.css', [], $ver );
	wp_enqueue_style( 'helper',              $uri . '/css/helper.css', [], $ver );
	wp_enqueue_style( 'unit-test',           $uri . '/css/unit-test.css', [], $ver );
	wp_enqueue_style( 'shop',                $uri . '/css/shop.css', [], $ver );
	wp_enqueue_style( 'theme-style',         $uri . '/css/style.css', [], $ver );

	// Main WordPress style.css
	wp_enqueue_style( 'awesome-food-order-style', get_stylesheet_uri(), [], $ver );

	/* --------------------
	 * Scripts
	 * -------------------- */

	// Use WordPress jQuery (DO NOT load your own)
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap',        $uri . '/js/bootstrap.bundle.min.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'appear',           $uri . '/js/jquery.appear.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'swiper',            $uri . '/js/swiper-bundle.min.js', [], $ver, true );
	wp_enqueue_script( 'progress-bar',     $uri . '/js/progress-bar.min.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'wow',               $uri . '/js/wow.min.js', [], $ver, true );
	wp_enqueue_script( 'isotope',           $uri . '/js/isotope.pkgd.min.js', [], $ver, true );
	wp_enqueue_script( 'imagesloaded',      $uri . '/js/imagesloaded.pkgd.min.js', [], $ver, true );
	wp_enqueue_script( 'magnific-popup',    $uri . '/js/magnific-popup.min.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'count-to',          $uri . '/js/count-to.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'nice-select',       $uri . '/js/jquery.nice-select.min.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'ytplayer',           $uri . '/js/YTPlayer.min.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'loopcounter',       $uri . '/js/loopcounter.js', [], $ver, true );
	wp_enqueue_script( 'validnavs-js',      $uri . '/js/validnavs.js', [], $ver, true );
	wp_enqueue_script( 'datepicker-js',     $uri . '/js/bootstrap-datepicker.js', ['jquery'], $ver, true );
	wp_enqueue_script( 'gsap',               $uri . '/js/gsap.js', [], $ver, true );
	wp_enqueue_script( 'scrolltrigger',     $uri . '/js/ScrollTrigger.min.js', ['gsap'], $ver, true );
	wp_enqueue_script( 'splittext',          $uri . '/js/SplitText.min.js', ['gsap'], $ver, true );

	// Main JS
	wp_enqueue_script( 'awesome-food-order-main', $uri . '/js/main.js', ['jquery'], $ver, true );

}
add_action( 'wp_enqueue_scripts', 'awesome_food_order_assets' );

/*--------------------------------------------------------------
# Elementor Custom Category
--------------------------------------------------------------*/
function afo_add_elementor_category( $elements_manager ) {

	$elements_manager->add_category(
		'afo-category',
		[
			'title' => __( 'Food Order Widgets', 'awesome-food-order' ),
			'icon'  => 'fa fa-cutlery',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'afo_add_elementor_category' );


/*--------------------------------------------------------------
# Register Elementor Widgets
--------------------------------------------------------------*/
function afo_register_elementor_widgets( $widgets_manager ) {

	// // Widgets file load
	// require_once get_template_directory() . '/elementor/widgets/food-menu-widget.php';

	// // Register widget
	// $widgets_manager->register( new \AFO_Food_Menu_Widget() );

}
add_action( 'elementor/widgets/register', 'afo_register_elementor_widgets' );
