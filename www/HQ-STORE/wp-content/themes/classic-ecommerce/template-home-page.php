<?php
/**
 * The Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Classic Ecommerce
 */

get_header(); ?>

<div id="content">
  <?php
    $classic_ecommerce_hidcatslide = get_theme_mod('classic_ecommerce_hide_categorysec', false);
    $classic_ecommerce_slidersection = get_theme_mod('classic_ecommerce_slidersection');

    if ($classic_ecommerce_hidcatslide && $classic_ecommerce_slidersection) { ?>
    <section id="catsliderarea">
      <div class="catwrapslider">
        <div class="owl-carousel">
          <?php if( get_theme_mod('classic_ecommerce_slidersection',false) ) { ?>
          <?php $classic_ecommerce_queryvar = new WP_Query('cat='.esc_attr(get_theme_mod('classic_ecommerce_slidersection',false)));
            while( $classic_ecommerce_queryvar->have_posts() ) : $classic_ecommerce_queryvar->the_post(); ?>
              <div class="slidesection"> 
                <?php
                  if (has_post_thumbnail()) {
                      the_post_thumbnail('full');
                  } else {
                      echo '<div class="slider-img-color"></div>';
                  }
                ?>
                <div class="slider-box">
                  <h1><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?></a></h1>
                  <?php
                    $trimexcerpt = get_the_excerpt();
                    $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 20 );
                    echo '<p>' . esc_html( $shortexcerpt ) . '</p>'; 
                  ?>
                  <?php if ( get_theme_mod('classic_ecommerce_button_text') != "" && get_theme_mod('classic_ecommerce_button_link_slider') != '') { ?>
                    <div class="shop-now">
                      <a href="<?php echo esc_url(get_theme_mod('classic_ecommerce_button_link_slider','')); ?>"><?php echo esc_html(get_theme_mod('classic_ecommerce_button_text','SHOP NOW','classic-ecommerce')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('classic_ecommerce_button_text','SHOP NOW','classic-ecommerce')); ?></span></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="clear"></div>
    </section>
  <?php } ?>

  <section id="content-creation">
    <div class="container">
      <div id="recent-product">
        <?php if ( get_theme_mod('classic_ecommerce_recent_product_title') != "") { ?>
          <h2><?php echo esc_html(get_theme_mod('classic_ecommerce_recent_product_title','')); ?></h2>
        <?php } ?>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>