<?php
// Exit if accessed directly
if (!defined("ABSPATH")) {
	exit();
}
/**
 * Parking Systems functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Aabo
 * @since 1.0
 */

function get_theme_domain() {
	return "Aabo";
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function Aabo_setup() {
	/*
		     * Make theme available for translation.
		     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/herb-and-water
		     * If you're building a theme based on Parking Systems, use a find and replace
		     * to change 'herb-and-water' to the name of your theme in all the template files.
	*/
	load_theme_textdomain("Aabo");
	// Add default posts and comments RSS feed links to head.
	add_theme_support("automatic-feed-links");
	/*
		     * Let WordPress manage the document title.
		     * By adding theme support, we declare that this theme does not use a
		     * hard-coded <title> tag in the document head, and expect WordPress to
		     * provide it for us.
	*/
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
	/*
		     * Enable support for Post Thumbnails on posts and pages.
		     *
		     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support("post-thumbnails");
	/*
		     * Switch default core markup for search form, comment form, and comments
		     * to output valid HTML5.
	*/
	add_theme_support("html5", ["comment-form", "contact-from"]);
	// Set the default content width.
	$GLOBALS["content_width"] = 525;
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus([
		"main-menu" => __("Main Menu", get_theme_domain()),
		"footer-menu" => __("Footer Menu", get_theme_domain()),
	]);
	/*
		     * This theme styles the visual editor to resemble the theme style,
		     * specifically font, colors, and column width.
	*/
	add_editor_style(["css/editor-style.css"]);
	//add_theme_support( 'woocommerce' );
}

add_action("after_setup_theme", "Aabo_setup");

/**
 * Enqueues scripts and styles.
 */

function Aabo_scripts() {

	// Theme Main Stylesheet
	wp_enqueue_style(
		"Aabo-swiper",
		get_theme_file_uri("css/vendor/swiper-bundle.min.css"),
		[],
		rand()
	);

	// Scrollbar Stylesheet
	wp_enqueue_style( 
		"Aabo-scrollbar",
		get_theme_file_uri("css/vendor/jquery.mCustomScrollbar.css"),
		[],
		rand()
	);

	// Theme Responsive Stylesheet
	wp_enqueue_style(
		"Aabo-style",
		get_theme_file_uri("css/style.css"),
		[],
		rand()
	);

	wp_enqueue_style(
		"Aabo-icons",
		get_theme_file_uri("css/icons.css"),
		[],
		rand()
	);

	wp_enqueue_style(
		"Aabo-normalize",
		get_theme_file_uri("css/normalize.css"),
		[],
		rand()
	);

	wp_enqueue_style(
		"Aabo-responsive-style",
		get_theme_file_uri("css/responsive.css"),
		[],
		rand()
	);

	// Theme Normalize Stylesheet
	//wp_enqueue_style( 'quest-audio-normalize-style', get_theme_file_uri('css/normalize.css'), array(), rand() );

	//check is not admin

	if (!is_admin()) {
		//Unload WP default jQuery

		wp_deregister_script("jquery");

		//Load jquery

		wp_register_script(
			"jquery",
			get_theme_file_uri("js/vendor/jquery.js"),
			[],
			null,
			true
		);

		wp_enqueue_script("jquery");
	} //Endif

	// Owl Script File
	wp_enqueue_script(
		"Aabo-swiper-script",
		get_theme_file_uri("js/vendor/swiper-bundle.min.js"),
		[],
		null,
		true
	);

	// Scrollbar File

 	wp_enqueue_script(
		"Aabo-scrollbar-script",
		get_theme_file_uri("js/vendor/jquery.mCustomScrollbar.concat.min.js"),
		[],
		null,
		true
	 );


	// Lightcase Script File
	wp_enqueue_script(
		"Aabo-waypoints-script",
		get_theme_file_uri("js/vendor/jquery.waypoints.min.js"),
		[],
		null,
		true
	);


	// Theme Main Script File
	wp_enqueue_script(
		"Aabo-counterup2-script",
		get_theme_file_uri("js/vendor/counterup2.js"),
		[],
		rand(),
		true
	);

	wp_enqueue_script(
		"Aabo-general-script",
		get_theme_file_uri("js/general.js"),
		[],
		rand(),
		true
	);
}

add_action("wp_enqueue_scripts", "Aabo_scripts");

//Add acf option for the theme

if (function_exists("acf_add_options_page")) {
	acf_add_options_page(); //Options Page
} //endif

if (!function_exists("Aabo_add_favicon")):

	function Aabo_add_favicon() {
		$favicom = get_field("favicon_icon", "option")
		? get_field("favicon_icon", "option")
		: get_theme_file_uri("/images/favicon.ico");

		echo '<link rel="shortcut icon" href="' . $favicom . '" />';
	}
	add_action("login_head", "Aabo_add_favicon");
	add_action("admin_head", "Aabo_add_favicon");
	add_action("wp_head", "Aabo_add_favicon");
endif; //endif
/**

 * Add Body class for logged in admin

 */

add_filter("body_class", "Aabo_admin_body_class");

function Aabo_admin_body_class($classes) {
	$user = wp_get_current_user();

	if (current_user_can("administrator")) {
		$classes[] = "admin-logged-in"; // your custom class name
	}

	if (!is_page("home")) {
		$classes[] = "inner-page";
	}

	//return $classes;

	return $classes;
}

if (!function_exists("Aabo_mime_types")):
	/**

	 * Mime Types

	 **/

	function Aabo_mime_types($mimes) {
		$mimes["svg"] = "image/svg+xml";

		return $mimes;
	}

	add_filter("upload_mimes", "Aabo_mime_types");
endif; //endif

add_filter('nav_menu_css_class', 'Aabo_nav_class', 10, 2);

function Aabo_nav_class($classes, $item) {
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active ';
	}
	return $classes;
}

// Our News custom post type function
function create_newsposttype() {

	register_post_type('news',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Nieuws'),
				'singular_name' => __('News'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_newsposttype');

// Our Director custom post type function
function create_directorposttype() {

	register_post_type('directors',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Medewerkers'),
				'singular_name' => __('directors'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'directors'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_directorposttype');

// Our Employee custom post type function
function create_employeeposttype() {

	register_post_type('employees',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Diensten'),
				'singular_name' => __('employees'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'employees'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_employeeposttype');

// Our Service custom post type function
function create_serviceposttype() {

	register_post_type('services',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Services'),
				'singular_name' => __('services'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'services'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_serviceposttype');

// Our Construction Companies custom post type function
function create_sectorposttype() {

	register_post_type('Sector',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Sectoren'),
				'singular_name' => __('sector'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'sector'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_sectorposttype');

add_image_size('over-abo',344,472,true);
add_image_size('footer-service-section',643,625,true);
add_image_size('over-abo-home',656,543,true);

// CPT Remove Postname in URL
function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'employees' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'employees', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );