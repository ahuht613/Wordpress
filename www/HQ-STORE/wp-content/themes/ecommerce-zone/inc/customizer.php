<?php
/**
 * Ecommerce Zone Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Ecommerce Zone
 */

if ( ! defined( 'ECOMMERCE_ZONE_URL' ) ) {
    define( 'ECOMMERCE_ZONE_URL', esc_url( 'https://www.themagnifico.net/themes/ecommerce-wordpress-theme/', 'ecommerce-zone') );
}
if ( ! defined( 'ECOMMERCE_ZONE_TEXT' ) ) {
    define( 'ECOMMERCE_ZONE_TEXT', __( 'Ecommerce Zone Pro','ecommerce-zone' ));
}

if ( ! defined( 'ECOMMERCE_ZONE_BUY_TEXT' ) ) {
    define( 'ECOMMERCE_ZONE_BUY_TEXT', __( 'Buy Ecommerce Zone Pro','ecommerce-zone' ));
}
use WPTRT\Customize\Section\Ecommerce_Zone_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Ecommerce_Zone_Button::class );

    $manager->add_section(
        new Ecommerce_Zone_Button( $manager, 'ecommerce_zone_pro', [
            'title'       => esc_html( ECOMMERCE_ZONE_TEXT, 'ecommerce-zone' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'ecommerce-zone' ),
            'button_url'  => esc_url( ECOMMERCE_ZONE_URL )
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'ecommerce-zone-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'ecommerce-zone-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ecommerce_zone_customize_register($wp_customize){

     // Pro Version
    class Ecommerce_Zone_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( ECOMMERCE_ZONE_BUY_TEXT,'ecommerce-zone' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function Ecommerce_Zone_sanitize_custom_control( $input ) {
        return $input;
    }

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        // Site title
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title',
            'render_callback' => 'ecommerce_zone_customize_partial_blogname',
        ));
    }

    //Logo
    $wp_customize->add_setting('ecommerce_zone_logo_max_height',array(
        'default'   => '24',
        'sanitize_callback' => 'ecommerce_zone_sanitize_number_absint'
    ));
    $wp_customize->add_control('ecommerce_zone_logo_max_height',array(
        'label' => esc_html__('Logo Width','ecommerce-zone'),
        'section'   => 'title_tagline',
        'type'      => 'number'
    ));

    $wp_customize->add_setting('ecommerce_zone_logo_title', array(
        'default' => true,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_logo_title',array(
        'label'          => __( 'Enable Disable Title', 'ecommerce-zone' ),
        'section'        => 'title_tagline',
        'settings'       => 'ecommerce_zone_logo_title',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_theme_description', array(
        'default' => false,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_theme_description',array(
        'label'          => __( 'Enable Disable Tagline', 'ecommerce-zone' ),
        'section'        => 'title_tagline',
        'settings'       => 'ecommerce_zone_theme_description',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_logo_title_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ecommerce_zone_logo_title_color', array(
        'label'    => __('Site Title Color', 'ecommerce-zone'),
        'section'  => 'title_tagline'
    )));

    $wp_customize->add_setting('ecommerce_zone_logo_tagline_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ecommerce_zone_logo_tagline_color', array(
        'label'    => __('Site Tagline Color', 'ecommerce-zone'),
        'section'  => 'title_tagline'
    )));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_logo', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_logo', array(
        'section'     => 'title_tagline',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

    // Theme Color
    $wp_customize->add_section('ecommerce_zone_color_option',array(
        'title' => esc_html__('Theme Color','ecommerce-zone'),
    ));

    $wp_customize->add_setting( 'ecommerce_zone_theme_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ecommerce_zone_theme_color', array(
        'label' => esc_html__('Theme Color One','ecommerce-zone'),
        'section' => 'ecommerce_zone_color_option',
        'settings' => 'ecommerce_zone_theme_color'
    )));

    $wp_customize->add_setting( 'ecommerce_zone_theme_color_2', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ecommerce_zone_theme_color_2', array(
        'label' => esc_html__('Theme Color Two','ecommerce-zone'),
        'section' => 'ecommerce_zone_color_option',
        'settings' => 'ecommerce_zone_theme_color_2'
    )));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_theme_color', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_theme_color', array(
        'section'     => 'ecommerce_zone_color_option',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

    // Top Header
    $wp_customize->add_section('ecommerce_zone_social_info_block',array(
        'title' => esc_html__('Top Header','ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_top_header_setting', array(
        'default' => 0,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_top_header_setting',array(
        'label'          => __( 'Enable Disable Top Header', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_social_info_block',
        'settings'       => 'ecommerce_zone_top_header_setting',
        'type'           => 'checkbox',
        'priority' => 1,
    )));

    $wp_customize->add_setting('ecommerce_zone_phone_number_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('ecommerce_zone_phone_number_icon',array(
        'label' => esc_html__('Add Phone Icon','ecommerce-zone'),
        'section' => 'ecommerce_zone_social_info_block',
        'setting' => 'ecommerce_zone_phone_number_icon',
        'type'  => 'text',
        'default' => 'fas fa-phone-square',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-phone-square','ecommerce-zone')
    ));

    $wp_customize->add_setting('ecommerce_zone_phone_number_info',array(
        'default' => '',
        'sanitize_callback' => 'ecommerce_zone_sanitize_phone_number'
    ));
    $wp_customize->add_control('ecommerce_zone_phone_number_info',array(
        'label' => esc_html__('Phone Number','ecommerce-zone'),
        'section' => 'ecommerce_zone_social_info_block',
        'setting' => 'ecommerce_zone_phone_number_info',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('ecommerce_zone_phone_email_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('ecommerce_zone_phone_email_icon',array(
        'label' => esc_html__('Add Email Icon','ecommerce-zone'),
        'section' => 'ecommerce_zone_social_info_block',
        'setting' => 'ecommerce_zone_phone_email_icon',
        'type'  => 'text',
        'default' => 'fas fa-envelope-square',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-envelope-square','ecommerce-zone')
    ));

    $wp_customize->add_setting('ecommerce_zone_email_info',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email'
    ));
    $wp_customize->add_control('ecommerce_zone_email_info',array(
        'label' => esc_html__('Email Address','ecommerce-zone'),
        'section' => 'ecommerce_zone_social_info_block',
        'setting' => 'ecommerce_zone_email_info',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('ecommerce_zone_phone_location_icon',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('ecommerce_zone_phone_location_icon',array(
        'label' => esc_html__('Add Location Icon','ecommerce-zone'),
        'section' => 'ecommerce_zone_social_info_block',
        'setting' => 'ecommerce_zone_phone_location_icon',
        'type'  => 'text',
        'default' => 'fas fa-map-marker-alt',
        'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v5/search?m=free">Click Here</a> for select icon. for eg:-fas fa-map-marker-alt','ecommerce-zone')
    ));

    $wp_customize->add_setting('ecommerce_zone_location_info',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('ecommerce_zone_location_info',array(
        'label' => esc_html__('Location','ecommerce-zone'),
        'section' => 'ecommerce_zone_social_info_block',
        'setting' => 'ecommerce_zone_location_info',
        'type'  => 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_header_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_header_setting', array(
        'section'     => 'ecommerce_zone_social_info_block',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

    // General Settings
     $wp_customize->add_section('ecommerce_zone_general_settings',array(
        'title' => esc_html__('General Settings','ecommerce-zone'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('ecommerce_zone_preloader_hide', array(
        'default' => 0,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_general_settings',
        'settings'       => 'ecommerce_zone_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'ecommerce_zone_preloader_bg_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ecommerce_zone_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','ecommerce-zone'),
        'section' => 'ecommerce_zone_general_settings',
        'settings' => 'ecommerce_zone_preloader_bg_color'
    )));

    $wp_customize->add_setting( 'ecommerce_zone_preloader_dot_1_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ecommerce_zone_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','ecommerce-zone'),
        'section' => 'ecommerce_zone_general_settings',
        'settings' => 'ecommerce_zone_preloader_dot_1_color'
    )));

    $wp_customize->add_setting( 'ecommerce_zone_preloader_dot_2_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ecommerce_zone_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','ecommerce-zone'),
        'section' => 'ecommerce_zone_general_settings',
        'settings' => 'ecommerce_zone_preloader_dot_2_color'
    )));

    $wp_customize->add_setting('ecommerce_zone_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_sticky_header',array(
        'label'          => __( 'Show Sticky Header', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_general_settings',
        'settings'       => 'ecommerce_zone_sticky_header',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_scroll_hide', array(
        'default' => false,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_scroll_hide',array(
        'label'          => __( 'Show Theme Scroll To Top', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_general_settings',
        'settings'       => 'ecommerce_zone_scroll_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'ecommerce_zone_sanitize_choices'
    ));
    $wp_customize->add_control('ecommerce_zone_scroll_top_position',array(
        'type' => 'radio',
        'section' => 'ecommerce_zone_general_settings',
        'choices' => array(
            'Right' => __('Right','ecommerce-zone'),
            'Left' => __('Left','ecommerce-zone'),
            'Center' => __('Center','ecommerce-zone')
        ),
    ) );

    //Woocommerce shop page Sidebar
    $wp_customize->add_setting('ecommerce_zone_woocommerce_shop_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_woocommerce_shop_page_sidebar',array(
        'label'          => __( 'Hide Shop Page Sidebar', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_general_settings',
        'settings'       => 'ecommerce_zone_woocommerce_shop_page_sidebar',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_shop_page_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'ecommerce_zone_sanitize_choices'
    ));
    $wp_customize->add_control('ecommerce_zone_shop_page_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Shop Page Sidebar','ecommerce-zone'),
        'section' => 'ecommerce_zone_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','ecommerce-zone'),
            'Right Sidebar' => __('Right Sidebar','ecommerce-zone'),
        ),
    ) );

    //Woocommerce Single Product page Sidebar
    $wp_customize->add_setting('ecommerce_zone_woocommerce_single_product_page_sidebar', array(
        'default' => true,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_woocommerce_single_product_page_sidebar',array(
        'label'          => __( 'Hide Single Product Page Sidebar', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_general_settings',
        'settings'       => 'ecommerce_zone_woocommerce_single_product_page_sidebar',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_single_product_sidebar_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'ecommerce_zone_sanitize_choices'
    ));
    $wp_customize->add_control('ecommerce_zone_single_product_sidebar_layout',array(
        'type' => 'select',
        'label' => __('Woocommerce Single Product Page Sidebar','ecommerce-zone'),
        'section' => 'ecommerce_zone_general_settings',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','ecommerce-zone'),
            'Right Sidebar' => __('Right Sidebar','ecommerce-zone'),
        ),
    ) );

    $wp_customize->add_setting('ecommerce_zone_woocommerce_product_sale',array(
        'default' => 'Left',
        'sanitize_callback' => 'ecommerce_zone_sanitize_choices'
    ));
    $wp_customize->add_control('ecommerce_zone_woocommerce_product_sale',array(
        'type' => 'radio',
        'section' => 'ecommerce_zone_general_settings',
        'choices' => array(
            'Right' => __('Right','ecommerce-zone'),
            'Left' => __('Left','ecommerce-zone'),
            'Center' => __('Center','ecommerce-zone')
        ),
    ) );

     //Products border radius
    $wp_customize->add_setting( 'ecommerce_zone_woo_product_border_radius', array(
        'default'              => '0',
        'transport'            => 'refresh',
        'sanitize_callback'    => 'ecommerce_zone_sanitize_number_range'
    ) );
    $wp_customize->add_control( 'ecommerce_zone_woo_product_border_radius', array(
        'label'       => esc_html__( 'Product Border Radius','ecommerce-zone' ),
        'section'     => 'ecommerce_zone_general_settings',
        'type'        => 'range',
        'input_attrs' => array(
            'step'             => 1,
            'min'              => 1,
            'max'              => 150,
        ),
    ) );

    // Pro Version
    $wp_customize->add_setting( 'pro_version_general_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_general_setting', array(
        'section'     => 'ecommerce_zone_general_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

     // Post Settings
     $wp_customize->add_section('ecommerce_zone_post_settings',array(
        'title' => esc_html__('Post Settings','ecommerce-zone'),
        'priority'   =>40,
    ));

    $wp_customize->add_setting('ecommerce_zone_post_page_title',array(
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_post_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Title', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_post_settings',
        'description' => esc_html__('Check this box to enable title on post page.', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_post_page_meta',array(
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_post_page_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Meta', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_post_settings',
        'description' => esc_html__('Check this box to enable meta on post page.', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_post_page_thumb',array(
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_post_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Thumbnail', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_post_settings',
        'description' => esc_html__('Check this box to enable thumbnail on post page.', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_single_post_thumb',array(
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_single_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Thumbnail', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_post_settings',
        'description' => esc_html__('Check this box to enable post thumbnail on single post.', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_single_post_meta',array(
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_single_post_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Meta', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_post_settings',
        'description' => esc_html__('Check this box to enable single post meta such as post date, author, category, comment etc.', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_single_post_title',array(
            'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_single_post_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Title', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_post_settings',
        'description' => esc_html__('Check this box to enable title on single post.', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_single_post_navigation_show_hide',array(
        'default' => true,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control('ecommerce_zone_single_post_navigation_show_hide',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Post Navigation','ecommerce-zone'),
        'section' => 'ecommerce_zone_post_settings',
    ));

    $wp_customize->add_setting('ecommerce_zone_single_post_comment_title',array(
        'default'=> 'Leave a Reply',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('ecommerce_zone_single_post_comment_title',array(
        'label' => __('Add Comment Title','ecommerce-zone'),
        'input_attrs' => array(
        'placeholder' => __( 'Leave a Reply', 'ecommerce-zone' ),
        ),
        'section'=> 'ecommerce_zone_post_settings',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('ecommerce_zone_single_post_comment_btn_text',array(
        'default'=> 'Post Comment',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('ecommerce_zone_single_post_comment_btn_text',array(
        'label' => __('Add Comment Button Text','ecommerce-zone'),
        'input_attrs' => array(
            'placeholder' => __( 'Post Comment', 'ecommerce-zone' ),
        ),
        'section'=> 'ecommerce_zone_post_settings',
        'type'=> 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_post_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_post_setting', array(
        'section'     => 'ecommerce_zone_post_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

    // Page Settings
    $wp_customize->add_section('ecommerce_zone_page_settings',array(
        'title' => esc_html__('Page Settings','ecommerce-zone'),
        'priority'   =>50,
    ));

    $wp_customize->add_setting('ecommerce_zone_single_page_title',array(
            'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_single_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Title', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_page_settings',
        'description' => esc_html__('Check this box to enable title on single page.', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_single_page_thumb',array(
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('ecommerce_zone_single_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Thumbnail', 'ecommerce-zone'),
        'section'     => 'ecommerce_zone_page_settings',
        'description' => esc_html__('Check this box to enable page thumbnail on single page.', 'ecommerce-zone'),
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_single_page_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_single_page_setting', array(
        'section'     => 'ecommerce_zone_page_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

    //Top Product Slider
    $wp_customize->add_section('ecommerce_zone_top_slider',array(
        'title' => esc_html__('Top Product Sale Slider','ecommerce-zone'),
        'description' => esc_html__('Here you have to add 3 different pages in below dropdown. Note: Image Dimensions 1200 x 400 px','ecommerce-zone')
    ));

    $wp_customize->add_setting('ecommerce_zone_top_slider_setting', array(
        'default' => 0,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_top_slider_setting',array(
        'label'          => __( 'Enable Disable Slider', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_top_slider',
        'settings'       => 'ecommerce_zone_top_slider_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_slider_loop', array(
        'default' => false,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_slider_loop',array(
        'label'          => __( 'Enable Disable Slider Loop', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_top_slider',
        'settings'       => 'ecommerce_zone_slider_loop',
        'type'           => 'checkbox',
    )));

    for ( $ecommerce_zone_count = 1; $ecommerce_zone_count <= 3; $ecommerce_zone_count++ ) {

        $wp_customize->add_setting( 'ecommerce_zone_top_slider_page' . $ecommerce_zone_count, array(
            'default'           => '',
            'sanitize_callback' => 'ecommerce_zone_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'ecommerce_zone_top_slider_page' . $ecommerce_zone_count, array(
            'label'    => __( 'Select Slide Page', 'ecommerce-zone' ),
            'section'  => 'ecommerce_zone_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

    //Slider Image Opacity
    $wp_customize->add_setting('ecommerce_zone_slider_opacity_color',array(
      'default' => '',
      'sanitize_callback' => 'ecommerce_zone_sanitize_choices'
    ));

    $wp_customize->add_control( 'ecommerce_zone_slider_opacity_color', array(
    'label'       => esc_html__( 'Slider Image Opacity','ecommerce-zone' ),
    'section'     => 'ecommerce_zone_top_slider',
    'type'        => 'select',
    'choices' => array(
      '0' =>  esc_attr('0','ecommerce-zone'),
      '0.1' =>  esc_attr('0.1','ecommerce-zone'),
      '0.2' =>  esc_attr('0.2','ecommerce-zone'),
      '0.3' =>  esc_attr('0.3','ecommerce-zone'),
      '0.4' =>  esc_attr('0.4','ecommerce-zone'),
      '0.5' =>  esc_attr('0.5','ecommerce-zone'),
      '0.6' =>  esc_attr('0.6','ecommerce-zone'),
      '0.7' =>  esc_attr('0.7','ecommerce-zone'),
      '0.8' =>  esc_attr('0.8','ecommerce-zone'),
      '0.9' =>  esc_attr('0.9','ecommerce-zone')
    ),
    ));

    //Slider height
    $wp_customize->add_setting('ecommerce_zone_slider_img_height',array(
        'default'=> '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('ecommerce_zone_slider_img_height',array(
        'label' => __('Slider Height','ecommerce-zone'),
        'description'   => __('Add the slider height in px(eg. 500px).','ecommerce-zone'),
        'input_attrs' => array(
            'placeholder' => __( '500px', 'ecommerce-zone' ),
        ),
        'section'=> 'ecommerce_zone_top_slider',
        'type'=> 'text'
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_slider_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_slider_setting', array(
        'section'     => 'ecommerce_zone_top_slider',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

    //Category Product
    $wp_customize->add_section('ecommerce_zone_cat_product',array(
        'title' => esc_html__('Top Category Product','ecommerce-zone'),
        'description' => esc_html__('Here you have to add 3 different pages in below dropdown. Note: Image Dimensions 260 x 160 px','ecommerce-zone')
    ));

    $wp_customize->add_setting('ecommerce_zone_category_product_setting', array(
        'default' => 0,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_category_product_setting',array(
        'label'          => __( 'Enable Disable Product', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_cat_product',
        'settings'       => 'ecommerce_zone_category_product_setting',
        'type'           => 'checkbox',
        'priority' => 1,
    )));

    for ( $ecommerce_zone_count = 1; $ecommerce_zone_count <= 3; $ecommerce_zone_count++ ) {

        $wp_customize->add_setting( 'ecommerce_zone_category_product_page' . $ecommerce_zone_count, array(
            'default'           => '',
            'sanitize_callback' => 'ecommerce_zone_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'ecommerce_zone_category_product_page' . $ecommerce_zone_count, array(
            'label'    => __( 'Select category Page', 'ecommerce-zone' ),
            'section'  => 'ecommerce_zone_cat_product',
            'type'     => 'dropdown-pages'
        ) );
    }

    // Pro Version
    $wp_customize->add_setting( 'pro_version_product_category_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_product_category_setting', array(
        'section'     => 'ecommerce_zone_cat_product',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));


    //Home Page Product Category
    $wp_customize->add_section('ecommerce_zone_home_product_category',array(
        'title' => esc_html__('Home Product Category','ecommerce-zone'),
        'description' => esc_html__('Here you have to select product category which will display perticular product category, products in the home page.','ecommerce-zone')
    ));

    $wp_customize->add_setting('ecommerce_zone_home_product_setting', array(
        'default' => 0,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'ecommerce_zone_home_product_setting',array(
        'label'          => __( 'Enable Disable Home Product', 'ecommerce-zone' ),
        'section'        => 'ecommerce_zone_home_product_category',
        'settings'       => 'ecommerce_zone_home_product_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('ecommerce_zone_home_product_title',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('ecommerce_zone_home_product_title',array(
        'label' => esc_html__('Section Title','ecommerce-zone'),
        'section' => 'ecommerce_zone_home_product_category',
        'setting' => 'ecommerce_zone_home_product_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('ecommerce_zone_home_product_number',array(
        'default' => '',
        'sanitize_callback' => 'ecommerce_zone_sanitize_number_absint'
    ));
    $wp_customize->add_control('ecommerce_zone_home_product_number',array(
        'label' => __('No Of Products To Show','ecommerce-zone'),
        'section' => 'ecommerce_zone_home_product_category',
        'setting' => 'ecommerce_zone_home_product_number',
        'type'    => 'number'
    ));

    $ecommerce_zone_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
    $categories = get_categories( $ecommerce_zone_args );
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }
    $wp_customize->add_setting('ecommerce_zone_home_product',array(
        'sanitize_callback' => 'ecommerce_zone_sanitize_select',
    ));
    $wp_customize->add_control('ecommerce_zone_home_product',array(
        'type'    => 'select',
        'choices' => $cats,
        'label' => __('Select Product Category','ecommerce-zone'),
        'section' => 'ecommerce_zone_home_product_category',
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_product_home_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_product_home_setting', array(
        'section'     => 'ecommerce_zone_home_product_category',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));

    // Footer
    $wp_customize->add_section('ecommerce_zone_site_footer_section', array(
        'title' => esc_html__('Footer', 'ecommerce-zone'),
    ));

    $wp_customize->add_setting('ecommerce_zone_footer_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ecommerce_zone_footer_bg_image',array(
        'label' => __('Footer Background Image','ecommerce-zone'),
        'section' => 'ecommerce_zone_site_footer_section',
        'priority' => 1,
    )));

    $wp_customize->add_setting('ecommerce_zone_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ecommerce_zone_footer_text_setting', array(
        'label' => __('Replace the footer text', 'ecommerce-zone'),
        'section' => 'ecommerce_zone_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('ecommerce_zone_show_hide_copyright',array(
        'default' => true,
        'sanitize_callback' => 'ecommerce_zone_sanitize_checkbox'
    ));
    $wp_customize->add_control('ecommerce_zone_show_hide_copyright',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Copyright','ecommerce-zone'),
        'section' => 'ecommerce_zone_site_footer_section',
    ));

    $wp_customize->add_setting('ecommerce_zone_copyright_background_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ecommerce_zone_copyright_background_color', array(
        'label'    => __('Copyright Background Color', 'ecommerce-zone'),
        'section'  => 'ecommerce_zone_site_footer_section',
    )));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_footer_setting', array(
        'sanitize_callback' => 'Ecommerce_Zone_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Ecommerce_Zone_Customize_Pro_Version ( $wp_customize,'pro_version_footer_setting', array(
        'section'     => 'ecommerce_zone_site_footer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'ecommerce-zone' ),
        'description' => esc_url( ECOMMERCE_ZONE_URL ),
        'priority'    => 100
    )));
}
add_action('customize_register', 'ecommerce_zone_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ecommerce_zone_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ecommerce_zone_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ecommerce_zone_customize_preview_js(){
    wp_enqueue_script('ecommerce-zone-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'ecommerce_zone_customize_preview_js');


/*
** Load dynamic logic for the customizer controls area.
*/
function ecommerce_zone_panels_js() {
    wp_enqueue_style( 'ecommerce-zone-customizer-layout-css', get_theme_file_uri( '/assets/css/customizer-layout.css' ) );
    wp_enqueue_script( 'ecommerce-zone-customize-layout', get_theme_file_uri( '/assets/js/customize-layout.js' ), array(), '1.2', true );
}
add_action( 'customize_controls_enqueue_scripts', 'ecommerce_zone_panels_js' );
