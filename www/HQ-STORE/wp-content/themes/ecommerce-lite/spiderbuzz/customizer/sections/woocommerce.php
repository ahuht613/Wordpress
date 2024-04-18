<?php
/**
 * Woocommerce Settings
 *
 * @package eCommerce_Lite
 */
function ecommerce_lite_customize_woocommerce_settings( $wp_customize ) {
    
    //Woocommerce Settings
    $wp_customize->add_section( 'ecommerce_lite_woocommerce_shop_page_sections', array(
        'title'    => esc_html__( 'Shop Page', 'ecommerce-lite' ),
        'priority' => 22,
        'panel'    => 'woocommerce'
    ));

    //Woocommerce Shop Page Settings
    $wp_customize->add_setting(
        'ecommerce_lite_woocommerce_products_per_page',
        array(
            'default'           => 12,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'ecommerce_lite_woocommerce_products_per_page',
		array(
			'section'	  => 'ecommerce_lite_woocommerce_shop_page_sections',
			'label'		  => esc_html__( 'Number of Products in Shop Page', 'ecommerce-lite' ),
            'type'        => 'number',
            'priority'    => 1
		)		
    );

    //Woocommerce Shop Page Settings
    $wp_customize->add_setting(
        'ecommerce_lite_woocommerce_loop_columns',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'ecommerce_lite_woocommerce_loop_columns',
		array(
			'section'	  => 'ecommerce_lite_woocommerce_shop_page_sections',
			'label'		  => esc_html__( 'Set Number of Columns', 'ecommerce-lite' ),
            'type'        => 'number',
            'priority'    => 1
		)		
    );

    //woocommerce sidebar optins archive page
    $wp_customize->add_setting( 
        'woocommerce_shop_page_sidebar_options', 
        array(
            'default'           => esc_html__('sidebar-left','ecommerce-lite'),
            'sanitize_callback' => 'ecommerce_lite_sanitize_select'
        )
    );
    $wp_customize->add_control( 
        'woocommerce_shop_page_sidebar_options', 
        array(
            'label' => esc_html__( 'Sidebar Type', 'ecommerce-lite' ),
            'section' => 'ecommerce_lite_woocommerce_shop_page_sections',
            'type' => 'select',
            'choices' => array(
                'sidebar-left'  => esc_html__('Left Sidebar','ecommerce-lite'),
                'sidebar-right' => esc_html__('Right Sidebar','ecommerce-lite'),
                'full-width'    => esc_html__('No Sidebar','ecommerce-lite')               
            )
        )
    );      
    
    // 
    //Woocommerce Settings
    $wp_customize->add_section( 'ecommerce_lite_woocommerce_single_page_sections', array(
        'title'    => esc_html__( 'Single Page', 'ecommerce-lite' ),
        'priority' => 21,
        'panel'    => 'woocommerce'
    ) );

    //Woocommerce Social Share in Single page
    $wp_customize->add_setting(
        'ecommerce_lite_social_share_enable',
        array(
            'default'           => true,
            'sanitize_callback' => 'ecommerce_lite_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(
		new Ecommerce_Lite_Toggle_Control( 
			$wp_customize,
			'ecommerce_lite_social_share_enable',
			array(
				'section'	  => 'ecommerce_lite_woocommerce_single_page_sections',
				'label'		  => esc_html__( 'Enable Social Share', 'ecommerce-lite' ),
                'description' => esc_html__( 'Enable/Disable Social Share.', 'ecommerce-lite' ),
                'priority'    => 1
			)
		)
    );

    //Woocommerce Shop Page Settings
    $wp_customize->add_setting(
        'ecommerce_lite_woocommerce_related_products_posts_per_page',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'ecommerce_lite_woocommerce_related_products_posts_per_page',
		array(
			'section'	  => 'ecommerce_lite_woocommerce_single_page_sections',
			'label'		  => esc_html__( 'Number of Related Products to Display', 'ecommerce-lite' ),
            'type'        => 'number',
            'priority'    => 2
		)		
    );

    //Woocommerce Shop page Settings
    $wp_customize->add_setting(
        'ecommerce_lite_woocommerce_related_products_columns',
        array(
            'default'           => 3,
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
		'ecommerce_lite_woocommerce_related_products_columns',
		array(
			'section'	  => 'ecommerce_lite_woocommerce_single_page_sections',
			'label'		  => esc_html__( 'Set Number of Columns', 'ecommerce-lite' ),
            'type'        => 'number',
            'priority'    => 3
		)		
    );

    //woocommerce sidebar optins single page
    $wp_customize->add_setting( 
        'woocommerce_single_page_sidebar_options', 
        array(
            'default'           => esc_html__('full-width','ecommerce-lite'),
            'sanitize_callback' => 'ecommerce_lite_sanitize_select'
        )
    );
    $wp_customize->add_control( 
        'woocommerce_single_page_sidebar_options', 
        array(
            'label' => esc_html__( 'Sidebar Type', 'ecommerce-lite' ),
            'section' => 'ecommerce_lite_woocommerce_single_page_sections',
            'type' => 'select',
            'choices' => array(
                'sidebar-left'  => esc_html__('Left Sidebar','ecommerce-lite'),
                'sidebar-right' => esc_html__('Right Sidebar','ecommerce-lite'),
                'full-width'    => esc_html__('No Sidebar','ecommerce-lite')               
            )
        )
    );


}
add_action( 'customize_register', 'ecommerce_lite_customize_woocommerce_settings' );