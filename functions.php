<?php
/**
 * rebeldes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rebeldes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rebeldes_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on rebeldes, use a find and replace
		* to change 'rebeldes' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rebeldes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'rebeldes' ),
                        'menu-2' => esc_html__('Langugae', 'rebeldes'),
                        'menu-3' => esc_html__('Secondary', 'rebeldes'),
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
			'rebeldes_custom_background_args',
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

        add_image_size( 'spalten-12', 1512, 862, array( 'center', 'center' ) ); // Hard crop left top
        add_image_size( 'spalten-10', 1258, 710, array( 'center', 'center' ) ); // Hard crop left top
        add_image_size( 'spalten-6', 749, 499, array( 'center', 'center' ) ); // Hard crop left top
        add_image_size( 'spalten-4-land', 497, 321, true ); // Hard crop left top
        add_image_size( 'spalten-4-port', 497, 688, true ); // Hard crop left top
        add_image_size( 'spalten-2.5', 307, 421, array( 'center', 'center' ) ); // Hard crop left top

        add_image_size( 'artist-teaser', 900, 1050, true); // Hard crop left top
        add_image_size( 'artist-big', 1458, 2058, true);
}
add_action( 'after_setup_theme', 'rebeldes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rebeldes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rebeldes_content_width', 640 );
}
add_action( 'after_setup_theme', 'rebeldes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rebeldes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rebeldes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'rebeldes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'rebeldes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rebeldes_scripts() {
  //wp_enqueue_style( 'rebeldes-style', get_stylesheet_uri(), array(), _S_VERSION );
        wp_enqueue_style( 'rebeldes-main-style', get_template_directory_uri() . '/main.css', array(), _S_VERSION );
        
	wp_style_add_data( 'rebeldes-style', 'rtl', 'replace' );

	wp_enqueue_script( 'rebeldes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rebeldes_scripts' );



require get_template_directory() . '/post_types/artists.php';
require get_template_directory() . '/post_types/curator.php';


add_action( 'after_switch_theme', 'flush_rewrite_rules' );

// Code for plugins
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'myplugin_flush_rewrites' );
function myplugin_flush_rewrites() {
  // call your CPT registration function here (it should also be hooked into 'init')
  myplugin_custom_post_types_registration();
  flush_rewrite_rules();
}


add_action('after_setup_theme', 'hide_admin_bar');

function hide_admin_bar() {
  show_admin_bar(false);
}

require get_template_directory() . '/custom_settings.php';

function fwp_archive_per_page( $query ) {
  //if ( is_tax( 'rebeldes_artist' ) ) {
    $query->set( 'orderby', 'menu_order' );
    $query->set( 'order', 'ASC' );
    //}
}
add_filter( 'pre_get_posts', 'fwp_archive_per_page' );

