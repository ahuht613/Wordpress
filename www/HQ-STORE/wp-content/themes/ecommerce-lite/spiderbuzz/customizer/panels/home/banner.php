<?php
/**
 * Banner
 *
 * @package eCommerce_Lite
 */


function ecommerce_lite_customize_register_banner( $wp_customize ) {
    
    //Slider Section 
    $wp_customize->add_section( 'ecommerce_lite_frontpage_banner_section', array(
        'title'    => esc_html__( 'Banner', 'ecommerce-lite' ),
        'priority' => 6,
        'panel'    =>'ecommerce_lite_homepage_setting'
    ) );

    /*****************************************************
     * Custom Add Slider 
     *****************************************************/
    $wp_customize->add_setting( 
        new Ecommerce_Lite_Repeater_Setting( 
            $wp_customize, 
            'ecommerce_lite_homepage_banner', 
            array(
                'default' => array(
                    array(
                        'banner_image'     => get_template_directory_uri().'/assets/images/mac-add.jpg',
                        'banner_links'     => 'https://www.ecommerce-lite.com/custom-category-link'                      
                    ),
                    array(
                        'banner_image'     => get_template_directory_uri().'/assets/images/mac-add.jpg',
                        'banner_links'     => 'https://www.ecommerce-lite.com/custom-category-link'                      
                    ),
                    array(
                        'banner_image'     => get_template_directory_uri().'/assets/images/mac-add.jpg',
                        'banner_links'     => 'https://www.ecommerce-lite.com/custom-category-link'                      
                    ),
                    array(
                        'banner_image'     => get_template_directory_uri().'/assets/images/mac-add.jpg',
                        'banner_links'     => 'https://www.ecommerce-lite.com/custom-category-link'                      
                    ),
                   
                ),
                'sanitize_callback' => array( 'Ecommerce_Lite_Repeater_Setting', 'sanitize_repeater_setting' ),
                'transport' => 'postMessage',
            ) 
        ) 
    );
    
    $wp_customize->add_control(
		new Ecommerce_Lite_Repeater_Control(
			$wp_customize,
			'ecommerce_lite_homepage_banner',
			array(
				'section' => 'ecommerce_lite_frontpage_banner_section',				
				'label'	  => esc_html__( 'Banner Images', 'ecommerce-lite' ),
				'fields'  => array(
                    'banner_image' => array(
                        'type'        => 'image',
                        'label'       => esc_html__( 'Banner Image', 'ecommerce-lite' ),
                        'description' => esc_html__( 'Select Banner Image.', 'ecommerce-lite' ),
                    ),
                    'banner_links' => array(
                        'type'        => 'text',
                        'label'       => esc_html__( 'Banner Link', 'ecommerce-lite' ),
                        'description' => esc_html__( 'Eg: https://www.ecommerce-lite.com/banner-links.', 'ecommerce-lite' ),
                    )
                ),
                'row_label' => array(
                    'type' => 'field',
                    'value' => esc_html__( 'Banner Image', 'ecommerce-lite' ),
                    'field' => 'link'
                )                        
			)
		)
    );
   
	$wp_customize->selective_refresh->add_partial( 'ecommerce_lite_homepage_banner', array(
        'selector' 			=> '#ecommerce_lite_frontpage_banner_section',
        'container_inclusive' => true,
        'render_callback' => function () {
            return do_action( 'homepage_brand_logo' );
        }
    ) );
 

}
add_action( 'customize_register', 'ecommerce_lite_customize_register_banner' );