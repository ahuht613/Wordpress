<?php
/**
 * Slider Settings
 *
 * @package eCommerce_Lite
 */


function ecommerce_lite_customize_register_service_box( $wp_customize ) {
    
    
    //Slider Section 
    $wp_customize->add_section( 'frontpage_service_box_section', array(
        'title'         => esc_html__( 'Service Box', 'ecommerce-lite' ),
        'description'   => esc_html__('Service Box Section sets the service title, short description and fontawesome icon. Drag "Service Items" to sort their positions.','ecommerce-lite'),
        'priority'      => 2,
        'panel'         =>'ecommerce_lite_homepage_setting'
    ) );



    /*****************************************************
     * Custom Add Slider 
     *****************************************************/
    $wp_customize->add_setting( 
        new Ecommerce_Lite_Repeater_Setting( 
            $wp_customize, 
            'homepage_service_box_section', 
            array(
                'default' => array(
                    array(
                        'service_icons'     => 'fa fa-ambulance',
                        'service_title'     => 'Free Delivery',
                        'service_short_desc'=> 'From $59.89'                        
                    ),
                    array(
                        'service_icons'     => 'fa fa-usd',
                        'service_title'     => 'Free Return',
                        'service_short_desc'=> '365 a day'  
                    ),
                    array(
                        'service_icons'     => 'fa fa-user',
                        'service_title'     => 'Support 24/7',
                        'service_short_desc'=> 'Online 24 hours'  
                    ),
                    array(
                        'service_icons'     => 'fa fa-usd',
                        'service_title'     => 'Big Saving',
                        'service_short_desc'=> 'Weeken Sales'  
                    )
                ),
                'sanitize_callback' => array( 'Ecommerce_Lite_Repeater_Setting', 'sanitize_repeater_setting' ),
                'transport'         => 'refresh'
            ) 
        ) 
    );
    
    $wp_customize->add_control(
		new Ecommerce_Lite_Repeater_Control(
			$wp_customize,
			'homepage_service_box_section',
			array(
				'section' => 'frontpage_service_box_section',				
				'label'	  => __( 'Service Boxes', 'ecommerce-lite' ),
				'fields'  => array(
                    'service_icons' => array(
                        'type'        => 'font',
                        'label'       => esc_html__( 'Box Icon', 'ecommerce-lite' ),
                        'description' => esc_html__( 'Click box below and select the required fontawesome icon or input fontawesome class ( eg: fa fa-usd )', 'ecommerce-lite' ),
                    ),
                    'service_title' => array(
                        'type'        => 'text',
                        'label'       => esc_html__( 'Box Title', 'ecommerce-lite' ),
                        'description' => esc_html__( 'Type box title. Eg: BIG SAVING', 'ecommerce-lite' ),
                    ),
                    'service_short_desc' => array(
                        'type'        => 'text',
                        'label'       => esc_html__( 'Box Short Description', 'ecommerce-lite' ),
                        'description' => esc_html__( 'Type box short description. Eg: Online 24 hours', 'ecommerce-lite' ),
                    )
                ),
                'row_label' => array(
                    'type' => 'field',
                    'value' => esc_html__( 'Service Item', 'ecommerce-lite' ),
                    'field' => 'link'
                )                        
			)
		)
	);
    
    //select refresh
	$wp_customize->selective_refresh->add_partial( 'homepage_service_box_section', array(
        'selector' 			    => '#frontpage_service_box_section',
        'container_inclusive'   => true,
        'render_callback' 	    => function () {
            return do_action( 'service-box' );
        },
    ));

}
add_action( 'customize_register', 'ecommerce_lite_customize_register_service_box' );