<?php
  global $post;

$post_author_id   = get_post_field( 'post_author', get_queried_object_id() );
$ecommerce_mega_store_get_post_column_layout = get_theme_mod( 'ecommerce_mega_store_post_column_count', 2 );
$ecommerce_mega_store_post_column_layout = 'col-sm-12 col-md-6 col-lg-4';
if ( $ecommerce_mega_store_get_post_column_layout == 2 ) {
  $ecommerce_mega_store_post_column_layout = 'col-lg-6 col-md-12';
} elseif ( $ecommerce_mega_store_get_post_column_layout == 3 ) {
  $ecommerce_mega_store_post_column_layout = 'col-sm-12 col-md-6 col-lg-4';
} elseif ( $ecommerce_mega_store_get_post_column_layout == 4 ) {
  $ecommerce_mega_store_post_column_layout = 'col-sm-12 col-md-6 col-lg-3';
}else{
  $ecommerce_mega_store_post_column_layout = 'col-sm-12 grid-layout';
}
?>

<div class="<?php echo esc_attr( $ecommerce_mega_store_post_column_layout ); ?> blog-grid-layout">
  <div id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4 p-3'); ?>>
    <?php if ( has_post_thumbnail() ) { ?>
      <div class="post-thumbnail">
        <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
    <?php }?>
    <?php if ( get_theme_mod('ecommerce_mega_store_blog_admin_enable',true) || get_theme_mod('ecommerce_mega_store_blog_comment_enable',true) ) : ?>
      <div class="post-meta my-3">
        <?php if ( get_theme_mod('ecommerce_mega_store_blog_admin_enable',true) ) : ?>
          <i class="far fa-user mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a>
        <?php endif; ?>
        <?php if ( get_theme_mod('ecommerce_mega_store_blog_comment_enable',true) ) : ?>
          <span class="ml-3"><i class="far fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'ecommerce-mega-store'), esc_attr('0', 'ecommerce-mega-store'), esc_attr('%', 'ecommerce-mega-store') ); ?> <?php esc_html_e('comments','ecommerce-mega-store'); ?></span>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
    <div class="post-content">
      <?php echo wp_trim_words( get_the_content(), get_theme_mod('ecommerce_mega_store_post_excerpt_number',15) ); ?>
    </div>
  </div>
</div>