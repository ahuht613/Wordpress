<?php
/***
** About Us Section
***/

$woodcraft_hide_about = get_theme_mod('woodcraft_about_hide','1');

if( $woodcraft_hide_about == '' ){

	$getaboutsbttl = get_theme_mod('woodcraft_about_ttl');
	$getaboutbtn = get_theme_mod('woodcraft_about_more');
	$url = '';
	$image_id = '';
	$image_alt = '';
	$hold_aboutmore = '';

	echo '<section class="introduction"><div class="aligner">';
		if( get_theme_mod( 'woodcraft_about' ) !='' ){
			echo '<div class="flex ac">';
			$aboutquery = new WP_Query(array('page_id' => get_theme_mod( 'woodcraft_about' )));
			while( $aboutquery->have_posts() ) : $aboutquery->the_post();
				if( has_post_thumbnail() ){
					$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
					$url = $src[0];
					$image_id = get_post_thumbnail_id();
					$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
				}
				if( !empty( $getaboutbtn ) ){
					$hold_aboutmore = '<div class="read-more"><a href="'.get_the_permalink().'">'.$getaboutbtn.'</a></div>';
			  }
			  	echo '<div class="intro-left"><img src="'.$url.'" alt="'.$image_alt.'"></div><!-- intro left -->';
				echo '<div class="intro-right"><h4>'.$getaboutsbttl.'</h4><h2>'.get_the_title().'</h2><p>'.get_the_excerpt().'</p>'.$hold_aboutmore.'</div><!-- intro right -->';
			endwhile;
			echo '</div>';
		}
	echo '</div><!-- aligner --></section><!-- introduction -->';
}
?>