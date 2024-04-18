<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">

  <?php do_action( 'fashion_designer_before_slider' ); ?>

  <?php if( get_theme_mod( 'fashion_designer_slider_arrows', false) == 1 || get_theme_mod( 'fashion_designer_resp_slider_hide_show', true) == 1) { ?>
    <section id="slider">
      <?php if(get_theme_mod('fashion_designer_slider_type', 'Default slider') == 'Default slider' ){ ?>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'fashion_designer_slider_speed',4000)) ?>"> 
        <?php $fashion_designer_pages = array();
          for ( $count = 1; $count <= 3; $count++ ) {
            $mod = intval( get_theme_mod( 'fashion_designer_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $fashion_designer_pages[] = $mod;
            }
          }
          if( !empty($fashion_designer_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $fashion_designer_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if( get_theme_mod('fashion_designer_slider_small_title') != '' ){ ?>
                    <div class="mb-1 wow bounceInUp" data-wow-duration="2s">
                      <span class="slider-badge mb-1"><?php echo esc_html(get_theme_mod('fashion_designer_slider_small_title',''));?></span>
                    </div>
                  <?php }?>
                  <?php if( get_theme_mod('fashion_designer_slider_title_hide_show',true) == 1){ ?>
                    <h1 class="wow rollIn delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('fashion_designer_slider_button_text','READ MORE') != ''|| get_theme_mod('fashion_designer_slider_button_link') != ''){ ?>
                    <div class="more-btn wow rollIn delay-1000" data-wow-duration="2s">
                      <a href="<?php echo esc_url(get_theme_mod('fashion_designer_slider_button_link','')); ?>"><?php echo esc_html(get_theme_mod('fashion_designer_slider_button_text',__('READ MORE','fashion-designer')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('fashion_designer_slider_button_text',__('READ MORE','fashion-designer')));?></span></a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
            <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','fashion-designer' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','fashion-designer' );?></span>
        </a>
      </div>
      <div class="clearfix"></div>
        <?php } else if(get_theme_mod('fashion_designer_slider_type', 'Advance slider') == 'Advance slider'){?>
          <?php echo do_shortcode(get_theme_mod('fashion_designer_advance_slider_shortcode')); ?>
        <?php } ?>
    </section>
  <?php } ?>

  <?php do_action( 'fashion_designer_after_slider' ); ?>

  <?php if( get_theme_mod( 'fashion_designer_category') != '') { ?>
    <section class="fashion-cat">
      <div class="container">
        <div class="fashion-box wow zoomInUp delay-1000" data-wow-duration="3s">
          <div class="row">        
            <?php 
            $fashion_designer_catData=  get_theme_mod('fashion_designer_category');
              if($fashion_designer_catData){
              $page_query = new WP_Query(array( 'category_name' => esc_html( $fashion_designer_catData ,'fashion-designer')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="col-lg-4 col-md-4">
                    <div class="box">
                      <?php the_post_thumbnail(); ?>
                      <div class="box-content">
                        <div class="row">
                          <div class="col-lg-10 col-md-9 col-9">
                            <?php the_category(); ?>
                            <h2><?php the_title();?></h2>
                          </div>
                          <div class="col-lg-2 col-md-3 col-3 read-btn">
                            <a href="<?php echo esc_url( get_permalink() );?>"><i class="<?php echo esc_attr(get_theme_mod('fashion_designer_category_icon','fas fa-long-arrow-alt-right')); ?>"></i><span class="screen-reader-text"><?php the_title(); ?></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
              wp_reset_postdata();
            } ?>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>

  <?php do_action( 'fashion_designer_after_service' ); ?>

  <div id="content-vw">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>
