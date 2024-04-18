<?php

	$vw_church_custom_css= "";
	/*-------------------- Global Color -------------------*/

	$vw_church_first_color = get_theme_mod('vw_church_first_color');

	if($vw_church_first_color != false){
		$vw_church_custom_css .='.search-box i, #slider .carousel-control-next i:hover, #slider .carousel-control-prev i:hover, #slider .more-btn a, .more-btn a, #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.woocommerce-MyAccount-navigation ul li,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #preloader, #footer .tagcloud a:hover, #footer input[type="submit"], #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i, #sidebar .custom-social-icons a,#footer .custom-social-icons a, #sidebar h3,  #sidebar .widget_block h3, #sidebar h2, #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, .woocommerce span.onsale, .toggle-nav i,.horizontal-text,.header-button a,.page-template-custom-home-page .home-page-header .top-bar .social-icon a,.home-page-header .top-bar .social-icon a,.bradcrumbs span,.bradcrumbs a:hover,.main-navigation ul li a::before, .main-navigation .current_page_item > a::before, .main-navigation .current-menu-item > a::before,.control-section-vw-church h3.accordion-section-title ,#preloader,.header-search, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled],#events-section h2:after,.bradcrumbs a:hover,.post-categories li a:hover ,.bradcrumbs span, .wp-block-button__link, #sidebar label.wp-block-search__label, #sidebar .wp-block-heading, .wp-block-tag-cloud a:hover, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-previous a:hover, nav.navigation.posts-navigation .nav-next a:hover{';
			$vw_church_custom_css .='background: '.esc_attr($vw_church_first_color).';';
		$vw_church_custom_css .='}';
	}

	if($vw_church_first_color != false){
		$vw_church_custom_css .='a,a:hover, .top-bar .topbar-links a:hover, p.site-title a:hover, .logo h1 a:hover, .main-navigation li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover, #slider .inner_carousel h1 a:hover, #slider .more-btn a i, .more-btn a i, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .post-main-box:hover h3 a,#sidebar ul li a:hover, #footer li a:hover,.post-navigation a:hover .post-title,.post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus, .post-navigation span.meta-nav:hover,.natural-life span, .entry-content a, .widget_text a, .woocommerce-page .entry-summary a, .comment-content p a,.woocommerce .star-rating span, .woocommerce p.stars a{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_first_color).';';
		$vw_church_custom_css .='}';
	}
	/*---------------------------Width Layout -------------------*/

	$vw_church_theme_lay = get_theme_mod( 'vw_church_width_option','Full Width');
    if($vw_church_theme_lay == 'Boxed'){
		$vw_church_custom_css .='body{';
			$vw_church_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='right: 100px;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vw_church_custom_css .='padding: 0px 40px 0 10px;';
		$vw_church_custom_css .='}';
	}else if($vw_church_theme_lay == 'Wide Width'){
		$vw_church_custom_css .='body{';
			$vw_church_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='right: 30px;';
		$vw_church_custom_css .='}';
	}else if($vw_church_theme_lay == 'Full Width'){
		$vw_church_custom_css .='body{';
			$vw_church_custom_css .='max-width: 100%;';
		$vw_church_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$vw_church_single_blog_comment_title = get_theme_mod('vw_church_single_blog_comment_title', 'Leave a Reply');
	if($vw_church_single_blog_comment_title == ''){
		$vw_church_custom_css .='#comments h2#reply-title {';
			$vw_church_custom_css .='display: none;';
		$vw_church_custom_css .='}';
	}

	$vw_church_single_blog_comment_button_text = get_theme_mod('vw_church_single_blog_comment_button_text', 'Post Comment');
	if($vw_church_single_blog_comment_button_text == ''){
		$vw_church_custom_css .='#comments p.form-submit {';
			$vw_church_custom_css .='display: none;';
		$vw_church_custom_css .='}';
	}

	$vw_church_comment_width = get_theme_mod('vw_church_single_blog_comment_width');
	if($vw_church_comment_width != false){
		$vw_church_custom_css .='#comments textarea{';
			$vw_church_custom_css .='width: '.esc_attr($vw_church_comment_width).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_single_blog_post_navigation_show_hide = get_theme_mod('vw_church_single_blog_post_navigation_show_hide',true);
	if($vw_church_single_blog_post_navigation_show_hide != true){
		$vw_church_custom_css .='.post-navigation{';
			$vw_church_custom_css .='display: none;';
		$vw_church_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$vw_church_resp_slider = get_theme_mod( 'vw_church_resp_slider_hide_show',true);
	if($vw_church_resp_slider == true && get_theme_mod( 'vw_church_slider_hide_show', false) == false){
    	$vw_church_custom_css .='#slider{';
			$vw_church_custom_css .='display:none;';
		$vw_church_custom_css .='} ';
	}
    if($vw_church_resp_slider == true){
    	$vw_church_custom_css .='@media screen and (max-width:575px) {';
		$vw_church_custom_css .='#slider{';
			$vw_church_custom_css .='display:block;';
		$vw_church_custom_css .='} }';
	}else if($vw_church_resp_slider == false){
		$vw_church_custom_css .='@media screen and (max-width:575px) {';
		$vw_church_custom_css .='#slider{';
			$vw_church_custom_css .='display:none;';
		$vw_church_custom_css .='} }';
		$vw_church_custom_css .='@media screen and (max-width:575px){';
		$vw_church_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$vw_church_custom_css .='margin-top: 45px;';
		$vw_church_custom_css .='} }';
		$vw_church_custom_css .='@media screen and (max-width:575px) {';
		$vw_church_custom_css .='#track-player-sec .audioigniter-root{';
			$vw_church_custom_css .='margin-top: 5%;';
		$vw_church_custom_css .='} }';
	}

	$vw_church_resp_sidebar = get_theme_mod( 'vw_church_sidebar_hide_show',true);
    if($vw_church_resp_sidebar == true){
    	$vw_church_custom_css .='@media screen and (max-width:575px) {';
		$vw_church_custom_css .='#sidebar{';
			$vw_church_custom_css .='display:block;';
		$vw_church_custom_css .='} }';
	}else if($vw_church_resp_sidebar == false){
		$vw_church_custom_css .='@media screen and (max-width:575px) {';
		$vw_church_custom_css .='#sidebar{';
			$vw_church_custom_css .='display:none;';
		$vw_church_custom_css .='} }';
	}

	$vw_church_resp_scroll_top = get_theme_mod( 'vw_church_resp_scroll_top_hide_show',true);
	if($vw_church_resp_scroll_top == true && get_theme_mod( 'vw_church_hide_show_scroll',true) == false){
    	$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='visibility:hidden !important;';
		$vw_church_custom_css .='} ';
	}
    if($vw_church_resp_scroll_top == true){
    	$vw_church_custom_css .='@media screen and (max-width:575px) {';
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='visibility:visible !important;';
		$vw_church_custom_css .='} }';
	}else if($vw_church_resp_scroll_top == false){
		$vw_church_custom_css .='@media screen and (max-width:575px){';
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='visibility:hidden !important;';
		$vw_church_custom_css .='} }';
	}

	$vw_church_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_church_resp_menu_toggle_btn_bg_color');
	if($vw_church_resp_menu_toggle_btn_bg_color != false){
		$vw_church_custom_css .='.toggle-nav i{';
			$vw_church_custom_css .='background: '.esc_attr($vw_church_resp_menu_toggle_btn_bg_color).';';
		$vw_church_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_church_slider_height = get_theme_mod('vw_church_slider_height');
	if($vw_church_slider_height != false){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='height: '.esc_attr($vw_church_slider_height).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_theme_lay = get_theme_mod( 'vw_church_slider_content_option','Center');
    if($vw_church_theme_lay == 'Left'){
		$vw_church_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_church_custom_css .='text-align:left; left:10%; right:40%;';
		$vw_church_custom_css .='}';
	}else if($vw_church_theme_lay == 'Center'){
		$vw_church_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_church_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_church_custom_css .='}';
	}else if($vw_church_theme_lay == 'Right'){
		$vw_church_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$vw_church_custom_css .='text-align:right; left:40%; right:10%;';
		$vw_church_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_church_slider_content_padding_top_bottom = get_theme_mod('vw_church_slider_content_padding_top_bottom');
	$vw_church_slider_content_padding_left_right = get_theme_mod('vw_church_slider_content_padding_left_right');
	if($vw_church_slider_content_padding_top_bottom != false || $vw_church_slider_content_padding_left_right != false){
		$vw_church_custom_css .='#slider .carousel-caption{';
			$vw_church_custom_css .='top: '.esc_attr($vw_church_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_church_slider_content_padding_top_bottom).';left: '.esc_attr($vw_church_slider_content_padding_left_right).';right: '.esc_attr($vw_church_slider_content_padding_left_right).';';
		$vw_church_custom_css .='}';
	}
	
	/*-------------- Copyright Alignment ----------------*/

	$vw_church_copyright_background_color = get_theme_mod('vw_church_copyright_background_color');
	if($vw_church_copyright_background_color != false){
		$vw_church_custom_css .='#footer-2{';
			$vw_church_custom_css .='background-color: '.esc_attr($vw_church_copyright_background_color).';';
		$vw_church_custom_css .='}';
	} 

	$vw_church_copyright_alingment = get_theme_mod('vw_church_copyright_alingment');
	if($vw_church_copyright_alingment != false){
		$vw_church_custom_css .='.copyright p{';
			$vw_church_custom_css .='text-align: '.esc_attr($vw_church_copyright_alingment).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_widgets_heading = get_theme_mod( 'vw_church_footer_widgets_heading','Left');
    if($vw_church_footer_widgets_heading == 'Left'){
		$vw_church_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$vw_church_custom_css .='text-align: left;';
		$vw_church_custom_css .='}';
	}else if($vw_church_footer_widgets_heading == 'Center'){
		$vw_church_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_church_custom_css .='text-align: center;';
		$vw_church_custom_css .='}';
	}else if($vw_church_footer_widgets_heading == 'Right'){
		$vw_church_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_church_custom_css .='text-align: right;';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_widgets_content = get_theme_mod( 'vw_church_footer_widgets_content','Left');
    if($vw_church_footer_widgets_content == 'Left'){
		$vw_church_custom_css .='#footer .widget{';
		$vw_church_custom_css .='text-align: left;';
		$vw_church_custom_css .='}';
	}else if($vw_church_footer_widgets_content == 'Center'){
		$vw_church_custom_css .='#footer .widget{';
			$vw_church_custom_css .='text-align: center;';
		$vw_church_custom_css .='}';
	}else if($vw_church_footer_widgets_content == 'Right'){
		$vw_church_custom_css .='#footer .widget{';
			$vw_church_custom_css .='text-align: right;';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_padding = get_theme_mod('vw_church_footer_padding');
	if($vw_church_footer_padding != false){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='padding: '.esc_attr($vw_church_footer_padding).' 0;';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_icon = get_theme_mod('vw_church_footer_icon');
	if($vw_church_footer_icon == false){
		$vw_church_custom_css .='.copyright p{';
			$vw_church_custom_css .='width:100%; text-align:center; float:none;';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_background_image = get_theme_mod('vw_church_footer_background_image');
	if($vw_church_footer_background_image != false){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background: url('.esc_attr($vw_church_footer_background_image).')!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_background_color = get_theme_mod('vw_church_footer_background_color');
	if($vw_church_footer_background_color != false){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background-color: '.esc_attr($vw_church_footer_background_color).'!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_theme_lay = get_theme_mod( 'vw_church_img_footer','scroll');
	if($vw_church_theme_lay == 'fixed'){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$vw_church_custom_css .='}';
	}elseif ($vw_church_theme_lay == 'scroll'){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_copyright_font_size = get_theme_mod('vw_church_copyright_font_size');
	if($vw_church_copyright_font_size != false){
		$vw_church_custom_css .='.copyright p, .copyright a{';
			$vw_church_custom_css .='font-size: '.esc_attr($vw_church_copyright_font_size).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_copyright_font_weight = get_theme_mod('vw_church_copyright_font_weight');
	if($vw_church_copyright_font_weight != false){
		$vw_church_custom_css .='.copyright p, .copyright a{';
			$vw_church_custom_css .='font-weight: '.esc_attr($vw_church_copyright_font_weight).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_copyright_text_color = get_theme_mod('vw_church_copyright_text_color');
	if($vw_church_copyright_text_color != false){
		$vw_church_custom_css .='.copyright p, .copyright a{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_copyright_text_color).';';
		$vw_church_custom_css .='}';
	}
	/*------------------ Logo  -------------------*/

	$vw_church_site_title_font_size = get_theme_mod('vw_church_site_title_font_size');
	if($vw_church_site_title_font_size != false){
		$vw_church_custom_css .='.logo h1, .logo p.site-title{';
			$vw_church_custom_css .='font-size: '.esc_attr($vw_church_site_title_font_size).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_site_tagline_font_size = get_theme_mod('vw_church_site_tagline_font_size');
	if($vw_church_site_tagline_font_size != false){
		$vw_church_custom_css .='.logo p.site-description{';
			$vw_church_custom_css .='font-size: '.esc_attr($vw_church_site_tagline_font_size).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_logo_padding = get_theme_mod('vw_church_logo_padding');
	if($vw_church_logo_padding != false){
		$vw_church_custom_css .='.top-bar .logo{';
			$vw_church_custom_css .='padding: '.esc_attr($vw_church_logo_padding).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_logo_margin = get_theme_mod('vw_church_logo_margin');
	if($vw_church_logo_margin != false){
		$vw_church_custom_css .='.top-bar .logo{';
			$vw_church_custom_css .='margin: '.esc_attr($vw_church_logo_margin).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_site_title_color = get_theme_mod('vw_church_site_title_color');
	if($vw_church_site_title_color != false){
		$vw_church_custom_css .='p.site-title a{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_site_title_color).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_site_tagline_color = get_theme_mod('vw_church_site_tagline_color');
	if($vw_church_site_tagline_color != false){
		$vw_church_custom_css .='.logo p.site-description{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_site_tagline_color).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_logo_width = get_theme_mod('vw_church_logo_width');
	if($vw_church_logo_width != false){
		$vw_church_custom_css .='.logo img{';
			$vw_church_custom_css .='width: '.esc_attr($vw_church_logo_width).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_logo_height = get_theme_mod('vw_church_logo_height');
	if($vw_church_logo_height != false){
		$vw_church_custom_css .='.logo img{';
			$vw_church_custom_css .='height: '.esc_attr($vw_church_logo_height).';';
		$vw_church_custom_css .='}';
	}

	/*------------------ Menus -------------------*/

	$vw_church_header_menus_color = get_theme_mod('vw_church_header_menus_color');
	if($vw_church_header_menus_color != false){
		$vw_church_custom_css .='.main-navigation a{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_header_menus_color).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_header_menus_hover_color = get_theme_mod('vw_church_header_menus_hover_color');
	if($vw_church_header_menus_hover_color != false){
		$vw_church_custom_css .='.main-navigation a:hover{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_header_menus_hover_color).'!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_header_submenus_color = get_theme_mod('vw_church_header_submenus_color');
	if($vw_church_header_submenus_color != false){
		$vw_church_custom_css .='.main-navigation ul ul a{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_header_submenus_color).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_header_submenus_hover_color = get_theme_mod('vw_church_header_submenus_hover_color');
	if($vw_church_header_submenus_hover_color != false){
		$vw_church_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_church_custom_css .='color: '.esc_attr($vw_church_header_submenus_hover_color).'!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_menus_item = get_theme_mod( 'vw_church_menus_item_style','None');
    if($vw_church_menus_item == 'None'){
		$vw_church_custom_css .='.main-navigation a{';
			$vw_church_custom_css .='';
		$vw_church_custom_css .='}';
	}else if($vw_church_menus_item == 'Zoom In'){
		$vw_church_custom_css .='.main-navigation a:hover{';
			$vw_church_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #46bf72;';
		$vw_church_custom_css .='}'; 
	}

	$vw_church_navigation_menu_font_weight = get_theme_mod('vw_church_navigation_menu_font_weight','900');
	if($vw_church_navigation_menu_font_weight != false){
		$vw_church_custom_css .='.main-navigation a{';
			$vw_church_custom_css .='font-weight: '.esc_attr($vw_church_navigation_menu_font_weight).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_theme_lay = get_theme_mod( 'vw_church_menu_text_transform','Capitalize');
	if($vw_church_theme_lay == 'Capitalize'){
		$vw_church_custom_css .='.main-navigation a{';
			$vw_church_custom_css .='text-transform:Capitalize;';
		$vw_church_custom_css .='}';
	}
	if($vw_church_theme_lay == 'Lowercase'){
		$vw_church_custom_css .='.main-navigation a{';
			$vw_church_custom_css .='text-transform:Lowercase;';
		$vw_church_custom_css .='}';
	}
	if($vw_church_theme_lay == 'Uppercase'){
		$vw_church_custom_css .='.main-navigation a{';
			$vw_church_custom_css .='text-transform:Uppercase;';
		$vw_church_custom_css .='}';
	}

	$vw_church_navigation_menu_font_size = get_theme_mod('vw_church_navigation_menu_font_size');
	if($vw_church_navigation_menu_font_size != false){
		$vw_church_custom_css .='.main-navigation a{';
			$vw_church_custom_css .='font-size: '.esc_attr($vw_church_navigation_menu_font_size).';';
		$vw_church_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_church_theme_lay = get_theme_mod( 'vw_church_blog_layout_option','Default');
    if($vw_church_theme_lay == 'Default'){
		$vw_church_custom_css .='.post-main-box{';
			$vw_church_custom_css .='';
		$vw_church_custom_css .='}';
	}else if($vw_church_theme_lay == 'Center'){
		$vw_church_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vw_church_custom_css .='text-align:center;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='.post-info{';
			$vw_church_custom_css .='margin-top:10px;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='.post-info hr{';
			$vw_church_custom_css .='margin:15px auto;';
		$vw_church_custom_css .='}';
	}else if($vw_church_theme_lay == 'Left'){
		$vw_church_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_church_custom_css .='text-align:Left;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='.post-info hr{';
			$vw_church_custom_css .='margin-bottom:10px;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='.post-main-box h2{';
			$vw_church_custom_css .='margin-top:10px;';
		$vw_church_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_church_blog_page_posts_settings = get_theme_mod( 'vw_church_blog_page_posts_settings','Into Blocks');
		if($vw_church_blog_page_posts_settings == 'Without Blocks'){
		$vw_church_custom_css .='.post-main-box{';
			$vw_church_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_church_custom_css .='}';
	}

	// featured image dimention
	$vw_church_blog_post_featured_image_dimension = get_theme_mod('vw_church_blog_post_featured_image_dimension', 'default');
	$vw_church_blog_post_featured_image_custom_width = get_theme_mod('vw_church_blog_post_featured_image_custom_width',250);
	$vw_church_blog_post_featured_image_custom_height = get_theme_mod('vw_church_blog_post_featured_image_custom_height',250);
	if($vw_church_blog_post_featured_image_dimension == 'custom'){
		$vw_church_custom_css .='.post-main-box img{';
			$vw_church_custom_css .='width: '.esc_attr($vw_church_blog_post_featured_image_custom_width).'; height: '.esc_attr($vw_church_blog_post_featured_image_custom_height).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_featured_image_border_radius = get_theme_mod('vw_church_featured_image_border_radius', 0);
	if($vw_church_featured_image_border_radius != false){
		$vw_church_custom_css .='.box-image img, .feature-box img{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_featured_image_border_radius).'px;';
		$vw_church_custom_css .='}';
	}

	$vw_church_featured_image_box_shadow = get_theme_mod('vw_church_featured_image_box_shadow',0);
	if($vw_church_featured_image_box_shadow != false){
		$vw_church_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_church_custom_css .='box-shadow: '.esc_attr($vw_church_featured_image_box_shadow).'px '.esc_attr($vw_church_featured_image_box_shadow).'px '.esc_attr($vw_church_featured_image_box_shadow).'px #cccccc;';
		$vw_church_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$vw_church_preloader_bg_color = get_theme_mod('vw_church_preloader_bg_color');
	if($vw_church_preloader_bg_color != false){
		$vw_church_custom_css .='#preloader{';
			$vw_church_custom_css .='background-color: '.esc_attr($vw_church_preloader_bg_color).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_preloader_border_color = get_theme_mod('vw_church_preloader_border_color');
	if($vw_church_preloader_border_color != false){
		$vw_church_custom_css .='.loader-line{';
			$vw_church_custom_css .='border-color: '.esc_attr($vw_church_preloader_border_color).'!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_preloader_bg_img = get_theme_mod('vw_church_preloader_bg_img');
	if($vw_church_preloader_bg_img != false){
		$vw_church_custom_css .='#preloader{';
			$vw_church_custom_css .='background: url('.esc_attr($vw_church_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vw_church_custom_css .='}';
	}

	// Header Background Color
	$vw_church_header_background_color = get_theme_mod('vw_church_header_background_color');
	if($vw_church_header_background_color != false){
		$vw_church_custom_css .='.home-page-header{';
			$vw_church_custom_css .='background-color: '.esc_attr($vw_church_header_background_color).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_header_img_position = get_theme_mod('vw_church_header_img_position','center top');
	if($vw_church_header_img_position != false){
		$vw_church_custom_css .='.home-page-header{';
			$vw_church_custom_css .='background-position: '.esc_attr($vw_church_header_img_position).'!important;';
		$vw_church_custom_css .='}';
	}

	/*----------------- Slider -----------------*/

	$vw_church_slider_hide_show = get_theme_mod('vw_church_slider_hide_show');
	if($vw_church_slider_hide_show == false){
		$vw_church_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vw_church_custom_css .='position: static; background-color: #000; padding: 15px;';
		$vw_church_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_church_theme_lay = get_theme_mod( 'vw_church_slider_opacity_color','0.8');
	if($vw_church_theme_lay == '0'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.1'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.1';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.2'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.2';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.3'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.3';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.4'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.4';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.5'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.5';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.6'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.6';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.7'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.7';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.8'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.8';
		$vw_church_custom_css .='}';
		}else if($vw_church_theme_lay == '0.9'){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:0.9';
		$vw_church_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_church_slider_image_overlay = get_theme_mod('vw_church_slider_image_overlay', true);
	if($vw_church_slider_image_overlay == false){
		$vw_church_custom_css .='#slider img{';
			$vw_church_custom_css .='opacity:1;';
		$vw_church_custom_css .='}';
	}

	$vw_church_slider_image_overlay_color = get_theme_mod('vw_church_slider_image_overlay_color', true);
	if($vw_church_slider_image_overlay_color != false){
		$vw_church_custom_css .='#slider{';
			$vw_church_custom_css .='background-color: '.esc_attr($vw_church_slider_image_overlay_color).';';
		$vw_church_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_church_button_padding_top_bottom = get_theme_mod('vw_church_button_padding_top_bottom');
	$vw_church_button_padding_left_right = get_theme_mod('vw_church_button_padding_left_right');
	if($vw_church_button_padding_top_bottom != false || $vw_church_button_padding_left_right != false){
		$vw_church_custom_css .='.post-main-box .more-btn a{';
			$vw_church_custom_css .='padding-top: '.esc_attr($vw_church_button_padding_top_bottom).'!important; 
			padding-bottom: '.esc_attr($vw_church_button_padding_top_bottom).'!important;
			padding-left: '.esc_attr($vw_church_button_padding_left_right).'!important;
			padding-right: '.esc_attr($vw_church_button_padding_left_right).'!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_button_border_radius = get_theme_mod('vw_church_button_border_radius');
	if($vw_church_button_border_radius != false){
		$vw_church_custom_css .='.post-main-box .more-btn a{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_button_border_radius).'px !important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_button_font_size = get_theme_mod('vw_church_button_font_size',14);
	$vw_church_custom_css .='.post-main-box .more-btn a{';
		$vw_church_custom_css .='font-size: '.esc_attr($vw_church_button_font_size).'!important;';
	$vw_church_custom_css .='}';

	$vw_church_theme_lay = get_theme_mod( 'vw_church_button_text_transform','Uppercase');
	if($vw_church_theme_lay == 'Capitalize'){
		$vw_church_custom_css .='.post-main-box .more-btn a{';
			$vw_church_custom_css .='text-transform:Capitalize;';
		$vw_church_custom_css .='}';
	}
	if($vw_church_theme_lay == 'Lowercase'){
		$vw_church_custom_css .='.post-main-box .more-btn a{';
			$vw_church_custom_css .='text-transform:Lowercase;';
		$vw_church_custom_css .='}';
	}
	if($vw_church_theme_lay == 'Uppercase'){ 
		$vw_church_custom_css .='.post-main-box .more-btn a{';
			$vw_church_custom_css .='text-transform:Uppercase;';
		$vw_church_custom_css .='}';
	}

	$vw_church_button_letter_spacing = get_theme_mod('vw_church_button_letter_spacing',14);
	$vw_church_custom_css .='.post-main-box .more-btn a{';
		$vw_church_custom_css .='letter-spacing: '.esc_attr($vw_church_button_letter_spacing).';';
	$vw_church_custom_css .='}';

	$vw_church_related_product_show_hide = get_theme_mod('vw_church_related_product_show_hide',true);
	if($vw_church_related_product_show_hide != true){
		$vw_church_custom_css .='.related.products{';
			$vw_church_custom_css .='display: none;';
		$vw_church_custom_css .='}';
	}


	/*----------------Sroll to top Settings ------------------*/

	$vw_church_scroll_to_top_font_size = get_theme_mod('vw_church_scroll_to_top_font_size');
	if($vw_church_scroll_to_top_font_size != false){
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='font-size: '.esc_attr($vw_church_scroll_to_top_font_size).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_scroll_to_top_padding = get_theme_mod('vw_church_scroll_to_top_padding');
	$vw_church_scroll_to_top_padding = get_theme_mod('vw_church_scroll_to_top_padding');
	if($vw_church_scroll_to_top_padding != false){
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='padding-top: '.esc_attr($vw_church_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_church_scroll_to_top_padding).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_scroll_to_top_width = get_theme_mod('vw_church_scroll_to_top_width');
	if($vw_church_scroll_to_top_width != false){
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='width: '.esc_attr($vw_church_scroll_to_top_width).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_scroll_to_top_height = get_theme_mod('vw_church_scroll_to_top_height');
	if($vw_church_scroll_to_top_height != false){
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='height: '.esc_attr($vw_church_scroll_to_top_height).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_scroll_to_top_border_radius = get_theme_mod('vw_church_scroll_to_top_border_radius');
	if($vw_church_scroll_to_top_border_radius != false){
		$vw_church_custom_css .='.scrollup i{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_scroll_to_top_border_radius).'px;';
		$vw_church_custom_css .='}';
	}

	$vw_church_products_padding_top_bottom = get_theme_mod('vw_church_products_padding_top_bottom');
	if($vw_church_products_padding_top_bottom != false){
		$vw_church_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_church_custom_css .='padding-top: '.esc_attr($vw_church_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_church_products_padding_top_bottom).'!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_products_padding_left_right = get_theme_mod('vw_church_products_padding_left_right');
	if($vw_church_products_padding_left_right != false){
		$vw_church_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_church_custom_css .='padding-left: '.esc_attr($vw_church_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_church_products_padding_left_right).'!important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_products_box_shadow = get_theme_mod('vw_church_products_box_shadow');
	if($vw_church_products_box_shadow != false){
		$vw_church_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_church_custom_css .='box-shadow: '.esc_attr($vw_church_products_box_shadow).'px '.esc_attr($vw_church_products_box_shadow).'px '.esc_attr($vw_church_products_box_shadow).'px #ddd;';
		$vw_church_custom_css .='}';
	}

	$vw_church_products_border_radius = get_theme_mod('vw_church_products_border_radius', 0);
	if($vw_church_products_border_radius != false){
		$vw_church_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_products_border_radius).'px;';
		$vw_church_custom_css .='}';
	}

	$vw_church_products_btn_padding_top_bottom = get_theme_mod('vw_church_products_btn_padding_top_bottom');
	if($vw_church_products_btn_padding_top_bottom != false){
		$vw_church_custom_css .='.woocommerce a.button{';
			$vw_church_custom_css .='padding-top: '.esc_attr($vw_church_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_church_products_btn_padding_top_bottom).' !important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_products_btn_padding_left_right = get_theme_mod('vw_church_products_btn_padding_left_right');
	if($vw_church_products_btn_padding_left_right != false){
		$vw_church_custom_css .='.woocommerce a.button{';
			$vw_church_custom_css .='padding-left: '.esc_attr($vw_church_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_church_products_btn_padding_left_right).' !important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_products_button_border_radius = get_theme_mod('vw_church_products_button_border_radius', 0);
	if($vw_church_products_button_border_radius != false){
		$vw_church_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_products_button_border_radius).'px !important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_woocommerce_sale_position = get_theme_mod( 'vw_church_woocommerce_sale_position','right');
    if($vw_church_woocommerce_sale_position == 'left'){
		$vw_church_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_church_custom_css .='left: 10px !important; right: auto !important;';
		$vw_church_custom_css .='}';
	}else if($vw_church_woocommerce_sale_position == 'right'){
		$vw_church_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_church_custom_css .='left: auto !important; right: 10px !important;';
		$vw_church_custom_css .='}';
	}

	$vw_church_woocommerce_sale_font_size = get_theme_mod('vw_church_woocommerce_sale_font_size');
	if($vw_church_woocommerce_sale_font_size != false){
		$vw_church_custom_css .='.woocommerce span.onsale{';
			$vw_church_custom_css .='font-size: '.esc_attr($vw_church_woocommerce_sale_font_size).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_woocommerce_sale_border_radius = get_theme_mod('vw_church_woocommerce_sale_border_radius', 0);
	if($vw_church_woocommerce_sale_border_radius != false){
		$vw_church_custom_css .='.woocommerce span.onsale{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_woocommerce_sale_border_radius).'px;';
		$vw_church_custom_css .='}';
	}

	// Woocommerce img

	$vw_church_shop_featured_image_border_radius = get_theme_mod('vw_church_shop_featured_image_border_radius', 0);
	if($vw_church_shop_featured_image_border_radius != false){
		$vw_church_custom_css .='.woocommerce ul.products li.product a img{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_shop_featured_image_border_radius).'px;';
		$vw_church_custom_css .='}';
	}

	$vw_church_shop_featured_image_box_shadow = get_theme_mod('vw_church_shop_featured_image_box_shadow',0);
	if($vw_church_shop_featured_image_box_shadow != false){
		$vw_church_custom_css .='.woocommerce ul.products li.product a img{';
			$vw_church_custom_css .='box-shadow: '.esc_attr($vw_church_shop_featured_image_box_shadow).'px '.esc_attr($vw_church_shop_featured_image_box_shadow).'px '.esc_attr($vw_church_shop_featured_image_box_shadow).'px #cccccc;';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_img_position = get_theme_mod('vw_church_footer_img_position','center center');
	if($vw_church_footer_img_position != false){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background-position: '.esc_attr($vw_church_footer_img_position).'!important;';
		$vw_church_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$vw_church_display_grid_posts_settings = get_theme_mod( 'vw_church_display_grid_posts_settings','Into Blocks');
    if($vw_church_display_grid_posts_settings == 'Without Blocks'){
		$vw_church_custom_css .='.grid-post-main-box{';
			$vw_church_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_church_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_church_social_icon_font_size = get_theme_mod('vw_church_social_icon_font_size');
	if($vw_church_social_icon_font_size != false){
		$vw_church_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_church_custom_css .='font-size: '.esc_attr($vw_church_social_icon_font_size).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_social_icon_padding = get_theme_mod('vw_church_social_icon_padding');
	if($vw_church_social_icon_padding != false){
		$vw_church_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_church_custom_css .='padding: '.esc_attr($vw_church_social_icon_padding).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_social_icon_width = get_theme_mod('vw_church_social_icon_width');
	if($vw_church_social_icon_width != false){
		$vw_church_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_church_custom_css .='width: '.esc_attr($vw_church_social_icon_width).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_social_icon_height = get_theme_mod('vw_church_social_icon_height');
	if($vw_church_social_icon_height != false){
		$vw_church_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_church_custom_css .='height: '.esc_attr($vw_church_social_icon_height).';';
		$vw_church_custom_css .='}';
	}

	$vw_church_social_icon_border_radius = get_theme_mod('vw_church_social_icon_border_radius');
	if($vw_church_social_icon_border_radius != false){
		$vw_church_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_social_icon_border_radius).'px;';
		$vw_church_custom_css .='}';
	}

	/*---------------- Grid Posts Settings ------------------*/

	$vw_church_grid_featured_image_border_radius = get_theme_mod('vw_church_grid_featured_image_border_radius', 0);
	if($vw_church_grid_featured_image_border_radius != false){
		$vw_church_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$vw_church_custom_css .='border-radius: '.esc_attr($vw_church_grid_featured_image_border_radius).'px;';
		$vw_church_custom_css .='}';
	}

	$vw_church_grid_featured_image_box_shadow = get_theme_mod('vw_church_grid_featured_image_box_shadow',0);
	if($vw_church_grid_featured_image_box_shadow != false){
		$vw_church_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$vw_church_custom_css .='box-shadow: '.esc_attr($vw_church_grid_featured_image_box_shadow).'px '.esc_attr($vw_church_grid_featured_image_box_shadow).'px '.esc_attr($vw_church_grid_featured_image_box_shadow).'px #cccccc;';
		$vw_church_custom_css .='}';
	}

 	/*---------------- Footer Settings ------------------*/

	$vw_church_button_footer_heading_letter_spacing = get_theme_mod('vw_church_button_footer_heading_letter_spacing',1);
	$vw_church_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_church_custom_css .='letter-spacing: '.esc_attr($vw_church_button_footer_heading_letter_spacing).'px;';
	$vw_church_custom_css .='}';

	$vw_church_button_footer_font_size = get_theme_mod('vw_church_button_footer_font_size','30');
	$vw_church_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_church_custom_css .='font-size: '.esc_attr($vw_church_button_footer_font_size).'px;';
	$vw_church_custom_css .='}';

	$vw_church_theme_lay = get_theme_mod( 'vw_church_button_footer_text_transform','Capitalize');
	if($vw_church_theme_lay == 'Capitalize'){
		$vw_church_custom_css .='#footer h3{';
			$vw_church_custom_css .='text-transform:Capitalize;';
		$vw_church_custom_css .='}';
	}
	if($vw_church_theme_lay == 'Lowercase'){
		$vw_church_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_church_custom_css .='text-transform:Lowercase;';
		$vw_church_custom_css .='}';
	}
	if($vw_church_theme_lay == 'Uppercase'){
		$vw_church_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_church_custom_css .='text-transform:Uppercase;';
		$vw_church_custom_css .='}';
	}

	$vw_church_footer_heading_weight = get_theme_mod('vw_church_footer_heading_weight','600');
	if($vw_church_footer_heading_weight != false){
		$vw_church_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_church_custom_css .='font-weight: '.esc_attr($vw_church_footer_heading_weight).';';
		$vw_church_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$vw_church_theme_lay = get_theme_mod( 'vw_church_footer_template','vw_church-footer-one');
    if($vw_church_theme_lay == 'vw_church-footer-one'){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='';
		$vw_church_custom_css .='}';

	}else if($vw_church_theme_lay == 'vw_church-footer-two'){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_church_custom_css .='color:#000;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='#footer ul li::before{';
			$vw_church_custom_css .='background:#000;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_church_custom_css .='border: 1px solid #000;';
		$vw_church_custom_css .='}';

	}else if($vw_church_theme_lay == 'vw_church-footer-three'){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background: #232524;';
		$vw_church_custom_css .='}';
	}
	else if($vw_church_theme_lay == 'vw_church-footer-four'){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background: #f7f7f7;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_church_custom_css .='color:#000;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='#footer ul li::before{';
			$vw_church_custom_css .='background:#000;';
		$vw_church_custom_css .='}';
		$vw_church_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_church_custom_css .='border: 1px solid #000;';
		$vw_church_custom_css .='}';
	}
	else if($vw_church_theme_lay == 'vw_church-footer-five'){
		$vw_church_custom_css .='#footer{';
			$vw_church_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$vw_church_custom_css .='}';
	}
