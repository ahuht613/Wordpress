<?php
/**
 * Slider Settings
 *
 * @package eCommerce_Lite
 */


function ecommerce_lite_customize_register_slider( $wp_customize ) {
    
    //Slider Section 
    $wp_customize->add_section( 'frontpage_slider_section', array(
        'title'    => esc_html__( 'Slider Settings', 'ecommerce-lite' ),
        'priority' => 1,
        'panel'    =>'ecommerce_lite_homepage_setting'
    ) );


    /*****************************************************
     * Slider Categories List
     *****************************************************/
    $wp_customize->add_setting(
        'ecommerce_lite_slider_category_list_enable',
        array(
            'default'           => false,
            'sanitize_callback' => 'ecommerce_lite_sanitize_checkbox',
            'transport'         => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
		new Ecommerce_Lite_Toggle_Control( 
			$wp_customize,
			'ecommerce_lite_slider_category_list_enable',
			array(
				'section'	  => 'frontpage_slider_section',
				'label'		  => esc_html__( 'Enable Product Categories List', 'ecommerce-lite' ),
                'description' => esc_html__( 'Enable/Disable Product Categories List.', 'ecommerce-lite' ),
                'priority'    => 1,
			)
		)
    );

    $wp_customize->selective_refresh->add_partial( 'ecommerce_lite_slider_category_list_enable', array (
        'selector' => '#frontpage_slider_section',
        'container_inclusive' => true,
        'render_callback' => function () {
            return do_action( 'slider-section' );
        }
    ));
    
    /***************************************************************
     * Slide Button Text Change
     **************************************************************/
    $wp_customize->add_setting(
        'ecommerce_lite_slider_category_list_header_text',
        array(
            'default'           => 'All Categories',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'			=>	'postMessage',
        )
    );

    $wp_customize->add_control(
		'ecommerce_lite_slider_category_list_header_text',
		array(
			'section'	  => 'frontpage_slider_section',
			'label'		  => esc_html__('Category List Title', 'ecommerce-lite' ),
            'type'        => 'text',
            'priority'    => 2,
		)		
    );
    

    /***************************************************************
     * Slide Button Text Change
     **************************************************************/
    $wp_customize->add_setting(
        'slider_button_text_change',
        array(
            'default'           => 'Buy Now',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'			=>	'postMessage',
        )
    );

    $wp_customize->add_control(
		'slider_button_text_change',
		array(
			'section'	  => 'frontpage_slider_section',
			'label'		  => esc_html__( 'Slider Button Text', 'ecommerce-lite' ),
            'type'        => 'text',
            'priority'    => 3,
		)		
    );

    /*****************************************************
     * Custom Add Slider 
     *****************************************************/
    $wp_customize->add_setting( 
        new Ecommerce_Lite_Repeater_Setting( 
            $wp_customize, 
            'homepage_slider_section', 
            array(
                'default' => array(
                        array(
                            'slider_text'       => esc_html__('Up To 30% Summer Sale Now Starting at $45.00', 'ecommerce-lite'),
                            'slider_sort_desc'       => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since', 'ecommerce-lite'),
                            'slider_links'      => esc_url('https://ecommerce-lite-pro/links'),
                            'slider_btn_text'   => esc_html__('Shop Now', 'ecommerce-lite'),
                            'slider_image'      => get_template_directory_uri().'/assets/images/banner01.jpg',                       
                        ),
                        array(
                            'slider_text'   => esc_html__('Up To 30% Summer Sale Now Starting at $45.00', 'ecommerce-lite'),
                            'slider_sort_desc'       => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since', 'ecommerce-lite'),
                            'slider_links'  => esc_url('https://ecommerce-lite-pro/links'),
                            'slider_btn_text'  => esc_html__('Shop Now', 'ecommerce-lite'),
                            'slider_image'  => get_template_directory_uri().'/assets/images/banner02.jpg'                  
                        )
                    )
                ,
                'sanitize_callback' => array( 'Ecommerce_Lite_Repeater_Setting', 'sanitize_repeater_setting' ),
            ) 
        ) 
    );
    
    $wp_customize->add_control(
		new Ecommerce_Lite_Repeater_Control(
			$wp_customize,
			'homepage_slider_section',
			array(
                'section'   => 'frontpage_slider_section',
                'priority'    => 4,				
				'label'	      => esc_html__( 'Sliders', 'ecommerce-lite' ),
				'fields'      => array(
                    'slider_text' => array(
                        'type'        => 'textarea',
                        'label'       => esc_html__( 'Slider Text', 'ecommerce-lite' ),
                    ),
                    'slider_sort_desc' => array(
                        'type'        => 'textarea',
                        'label'       => esc_html__( 'Slider Short Description', 'ecommerce-lite' ),
                    ),
                    'slider_links' => array(
                        'type'        => 'url',
                        'label'       => esc_html__( 'Slider Button Link', 'ecommerce-lite' ),
                    ),
                    'slider_image' => array(
                        'type'        => 'image',
                        'label'       => esc_html__( 'Upload Slider Image', 'ecommerce-lite' ),
                    )
                ),
                'row_label' => array(
                    'type'  => 'field',
                    'value' => esc_html__( 'Slider Item', 'ecommerce-lite' ),
                    'field' => 'slider'
                )                        
			)
		)
	); 

}
add_action( 'customize_register', 'ecommerce_lite_customize_register_slider' );