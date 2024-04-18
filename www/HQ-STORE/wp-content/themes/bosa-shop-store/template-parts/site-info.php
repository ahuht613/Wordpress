<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Shop Store 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-shop-store' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Shop Store. Powered by', 'bosa-shop-store' ) );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-shop-store' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-shop-store' ) );
		?>
	</a>
</div><!-- .site-info -->