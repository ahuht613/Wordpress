<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Woodcraft Lite 1.0
	 *
	 * @return void
	 */
	function woodcraft_lite_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'woodcraft-lite-columns-overlap',
				'label' => esc_html__( 'Overlap', 'woodcraft-lite' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'woodcraft-lite-border',
				'label' => esc_html__( 'Borders', 'woodcraft-lite' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'woodcraft-lite-border',
				'label' => esc_html__( 'Borders', 'woodcraft-lite' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'woodcraft-lite-border',
				'label' => esc_html__( 'Borders', 'woodcraft-lite' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'woodcraft-lite-image-frame',
				'label' => esc_html__( 'Frame', 'woodcraft-lite' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'woodcraft-lite-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'woodcraft-lite' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'woodcraft-lite-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'woodcraft-lite' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'woodcraft-lite-border',
				'label' => esc_html__( 'Borders', 'woodcraft-lite' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'woodcraft-lite-separator-thick',
				'label' => esc_html__( 'Thick', 'woodcraft-lite' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'woodcraft-lite-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'woodcraft-lite' ),
			)
		);
	}
	add_action( 'init', 'woodcraft_lite_register_block_styles' );
}
