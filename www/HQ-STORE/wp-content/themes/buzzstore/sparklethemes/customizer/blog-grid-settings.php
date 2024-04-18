<?php

$wp_customize->add_section( 'buzz_blog_view_mode', array(
	'capability' => 'edit_theme_options',
	'title' => __( 'Blog View', 'buzzstore' ),
	'panel' => 'buzzstore_general_settings',
));

$wp_customize->add_setting( 'buzz_blog_view_mode', array(
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	'default' => 'list-view',
	'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( 'buzz_blog_view_mode', array(
	'type' => 'select',
	'section' => 'buzz_blog_view_mode',
	'label' => __( 'Choose View', 'buzzstore' ),
	'choices' => array(
		'list-view' => __( 'List View', 'buzzstore' ),
		'grid-view' => __( 'Grid View', 'buzzstore' ),
		'list-alt'	=> __( 'List Alternative', 'buzzstore' ),
)));


/** disable animation */

$wp_customize->add_section( 'buzz_animation_mode', array(
	'capability' => 'edit_theme_options',
	'title' => __( 'Animation', 'buzzstore' ),
	'panel' => 'buzzstore_general_settings',
));

$wp_customize->add_setting( 'buzz_animation_mode', array(
	'type' => 'theme_mod',
	'capability' => 'edit_theme_options',
	'default' => 'disable',
	'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control( 'buzz_animation_mode', array(
	'type' => 'select',
	'section' => 'buzz_animation_mode',
	'label' => __( 'Choose View', 'buzzstore' ),
	'choices' => array(
		'enable' => __( 'Enable', 'buzzstore' ),
		'disable' => __( 'Disable', 'buzzstore' ),
	)
));

?>