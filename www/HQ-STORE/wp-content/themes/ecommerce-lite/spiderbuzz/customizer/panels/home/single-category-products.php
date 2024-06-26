<?php
/**
 * Products Tabs  Settings
 *
 * @package eCommerce_Lite
 */

function ecommerce_lite_customize_register_single_category_products( $wp_customize ) {
   
    
    //Products Category
    $wp_customize->add_section( 'single_category_products', array(
        'title'    => esc_html__( 'Single Category Products', 'ecommerce-lite' ),
        'priority' => 5,
        'panel'    =>'ecommerce_lite_homepage_setting'
	) );
    
    
	/******************************************************************************
	 * 					Products Tabs Slider Enable
	 ***************************************************************************/
    //Products Tab Title
    $wp_customize->add_setting(
        'single_category_products_title',
        array(
            'default'           => 'Popular Products',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'			=>	'postMessage',
        )
    );

    $wp_customize->add_control(
		'single_category_products_title',
		array(
			'section'	  => 'single_category_products',
			'label'		  => esc_html__( 'Title', 'ecommerce-lite' ),
            'type'        => 'text'
		)		
	);	
	
    /******************************************************************************
	 * 					Category Section Hear 
	 ***************************************************************************/
    
    $wp_customize->add_setting( 
        'single_category_select_opt', 
        array(
            'sanitize_callback' => 'ecommerce_lite_sanitize_select',
            'transport' => 'postMessage',
        )
    );

    $wp_customize->add_control( 
        'single_category_select_opt', 
        array(
            'label' => esc_html__( 'Select Category', 'ecommerce-lite' ),
            'section' => 'single_category_products',
            'type' => 'select',
            'choices' => ecommerce_lite_get_products_categories()
        )
    );      

	//Products Category Number of Products
	$wp_customize->add_setting(
        'single_category_number_of_products',
        array(
            'default'           => 8,
            'sanitize_callback' => 'absint',
            'transport' => 'postMessage'
        )
    );
    $wp_customize->add_control(
		'single_category_number_of_products',
		array(
			'section'	  => 'single_category_products',
			'label'		  => esc_html__( 'Number of Products', 'ecommerce-lite' ),
			'description' => esc_html__( 'Number of Products to Display.', 'ecommerce-lite' ),
            'type'        => 'number'
		)		
    );

    $wp_customize->selective_refresh->add_partial( 'ecommerce_lite_single_cat_products', array( 
        'settings' => array( 'single_category_select_opt', 'single_category_number_of_products' ),
        'selector' => '.ecommerce-lite-single-category-products',
        'container_inclusive' => true,
        'render_callback' => function () {
            return do_action( 'single-category-products' );
        }
    ));
    

}
add_action( 'customize_register', 'ecommerce_lite_customize_register_single_category_products' );