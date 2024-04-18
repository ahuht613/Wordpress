<?php
/**
 * Products Tabs  Settings
 *
 * @package eCommerce_Lite
 */

function ecommerce_lite_customize_register_products_tab( $wp_customize ) {
   
    
    //Products Category
    $wp_customize->add_section( 'products_tab_section', array(
        'title'    => esc_html__( 'Product Tabs', 'ecommerce-lite' ),
        'priority' => 5,
        'panel'    =>'ecommerce_lite_homepage_setting'
	) );
    
    /******************************************************************************
	 * 					Products Tabs Slider Enable
	 ******************************************************************************/
    //Enable Products Tabs Slider
    $wp_customize->add_setting(
        'product_tab_slider_enable',
        array(
            'default'           => false,
			'sanitize_callback' => 'ecommerce_lite_sanitize_checkbox',
			'transport'=>'postMessage',
			
        )
    );
    
    $wp_customize->add_control(
		new Ecommerce_Lite_Toggle_Control( 
			$wp_customize,
			'product_tab_slider_enable',
			array(
				'section'	  => 'products_tab_section',
				'label'		  => esc_html__( 'Enable Slider', 'ecommerce-lite' ),
				'description' => esc_html__( 'Enable/Disable Slider.', 'ecommerce-lite' ),
			)
		)
	);

	/******************************************************************************
	 * 					Products Tabs Slider Enable
	 ***************************************************************************/
    //Products Tab Title
    $wp_customize->add_setting(
        'products_tabs_title',
        array(
            'default'           => 'POPULAR PRODUCTS',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'			=>	'postMessage',
        )
    );
    
    $wp_customize->add_control(
		'products_tabs_title',
		array(
			'section'	  => 'products_tab_section',
			'label'		  => esc_html__( 'Product Tabs Header Title', 'ecommerce-lite' ),
			'description' => esc_html__( 'Customize Product Tabs Header Title', 'ecommerce-lite'),
            'type'        => 'text'
		)		
	);	
	
    /******************************************************************************
	 * 					Category Section Hear 
	 ***************************************************************************/
    $wp_customize->add_setting(
		'products_tabs_multiple_cat', 
		array(
			'default' 			=> array(ecommerce_lite_get_default_products_categories()),
			'sanitize_callback' => 'ecommerce_lite_sanitize_multiple_check',
			'transport'			=> 'postMessage',						
		)
	);

	$wp_customize->add_control(
		new Ecommerce_Lite_MultiCheck_Control(
			$wp_customize,
			'products_tabs_multiple_cat',
			array(
				'section'     => 'products_tab_section',
				'label'       => esc_html__( 'Product Tabs Category', 'ecommerce-lite' ),
                'description' => esc_html__( 'Select Categories for Product Tabs.', 'ecommerce-lite' ),
				'choices'     => ecommerce_lite_get_products_categories( )
			)
		)
	);

	//Products Category Number of Products
	$wp_customize->add_setting(
        'products_tab_number_of_products',
        array(
            'default'           => 8,
            'sanitize_callback' => 'absint',
			'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_control(
		'products_tab_number_of_products',
		array(
			'section'	  => 'products_tab_section',
			'label'		  => esc_html__( 'Number of Products', 'ecommerce-lite' ),
			'description' => esc_html__( 'Number of Products Displayed on Each Tab.', 'ecommerce-lite' ),
            'type'        => 'number'
		)		
    );

	$wp_customize->selective_refresh->add_partial( 'ecommerce_lite_product_tabs', array (
		'settings' => array( 'product_tab_slider_enable', 'products_tabs_multiple_cat', 'products_tab_number_of_products' ),
		'selector' => '#products_tab_section',
		'container_inclusive' => true,
		'render_callback' => function () {
			return do_action( 'products_tab' );
		}
	));
    

}
add_action( 'customize_register', 'ecommerce_lite_customize_register_products_tab' );