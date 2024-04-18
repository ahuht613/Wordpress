<?php
/**
 * Footer with text, title, and logo
 */
return array(
	'title'      => __( 'Introduction With Image Left', 'woodcraft-lite' ),
	'categories' => array( 'introduction' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="'.esc_url('https://c.pxhere.com/photos/13/97/worker_construction_building_carpenter_male_job_build_helmet-893290.jpg!d').'" alt=""/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="has-x-large-font-size">'.esc_html('Woodcraft Success Story').'</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph -->
	<p>'.esc_html('Vivamus ultricies euismod mauris quis sagittis. Nulla auctor efficitur libero, sit amet cursus metus pharetra ut. Pellentesque venenatis ac ante in dignissim. Mauris et hendrerit diam. Sed efficitur odio sit amet eros mollis semper. Suspendisse scelerisque aliquet lacus. Maecenas bibendum est in magna condimentum hendrerit. Donec vulputate dictum aliquet. Mauris lorem urna, facilisis posuere laoreet vel, fringilla id nulla.').'</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":"15px"} -->
	<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"black","textColor":"white","width":50,"style":{"border":{"radius":"0px"}},"className":"is-style-outline read-more"} -->
	<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline read-more"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background" href="'.esc_url('#').'" style="border-radius:0px">'.esc_html('Read More').'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
