<?php
/**
 * Theme Options
 *
 * @package Shop_Hub
 */

$wp_customize->add_panel(
	'shop_hub_theme_options',
	array(
		'title'    => esc_html__( 'Theme Options', 'shop-hub' ),
		'priority' => 130,
	)
);

// Typography.
require get_template_directory() . '/inc/customizer/theme-options/typography.php';

// Breadcrumb.
require get_template_directory() . '/inc/customizer/theme-options/breadcrumb.php';

// Excerpt.
require get_template_directory() . '/inc/customizer/theme-options/excerpt.php';

// Archive Layout.
require get_template_directory() . '/inc/customizer/theme-options/archive-layout.php';

// Layout.
require get_template_directory() . '/inc/customizer/theme-options/sidebar-layout.php';

// Post Options.
require get_template_directory() . '/inc/customizer/theme-options/post-options.php';

// Pagination.
require get_template_directory() . '/inc/customizer/theme-options/pagination.php';

// Footer Options.
require get_template_directory() . '/inc/customizer/theme-options/footer-options.php';
