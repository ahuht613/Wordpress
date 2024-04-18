<?php
/**
 * Classic Ecommerce functions and definitions
 *
 * @package Classic Ecommerce
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'classic_ecommerce_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function classic_ecommerce_setup() {
	global $content_width;
	if ( ! isset( $content_width ) )
		$content_width = 680;

	load_theme_textdomain( 'classic-ecommerce', get_template_directory() . '/languages' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles');
	add_theme_support( 'align-wide' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header', array(
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'classic-ecommerce' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );
	
	add_editor_style( 'editor-style.css' );
}
endif; // classic_ecommerce_setup
add_action( 'after_setup_theme', 'classic_ecommerce_setup' );

function classic_ecommerce_the_breadcrumb() {
    echo '<div class="breadcrumb my-3">';

    if (!is_home()) {
        echo '<a class="home-main align-self-center" href="' . esc_url(home_url()) . '">';
        bloginfo('name');
        echo "</a>";

        if (is_category() || is_single()) {
            the_category(' , ');
            if (is_single()) {
                echo '<span class="current-breadcrumb mx-3">' . esc_html(get_the_title()) . '</span>';
            }
        } elseif (is_page()) {
            echo '<span class="current-breadcrumb mx-3">' . esc_html(get_the_title()) . '</span>';
        }
    }

    echo '</div>';
}

function classic_ecommerce_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'classic-ecommerce' ),
		'description'   => __( 'Appears on blog page sidebar', 'classic-ecommerce' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'classic-ecommerce' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'classic-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'classic-ecommerce' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'classic-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'classic-ecommerce' ),
		'description'   => __( 'Appears on shop page', 'classic-ecommerce' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'classic-ecommerce' ),
		'description'   => __( 'Appears on footer', 'classic-ecommerce' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'classic-ecommerce' ),
		'description'   => __( 'Appears on footer', 'classic-ecommerce' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'classic-ecommerce' ),
		'description'   => __( 'Appears on footer', 'classic-ecommerce' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'classic-ecommerce' ),
		'description'   => __( 'Appears on footer', 'classic-ecommerce' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="ftr-4-box widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'classic_ecommerce_widgets_init' );

function classic_ecommerce_scripts() {
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri())."/css/bootstrap.css" );
	wp_enqueue_style( 'classic-ecommerce-style', get_stylesheet_uri() );
	wp_style_add_data('classic-ecommerce-style', 'rtl', 'replace');
	wp_enqueue_style( 'owl.carousel-css', esc_url(get_template_directory_uri())."/css/owl.carousel.css" );
	wp_enqueue_style( 'classic-ecommerce-responsive', esc_url(get_template_directory_uri())."/css/responsive.css" );
	wp_enqueue_style( 'classic-ecommerce-default', esc_url(get_template_directory_uri())."/css/default.css" );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()). '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'owl.carousel-js', esc_url(get_template_directory_uri()). '/js/owl.carousel.js', array('jquery') );
	wp_enqueue_script( 'classic-ecommerce-theme', esc_url(get_template_directory_uri()) . '/js/theme.js' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri())."/css/fontawesome-all.css" );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	require get_parent_theme_file_path( '/inc/color-scheme/custom-color-control.php' );
	wp_add_inline_style( 'classic-ecommerce-style',$classic_ecommerce_color_scheme_css );

	// Font family
	$headings_font = esc_html(get_theme_mod('classic_ecommerce_headings_fonts'));
	$body_font = esc_html(get_theme_mod('classic_ecommerce_body_fonts'));

	if ($headings_font) {
	    wp_enqueue_style('classic-ecommerce-headings-fonts', 'https://fonts.googleapis.com/css?family=' . urlencode($headings_font));
	} else {
	    wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700');
	}

	if ($body_font) {
	    wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=' . urlencode($body_font));
	} else {
	    wp_enqueue_style('classic-ecommerce-source-body', 'https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
	}

}
add_action( 'wp_enqueue_scripts', 'classic_ecommerce_scripts' );

// Footer Link
define('CLASSIC_ECOMMERCE_FOOTER_LINK',__('https://www.theclassictemplates.com/wp-themes/free-wordpress-ecommerce-template/','classic-ecommerce'));

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/inc/gfonts.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/inc/addon.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/upgrade-to-pro.php';

// select
require get_template_directory() . '/inc/select/category-dropdown-custom-control.php';

/**
 * Theme Info Page.
 */
if ( ! defined( 'CLASSIC_ECOMMERCE_PRO_NAME' ) ) {
	define( 'CLASSIC_ECOMMERCE_PRO_NAME', __( 'About Classic Ecommerce', 'classic-ecommerce' ));
}

if ( ! defined( 'CLASSIC_ECOMMERCE_THEME_PAGE' ) ) {
define('CLASSIC_ECOMMERCE_THEME_PAGE',__('https://www.theclassictemplates.com/themes/','classic-ecommerce'));
}
if ( ! defined( 'CLASSIC_ECOMMERCE_SUPPORT' ) ) {
define('CLASSIC_ECOMMERCE_SUPPORT',__('https://wordpress.org/support/theme/classic-ecommerce','classic-ecommerce'));
}
if ( ! defined( 'CLASSIC_ECOMMERCE_REVIEW' ) ) {
define('CLASSIC_ECOMMERCE_REVIEW',__('https://wordpress.org/support/theme/classic-ecommerce/reviews/#new-post','classic-ecommerce'));
}
if ( ! defined( 'CLASSIC_ECOMMERCE_PRO_DEMO' ) ) {
define('CLASSIC_ECOMMERCE_PRO_DEMO',__('https://www.theclassictemplates.com/demo/classic-ecommerce/','classic-ecommerce'));
}
if ( ! defined( 'CLASSIC_ECOMMERCE_PREMIUM_PAGE' ) ) {
define('CLASSIC_ECOMMERCE_PREMIUM_PAGE',__('https://www.theclassictemplates.com/wp-themes/wordpress-ecommerce-template/','classic-ecommerce'));
}
if ( ! defined( 'CLASSIC_ECOMMERCE_THEME_DOCUMENTATION' ) ) {
define('CLASSIC_ECOMMERCE_THEME_DOCUMENTATION',__('http://theclassictemplates.com/documentation/classic-ecommerce-free/','classic-ecommerce'));
}

if ( ! function_exists( 'classic_ecommerce_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function classic_ecommerce_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/*radio button sanitization*/
function classic_ecommerce_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

if ( ! function_exists( 'classic_ecommerce_sanitize_integer' ) ) {
	function classic_ecommerce_sanitize_integer( $input ) {
		return (int) $input;
	}
}

$woocommerce_sidebar = get_theme_mod( 'classic_ecommerce_woocommerce_sidebar_product' );
	if ( 'false' == $woocommerce_sidebar ) {
$woo_product_column = 'col-lg-12 col-md-12';
	} else {
$woo_product_column = 'col-lg-9 col-md-9';
}

$woocommerce_shop_sidebar = get_theme_mod( 'classic_ecommerce_woocommerce_sidebar_shop' );
	if ( 'false' == $woocommerce_shop_sidebar ) {
$woo_shop_column = 'col-lg-12 col-md-12';
	} else {
$woo_shop_column = 'col-lg-9 col-md-9';
}
