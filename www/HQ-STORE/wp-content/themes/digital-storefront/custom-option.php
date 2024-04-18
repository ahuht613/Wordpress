<?php

    $digital_storefront_theme_css= "";

    /*--------------------------- Scroll To Top Positions -------------------*/

    $digital_storefront_scroll_position = get_theme_mod( 'digital_storefront_scroll_top_position','Right');
    if($digital_storefront_scroll_position == 'Right'){
        $digital_storefront_theme_css .='#button{';
            $digital_storefront_theme_css .='right: 20px;';
        $digital_storefront_theme_css .='}';
    }else if($digital_storefront_scroll_position == 'Left'){
        $digital_storefront_theme_css .='#button{';
            $digital_storefront_theme_css .='left: 20px;';
        $digital_storefront_theme_css .='}';
    }else if($digital_storefront_scroll_position == 'Center'){
        $digital_storefront_theme_css .='#button{';
            $digital_storefront_theme_css .='right: 50%;left: 50%;';
        $digital_storefront_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $digital_storefront_slider_img_opacity = get_theme_mod( 'digital_storefront_slider_opacity_color','');
    if($digital_storefront_slider_img_opacity == '0'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.1'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.1';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.2'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.2';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.3'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.3';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.4'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.4';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.5'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.5';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.6'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.6';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.7'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.7';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.8'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.8';
        $digital_storefront_theme_css .='}';
        }else if($digital_storefront_slider_img_opacity == '0.9'){
        $digital_storefront_theme_css .='.slider-box img{';
            $digital_storefront_theme_css .='opacity:0.9';
        $digital_storefront_theme_css .='}';
        }

    /*---------------------------Slider Height ------------*/

    $digital_storefront_slider_img_height = get_theme_mod('digital_storefront_slider_img_height');
    if($digital_storefront_slider_img_height != false){
        $digital_storefront_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $digital_storefront_theme_css .='height: '.esc_attr($digital_storefront_slider_img_height).';';
        $digital_storefront_theme_css .='}';
    }

    /*---------------- Single post Settings ------------------*/

    $digital_storefront_single_post_navigation_show_hide = get_theme_mod('digital_storefront_single_post_navigation_show_hide',true);
    if($digital_storefront_single_post_navigation_show_hide != true){
        $digital_storefront_theme_css .='.nav-links{';
            $digital_storefront_theme_css .='display: none;';
        $digital_storefront_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $digital_storefront_product_sale = get_theme_mod( 'digital_storefront_woocommerce_product_sale','Right');
    if($digital_storefront_product_sale == 'Right'){
        $digital_storefront_theme_css .='.woocommerce ul.products li.product .onsale{';
            $digital_storefront_theme_css .='left: auto; right: 15px;';
        $digital_storefront_theme_css .='}';
    }else if($digital_storefront_product_sale == 'Left'){
        $digital_storefront_theme_css .='.woocommerce ul.products li.product .onsale{';
            $digital_storefront_theme_css .='left: 15px; right: auto;';
        $digital_storefront_theme_css .='}';
    }else if($digital_storefront_product_sale == 'Center'){
        $digital_storefront_theme_css .='.woocommerce ul.products li.product .onsale{';
            $digital_storefront_theme_css .='right: 50%;left: 50%;';
        $digital_storefront_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Border Radius -------------------*/

    $digital_storefront_woo_product_border_radius = get_theme_mod('digital_storefront_woo_product_border_radius', 0);
    if($digital_storefront_woo_product_border_radius != false){
        $digital_storefront_theme_css .='.woocommerce ul.products li.product a img{';
            $digital_storefront_theme_css .='border-radius: '.esc_attr($digital_storefront_woo_product_border_radius).'px;';
        $digital_storefront_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $digital_storefront_footer_bg_image = get_theme_mod('digital_storefront_footer_bg_image');
    if($digital_storefront_footer_bg_image != false){
        $digital_storefront_theme_css .='#colophon{';
            $digital_storefront_theme_css .='background: url('.esc_attr($digital_storefront_footer_bg_image).')!important;';
        $digital_storefront_theme_css .='}';
    }

    /*--------------------------- Copyright Background Color -------------------*/

    $digital_storefront_copyright_background_color = get_theme_mod('digital_storefront_copyright_background_color');
    if($digital_storefront_copyright_background_color != false){
        $digital_storefront_theme_css .='.footer_info{';
            $digital_storefront_theme_css .='background-color: '.esc_attr($digital_storefront_copyright_background_color).' !important;';
        $digital_storefront_theme_css .='}';
    } 

    /*--------------------------- Site Title And Tagline Color -------------------*/

    $digital_storefront_logo_title_color = get_theme_mod('digital_storefront_logo_title_color');
    if($digital_storefront_logo_title_color != false){
        $digital_storefront_theme_css .='p.site-title a, .navbar-brand a{';
            $digital_storefront_theme_css .='color: '.esc_attr($digital_storefront_logo_title_color).' !important;';
        $digital_storefront_theme_css .='}';
    }

    $digital_storefront_logo_tagline_color = get_theme_mod('digital_storefront_logo_tagline_color');
    if($digital_storefront_logo_tagline_color != false){
        $digital_storefront_theme_css .='.logo p.site-description, .navbar-brand p{';
            $digital_storefront_theme_css .='color: '.esc_attr($digital_storefront_logo_tagline_color).'  !important;';
        $digital_storefront_theme_css .='}';
    }