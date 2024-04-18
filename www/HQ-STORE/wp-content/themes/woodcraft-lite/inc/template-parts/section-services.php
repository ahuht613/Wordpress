<?php
/**
** Services Section
**/

$woodcraft_hide_service = get_theme_mod('woodcraft_ser_hide','1');

if( $woodcraft_hide_service == '' ){
  echo '<section class="service-section"><div class="aligner"><div class="flex">';

    for( $service = 1; $service<=3; $service++ ){
      if( get_theme_mod( 'woodcraft_ser'.$service ) !='' ){
        $servicequery = new WP_Query(array('page_id' => get_theme_mod( 'woodcraft_ser'.$service )));
        while( $servicequery->have_posts() ) : $servicequery->the_post();
          if( has_post_thumbnail() ){
            $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' );
            $url = $src[0];
            $image_id = get_post_thumbnail_id();
            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          }

          echo '<div class="service-box"><div class="flex"><div class="service-thumb"><img src="'.$url.'" alt="'.$image_alt.'"><div class="thumb-overlay"></div></div><div class="service-data"><h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3><p>'.woodcraft_lite_excerpt(16).'</p><div class="service-more"><a href="'.get_the_permalink().'"><i class="fa fa-long-arrow-right"></i></a></div></div>';
          echo '</div></div>';
        endwhile;
      }
    }
  echo '</div></div></section>';
}

?>