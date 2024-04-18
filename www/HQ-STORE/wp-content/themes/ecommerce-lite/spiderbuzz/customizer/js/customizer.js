/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	/*********************************************
	 * Site title and description.
	 ********************************************/
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	//Top Header Enable
	wp.customize( 'ecommerce_lite_top_header_enable', function( value ) {
		value.bind( function( enable ) {
			if( enable == true ){
				$(".top-header").show();
			}else{
				$(".top-header").hide();
			}
		})
	});
	
	wp.customize( 'ecommerce_lite_top_header_text', function( value ) {
		value.bind( function( text ) {
			$(".offertext").text(text);
		})
	});

	/*********************************************
	 * Top Header Banner Section top_header_section_info
	 ********************************************/
	/** top header section enable */
	wp.customize( 'ecommerce_lite_top_header_section_info', function( value ) {
		value.bind( function( val ) {
			$( '#top_header_section_info' ).text( val );
		})
	});

	wp.customize( 'ecommerce_lite_top_header_section_sticky', function (value) {
		value.bind( function( val ) {
			if( val === true ) {
				$( '#top_header_section_enable' ).css({ 'position' : 'sticky', 'top' : '0', 'z-index' : 10 });
			} else if ( val === false ) {
				$( '#top_header_section_enable' ).css({ 'position' : 'relative', 'top' : '0', 'z-index' : 10 });
			}
		})
	});

	wp.customize( 'ecommerce_lite_top_header_section_background_color', function ( value ) {
		value.bind( function( val ) {
			$( '#top_header_section_enable' ).css( 'background-color', val );
		});
	});

	wp.customize( 'ecommerce_lite_top_header_section_text_color', function ( value ) {
		value.bind( function( val ) {
			$( '#top_header_section_info p, #top_header_section_info' ).css( 'color', val );
		});
	});

	/************************************************
	 * Main Header Settings 
	 ***********************************************/
	//search form
	wp.customize( 'ecommerce_lite_main_header_search_box_enable', function( value ) {
		value.bind( function( newval ) {
			if(newval == true){
				$( '.header-search' ).fadeIn('slow');
			}else{
				$( '.header-search' ).fadeOut('slow');
			}
			
		} );
	} );

	//wishlist enable/disable
	wp.customize( 'ecommerce_lite_main_header_wishlist_enable', function( value ) {
		value.bind( function( newval ) {
			if(newval == true){
				$( 'li#header-wishlist' ).fadeIn('slow');
			}else{
				$( 'li#header-wishlist' ).fadeOut('slow');
			}
			
		} );
	} );

	//add to cart
	wp.customize( 'ecommerce_lite_main_header_cart_enable', function( value ) {
		value.bind( function( newval ) {
			if(newval == true){
				$( 'div.header-cart' ).fadeIn('slow');
			}else{
				$( 'div.header-cart' ).fadeOut('slow');
			}
			
		} );
	} );

	//user section
	wp.customize( 'ecommerce_lite_main_header_user_enable', function( value ) {
		value.bind( function( newval ) {
			if(newval == true){
				$( 'li#header-login' ).fadeIn('slow');
			}else{
				$( 'li#header-login' ).fadeOut('slow');
			}
			
		} );
	} );

	

	/************************************************
	 * eCommerce Products Tabs 
	 ***********************************************/
	wp.customize( 'products_tabs_title', function( value ) {
		value.bind( function( newval ) {
			$( 'h6#products_tabs_title' ).html( newval );
		} );
	} );

	wp.customize.selectiveRefresh.bind( 'partial-content-rendered', function( placement ) {
		if ( placement.partial.id === 'ecommerce_lite_slider_category_list_enable' ) {
			// slider
			$(".ecommerce-slider").owlCarousel({
				items : 1,
				itemsCustom : false,
				itemsDesktop : [1199, 1],
				itemsDesktopSmall : [979, 1],
				itemsTablet : [768, 1],
				itemsTabletSmall : true,
				itemsMobile : [480, 1],
				autoPlay : true,
				navigation : true,
				pagination: true,
				paginationNumbers: true,
				navigationText : ['<i class="fa fa-chevron-left"></i><span class="prev">Prev</span>','<span class="next">Next</span><i class="fa fa-chevron-right"></i>']
			  });
		}
	});

	wp.customize( 'ecommerce_lite_slider_category_list_header_text', function( value ) {
		value.bind(function( val ) {
			$( '#frontpage_slider_section .title h5' ).text( val );
		});
	});

	wp.customize( 'slider_button_text_change', function( value ) {
		value.bind( function( val ) {
			$( '.ecommerce-slider .item .item-text a' ).text( val );
		});
	});

	wp.customize.selectiveRefresh.bind( 'partial-content-rendered', function( placement ) {
		if( placement.partial.id === 'ecommerce_lite_product_tabs' ) {

			$(".product-tab, .brand-slider, .testomonial-slider, .full-slider").owlCarousel({
				items : 1,
				itemsCustom : false,
				itemsDesktop : [1199, 1],
				itemsDesktopSmall : [979, 1],
				itemsTablet : [768, 1],
				itemsTabletSmall : true,
				itemsMobile : [480, 1],
				autoPlay : true,
				navigation : true,
				navigationText : ['<i class="fa fa-chevron-left"></i><span class="prev">Prev</span>','<span class="next">Next</span><i class="fa fa-chevron-right"></i>']
			  });

			  $('.ecommerce-shop-products-tab').on('click', 'li.ecommerce-shop-products-tabs-title', function(e) {
				e.preventDefault();
				var select_category_id = $( this ).attr( 'select_category_id' );
				var tab_product_count = $( this ).attr('tab_product_count');
				var tab_slider_enable = $( this ).attr('tab_slider_enable');
		
				var widget = $(this).closest(".news_class");
		
				var id = $(widget).attr('id');
		
				var storage_id = id + "-" +select_category_id;
		
				var data = localStorage.getItem(storage_id);
		
				var that = $( this );
		
				var ecommerce_lite_tab_content = that.closest(".products-tab-wraper").find(".products-tab-section");
		
				$.ajax({
					url : eCommerceLite.ajaxurl,
					type : 'post',
					data : {
						action : 'category_tab_products',
						post_id : select_category_id,
						prduct_count : tab_product_count,
						tab_slider_enable: tab_slider_enable
					},
					success : function( response ) {
						setTimeout(function() {
							localStorage.setItem(storage_id, data);
							$(ecommerce_lite_tab_content).html(response);
		
							//Products Tab Section
							$(".product-tab1").owlCarousel({
								items : 1,
								itemsCustom : false,
								itemsDesktop : [1199, 1],
								itemsDesktopSmall : [979, 1],
								itemsTablet : [768, 1],
								itemsTabletSmall : true,
								itemsMobile : [480, 1],
								autoPlay : false,
								navigation : true,
								navigationText : ['<i class="fa fa-chevron-left"></i><span class="prev">Prev</span>','<span class="next">Next</span><i class="fa fa-chevron-right"></i>']
							});
		
						}, 1000);
		
						
			
					},
					beforeSend: function() {
							$(ecommerce_lite_tab_content).html('<br /><br /><div class="ajax-loader" style="height:320px;"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span></div>');
						},
					
				});
							
			});  

		}
	});

	wp.customize( 'single_category_products_title', function ( value ) {
		value.bind( function( newVal ) {
			$( '.ecommerce-lite-single-category-products h6#single_products_tabs_title' ).text( newVal );
		});
	});

	wp.customize( 'onsell_products_title', function ( value ) {
		value.bind( function( newVal ) {
			$( '.ecommerce-lite-onsale-products h6#onsell_products_tabs_title' ).text( newVal );
		});
	});

	wp.customize( 'ecommerce_lite_payment_method_support_image', function ( value ) {
		value.bind( function( newVal ) {
			$( '.footer-payment-method img, .before-footer-section .before-footer-content img' ).attr( 'src', newVal );
		});
	});
    
} )( jQuery );
