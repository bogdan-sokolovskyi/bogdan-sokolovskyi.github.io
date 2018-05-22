<?php

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_false' );
/**
 * Required: include OptionTree.
 */
load_template( trailingslashit( get_template_directory() ) . 'admin/ot-loader.php' );
load_template( trailingslashit( get_template_directory() ) . 'include/theme-options.php' );
load_template( trailingslashit( get_template_directory() ) . 'include/meta-boxes.php' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function smaland_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Main Menu', 'smaland' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
add_action( 'after_setup_theme', 'smaland_setup' );

/**
 * Register widget area.
*/
function smaland_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'smaland' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'smaland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'smaland_widgets_init' );

/**
 * Enqueue styles.
 */
function smaland_styles() {
	wp_enqueue_style('smaland-bootstrap-css', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('smaland-cdn-font', 'https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i');
	wp_enqueue_style('smaland-cdn-font', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700');
	wp_enqueue_style('smaland-font', get_template_directory_uri() . '/assets/css/fonts.css');
	wp_enqueue_style('smaland-font-awesome', get_template_directory_uri() . '/assets/fonts/Font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('smaland-animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('smaland-popup-css', get_template_directory_uri() . '/assets/libs/magnific-popup/magnific-popup.css');
	wp_enqueue_style('smaland-general', get_template_directory_uri() . '/assets/css/general.css');
}
add_action( 'wp_enqueue_scripts', 'smaland_styles' );

/**
 * Enqueue scripts.
 */
function smaland_scripts() {

	// add html5 for old browsers.
	wp_enqueue_script('smaland_html5-shim', get_template_directory_uri() .  '/assets/libs/html5shiv/html5shiv.min.js', array( 'jquery' ), false, false );
	wp_enqueue_script('smaland_respond', get_template_directory_uri() .  '/assets/libs/respond/respond.min.js', array( 'jquery' ), false, false );
	wp_enqueue_script('smaland_modernizr', get_template_directory_uri() . '/assets/libs/modernizr/modernizr.js', array( 'jquery' ), false, false );

	//Libs scripts
	wp_enqueue_script('smaland_jquery', get_template_directory_uri() . '/assets/libs/jquery/jquery-1.12.4.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script('smaland_bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script('smaland_flex', get_template_directory_uri() . '/assets/libs/flexslider/jquery.flexslider.js', array( 'jquery' ), false, true );
	wp_enqueue_script('smaland_popup', get_template_directory_uri() . '/assets/libs/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );

	//LCustom scripts
	wp_enqueue_script('smaland_common', get_template_directory_uri() . '/assets/js/common.js', array( 'jquery' ), false, true );

}
add_action('wp_enqueue_scripts', 'smaland_scripts');