<?php

    $ecommerce_zone_theme_css= "";

    /*--------------------------- Scroll To Top Positions -------------------*/

    $ecommerce_zone_scroll_position = get_theme_mod( 'ecommerce_zone_scroll_top_position','Right');
    if($ecommerce_zone_scroll_position == 'Right'){
        $ecommerce_zone_theme_css .='#button{';
            $ecommerce_zone_theme_css .='right: 20px;';
        $ecommerce_zone_theme_css .='}';
    }else if($ecommerce_zone_scroll_position == 'Left'){
        $ecommerce_zone_theme_css .='#button{';
            $ecommerce_zone_theme_css .='left: 20px;';
        $ecommerce_zone_theme_css .='}';
    }else if($ecommerce_zone_scroll_position == 'Center'){
        $ecommerce_zone_theme_css .='#button{';
            $ecommerce_zone_theme_css .='right: 50%;left: 50%;';
        $ecommerce_zone_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $ecommerce_zone_slider_img_opacity = get_theme_mod( 'ecommerce_zone_slider_opacity_color','');
    if($ecommerce_zone_slider_img_opacity == '0'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.1'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.1';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.2'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.2';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.3'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.3';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.4'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.4';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.5'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.5';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.6'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.6';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.7'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.7';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.8'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.8';
        $ecommerce_zone_theme_css .='}';
        }else if($ecommerce_zone_slider_img_opacity == '0.9'){
        $ecommerce_zone_theme_css .='.slider-box img{';
            $ecommerce_zone_theme_css .='opacity:0.9';
        $ecommerce_zone_theme_css .='}';
        }

    /*---------------------------Slider Height ------------*/

    $ecommerce_zone_slider_img_height = get_theme_mod('ecommerce_zone_slider_img_height');
    if($ecommerce_zone_slider_img_height != false){
        $ecommerce_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $ecommerce_zone_theme_css .='height: '.esc_attr($ecommerce_zone_slider_img_height).';';
        $ecommerce_zone_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Border Radius -------------------*/

    $ecommerce_zone_woo_product_border_radius = get_theme_mod('ecommerce_zone_woo_product_border_radius', 0);
    if($ecommerce_zone_woo_product_border_radius != false){
        $ecommerce_zone_theme_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .woocommerce ul.products li.product a img{';
            $ecommerce_zone_theme_css .='border-radius: '.esc_attr($ecommerce_zone_woo_product_border_radius).'px;';
        $ecommerce_zone_theme_css .='}';
    }

    /*---------------- Single post Settings ------------------*/

    $ecommerce_zone_single_post_navigation_show_hide = get_theme_mod('ecommerce_zone_single_post_navigation_show_hide',true);
    if($ecommerce_zone_single_post_navigation_show_hide != true){
        $ecommerce_zone_theme_css .='.nav-links{';
            $ecommerce_zone_theme_css .='display: none;';
        $ecommerce_zone_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $ecommerce_zone_product_sale = get_theme_mod( 'ecommerce_zone_woocommerce_product_sale','Right');
    if($ecommerce_zone_product_sale == 'Right'){
        $ecommerce_zone_theme_css .='.woocommerce ul.products li.product .onsale{';
            $ecommerce_zone_theme_css .='left: auto; right: 15px;';
        $ecommerce_zone_theme_css .='}';
    }else if($ecommerce_zone_product_sale == 'Left'){
        $ecommerce_zone_theme_css .='.woocommerce ul.products li.product .onsale{';
            $ecommerce_zone_theme_css .='left: 15px; right: auto;';
        $ecommerce_zone_theme_css .='}';
    }else if($ecommerce_zone_product_sale == 'Center'){
        $ecommerce_zone_theme_css .='.woocommerce ul.products li.product .onsale{';
            $ecommerce_zone_theme_css .='right: 50%;left: 50%;';
        $ecommerce_zone_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $ecommerce_zone_footer_bg_image = get_theme_mod('ecommerce_zone_footer_bg_image');
    if($ecommerce_zone_footer_bg_image != false){
        $ecommerce_zone_theme_css .='#colophon{';
            $ecommerce_zone_theme_css .='background: url('.esc_attr($ecommerce_zone_footer_bg_image).')!important;';
        $ecommerce_zone_theme_css .='}';
    }

    /*--------------------------- Copyright Background Color -------------------*/

    $ecommerce_zone_copyright_background_color = get_theme_mod('ecommerce_zone_copyright_background_color');
    if($ecommerce_zone_copyright_background_color != false){
        $ecommerce_zone_theme_css .='.footer_info{';
            $ecommerce_zone_theme_css .='background-color: '.esc_attr($ecommerce_zone_copyright_background_color).' !important;';
        $ecommerce_zone_theme_css .='}';
    } 

    /*--------------------------- Site Title And Tagline Color -------------------*/

    $ecommerce_zone_logo_title_color = get_theme_mod('ecommerce_zone_logo_title_color');
    if($ecommerce_zone_logo_title_color != false){
        $ecommerce_zone_theme_css .='p.site-title a, .navbar-brand a{';
            $ecommerce_zone_theme_css .='color: '.esc_attr($ecommerce_zone_logo_title_color).' !important;';
        $ecommerce_zone_theme_css .='}';
    }

    $ecommerce_zone_logo_tagline_color = get_theme_mod('ecommerce_zone_logo_tagline_color');
    if($ecommerce_zone_logo_tagline_color != false){
        $ecommerce_zone_theme_css .='.logo p.site-description, .navbar-brand p{';
            $ecommerce_zone_theme_css .='color: '.esc_attr($ecommerce_zone_logo_tagline_color).'  !important;';
        $ecommerce_zone_theme_css .='}';
    }