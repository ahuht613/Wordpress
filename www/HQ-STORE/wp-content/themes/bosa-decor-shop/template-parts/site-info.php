<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Decor Shop 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-decor-shop' ) ) );
		echo esc_html( date( 'Y' ) . ' ' . get_bloginfo( 'name' ) );
		echo esc_html__( '. Powered by', 'bosa-decor-shop' );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-decor-shop' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-decor-shop' ) );
		?>
	</a>
</div><!-- .site-info -->