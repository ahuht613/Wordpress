<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'furniture_store_amberd_Section_Premium' );

	$wp_customize->add_section(
		new furniture_store_amberd_Section_Premium(
			$wp_customize,
			'theme_upsell_child',
			array(
				'title'    => esc_html__('Furniture Store','furniture-store'),
				'pro_text' => esc_html__('Premium','furniture-store'),
				'pro_url'  => esc_url('https://wpdevart.com/wordpress-furniture-store-theme'),
				'priority'  => 10,
			)
		)
	);