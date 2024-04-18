(function( $ ) {
	wp.customize.bind( 'ready', function() {

		var optPrefix = '#customize-control-ecommerce_zone_options-';
		
		// Label
		function ecommerce_zone_customizer_label( id, title ) {

			// Colors

			if ( id === 'ecommerce_zone_theme_color' || id === 'background_color' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Site Identity

			if ( id === 'custom_logo' || id === 'site_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Top Header

			if ( id === 'ecommerce_zone_phone_number_icon' || id === 'ecommerce_zone_phone_email_icon' || id === 'ecommerce_zone_phone_location_icon') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// General Setting

			if ( id === 'ecommerce_zone_preloader_hide' || id === 'ecommerce_zone_sticky_header' || id === 'ecommerce_zone_scroll_hide' || id === 'ecommerce_zone_scroll_top_position' || id === 'ecommerce_zone_woocommerce_shop_page_sidebar') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Woocommerce product sale Setting

			if ( id === 'ecommerce_zone_woocommerce_product_sale' || id === 'ecommerce_zone_woo_product_border_radius') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Social Icon

			if ( id === 'ecommerce_zone_facebook_url' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider

			if ( id === 'ecommerce_zone_top_slider_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Header Image

			if ( id === 'header_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
			// Category Product

			if ( id === 'ecommerce_zone_category_product_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Home Product Category

			if ( id === 'ecommerce_zone_home_product_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Footer

			if ( id === 'ecommerce_zone_footer_bg_image' || id === 'ecommerce_zone_show_hide_copyright') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Setting

			if ( id === 'ecommerce_zone_single_post_thumb' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Comment Setting

			if ( id === 'ecommerce_zone_single_post_comment_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Post Setting

			if ( id === 'ecommerce_zone_post_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Page Setting

			if ( id === 'ecommerce_zone_single_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-ecommerce_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		}

		// Colors
		ecommerce_zone_customizer_label( 'ecommerce_zone_theme_color', 'Theme Color' );
		ecommerce_zone_customizer_label( 'background_color', 'Colors' );
		ecommerce_zone_customizer_label( 'background_image', 'Image' );

		// Site Identity
		ecommerce_zone_customizer_label( 'custom_logo', 'Logo Setup' );
		ecommerce_zone_customizer_label( 'site_icon', 'Favicon' );

		// Top Header
		ecommerce_zone_customizer_label( 'ecommerce_zone_phone_number_icon', 'Phone' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_phone_email_icon', 'Email' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_phone_location_icon', 'Location' );

		// General Setting
		ecommerce_zone_customizer_label( 'ecommerce_zone_preloader_hide', 'Preloader' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_sticky_header', 'Sticky Header' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_scroll_hide', 'Scroll To Top' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_scroll_top_position', 'Scroll to top Position' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_woocommerce_shop_page_sidebar', 'Woocommerce Settings' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_woocommerce_product_sale', 'Woocommerce Product Sale Positions' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_woo_product_border_radius', 'Woocommerce Product Border Radius' );

		// Social Icon
		ecommerce_zone_customizer_label( 'ecommerce_zone_facebook_url', 'Social Links' );

		//Slider
		ecommerce_zone_customizer_label( 'ecommerce_zone_top_slider_setting', 'Product Slider' );

		//Header Image
		ecommerce_zone_customizer_label( 'header_image', 'Header Image' );

		//Top Category Product
		ecommerce_zone_customizer_label( 'ecommerce_zone_category_product_setting', 'Category Product' );

		//Home Product Category
		ecommerce_zone_customizer_label( 'ecommerce_zone_home_product_setting', 'Home Product Category' );

		//Footer
		ecommerce_zone_customizer_label( 'ecommerce_zone_footer_bg_image', 'Footer' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_show_hide_copyright', 'Copyright' );

		//Post Setting
		ecommerce_zone_customizer_label( 'ecommerce_zone_single_post_thumb', 'Single Post Setting' );
		ecommerce_zone_customizer_label( 'ecommerce_zone_single_post_comment_title', 'Single Post Comment' );

		// Post Setting
		ecommerce_zone_customizer_label( 'ecommerce_zone_post_page_title', 'Post Setting' );

		// Page Setting
		ecommerce_zone_customizer_label( 'ecommerce_zone_single_page_title', 'Page Setting' );
	

	}); 

})( jQuery );
