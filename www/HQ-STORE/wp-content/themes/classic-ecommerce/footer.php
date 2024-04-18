<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Classic Ecommerce
 */
?>
<div id="footer">
	<?php 
    $classic_ecommerce_footer_widget_enabled = get_theme_mod('classic_ecommerce_footer_widget', false);
    
    if ($classic_ecommerce_footer_widget_enabled !== false && $classic_ecommerce_footer_widget_enabled !== '') { ?>

      <div class="footer-widget">
        <div class="container">
          <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
          <?php endif; // end footer widget area ?>
                    
          <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
          <?php endif; // end footer widget area ?>
        
          <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
          <?php endif; // end footer widget area ?>
          
          <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>
          <?php endif; // end footer widget area ?>      
        </div>
      </div>
    <?php } ?>
    <div class="clear"></div>

    <div class="copywrap">
    	<div class="container">
        <p><a href="<?php echo esc_url(CLASSIC_ECOMMERCE_FOOTER_LINK); ?>" target="_blank"><?php echo esc_html(get_theme_mod('classic_ecommerce_copyright_line',__('Ecommerce WordPress Theme','classic-ecommerce'))); ?></a> <?php echo esc_html('By Classic Templates','classic-ecommerce'); ?></p>
      </div>
    </div>
</div>

<?php if(get_theme_mod('classic_ecommerce_scroll_hide',false)){ ?>
 <a id="button"><?php esc_html_e('TOP', 'classic-ecommerce'); ?></a>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>