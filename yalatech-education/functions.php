<?php
/**
 * yalatech-education-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yalatech-education-theme
 */
require_once('bs4navwalker.php');

if ( ! function_exists( 'yalatech_education_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yalatech_education_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on yalatech-education-theme, use a find and replace
		 * to change 'yalatech_education' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yalatech-education', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'yalatech-education' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'yalatech_education_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'yalatech_education_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yalatech_education_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'yalatech_education_content_width', 640 );
}
add_action( 'after_setup_theme', 'yalatech_education_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yalatech_education_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yalatech-education' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'yalatech-education' ),
		'before_widget' => '<section id="%1$s" class="post %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<span class="post">',
		'after_title'   => '</span>',
	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area One', 'yalatech-education' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'yalatech-education' ),
		'before_widget' => '<div id="%1$s" class="widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-part">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Two', 'yalatech-education' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'yalatech-education' ),
		'before_widget' => '<div id="%1$s" class="widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Three', 'yalatech-education' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'yalatech-education' ),
		'before_widget' => '<div id="%1$s" class="widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area Four', 'yalatech-education' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'yalatech-education' ),
		'before_widget' => '<div id="%1$s" class="widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'yalatech_education_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yalatech_education_scripts() {

	$min = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

	// Css for the theme
	
	wp_enqueue_style( 'yalatech-education-style', get_stylesheet_uri() );
	wp_enqueue_style( 'yalatech-education-theme-reset-css', get_template_directory_uri() . '/assets/css/reset' . $min . '.css' );
	wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/assets/library/font-awesome/css/fontawesome-all' . $min . '.css' );
	wp_enqueue_style( 'yalatech-education-theme-bootstrap-css', get_template_directory_uri() . '/assets/library/bootstrap/css/bootstrap' . $min . '.css' );
	wp_enqueue_style( 'yalatech-education-theme-style-css', get_template_directory_uri() . '/assets/css/style' . $min . '.css' );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css' );
	wp_enqueue_style( 'yalatech-education-theme-owl_carousel_min-css', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css' );
	wp_enqueue_style( 'yalatech-education-theme-owl_theme-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css' );
	wp_enqueue_style( 'yalatech-education-theme-Open_Sans-css', 'https://fonts.googleapis.com/css?family=Open+Sans' );
	wp_enqueue_style( 'yalatech-education-theme-owl-Lato-Open-Sans', 'https://fonts.googleapis.com/css?family=Lato|Open+Sans' );
	wp_enqueue_style( 'yalatech-education-theme-owl-family-Raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,700' );

	//js for the theme

	wp_enqueue_script( 'yalatech-education-bootstrap-js', get_template_directory_uri() . '/assets/library/bootstrap/js/bootstrap' . $min . '.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'yalatech-education-custom-js', get_template_directory_uri() . '/assets/js/custom' . $min . '.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'yalatech-education-lightbox-js', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min' . $min . '.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', array( 'jquery' ), true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yalatech_education_scripts' );



/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'assets/css/custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

/**
 * Selelct color function for the top header
 */



//output customize css

function color_option_top_header_output_css (){ ?>

	<style type="text/css">
	<?php $top_header = get_theme_mod( 'top_header_bg' ); ?>
	.top-header {
		background: <?php echo esc_html( $top_header ) ; ?>;
	}
</style>


<?php }

add_action( 'wp_head', 'color_option_top_header_output_css' );




//output customize css

function breadcrumb_background_image_css (){ ?>

	<style type="text/css">
	<?php $bg_image = get_theme_mod( 'yalatech_education_breadcrumb_background_image' ) ; ?>
	.wrapper {
		background: url(' <?php echo esc_html( $bg_image ); ?>;');
		padding: 74px 0 0 0;
	}
</style>


<?php }

add_action( 'wp_head', 'breadcrumb_background_image_css' );

/**
 * Implement the Customizer setting for fornt page.
 */
require get_template_directory() . '/inc/customizer/customizer-setting.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Implement the hooks  feature.
 */
require get_template_directory() . '/inc/hooks/hooks.php';

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
 *  Default Sanitization function
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

