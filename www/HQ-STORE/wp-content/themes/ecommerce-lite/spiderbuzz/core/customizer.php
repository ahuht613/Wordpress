<?php
/**
 * eCommerce Lite Theme Customizer
 *
 * @package eCommerce_lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ecommerce_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//eCommerce Logo Setting
    $wp_customize->get_section('title_tagline')->panel = 'header_setting';
    $wp_customize->get_section('title_tagline' )->priority = 1; 

}
add_action( 'customize_register', 'ecommerce_lite_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ecommerce_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ecommerce_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}