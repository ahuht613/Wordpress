<?php

    add_action( 'wp_enqueue_scripts', 'furniture_store_amberd_theme_css' );
    function furniture_store_amberd_theme_css() {

        wp_enqueue_style( 
            'furniture_store_amberd_css', 
            get_stylesheet_uri(),
            ( get_template_directory_uri() ) . 'style.css',
        ); 

        $childAmBerdMain = 'amberd-child-main-styles';
        wp_enqueue_style( $childAmBerdMain,
        get_stylesheet_directory_uri() . '/assets/css/front-end/index.css',
        );

        $childAmBerdWoo = 'amberd-child-woo-style';
        wp_enqueue_style( $childAmBerdWoo,
        get_stylesheet_directory_uri() . '/assets/css/front-end/amberd-woocommerce.css',
        );

    }

    ##################------ Removing Parent Theme Style Files ------##################

    function remove_amberd_main_scripts() {
        wp_dequeue_style( 'amberd_styles' );
        wp_deregister_style( 'amberd_styles' );
        wp_dequeue_style( 'amberd_woocommerce_styles' );
        wp_deregister_style( 'amberd_woocommerce_styles' );
    }
    add_action( 'wp_enqueue_scripts', 'remove_amberd_main_scripts', 11 );

    ##################------ INCLUDING DEFAULT OPTIONS ------##################

    require( get_theme_file_path() . '/inc/admin/furniture-store-add-default-options.php' );

    ##################------ INCLUDING CUSTOMIZER ------##################

    require( get_theme_file_path() . '/inc/customizer/customizer.php' );

    ##################------ DEFAULT CUSTOMIZER ------##################

    add_filter( 'parent_amberd_header_logo_text_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_primary_button_bg_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_primary_button_link_hover_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_main_container_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_main_container_sidebar_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_top_header_social_icons_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_header_search_button_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_header_mobile_menu_background_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_main_header_mobile_menu_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_main_header_mobile_sub_menu_button_bg_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woocommerce_cart_icon_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_single_post_banner_title_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_single_post_banner_entry_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_single_page_banner_title_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_single_page_banner_entry_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_comments_reply_box_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_comments_reply_button_bg_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_archive_banner_title_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_search_banner_title_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_blog_settings_metas_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_pagination_buttons_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_pagination_buttons_bg_hover_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_title_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_custom_homepage_latest_posts_title_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_primary_button_bg_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_primary_button_link_hover_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woocommerce_heading_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woocommerce_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woocommerce_rating_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_link_color', 'furniture_store_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_bg_hover_color', 'furniture_store_amberd_customizer_default_main_color' );
    function furniture_store_amberd_customizer_default_main_color(){
        return '#7a5bfb';
    }

    add_filter( 'parent_amberd_header_logo_gradient_color', 'furniture_store_amberd_customizer_default_second_color' );
    function furniture_store_amberd_customizer_default_second_color(){
        return '#8224e3';
    }

    add_filter( 'parent_amberd_main_container_heading_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_main_container_sidebar_heading_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_top_header_text_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_header_menu_items_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_main_header_mobile_menu_border_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_comments_reply_box_heading_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_blog_settings_title_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_blog_settings_title_border_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_blog_settings_meta_icons_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_short_description_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_sliding_text_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_content_color', 'furniture_store_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_call_action_text_color', 'furniture_store_amberd_customizer_default_third_color' );
    function furniture_store_amberd_customizer_default_third_color(){
        return '#333333';
    }

    add_filter( 'parent_amberd_top_header_bg_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_header_bg_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_single_post_banner_gradient_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_single_page_banner_gradient_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_archive_banner_bg_gradient_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_search_banner_bg_gradient_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_homepage_large_banner_bg_gradient_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_call_action_bg_gradient_color', 'furniture_store_amberd_customizer_default_fourth_color' );
    function furniture_store_amberd_customizer_default_fourth_color(){
        return '#fdfcff';
    }

    add_filter( 'parent_amberd_top_header_bg_gradient_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_top_header_border_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_top_header_social_icons_bg_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_header_bg_gradient_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_single_post_banner_bg_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_single_page_banner_bg_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_archive_banner_bg_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_search_banner_bg_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_homepage_large_banner_bg_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_call_action_bg_color', 'furniture_store_amberd_customizer_default_fifth_color' );
    function furniture_store_amberd_customizer_default_fifth_color(){
        return '#f2f2f2';
    }

    add_filter( 'parent_amberd_woocommerce_cart_icon_number_color', 'furniture_store_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_blog_settings_posts_list_bg_color', 'furniture_store_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_custom_homepage_latest_posts_block_color', 'furniture_store_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_not_found_page_bg_color', 'furniture_store_amberd_customizer_default_sixth_color' );
    function furniture_store_amberd_customizer_default_sixth_color(){
        return '#ffffff';
    }
    
    add_filter( 'parent_amberd_single_post_banner_entry_link_hover_color', 'furniture_store_amberd_customizer_default_seventh_color' );
    add_filter( 'parent_amberd_single_page_banner_entry_link_hover_color', 'furniture_store_amberd_customizer_default_seventh_color' );
    function furniture_store_amberd_customizer_default_seventh_color(){
        return '#ff5952';
    }
    
    add_filter( 'parent_amberd_pagination_buttons_text_color', 'furniture_store_amberd_customizer_default_eighth_color' );
    add_filter( 'parent_amberd_pagination_buttons_text_hover_color', 'furniture_store_amberd_customizer_default_eighth_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_text_color', 'furniture_store_amberd_customizer_default_eighth_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_text_hover_color', 'furniture_store_amberd_customizer_default_eighth_color' );
    function furniture_store_amberd_customizer_default_eighth_color(){
        return '#a8a8a8';
    }

    add_filter( 'parent_amberd_premium_features_url', 'furniture_store_amberd_customizer_pro_link' );
    function furniture_store_amberd_customizer_pro_link(){
        return 'https://wpdevart.com/wordpress-furniture-store-theme';
    }

    ##################------ CHILD FEATURES ------##################

    function amberd_furniture_store_theme_features() {
        register_nav_menu('primary_menu', esc_html__( 'Primary Menu', 'furniture-store'));
        load_theme_textdomain( 'furniture-store', get_template_directory() . '/languages' ); 
        add_theme_support( 'custom-logo' );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('wp-block-styles');
        add_theme_support('widgets');
        add_theme_support('widgets-block-editor');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "align-wide" );
        add_editor_style( 'editor-style.css' );
        add_theme_support('woocommerce');
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }

    add_action('after_setup_theme', 'amberd_furniture_store_theme_features');

    ##################------ REGISTERING CHILD WIDGETS ------##################

    function amberd_furniture_store_widgets_init() {
        $defaults = array(
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_blog_sidebar',
            'name'        => esc_html__( 'Blog Sidebar', 'furniture-store'),
            'description' => esc_html__( 'Default sidebar for blog/archive and post/page.', 'furniture-store'),
        ) ) );	
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_large_widget',
            'name'        => esc_html__( 'Footer Large Widget', 'furniture-store'),
            'description' => esc_html__( 'Large footer widget.', 'furniture-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_01',
            'name'        => esc_html__( 'Footer Widget 1', 'furniture-store'),
            'description' => esc_html__( 'A regular footer widget.', 'furniture-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_02',
            'name'        => esc_html__( 'Footer Widget 2', 'furniture-store'),
            'description' => esc_html__( 'A regular footer widget.', 'furniture-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_03',
            'name'        => esc_html__( 'Footer Widget 3', 'furniture-store'),
            'description' => esc_html__( 'A regular footer widget.', 'furniture-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_04',
            'name'        => esc_html__( 'Footer Widget 4', 'furniture-store'),
            'description' => esc_html__( 'A regular footer widget.', 'furniture-store'),
        ) ) );
    }
    add_action( 'widgets_init', 'amberd_furniture_store_widgets_init' );