<?php
/**
 * Apparel Ecommerce Store functions and definitions
 *
 * @package apparel_ecommerce_store
 * @since 1.0
 */

if ( ! function_exists( 'apparel_ecommerce_store_support' ) ) :
	function apparel_ecommerce_store_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
endif;

add_action( 'after_setup_theme', 'apparel_ecommerce_store_support' );

if ( ! function_exists( 'apparel_ecommerce_store_styles' ) ) :
	function apparel_ecommerce_store_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'apparel-ecommerce-store-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue the 'cr-animate-style' stylesheet
		wp_enqueue_style( 'cr-animate-style', 
			get_template_directory_uri() . '/assets/css/animate.min.css', 
			array(), 
			$theme_version, 
			'all' 
		);
		
		// Enqueue the 'cr-themeanimate-js' script, dependent on jQuery
		wp_enqueue_script( 'cr-themeanimate-js', 
			get_template_directory_uri() . '/assets/js/themeanimate.js', 
			array( 'jquery' ), 
			$theme_version, true 
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'apparel_ecommerce_store_styles' );


/* Theme Credit link */
define('APPAREL_ECOMMERCE_STORE_BUY_NOW',__('https://www.cretathemes.com/gutenberg/apparel-wordpress-theme/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_PRO_DEMO',__('https://www.cretathemes.com/preview/apparel-ecommerce-store/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_THEME_DOC',__('https://www.cretathemes.com/pro-guide/apparel-ecommerce-store-pro/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_SUPPORT',__('https://wordpress.org/support/theme/apparel-ecommerce-store/','apparel-ecommerce-store'));
define('APPAREL_ECOMMERCE_STORE_REVIEW',__('https://wordpress.org/support/theme/apparel-ecommerce-store/reviews/#new-post','apparel-ecommerce-store'));

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started.
require get_template_directory() . '/inc/get-started/get-started.php';

// Add Getstart admin notice
function apparel_ecommerce_store_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'apparel_ecommerce_store_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if( !$meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } if($current_screen->base != 'appearance_page_apparel-ecommerce-store-guide-page' ) { ?>

	    <div class="notice notice-success">
	        <h1><?php esc_html_e('Hey, Thank you for installing Apparel Ecommerce Store Theme!', 'apparel-ecommerce-store'); ?></h1>
	        <p><a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=apparel-ecommerce-store-guide-page' ) ); ?>"><?php esc_html_e('Navigate Getstart', 'apparel-ecommerce-store'); ?></a></p>
	        <p class="dismiss-link"><strong><a href="?apparel_ecommerce_store_admin_notice=1"><?php esc_html_e( 'Dismiss', 'apparel-ecommerce-store' ); ?></a></strong></p>
	    </div>
	    <?php

	}?>
	    <?php

	}
}

add_action( 'admin_notices', 'apparel_ecommerce_store_admin_notice' );

if( ! function_exists( 'apparel_ecommerce_store_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function apparel_ecommerce_store_update_admin_notice(){
    if ( isset( $_GET['apparel_ecommerce_store_admin_notice'] ) && $_GET['apparel_ecommerce_store_admin_notice'] = '1' ) {
        update_option( 'apparel_ecommerce_store_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'apparel_ecommerce_store_update_admin_notice' );

//After Switch theme function
add_action('after_switch_theme', 'apparel_ecommerce_store_getstart_setup_options');
function apparel_ecommerce_store_getstart_setup_options () {
    update_option('apparel_ecommerce_store_admin_notice', FALSE );
}