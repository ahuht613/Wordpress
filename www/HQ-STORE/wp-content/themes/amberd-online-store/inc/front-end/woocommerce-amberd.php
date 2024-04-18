<?php 
    function amberd_woo_enqueue() {
        wp_enqueue_style('amberd_woocommerce_styles', get_theme_file_uri('/assets/css/front-end/amberd-woocommerce.css'));
    }
    add_action('wp_enqueue_scripts', 'amberd_woo_enqueue');
    function amberd_woo_footer_style() {
		wp_enqueue_style('amberd-woo-footer-styles', get_theme_file_uri('/assets/css/front-end/amberd-woocommerce-additional.css'));
	};
	add_action( 'get_footer', 'amberd_woo_footer_style' );

    
    add_filter( 'body_class','amberd_body_class' );
    function amberd_body_class( $classes ) {
        if ( amberd_is_woocommerce_activated() ) {
            $classes[] = 'woocommerce';
        }
        return $classes;
    }
    if ( ! function_exists( 'amberd_is_woocommerce_activated' ) ) {
        function amberd_is_woocommerce_activated() {
            if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
        }
    }
    add_action( 'wp_enqueue_scripts', 'amberd_custom_enqueue_wc_cart_fragments' );
    function amberd_custom_enqueue_wc_cart_fragments() {
        wp_enqueue_script( 'wc-cart-fragments' );
    }
    add_filter( 'woocommerce_add_to_cart_fragments', 'amberd_mini_cart_count');
    function amberd_mini_cart_count($fragments){
        ob_start();
        ?>
        <div id="mini-cart-count">
            <?php echo esc_html(WC()->cart->get_cart_contents_count()); ?>
        </div>
        <?php
            $fragments['#mini-cart-count'] = ob_get_clean();
        return $fragments;
    }

    add_filter( 'woocommerce_add_to_cart_fragments', 'amberd_refresh_cart_total');
    function amberd_refresh_cart_total( $fragments ) {
            ob_start();
        ?>
            <div id="mini-cart-total">
                <?php echo esc_html_e('Total', 'amberd-online-store'); ?>
                    <div class="clear"></div>
                    <?php echo wp_kses_post(WC()->cart->get_cart_total()); ?>
            </div>
            <?php
                    $fragments['#mini-cart-total'] = ob_get_clean();
            return $fragments;
    }