<?php

require get_theme_file_path() . '/inc/customizer/custom-controls.php';

function furniture_store_amberd_customize_register( $wp_customize ) {

	require get_theme_file_path() . '/inc/customizer/sections/premium-link-section.php';

}

add_action( 'customize_register', 'furniture_store_amberd_customize_register' );