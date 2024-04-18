<?php
/**
 * Woodcraft Lite: Block Patterns
 *
 * @since Woodcraft Lite 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Woodcraft Lite 1.0
 *
 * @return void
 */
function study_lite_register_block_patterns() {
	$block_pattern_categories = array(
		'introduction'    => array( 'label' => __( 'Introduction', 'woodcraft-lite' ) ),
		'services' => array( 'label' => __( 'Services','woodcraft-lite' ) ),
		'team'    => array( 'label' => __( 'Team Members', 'woodcraft-lite' ) ),
		'CTA'    => array( 'label' => __( 'Call To Action', 'woodcraft-lite' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Woodcraft Lite 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'study_lite_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'introduction-left-image',
		'introduction-right-image',
		'services',
		'services-title-top',
		'team-membres-description',
		'team-membres-without-description',
		'call-to-action',
		'call-to-action-left',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Woodcraft Lite 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'study_lite_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'studylite/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'study_lite_register_block_patterns', 9 );
