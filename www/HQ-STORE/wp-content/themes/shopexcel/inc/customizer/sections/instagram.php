<?php
/**
 * Instagram Settings
 *
 * @package Shopexcel
 */
if ( ! function_exists( 'shopexcel_customize_register_general_instagram' ) ) : 

function shopexcel_customize_register_general_instagram( $wp_customize ) {
    $defaults = shopexcel_get_general_defaults();

    /** Instagram Settings */
    $wp_customize->add_section(
        'instagram_settings',
        array(
            'title'    => __( 'Instagram Settings', 'shopexcel' ),
            'priority' => 40,
        )
    );
    
    /** Enable Instagram Section */
    $wp_customize->add_setting( 
        'ed_instagram', 
        array(
            'default'           => $defaults['ed_instagram'],
            'sanitize_callback' => 'shopexcel_sanitize_checkbox'
        ) 
    );
    
    $wp_customize->add_control(
        new Shopexcel_Toggle_Control( 
            $wp_customize,
            'ed_instagram',
            array(
                'section'     => 'instagram_settings',
                'label'	      => __( 'Instagram Section', 'shopexcel' ),
                'description' => __( 'Enable to show Instagram Section', 'shopexcel' ),
            )
        )
    );

    $wp_customize->add_setting( 
        'instagram_shortcode', 
        array(
            'default'           =>'[instagram-feed]',
            'sanitize_callback' => 'sanitize_text_field'
        ) 
    );

    $wp_customize->add_control(
        'instagram_shortcode',
        array(
            'section'         => 'instagram_settings',
            'label'           => __( 'Shortcode', 'shopexcel' ),
            'type'            => 'text',
            'description'     => __( 'Add shortcode for your instagram profile below:', 'shopexcel' ),
            'active_callback' => 'shopexcel_ed_instagram'
        )
    );    
}
endif;
add_action( 'customize_register', 'shopexcel_customize_register_general_instagram' );