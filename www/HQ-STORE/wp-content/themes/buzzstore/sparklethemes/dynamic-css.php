<?php
/**
 * Dynamic css
*/
if (! function_exists('buzzstore_dynamic_css')){

	function buzzstore_dynamic_css(){

        $buzz_store_dynamic = $buzz_store_dynamic_tablet_style = $buzz_store_dynamic_mobile_style = '';

        $primary_color    = get_theme_mod('buzzstore_primary_color');
        $buzz_store_dynamic = '';
        if($primary_color){
            $buzz_store_dynamic .="
            .widget_search .search-form .search-submit,
            .buzz-sale-label,
            .goToTop,
            .widget_shopping_cart_content .buttons a.wc-forward:before,
            .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
            .woocommerce span.onsale,
            .buzz-cart-main:before,.buzz-block-subtitle,
            .product-filter li a:hover, .product-filter li a.current,
            .product-item_tip,
            .buzz-services-item:hover span,
            .buzz-news-tag ul li:first-child,
            .nav-previous a, .nav-next a,
            .widget_buzzstore_cat_widget_area .product-item .buzz-categorycount,
            .woocommerce #payment #place_order, .woocommerce-page #payment #place_order,
            .yith-woocompare-widget .compare, .yith-woocompare-widget .clear-all,
            .woocommerce .widget_shopping_cart .cart_list li a.remove:hover, .woocommerce.widget_shopping_cart .cart_list li a.remove:hover,
            .woocommerce a.button.add_to_cart_button, .woocommerce a.added_to_cart, .woocommerce a.button.product_type_grouped, .woocommerce a.button.product_type_external, .woocommerce a.button.product_type_variable,
            .woocommerce div.product .woocommerce-tabs ul.tabs li:hover, .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
            button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"],
            .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{
                background-color: {$primary_color};
            }
            
            .woocommerce-message,
            .woocommerce-info,
            .footer-widget .widget h2.widget-title:before, .footer-widget .buzz-titlewrap .buzz-title:before,
            ul.buzz-social-list li a,.view-cart a,
            .payment_card .buzz-socila-link li a,
            .buzz-viewcartproduct .widget_shopping_cart,
            ul.buzz-contactwrap li span,
            .buzz-services-item span,
            .woocommerce div.product .woocommerce-tabs .panel,
            .woocommerce div.product .woocommerce-tabs ul.tabs:before,
            .owl-main-slider.owl-carousel .owl-controls .owl-buttons div:hover,
            .product-filter li a:hover, .product-filter li a.current,
            .yith-woocompare-widget .compare, .yith-woocompare-widget .clear-all,
            .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
            .widget-area .widget .widget-title, .cross-sells h2, .cart_totals h2, .woocommerce-billing-fields h3, .woocommerce-shipping-fields h3, #order_review_heading, .u-column1 h2, .u-column2 h2, .upsells h2, .related h2, .woocommerce-additional-fields h3, .woocommerce-Address-title h3, .widget-area .widget .buzz-title,
            .woocommerce a.button.add_to_cart_button, .woocommerce a.added_to_cart, .woocommerce a.button.product_type_grouped, .woocommerce a.button.product_type_external, .woocommerce a.button.product_type_variable,
            .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,
            button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"]{
                border-color: {$primary_color};
            }
            ul.product-item-info li a:before{
                border-top: 8px solid {$primary_color};
            }
            .nav-previous a:after {
                border-right: 11px solid  {$primary_color};
            }
            .nav-next a:after{
                border-left: 11px solid  {$primary_color};
            }
            
            ul.buzz-social-list li a,
            .product-item-details .product-title:hover,
            .buzz-services-item span,
            .buzz-menulink ul li:hover>a, .buzz-menulink ul li.focus>a, .buzz-menulink ul ul>li:hover>a, .buzz-menulink ul ul>li.focus>a, .buzz-menulink ul ul>li.current_page_item a, .buzz-menulink ul>li.current-menu-item>a, .buzz-menulink ul>li.menu-item-has-children:hover a:after, .buzz-menulink ul>li.menu-item-has-children.focus a:after, .buzz-menulink ul>li.page_item_has_children:hover a:after,
            .woocommerce .woocommerce-message .button,
            .payment_card .buzz-socila-link li a,
            .footer .widget ul li a,
            ul.buzz-contactwrap li span,
            .woocommerce-message:before,
            .owl-main-slider.owl-carousel .owl-controls .owl-buttons div:hover i,
            .content-area .site-main .buzz-news .buzz-content .buzz-title:hover,
            .widget_buzzstore_blog_widget_area .header-title a:hover,
            .woocommerce ul.cart_list li a:hover, .woocommerce ul.product_list_widget li a:hover,
            .widget a:hover, .widget a:hover::before, .widget li:hover::before,
            .woocommerce a.button.add_to_cart_button:hover, li.product a.added_to_cart:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce .widget-area a.clear-all:hover, .woocommerce input.button:hover, .woocommerce a.button.product_type_grouped:hover, .woocommerce a.button.product_type_external:hover, .woocommerce a.button.product_type_variable:hover{
                color: {$primary_color};
            }
            ";
        }

        $top_header_link_color      = get_theme_mod( 'buzzstore_top_header_link_color', '#fff' );
        $top_header_link_hov_color  = get_theme_mod( 'buzzstore_top_header_link_hov_color', '#ffffff' );

        $buzz_store_dynamic .= ".buzz-topheader .buzz-topleft ul li a { color: $top_header_link_color; } .buzz-topheader .buzz-topleft ul li:hover a { color: $top_header_link_hov_color; }";

        $top_header_icon_color      = get_theme_mod( 'buzzstore_top_header_icon_color', '#fff' );
        $top_header_icon_hov_color  = get_theme_mod( 'buzzstore_top_header_icon_hov_color', '#ffffff' );

        $buzz_store_dynamic .= ".buzz-topheader .buzz-topleft ul li span, .buzz-topheader .buzz-topleft ul.buzz-socila-link li span { color: $top_header_icon_color; } .buzz-topheader .buzz-topleft ul li:hover span, .buzz-topheader .buzz-topleft ul.buzz-socila-link li:hover span { color: $top_header_icon_hov_color; }";

        $top_header_woo_label_color = get_theme_mod( 'buzzstore_top_header_woo_label_color', '#ffffff' );
        $buzz_store_dynamic .= ".buzz-topheader .buzz-topright ul li a { color: $top_header_woo_label_color; }";

        $top_header_woo_label_hov_color = get_theme_mod( 'buzzstore_top_header_woo_label_hov_color', '#86bc42' );
        $buzz_store_dynamic .= ".buzz-topheader .buzz-topright ul li:hover a { color: $top_header_woo_label_hov_color; }";

        $top_header_woo_icon_color = get_theme_mod( 'buzzstore_top_header_woo_icon_color', '#ffffff' );
        $buzz_store_dynamic .= ".buzz-topheader .buzz-topright ul li span { color: $top_header_woo_icon_color; }";

        $top_header_woo_icon_hov_color = get_theme_mod( 'buzzstore_top_header_woo_icon_hov_color', '#86bc42' );
        $buzz_store_dynamic .= ".buzz-topheader .buzz-topright ul li:hover span { color: $top_header_woo_icon_hov_color; }";
    
        wp_add_inline_style( 'buzzstore-style', $buzz_store_dynamic );
	}
}
add_action( 'wp_enqueue_scripts', 'buzzstore_dynamic_css', 99 );