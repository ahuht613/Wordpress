<?php
/**
 * Displays top navigation
 *
 * @package Ecommerce Zone
 */
?>
 <?php if(get_theme_mod('ecommerce_zone_top_header_setting') != ''){ ?>
<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-3 col-sm-4 col-12">
			<?php if(get_theme_mod('ecommerce_zone_phone_number_info') != ''){ ?>
			<p><i class="<?php echo esc_html( get_theme_mod('ecommerce_zone_phone_number_icon') ); ?>"></i><a href="tel:<?php echo esc_html(get_theme_mod('ecommerce_zone_phone_number_info','')); ?>"><?php echo esc_html(get_theme_mod('ecommerce_zone_phone_number_info','')); ?></a></p>
			<?php }?>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-4 col-12">
			<?php if(get_theme_mod('ecommerce_zone_email_info') != ''){ ?>
			<p><i class="<?php echo esc_html( get_theme_mod('ecommerce_zone_phone_email_icon') ); ?>"></i><a href="mailto:<?php echo esc_html(get_theme_mod('ecommerce_zone_email_info','')); ?>"><?php echo esc_html(get_theme_mod('ecommerce_zone_email_info','')); ?></a></p>
			<?php }?>
		</div>
		<div class="col-lg-7 col-md-5 col-sm-4 col-12">
			<?php if(get_theme_mod('ecommerce_zone_location_info') != ''){ ?>
			<p><i class="<?php echo esc_html( get_theme_mod('ecommerce_zone_phone_location_icon') ); ?>"></i><?php echo esc_html(get_theme_mod('ecommerce_zone_location_info','')); ?></p>
			<?php }?>
		</div>
	</div>
</div>
<?php }?>