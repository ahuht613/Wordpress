<?php
//about theme info
add_action( 'admin_menu', 'lighting_store_gettingstarted' );
function lighting_store_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started: Education Theme', 'lighting-store'), esc_html__('Get Started', 'lighting-store'), 'edit_theme_options', 'lighting_store_guide', 'lighting_store_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function lighting_store_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'lighting_store_admin_theme_style');

//guidline for about theme
function lighting_store_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'lighting-store' );
?>

<div class="wrapper-info">
	<div class="top-section">
	    <div class="col-left">
	    	<h2><?php esc_html_e( 'Welcome to lighting store Theme', 'lighting-store' ); ?></h2>
	    	<span class="version">Version: <?php echo esc_html($theme['Version']);?></span>
	    	<p><?php esc_html_e('Lighting Store is a perfect theme to bring you a wonderful and professional website for lighting and interior decor stores, home accessories and light studio, furniture designs, interior shops, modern decor, and lighting business, candle suppliers and shops, etc. It is elegant in design and brings a multipurpose design that suits every business type. There is a simple and adaptable design that is designed to adapt smoothly across every screen. Its responsive nature and mobile-friendly layout make the web page look incredible on small screen devices as well. With a user-friendly theme interface, you will be able to get the best results since any user irrespective of the coding skills will be able to hammer out a professional website. The theme customizer gives you enough personalization options eliminating coding. This beautiful free theme has many sections to display key info regarding your Team and a wonderful Banner is also provided. SEO-friendly codes of the theme are going to bring you more benefits in terms of your website’s visibility. You get Call to Action Button (CTA) that improves conversions and the highly optimized code resulting in a faster page load time. It is a Bootstrap-based and robust WordPress theme giving you many options for a professional website.', 'lighting-store'); ?></p>
	    </div>
	    <div class="col-right">
	    	<div class="logo">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/lighting-store.png" alt="" />
			</div>
	    </div>
	    <div class="info-link">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'lighting-store'); ?></a>
			<a href="<?php echo esc_url( LIGHTING_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'lighting-store'); ?></a>
			<a class="get-pro" href="<?php echo esc_url( LIGHTING_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'lighting-store'); ?></a>
		</div>
	</div>

	<div class="accordain-sec">
		<div class="block">
		  	<input type="radio" name="city" id="cityA" checked />   
		  	<label for="cityA"><span><?php esc_html_e( 'Visit to our amazing Premium Theme', 'lighting-store' ); ?></span><span class="dashicons dashicons-arrow-down"></span></label>
		  	<div class="info1">
			  	<h3><?php esc_html_e( 'Premium Theme Information', 'lighting-store' ); ?></h3>
			  	<hr class="hr-accr">
			  	<div class="sec-left-inner">
			  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/lighting-store.png" alt="" />
			  		<p class="lite-para"><?php esc_html_e('Lightning Store WordPress Theme comes with a multi-concept approach that has full eCommerce support for starting any online light and lamps store, electricals and electronics shop, electrical fittings service providers, and more. It comes with a beautiful color skin and an amazing layout having all the relevant imagery to start your website. With a lot of templates and page layouts available, you can pick any of them to start creating a website. If you are lacking coding skills or are a newbie, you can start with the incredible demo provided by simply importing it and updating your content to make your website live.

                  This theme is fully integrated with Woocommerce, which means, you get a range of online buying as well as selling options including online payments as well. Wonderful product pages are going to showcase each and every product with details and you may also add the price tajes on them. The Call to Action Button (CTA) placed on the slider and several other places will make your business grow by improving conversion rates. As this theme is based on the Bootstrap framework, it provides a robust design that can successfully handle huge traffic on your website without causing any bloating. This makes it a great option for your website.', 'lighting-store'); ?></p>

					<div class="info-link-top">
						<a href="<?php echo esc_url( LIGHTING_STORE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'lighting-store' ); ?></a>
						<a href="<?php echo esc_url( LIGHTING_STORE_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'lighting-store' ); ?></a>
						<a href="<?php echo esc_url( LIGHTING_STORE_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'lighting-store' ); ?></a>
					</div>					
			  	</div>
		  	</div>
		</div>
		<div class="block">
		  	<input type="radio" name="city" id="cityB"/>
		  	<label for="cityB"><span><?php esc_html_e( 'Theme Features', 'lighting-store' ); ?></span><span class="dashicons dashicons-arrow-down"></span></label>
		  	<div class="info2">
			    <h3><?php esc_html_e( 'Lite Theme v/s Premium Theme', 'lighting-store' ); ?></h3>
			  	<hr class="hr-accr">
			  	<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'lighting-store'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'lighting-store'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'lighting-store'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'lighting-store'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'lighting-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'lighting-store'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'lighting-store'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'lighting-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'lighting-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'lighting-store'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'lighting-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'lighting-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'lighting-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'lighting-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'lighting-store'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'lighting-store'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'lighting-store'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'lighting-store'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no-alt"></span></td>
								<td class="table-img"><span class="dashicons dashicons-yes"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( LIGHTING_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'lighting-store'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
		 	</div>
		</div>
	</div>
</div>
<?php } ?>