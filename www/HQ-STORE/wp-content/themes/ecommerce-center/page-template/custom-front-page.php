<?php
/**
 * Template Name: Custom Front Page
 */

get_header();

  $ecommerce_center_year  = get_the_time('Y');
  $ecommerce_center_month = get_the_time('m');
  $ecommerce_center_day   = get_the_time('d');

?>

<div class="container">
  <div class="row m-0">
    <div class="col-lg-3 col-md-3">
      <div class="sidebar">
        <?php dynamic_sidebar('sidebar-2'); ?>
      </div>
    </div>
    <div class="col-lg-9 col-md-9">
      <?php if(get_theme_mod('ecommerce_zone_top_slider_setting') != ''){ ?>
      <section id="top-slider" slider-loop="<?php echo esc_html(get_theme_mod('ecommerce_zone_slider_loop')); ?>">
        <?php $ecommerce_zone_slide_pages = array();
          for ( $ecommerce_zone_count = 1; $ecommerce_zone_count <= 3; $ecommerce_zone_count++ ) {
            $ecommerce_zone_mod = intval( get_theme_mod( 'ecommerce_zone_top_slider_page' . $ecommerce_zone_count ));
            if ( 'page-none-selected' != $ecommerce_zone_mod ) {
              $ecommerce_zone_slide_pages[] = $ecommerce_zone_mod;
            }
          }
          if( !empty($ecommerce_zone_slide_pages) ) :
            $ecommerce_zone_args = array(
              'post_type' => 'page',
              'post__in' => $ecommerce_zone_slide_pages,
              'orderby' => 'post__in'
            );
            $ecommerce_zone_query = new WP_Query( $ecommerce_zone_args );
            if ( $ecommerce_zone_query->have_posts() ) :
              $i = 1;
        ?>
        <div class="owl-carousel" role="listbox">
          <?php  while ( $ecommerce_zone_query->have_posts() ) : $ecommerce_zone_query->the_post(); ?>
            <div class="slider-box">
              <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              <div class="slider-inner-box">
                <h2><?php the_title(); ?></h2>
                <div class="more-btn">
                  <a href="<?php the_permalink(); ?>"><?php esc_html_e('SHOP NOW','ecommerce-center'); ?><i class="fas fa-caret-right"></i></a>
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
      </section>
      <?php } ?>

      <?php if(get_theme_mod('ecommerce_zone_category_product_setting') != ''){ ?>
      <section id="cat-slider">
        <?php $ecommerce_zone_slide_pages = array();
          for ( $ecommerce_zone_count = 1; $ecommerce_zone_count <= 3; $ecommerce_zone_count++ ) {
            $ecommerce_zone_mod = intval( get_theme_mod( 'ecommerce_zone_category_product_page' . $ecommerce_zone_count ));
            if ( 'page-none-selected' != $ecommerce_zone_mod ) {
              $ecommerce_zone_slide_pages[] = $ecommerce_zone_mod;
            }
          }
          if( !empty($ecommerce_zone_slide_pages) ) :
            $ecommerce_zone_args = array(
              'post_type' => 'page',
              'post__in' => $ecommerce_zone_slide_pages,
              'orderby' => 'post__in'
            );
            $ecommerce_zone_query = new WP_Query( $ecommerce_zone_args );
            if ( $ecommerce_zone_query->have_posts() ) :
              $i = 1;
        ?>
        <div class="row">
          <?php while ( $ecommerce_zone_query->have_posts() ) : $ecommerce_zone_query->the_post(); ?>
            <div class="col-lg-6 col-md-6">
              <div class="cat-product-box">
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
                <div class="cat-pro-inner-box">
                  <h3><?php the_title(); ?></h3>
                  <div class="more-btn">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('SHOP NOW','ecommerce-center'); ?><i class="fas fa-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
        </div>
      </section>
       <?php } ?>

       <?php if(get_theme_mod('ecommerce_zone_home_product_setting') != ''){ ?>
      <section id="homepage-product">
        <h3><?php echo esc_html(get_theme_mod('ecommerce_zone_home_product_title','')); ?></h3>
        <div class="row product-home-box">
          <?php
          if ( class_exists( 'WooCommerce' ) ) {
            $ecommerce_zone_args = array(
              'post_type' => 'product',
              'posts_per_page' => get_theme_mod('ecommerce_zone_home_product_number'),
              'product_cat' => get_theme_mod('ecommerce_zone_home_product'),
              'order' => 'ASC'
            );
            $loop = new WP_Query( $ecommerce_zone_args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box">
                  <div class="product-image">
                    <span class="product-sale-tag">
                      <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                    </span>
                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                  </div>
                  <h4><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>">
                    <?php the_title(); ?><span class="screen-reader-text"><?php echo esc_html('best-seller-content', 'ecommerce-center' ) ; ?></span>
                  </a></h4>
                  <p class="price"><?php echo $product->get_price_html(); ?></p>
                  <div class="pro-button">
                    <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                  </div>
                </div>
              </div>
            <?php endwhile; wp_reset_query(); ?>
          <?php } ?>
        </div>
      </section>
      <?php } ?>
    </div>
  </div>

  <?php if(get_theme_mod('ecommerce_zone_blog_setting') != ''){ ?>
  <section id="serve-sec">
    <h3><?php echo esc_html(get_theme_mod('ecommerce_center_blog_section_title','')); ?></h3>
    <div class="row m-0">
      <?php
        $ecommerce_zone_catData = get_theme_mod('ecommerce_center_blog','');
        if($ecommerce_zone_catData){
          $ecommerce_zone_page_query = new WP_Query(array( 'category_name' => esc_html($ecommerce_zone_catData,'ecommerce-center')));
          while( $ecommerce_zone_page_query->have_posts() ) : $ecommerce_zone_page_query->the_post(); ?>
            <div class="col-lg-4 col-md-4">
              <div class="serv-box">
                <?php the_post_thumbnail(); ?>
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-3">
                    <div class="datebox">
                      <div class="date-monthwrap">
                        <span class="date-day"><a href="<?php echo esc_url( get_day_link( $ecommerce_center_year, $ecommerce_center_month, $ecommerce_center_day)); ?>"><?php echo esc_html( get_the_date( 'd') ); ?></a></span>
                      </div>
                      <div class="yearwrap">
                        <span class="date-month"><a href="<?php echo esc_url( get_day_link( $ecommerce_center_year, $ecommerce_center_month, $ecommerce_center_day)); ?>"><?php echo esc_html( get_the_date( 'M' ) ); ?></a></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-9 col-md-8 col-9 pl-0">
                    <h4 class="my-2"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php $ecommerce_center_excerpt = get_the_excerpt(); echo esc_html( ecommerce_center_string_limit_words( $ecommerce_center_excerpt,8 ) ); ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        } ?>
    </div>
  </section>
</div>
<?php } ?>

<?php get_footer(); ?>
