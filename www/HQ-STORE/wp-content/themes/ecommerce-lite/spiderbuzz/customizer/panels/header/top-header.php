<?php
/**
 * Top Header Settings
 *
 * @package eCommerce_Lite
 */

function ecommerce_lite_customize_register_top_header_section( $wp_customize ) {
    
    $wp_customize->add_section( 'top_header_setting', array(
        'title'    => __( 'Top Header Settings', 'ecommerce-lite' ),
        'priority' => 2,
        'panel'    =>'header_setting'
    ) );
    
    /** Enable/Disable Top Header Settings */
    $wp_customize->add_setting(
        'ecommerce_lite_top_header_section_enable',
        array(
            'default'           => false,
            'sanitize_callback' => 'ecommerce_lite_sanitize_checkbox',
            'transport'         => 'postMessage',
        )
    );
    
    $wp_customize->add_control(
		new Ecommerce_Lite_Toggle_Control( 
			$wp_customize,
			'ecommerce_lite_top_header_section_enable',
			array(
				'section'	  => 'top_header_setting',
				'label'		  => __( 'Enable Top Header', 'ecommerce-lite' ),
				'description' => __( 'Enable/Disable Top Header.', 'ecommerce-lite' ),
			)
		)
	);
    
    $wp_customize->selective_refresh->add_partial( 'ecommerce_lite_top_header_section_enable', array (
        'selector'            => '#top_header_section_enable',
        'container_inclusive' => true,
        'render_callback'     => function () {
            do_action('ecommerce_lite_nav_before');
        }
    ));
    
    /** Top Header Text Section */
    $wp_customize->add_setting(
        'ecommerce_lite_top_header_section_info',
        array(
            'default'           => 'GET 50% DISCOUNT IN THIS SUMMER',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         =>'postMessage',
        )
    );
    $wp_customize->add_control(
		'ecommerce_lite_top_header_section_info',
		array(
			'section'	  => 'top_header_setting',
			'label'		  => __( 'Top Header Info Text', 'ecommerce-lite' ),
			'description' => __( 'Customize Top Header Info Text', 'ecommerce-lite' ),
            'type'        => 'text'
		)		
    );

    /** Enable sticky notice bar */
    $wp_customize->add_setting(
        'ecommerce_lite_top_header_section_sticky',
        array(
            'default'           => false,
            'sanitize_callback' => 'ecommerce_lite_sanitize_checkbox',
            'transport'         =>'postMessage',
        )
    );
    
    $wp_customize->add_control(
		new Ecommerce_Lite_Toggle_Control( 
			$wp_customize,
			'ecommerce_lite_top_header_section_sticky',
			array(
				'section'	  => 'top_header_setting',
				'label'		  => __( 'Enable Sticky', 'ecommerce-lite' )
			)
		)
    );
    
    /** 
     * Header notice background color
     */
    $wp_customize->add_setting( 
        'ecommerce_lite_top_header_section_background_color', 
        array(
            'default' => '#ff3030',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport' => 'postMessage',
        )
    );
     
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
        'ecommerce_lite_top_header_section_background_color', 
            array(              
                'label'      => __( 'Background Color', 'ecommerce-lite' ),
                'section'    => 'top_header_setting',
            )
        ) 
    );
    
    /** 
     * Header notice background color
     */
    $wp_customize->add_setting( 
        'ecommerce_lite_top_header_section_text_color', 
        array(
            'default' => '#fff',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport' => 'postMessage',
        )
    );
     
    $wp_customize->add_control( 
        new WP_Customize_Color_Control( 
        $wp_customize, 
        'ecommerce_lite_top_header_section_text_color', 
            array(              
                'label'      => __( 'Text Color', 'ecommerce-lite' ),
                'section'    => 'top_header_setting', 
            )
        ) 
    );

    
}
add_action( 'customize_register', 'ecommerce_lite_customize_register_top_header_section' );
