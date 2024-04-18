<?php
/**
 *  Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce Zone
 */
$ecommerce_zone_single_post_thumb =  get_theme_mod( 'ecommerce_zone_single_post_thumb', 1 );
$ecommerce_zone_single_post_meta =  get_theme_mod( 'ecommerce_zone_single_post_meta', 1 );
$ecommerce_zone_single_post_title = get_theme_mod( 'ecommerce_zone_single_post_title', 1 );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if( $ecommerce_zone_single_post_title == 1 ) {?>
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        <?php }?>

        <?php if( $ecommerce_zone_single_post_thumb == 1 ) {?>
            <?php if(has_post_thumbnail()) {?>
                <hr>
                    <?php the_post_thumbnail(); ?>
                <hr>
            <?php }?>
        <?php }?>

        <?php if( $ecommerce_zone_single_post_meta == 1 ) {?>
            <?php if ('post' === get_post_type()) :?>
                <div class="entry-meta">
                    <?php
                    ecommerce_zone_posted_on();
                    ?>
                </div>
            <?php endif; ?>
        <?php }?>
    </header>
    <div class="entry-content">
        <?php
        the_content(sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'ecommerce-zone'),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            esc_html( get_the_title() )
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'ecommerce-zone'),
            'after' => '</div>',
        ));
        ?>
    </div>
    <footer class="entry-footer">
        <?php ecommerce_zone_entry_footer(); ?>
    </footer>
</article>