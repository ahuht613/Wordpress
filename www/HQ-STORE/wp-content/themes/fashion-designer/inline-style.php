<?php
	/*------------------ Global First Color -----------*/

	$fashion_designer_first_color = get_theme_mod('fashion_designer_first_color');

	$fashion_designer_custom_css = '';

	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='.left-bg, .right-bg, #slider .more-btn a:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .tagcloud a:hover, #sidebar .custom-social-icons i, #sidebar .custom-social-icons i:hover, .scrollup, #footer-2, input[type="submit"], .more-btn a, #sidebar h3, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .scrollup i, .toggle-nav i, #comments a.comment-reply-link, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, #footer .custom-social-icons i:hover, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .wp-block-button__link, #preloader, #footer .wp-block-search .wp-block-search__button, #sidebar input[type="submit"], #sidebar .wp-block-search .wp-block-search__label, #sidebar .wp-block-search .wp-block-search__button,.bradcrumbs span, .post-categories li a,nav.navigation.posts-navigation .nav-previous a,nav.navigation.posts-navigation .nav-next a{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='#footer li a:hover, .post-main-box:hover h3, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .post-main-box:hover h3 a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer .textwidget p a, .post-main-box:hover h2 a, #footer .custom-social-icons i, #sidebar ul li a:hover, .post-main-box:hover .entry-date a, .post-main-box:hover .entry-author a, .single-post .post-info:hover a, .logo .site-title a:hover, .box-content ul.post-categories li a:hover, .fashion-box .read-btn a:hover, #slider .inner_carousel h1 a:hover{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='#slider .more-btn a:hover, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .tagcloud a:hover, #sidebar .tagcloud a:hover, #footer .custom-social-icons i, #footer .custom-social-icons i:hover{';
			$fashion_designer_custom_css .='border-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='.main-navigation ul ul{';
			$fashion_designer_custom_css .='border-top-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_first_color != false){
		$fashion_designer_custom_css .='.main-navigation ul ul, .header-fixed{';
			$fashion_designer_custom_css .='border-bottom-color: '.esc_attr($fashion_designer_first_color).';';
		$fashion_designer_custom_css .='}';
	}

	/*------------------- Global Second Color -----------*/

	$fashion_designer_second_color = get_theme_mod('fashion_designer_second_color');

	if($fashion_designer_second_color != false){
		$fashion_designer_custom_css .='a, .icon-ctr i, .info-ctr i, .info-ctr p, .search-box i, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, #footer .woocommerce-product-search button, #sidebar .woocommerce-product-search button, #sidebar h3, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar input[type="submit"], .more-btn a, #comments input[type="submit"], #footer a.custom_read_more, #sidebar a.custom_read_more, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__label,.bradcrumbs a:hover,.post-categories li a:hover{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_second_color).';';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_second_color != false){
		$fashion_designer_custom_css .='.wp-block-button__link, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.navigation.posts-navigation .nav-previous a,nav.navigation.posts-navigation .nav-next a{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_second_color).'!important;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_second_color != false){
		$fashion_designer_custom_css .='#footer a.custom_read_more:hover{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_second_color).';';
		$fashion_designer_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_width_option','Full Width');
    if($fashion_designer_theme_lay == 'Boxed'){
		$fashion_designer_custom_css .='body{';
			$fashion_designer_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.page-template-custom-home-page .home-page-header{';
			$fashion_designer_custom_css .='width: 97.4%;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.scrollup i{';
		  $fashion_designer_custom_css .='right: 100px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.scrollup.left i{';
		  $fashion_designer_custom_css .='left: 100px;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Wide Width'){
		$fashion_designer_custom_css .='body{';
			$fashion_designer_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.page-template-custom-home-page .home-page-header{';
			$fashion_designer_custom_css .='width: 97.7%;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.scrollup i{';
		  $fashion_designer_custom_css .='right: 30px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.scrollup.left i{';
		  $fashion_designer_custom_css .='left: 30px;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Full Width'){
		$fashion_designer_custom_css .='body{';
			$fashion_designer_custom_css .='max-width: 100%;';
		$fashion_designer_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_slider_opacity_color','0.4');
	if($fashion_designer_theme_lay == '0'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.1'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.1';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.2'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.2';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.3'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.3';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.4'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.4';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.5'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.5';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.6'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.6';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.7'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.7';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.8'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.8';
		$fashion_designer_custom_css .='}';
		}else if($fashion_designer_theme_lay == '0.9'){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:0.9';
		$fashion_designer_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$fashion_designer_slider_image_overlay = get_theme_mod('fashion_designer_slider_image_overlay', true);
	if($fashion_designer_slider_image_overlay == false){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='opacity:1;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_slider_image_overlay_color = get_theme_mod('fashion_designer_slider_image_overlay_color', true);
	if($fashion_designer_slider_image_overlay_color != false){
		$fashion_designer_custom_css .='#slider{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_slider_image_overlay_color).';';
		$fashion_designer_custom_css .='}';
	}


	/*----------------Slider Content Layout -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_slider_content_option','Center');
    if($fashion_designer_theme_lay == 'Left'){
		$fashion_designer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$fashion_designer_custom_css .='text-align:left; left:15%; right:45%;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Center'){
		$fashion_designer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$fashion_designer_custom_css .='text-align:center; left:20%; right:20%;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Right'){
		$fashion_designer_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$fashion_designer_custom_css .='text-align:right; left:45%; right:15%;';
		$fashion_designer_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$fashion_designer_slider_content_padding_top_bottom = get_theme_mod('fashion_designer_slider_content_padding_top_bottom');
	$fashion_designer_slider_content_padding_left_right = get_theme_mod('fashion_designer_slider_content_padding_left_right');
	if($fashion_designer_slider_content_padding_top_bottom != false || $fashion_designer_slider_content_padding_left_right != false){
		$fashion_designer_custom_css .='#slider .carousel-caption{';
			$fashion_designer_custom_css .='top: '.esc_attr($fashion_designer_slider_content_padding_top_bottom).'; bottom: '.esc_attr($fashion_designer_slider_content_padding_top_bottom).';left: '.esc_attr($fashion_designer_slider_content_padding_left_right).';right: '.esc_attr($fashion_designer_slider_content_padding_left_right).';';
		$fashion_designer_custom_css .='}';
	}

	/*------------------Slider Height ------------*/

	$fashion_designer_slider_height = get_theme_mod('fashion_designer_slider_height');
	if($fashion_designer_slider_height != false){
		$fashion_designer_custom_css .='#slider img{';
			$fashion_designer_custom_css .='height: '.esc_attr($fashion_designer_slider_height).';';
		$fashion_designer_custom_css .='}';
	}

	/*------------------- Slider -------------------*/

	$fashion_designer_slider = get_theme_mod('fashion_designer_slider_arrows');
	if($fashion_designer_slider == false){
		$fashion_designer_custom_css .='.page-template-custom-home-page .home-page-header{';
			$fashion_designer_custom_css .='position: static; background: #1b1a18; padding-bottom: 20px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.fashion-box{';
			$fashion_designer_custom_css .='margin-top: 20px;';
		$fashion_designer_custom_css .='}';
	}

	/*---------------------Blog Layout -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_blog_layout_option','Default');
    if($fashion_designer_theme_lay == 'Default'){
		$fashion_designer_custom_css .='.post-main-box{';
			$fashion_designer_custom_css .='';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Center'){
		$fashion_designer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn{';
			$fashion_designer_custom_css .='text-align:center;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-info{';
			$fashion_designer_custom_css .='margin-top:10px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-info hr{';
			$fashion_designer_custom_css .='margin:15px auto;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_theme_lay == 'Left'){
		$fashion_designer_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .post-main-box .more-btn, #our-services p{';
			$fashion_designer_custom_css .='text-align:Left;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-info hr{';
			$fashion_designer_custom_css .='margin-bottom:10px;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='.post-main-box h2{';
			$fashion_designer_custom_css .='margin-top:10px;';
		$fashion_designer_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$fashion_designer_blog_page_posts_settings = get_theme_mod( 'fashion_designer_blog_page_posts_settings','Into Blocks');
    if($fashion_designer_blog_page_posts_settings == 'Without Blocks'){
		$fashion_designer_custom_css .='.post-main-box{';
			$fashion_designer_custom_css .='box-shadow: none; border: none; margin:30px 0;background:none;';
		$fashion_designer_custom_css .='}';
	}

	// featured image dimention
	$fashion_designer_blog_post_featured_image_dimension = get_theme_mod('fashion_designer_blog_post_featured_image_dimension', 'default');
	$fashion_designer_blog_post_featured_image_custom_width = get_theme_mod('fashion_designer_blog_post_featured_image_custom_width',250);
	$fashion_designer_blog_post_featured_image_custom_height = get_theme_mod('fashion_designer_blog_post_featured_image_custom_height',250);
	if($fashion_designer_blog_post_featured_image_dimension == 'custom'){
		$fashion_designer_custom_css .='.post-main-box img{';
			$fashion_designer_custom_css .='width: '.esc_attr($fashion_designer_blog_post_featured_image_custom_width).'; height: '.esc_attr($fashion_designer_blog_post_featured_image_custom_height).';';
		$fashion_designer_custom_css .='}';
	}

	/*------------------Responsive Media -----------------------*/

	$fashion_designer_resp_stickyheader = get_theme_mod( 'fashion_designer_stickyheader_hide_show',false);
	if($fashion_designer_resp_stickyheader == true && get_theme_mod( 'fashion_designer_sticky_header',false) != true){
    	$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='position:static;';
		$fashion_designer_custom_css .='} ';
	}
    if($fashion_designer_resp_stickyheader == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='position:fixed;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_resp_stickyheader == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='position:static;';
		$fashion_designer_custom_css .='} }';
	}

	$fashion_designer_resp_slider = get_theme_mod( 'fashion_designer_resp_slider_hide_show',true);
	if($fashion_designer_resp_slider == true && get_theme_mod( 'fashion_designer_slider_arrows', false) == false){
    	$fashion_designer_custom_css .='#slider{';
			$fashion_designer_custom_css .='display:none;';
		$fashion_designer_custom_css .='} ';
	}
    if($fashion_designer_resp_slider == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#slider{';
			$fashion_designer_custom_css .='display:block;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_resp_slider == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#slider{';
			$fashion_designer_custom_css .='display:none;';
		$fashion_designer_custom_css .='} }';
	}

	$fashion_designer_sidebar = get_theme_mod( 'fashion_designer_sidebar_hide_show',true);
    if($fashion_designer_sidebar == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#sidebar{';
			$fashion_designer_custom_css .='display:block;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_sidebar == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='#sidebar{';
			$fashion_designer_custom_css .='display:none;';
		$fashion_designer_custom_css .='} }';
	}

	$fashion_designer_resp_scroll_top = get_theme_mod( 'fashion_designer_resp_scroll_top_hide_show',true);
	if($fashion_designer_resp_scroll_top == true && get_theme_mod( 'fashion_designer_hide_show_scroll',true) != true){
    	$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='visibility:hidden !important;';
		$fashion_designer_custom_css .='} ';
	}
    if($fashion_designer_resp_scroll_top == true){
    	$fashion_designer_custom_css .='@media screen and (max-width:575px) {';
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='visibility:visible !important;';
		$fashion_designer_custom_css .='} }';
	}else if($fashion_designer_resp_scroll_top == false){
		$fashion_designer_custom_css .='@media screen and (max-width:575px){';
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='visibility:hidden !important;';
		$fashion_designer_custom_css .='} }';
	}

	$fashion_designer_resp_menu_toggle_btn_bg_color = get_theme_mod('fashion_designer_resp_menu_toggle_btn_bg_color');
	if($fashion_designer_resp_menu_toggle_btn_bg_color != false){
		$fashion_designer_custom_css .='.toggle-nav i{';
			$fashion_designer_custom_css .='background: '.esc_attr($fashion_designer_resp_menu_toggle_btn_bg_color).';';
		$fashion_designer_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$fashion_designer_navigation_menu_font_size = get_theme_mod('fashion_designer_navigation_menu_font_size');
	if($fashion_designer_navigation_menu_font_size != false){
		$fashion_designer_custom_css .='.main-navigation a{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_navigation_menu_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_navigation_menu_font_weight = get_theme_mod('fashion_designer_navigation_menu_font_weight','600');
	if($fashion_designer_navigation_menu_font_weight != false){
		$fashion_designer_custom_css .='.main-navigation a{';
			$fashion_designer_custom_css .='font-weight: '.esc_attr($fashion_designer_navigation_menu_font_weight).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_menu_text_transform','Capitalize');
	if($fashion_designer_theme_lay == 'Capitalize'){
		$fashion_designer_custom_css .='.main-navigation a{';
			$fashion_designer_custom_css .='text-transform:Capitalize;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_theme_lay == 'Lowercase'){
		$fashion_designer_custom_css .='.main-navigation a{';
			$fashion_designer_custom_css .='text-transform:Lowercase;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_theme_lay == 'Uppercase'){
		$fashion_designer_custom_css .='.main-navigation a{';
			$fashion_designer_custom_css .='text-transform:Uppercase;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_sticky_header_padding = get_theme_mod('fashion_designer_sticky_header_padding');
	if($fashion_designer_sticky_header_padding != false){
		$fashion_designer_custom_css .='.header-fixed{';
			$fashion_designer_custom_css .='padding: '.esc_attr($fashion_designer_sticky_header_padding).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_menus_item = get_theme_mod( 'fashion_designer_menus_item_style','None');
    if($fashion_designer_menus_item == 'None'){
		$fashion_designer_custom_css .='.main-navigation a{';
			$fashion_designer_custom_css .='';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_menus_item == 'Zoom In'){
		$fashion_designer_custom_css .='.main-navigation a:hover{';
			$fashion_designer_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #fff;';
		$fashion_designer_custom_css .='}';
	}
	/*------------------ Search Settings -----------------*/
	
	$fashion_designer_search_font_size = get_theme_mod('fashion_designer_search_font_size');
	if($fashion_designer_search_font_size != false){
		$fashion_designer_custom_css .='.search-box i{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_search_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$fashion_designer_button_padding_top_bottom = get_theme_mod('fashion_designer_button_padding_top_bottom');
	$fashion_designer_button_padding_left_right = get_theme_mod('fashion_designer_button_padding_left_right');
	if($fashion_designer_button_padding_top_bottom != false || $fashion_designer_button_padding_left_right != false){
		$fashion_designer_custom_css .='.post-main-box .more-btn a{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_button_padding_top_bottom).'; padding-bottom: '.esc_attr($fashion_designer_button_padding_top_bottom).';padding-left: '.esc_attr($fashion_designer_button_padding_left_right).';padding-right: '.esc_attr($fashion_designer_button_padding_left_right).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_button_border_radius = get_theme_mod('fashion_designer_button_border_radius');
	if($fashion_designer_button_border_radius != false){
		$fashion_designer_custom_css .='.post-main-box .more-btn a{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_button_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_button_font_size = get_theme_mod('fashion_designer_button_font_size',14);
	$fashion_designer_custom_css .='.post-main-box .more-btn a{';
		$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_button_font_size).';';
	$fashion_designer_custom_css .='}';

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_button_text_transform','Uppercase');
	if($fashion_designer_theme_lay == 'Capitalize'){
		$fashion_designer_custom_css .='.post-main-box .more-btn a{';
			$fashion_designer_custom_css .='text-transform:Capitalize;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_theme_lay == 'Lowercase'){
		$fashion_designer_custom_css .='.post-main-box .more-btn a{';
			$fashion_designer_custom_css .='text-transform:Lowercase;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_theme_lay == 'Uppercase'){ 
		$fashion_designer_custom_css .='.post-main-box .more-btn a{';
			$fashion_designer_custom_css .='text-transform:Uppercase;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_button_letter_spacing = get_theme_mod('fashion_designer_button_letter_spacing',14);
	$fashion_designer_custom_css .='.post-main-box .more-btn a{';
		$fashion_designer_custom_css .='letter-spacing: '.esc_attr($fashion_designer_button_letter_spacing).';';
	$fashion_designer_custom_css .='}';

	/*------------- Single Blog Page------------------*/

	$fashion_designer_featured_image_border_radius = get_theme_mod('fashion_designer_featured_image_border_radius', 0);
	if($fashion_designer_featured_image_border_radius != false){
		$fashion_designer_custom_css .='.box-image img, .feature-box img{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_featured_image_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_featured_image_box_shadow = get_theme_mod('fashion_designer_featured_image_box_shadow',0);
	if($fashion_designer_featured_image_box_shadow != false){
		$fashion_designer_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$fashion_designer_custom_css .='box-shadow: '.esc_attr($fashion_designer_featured_image_box_shadow).'px '.esc_attr($fashion_designer_featured_image_box_shadow).'px '.esc_attr($fashion_designer_featured_image_box_shadow).'px #cccccc;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_single_blog_post_navigation_show_hide = get_theme_mod('fashion_designer_single_blog_post_navigation_show_hide',true);
	if($fashion_designer_single_blog_post_navigation_show_hide != true){
		$fashion_designer_custom_css .='.post-navigation{';
			$fashion_designer_custom_css .='display: none;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_single_blog_comment_title = get_theme_mod('fashion_designer_single_blog_comment_title', 'Leave a Reply');
	if($fashion_designer_single_blog_comment_title == ''){
		$fashion_designer_custom_css .='#comments h2#reply-title {';
			$fashion_designer_custom_css .='display: none;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_single_blog_comment_button_text = get_theme_mod('fashion_designer_single_blog_comment_button_text', 'Post Comment');
	if($fashion_designer_single_blog_comment_button_text == ''){
		$fashion_designer_custom_css .='#comments p.form-submit {';
			$fashion_designer_custom_css .='display: none;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_comment_width = get_theme_mod('fashion_designer_single_blog_comment_width');
	if($fashion_designer_comment_width != false){
		$fashion_designer_custom_css .='#comments textarea{';
			$fashion_designer_custom_css .='width: '.esc_attr($fashion_designer_comment_width).';';
		$fashion_designer_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$fashion_designer_copyright_background_color = get_theme_mod('fashion_designer_copyright_background_color');
	if($fashion_designer_copyright_background_color != false){
		$fashion_designer_custom_css .='#footer-2{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_copyright_background_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_background_color = get_theme_mod('fashion_designer_footer_background_color');
	if($fashion_designer_footer_background_color != false){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_footer_background_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_widgets_heading = get_theme_mod( 'fashion_designer_footer_widgets_heading','Left');
    if($fashion_designer_footer_widgets_heading == 'Left'){
		$fashion_designer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$fashion_designer_custom_css .='text-align: left;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_footer_widgets_heading == 'Center'){
		$fashion_designer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$fashion_designer_custom_css .='text-align: center;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_footer_widgets_heading == 'Right'){
		$fashion_designer_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$fashion_designer_custom_css .='text-align: right;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_widgets_content = get_theme_mod( 'fashion_designer_footer_widgets_content','Left');
    if($fashion_designer_footer_widgets_content == 'Left'){
		$fashion_designer_custom_css .='#footer .widget{';
		$fashion_designer_custom_css .='text-align: left;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_footer_widgets_content == 'Center'){
		$fashion_designer_custom_css .='#footer .widget{';
			$fashion_designer_custom_css .='text-align: center;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_footer_widgets_content == 'Right'){
		$fashion_designer_custom_css .='#footer .widget{';
			$fashion_designer_custom_css .='text-align: right;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_copyright_font_size = get_theme_mod('fashion_designer_copyright_font_size');
	if($fashion_designer_copyright_font_size != false){
		$fashion_designer_custom_css .='.copyright p{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_copyright_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_copyright_alingment = get_theme_mod('fashion_designer_copyright_alingment');
	if($fashion_designer_copyright_alingment != false){
		$fashion_designer_custom_css .='.copyright p{';
			$fashion_designer_custom_css .='text-align: '.esc_attr($fashion_designer_copyright_alingment).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_copyright_padding_top_bottom = get_theme_mod('fashion_designer_copyright_padding_top_bottom');
	if($fashion_designer_copyright_padding_top_bottom != false){
		$fashion_designer_custom_css .='#footer-2{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($fashion_designer_copyright_padding_top_bottom).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_padding = get_theme_mod('fashion_designer_footer_padding');
	if($fashion_designer_footer_padding != false){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='padding: '.esc_attr($fashion_designer_footer_padding).' 0;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_icon = get_theme_mod('fashion_designer_footer_icon');
	if($fashion_designer_footer_icon == false){
		$fashion_designer_custom_css .='.copyright p{';
			$fashion_designer_custom_css .='width:100%; text-align:center; float:none;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_background_image = get_theme_mod('fashion_designer_footer_background_image');
	if($fashion_designer_footer_background_image != false){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background: url('.esc_attr($fashion_designer_footer_background_image).');background-size:cover;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_img_footer','scroll');
	if($fashion_designer_theme_lay == 'fixed'){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background-attachment: fixed !important;';
		$fashion_designer_custom_css .='}';
	}elseif ($fashion_designer_theme_lay == 'scroll'){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background-attachment: scroll !important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_img_position = get_theme_mod('fashion_designer_footer_img_position','center center');
	if($fashion_designer_footer_img_position != false){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background-position: '.esc_attr($fashion_designer_footer_img_position).'!important;';
		$fashion_designer_custom_css .='}';
	} 

	/*----------------Sroll to top Settings ------------------*/

	$fashion_designer_scroll_to_top_font_size = get_theme_mod('fashion_designer_scroll_to_top_font_size');
	if($fashion_designer_scroll_to_top_font_size != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_scroll_to_top_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_padding = get_theme_mod('fashion_designer_scroll_to_top_padding');
	$fashion_designer_scroll_to_top_padding = get_theme_mod('fashion_designer_scroll_to_top_padding');
	if($fashion_designer_scroll_to_top_padding != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_scroll_to_top_padding).';padding-bottom: '.esc_attr($fashion_designer_scroll_to_top_padding).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_width = get_theme_mod('fashion_designer_scroll_to_top_width');
	if($fashion_designer_scroll_to_top_width != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='width: '.esc_attr($fashion_designer_scroll_to_top_width).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_height = get_theme_mod('fashion_designer_scroll_to_top_height');
	if($fashion_designer_scroll_to_top_height != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='height: '.esc_attr($fashion_designer_scroll_to_top_height).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_scroll_to_top_border_radius = get_theme_mod('fashion_designer_scroll_to_top_border_radius');
	if($fashion_designer_scroll_to_top_border_radius != false){
		$fashion_designer_custom_css .='.scrollup i{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_scroll_to_top_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$fashion_designer_social_icon_font_size = get_theme_mod('fashion_designer_social_icon_font_size');
	if($fashion_designer_social_icon_font_size != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_social_icon_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_padding = get_theme_mod('fashion_designer_social_icon_padding');
	if($fashion_designer_social_icon_padding != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='padding: '.esc_attr($fashion_designer_social_icon_padding).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_width = get_theme_mod('fashion_designer_social_icon_width');
	if($fashion_designer_social_icon_width != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='width: '.esc_attr($fashion_designer_social_icon_width).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_height = get_theme_mod('fashion_designer_social_icon_height');
	if($fashion_designer_social_icon_height != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='height: '.esc_attr($fashion_designer_social_icon_height).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_social_icon_border_radius = get_theme_mod('fashion_designer_social_icon_border_radius');
	if($fashion_designer_social_icon_border_radius != false){
		$fashion_designer_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_social_icon_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$fashion_designer_related_product_show_hide = get_theme_mod('fashion_designer_related_product_show_hide',true);
	if($fashion_designer_related_product_show_hide != true){
		$fashion_designer_custom_css .='.related.products{';
			$fashion_designer_custom_css .='display: none;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_padding_top_bottom = get_theme_mod('fashion_designer_products_padding_top_bottom');
	if($fashion_designer_products_padding_top_bottom != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($fashion_designer_products_padding_top_bottom).'!important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_padding_left_right = get_theme_mod('fashion_designer_products_padding_left_right');
	if($fashion_designer_products_padding_left_right != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$fashion_designer_custom_css .='padding-left: '.esc_attr($fashion_designer_products_padding_left_right).'!important; padding-right: '.esc_attr($fashion_designer_products_padding_left_right).'!important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_box_shadow = get_theme_mod('fashion_designer_products_box_shadow');
	if($fashion_designer_products_box_shadow != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$fashion_designer_custom_css .='box-shadow: '.esc_attr($fashion_designer_products_box_shadow).'px '.esc_attr($fashion_designer_products_box_shadow).'px '.esc_attr($fashion_designer_products_box_shadow).'px #ddd;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_border_radius = get_theme_mod('fashion_designer_products_border_radius');
	if($fashion_designer_products_border_radius != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_products_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_btn_padding_top_bottom = get_theme_mod('fashion_designer_products_btn_padding_top_bottom');
	if($fashion_designer_products_btn_padding_top_bottom != false){
		$fashion_designer_custom_css .='.woocommerce a.button{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($fashion_designer_products_btn_padding_top_bottom).' !important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_btn_padding_left_right = get_theme_mod('fashion_designer_products_btn_padding_left_right');
	if($fashion_designer_products_btn_padding_left_right != false){
		$fashion_designer_custom_css .='.woocommerce a.button{';
			$fashion_designer_custom_css .='padding-left: '.esc_attr($fashion_designer_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($fashion_designer_products_btn_padding_left_right).' !important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_products_button_border_radius = get_theme_mod('fashion_designer_products_button_border_radius', 0);
	if($fashion_designer_products_button_border_radius != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_products_button_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_woocommerce_sale_position = get_theme_mod( 'fashion_designer_woocommerce_sale_position','right');
    if($fashion_designer_woocommerce_sale_position == 'left'){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$fashion_designer_custom_css .='left: -10px; right: auto;';
		$fashion_designer_custom_css .='}';
	}else if($fashion_designer_woocommerce_sale_position == 'right'){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product .onsale{';
			$fashion_designer_custom_css .='left: auto; right: 0;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_woocommerce_sale_font_size = get_theme_mod('fashion_designer_woocommerce_sale_font_size');
	if($fashion_designer_woocommerce_sale_font_size != false){
		$fashion_designer_custom_css .='.woocommerce span.onsale{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_woocommerce_sale_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_woocommerce_sale_padding_top_bottom = get_theme_mod('fashion_designer_woocommerce_sale_padding_top_bottom');
	if($fashion_designer_woocommerce_sale_padding_top_bottom != false){
		$fashion_designer_custom_css .='.woocommerce span.onsale{';
			$fashion_designer_custom_css .='padding-top: '.esc_attr($fashion_designer_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($fashion_designer_woocommerce_sale_padding_top_bottom).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_woocommerce_sale_padding_left_right = get_theme_mod('fashion_designer_woocommerce_sale_padding_left_right');
	if($fashion_designer_woocommerce_sale_padding_left_right != false){
		$fashion_designer_custom_css .='.woocommerce span.onsale{';
			$fashion_designer_custom_css .='padding-left: '.esc_attr($fashion_designer_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($fashion_designer_woocommerce_sale_padding_left_right).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_woocommerce_sale_border_radius = get_theme_mod('fashion_designer_woocommerce_sale_border_radius', 0);
	if($fashion_designer_woocommerce_sale_border_radius != false){
		$fashion_designer_custom_css .='.woocommerce span.onsale{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_woocommerce_sale_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$fashion_designer_logo_padding = get_theme_mod('fashion_designer_logo_padding');
	if($fashion_designer_logo_padding != false){
		$fashion_designer_custom_css .='.logo{';
			$fashion_designer_custom_css .='padding: '.esc_attr($fashion_designer_logo_padding).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_logo_margin = get_theme_mod('fashion_designer_logo_margin');
	if($fashion_designer_logo_margin != false){
		$fashion_designer_custom_css .='.logo{';
			$fashion_designer_custom_css .='margin: '.esc_attr($fashion_designer_logo_margin).';';
		$fashion_designer_custom_css .='}';
	}

	// Site title Font Size
	$fashion_designer_site_title_font_size = get_theme_mod('fashion_designer_site_title_font_size');
	if($fashion_designer_site_title_font_size != false){
		$fashion_designer_custom_css .='.logo h1, .logo p.site-title{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_site_title_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	// Site tagline Font Size
	$fashion_designer_site_tagline_font_size = get_theme_mod('fashion_designer_site_tagline_font_size');
	if($fashion_designer_site_tagline_font_size != false){
		$fashion_designer_custom_css .='.logo p.site-description{';
			$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_site_tagline_font_size).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_site_title_color = get_theme_mod('fashion_designer_site_title_color');
	if($fashion_designer_site_title_color != false){
		$fashion_designer_custom_css .='p.site-title a{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_site_title_color).'!important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_site_tagline_color = get_theme_mod('fashion_designer_site_tagline_color');
	if($fashion_designer_site_tagline_color != false){
		$fashion_designer_custom_css .='.logo p.site-description{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_site_tagline_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_logo_width = get_theme_mod('fashion_designer_logo_width');
	if($fashion_designer_logo_width != false){
		$fashion_designer_custom_css .='.logo img{';
			$fashion_designer_custom_css .='width: '.esc_attr($fashion_designer_logo_width).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_logo_height = get_theme_mod('fashion_designer_logo_height');
	if($fashion_designer_logo_height != false){
		$fashion_designer_custom_css .='.logo img{';
			$fashion_designer_custom_css .='height: '.esc_attr($fashion_designer_logo_height).';';
		$fashion_designer_custom_css .='}';
	}

	// Woocommerce img

	$fashion_designer_shop_featured_image_border_radius = get_theme_mod('fashion_designer_shop_featured_image_border_radius', 0);
	if($fashion_designer_shop_featured_image_border_radius != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product a img{';
			$fashion_designer_custom_css .='border-radius: '.esc_attr($fashion_designer_shop_featured_image_border_radius).'px;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_shop_featured_image_box_shadow = get_theme_mod('fashion_designer_shop_featured_image_box_shadow');
	if($fashion_designer_shop_featured_image_box_shadow != false){
		$fashion_designer_custom_css .='.woocommerce ul.products li.product a img{';
				$fashion_designer_custom_css .='box-shadow: '.esc_attr($fashion_designer_shop_featured_image_box_shadow).'px '.esc_attr($fashion_designer_shop_featured_image_box_shadow).'px '.esc_attr($fashion_designer_shop_featured_image_box_shadow).'px #ddd;';
		$fashion_designer_custom_css .='}';
	}

	// menus

	$fashion_designer_header_menus_color = get_theme_mod('fashion_designer_header_menus_color');
	if($fashion_designer_header_menus_color != false){
		$fashion_designer_custom_css .='.main-navigation a{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_header_menus_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_header_menus_hover_color = get_theme_mod('fashion_designer_header_menus_hover_color');
	if($fashion_designer_header_menus_hover_color != false){
		$fashion_designer_custom_css .='.main-navigation a:hover{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_header_menus_hover_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_header_submenus_color = get_theme_mod('fashion_designer_header_submenus_color');
	if($fashion_designer_header_submenus_color != false){
		$fashion_designer_custom_css .='.main-navigation ul ul a{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_header_submenus_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_header_submenus_hover_color = get_theme_mod('fashion_designer_header_submenus_hover_color');
	if($fashion_designer_header_submenus_hover_color != false){
		$fashion_designer_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$fashion_designer_custom_css .='color: '.esc_attr($fashion_designer_header_submenus_hover_color).';';
		$fashion_designer_custom_css .='}';
	}
	
	/*------------------ Preloader Background Color  -------------------*/

	$fashion_designer_preloader_bg_color = get_theme_mod('fashion_designer_preloader_bg_color');
	if($fashion_designer_preloader_bg_color != false){
		$fashion_designer_custom_css .='#preloader{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_preloader_bg_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_preloader_border_color = get_theme_mod('fashion_designer_preloader_border_color');
	if($fashion_designer_preloader_border_color != false){
		$fashion_designer_custom_css .='.loader-line{';
			$fashion_designer_custom_css .='border-color: '.esc_attr($fashion_designer_preloader_border_color).'!important;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_preloader_bg_img = get_theme_mod('fashion_designer_preloader_bg_img');
	if($fashion_designer_preloader_bg_img != false){
		$fashion_designer_custom_css .='#preloader{';
			$fashion_designer_custom_css .='background: url('.esc_attr($fashion_designer_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$fashion_designer_custom_css .='}';
	}

	// Header Background Color
	$fashion_designer_header_background_color = get_theme_mod('fashion_designer_header_background_color');
	if($fashion_designer_header_background_color != false){
		$fashion_designer_custom_css .='.left-bg ,.right-bg{';
			$fashion_designer_custom_css .='background-color: '.esc_attr($fashion_designer_header_background_color).';';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_header_img_position = get_theme_mod('fashion_designer_header_img_position','center top');
	if($fashion_designer_header_img_position != false){
		$fashion_designer_custom_css .='.home-page-header{';
			$fashion_designer_custom_css .='background-position: '.esc_attr($fashion_designer_header_img_position).'!important;';
		$fashion_designer_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$fashion_designer_display_grid_posts_settings = get_theme_mod( 'fashion_designer_display_grid_posts_settings','Into Blocks');
    if($fashion_designer_display_grid_posts_settings == 'Without Blocks'){
		$fashion_designer_custom_css .='.grid-post-main-box{';
			$fashion_designer_custom_css .='box-shadow: none; border: none; margin:30px 0;background:none;';
		$fashion_designer_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_footer_template','fashion_designer-footer-one');
    if($fashion_designer_theme_lay == 'fashion_designer-footer-one'){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='';
		$fashion_designer_custom_css .='}';

	}else if($fashion_designer_theme_lay == 'fashion_designer-footer-two'){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$fashion_designer_custom_css .='color:#000;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='#footer ul li::before{';
			$fashion_designer_custom_css .='background:#000;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$fashion_designer_custom_css .='border: 1px solid #000;';
		$fashion_designer_custom_css .='}';

	}else if($fashion_designer_theme_lay == 'fashion_designer-footer-three'){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background: #232524;';
		$fashion_designer_custom_css .='}';
	}
	else if($fashion_designer_theme_lay == 'fashion_designer-footer-four'){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background: #f7f7f7;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$fashion_designer_custom_css .='color:#000;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='#footer ul li::before{';
			$fashion_designer_custom_css .='background:#000;';
		$fashion_designer_custom_css .='}';
		$fashion_designer_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$fashion_designer_custom_css .='border: 1px solid #000;';
		$fashion_designer_custom_css .='}';
	}
	else if($fashion_designer_theme_lay == 'fashion_designer-footer-five'){
		$fashion_designer_custom_css .='#footer{';
			$fashion_designer_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$fashion_designer_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$fashion_designer_button_footer_heading_letter_spacing = get_theme_mod('fashion_designer_button_footer_heading_letter_spacing',1);
	$fashion_designer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$fashion_designer_custom_css .='letter-spacing: '.esc_attr($fashion_designer_button_footer_heading_letter_spacing).'px;';
	$fashion_designer_custom_css .='}';

	$fashion_designer_button_footer_font_size = get_theme_mod('fashion_designer_button_footer_font_size','30');
	$fashion_designer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$fashion_designer_custom_css .='font-size: '.esc_attr($fashion_designer_button_footer_font_size).'px;';
	$fashion_designer_custom_css .='}';

	$fashion_designer_theme_lay = get_theme_mod( 'fashion_designer_button_footer_text_transform','Capitalize');
	if($fashion_designer_theme_lay == 'Capitalize'){
		$fashion_designer_custom_css .='#footer h3{';
			$fashion_designer_custom_css .='text-transform:Capitalize;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_theme_lay == 'Lowercase'){
		$fashion_designer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$fashion_designer_custom_css .='text-transform:Lowercase;';
		$fashion_designer_custom_css .='}';
	}
	if($fashion_designer_theme_lay == 'Uppercase'){
		$fashion_designer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$fashion_designer_custom_css .='text-transform:Uppercase;';
		$fashion_designer_custom_css .='}';
	}

	$fashion_designer_footer_heading_weight = get_theme_mod('fashion_designer_footer_heading_weight','600');
	if($fashion_designer_footer_heading_weight != false){
		$fashion_designer_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$fashion_designer_custom_css .='font-weight: '.esc_attr($fashion_designer_footer_heading_weight).';';
		$fashion_designer_custom_css .='}';
	}