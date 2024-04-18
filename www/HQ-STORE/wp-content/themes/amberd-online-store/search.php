<?php get_header(); ?>

    <div class="page-banner">
          <div class="<?php if (empty(get_theme_mod( 'amberd_search_banner_bg_gradient_color' ))) 
                                { echo esc_attr( 'amberd-search-banner__bg' ); } 
                                    else { echo esc_attr('amberd-search-banner__bg-gradient'); } ?>">
          </div>
          <div class="container <?php if ( get_theme_mod( 'amberd_search_banner_width' ) == 'narrow' ) { echo esc_attr('amberd-banner-narrow-container'); } ?>"><h1 class="search-banner__title"><?php echo esc_html__( 'Search results for: ', 'amberd-online-store'); echo esc_html($s); ?></h1></div>
    </div>
  
    <?php $s = get_search_query();
          $args = array (
                          's' => $s,
                          'paged' => get_query_var('paged', -1),
                        );
    ?>     
    
   <div class="amberd-main-container">
    <div class="container <?php if (( get_theme_mod( 'amberd_search_page_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_search_page_layout' ) == 'sidebarleft' ))
                                                    { echo esc_attr('container-with-sidebar amberd-main-content-sidebarleft'); } 
                                                else if (( get_theme_mod( 'amberd_search_page_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_search_page_layout' ) != 'sidebarleft' )) 
                                                    { echo esc_attr('container-with-sidebar'); } 
                                                ?>  amberd-main-content" id="content_navigator">
    <div role="main" class="<?php  if ( get_theme_mod( 'amberd_search_page_layout' ) == 'sidebarnone' ) { echo esc_attr('amberd-posts-list-with-pagination-full-width'); } else { echo esc_attr('amberd-posts-list-with-pagination'); } ?>">
        <div class="amberd-posts-list-with-pagination-inner">
            <?php $the_query = new WP_Query( $args );
                  if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                              $the_query->the_post();
                                  ?> <div class="<?php  if ( get_theme_mod( 'amberd_search_page_layout' ) == 'sidebarnone' ) { echo esc_attr('amberd-post-summary-content-full-width'); } else { echo esc_attr('amberd-post-summary-content'); } ?>"> <?php
                                        get_template_part( 'template-parts/content/posts-list' );
                                  ?> </div> <?php
                    } } else { ?>
                            <h2 class="amberd-search-page-subtitle"><?php echo esc_html__( 'Nothing Found', 'amberd-online-store'); ?></h2>
                            <div class="alert alert-info"><p><?php echo esc_html__( 'Sorry, but nothing matched your search query. Please try again using other search terms.', 'amberd-online-store'); ?></p></div>
                    <?php } 
                    wp_reset_postdata();
            ?>            
        </div>

        <div class="amberd-pagination">
          <div class="amberd-pagination-container">                         
            <?php
            echo paginate_links(array(
              'total' => $the_query->max_num_pages,
              'show_all'     => False,
              'end_size'     => 2,
              'mid_size'     => 2,
              'prev_next'    => true,
              'prev_text'    => esc_attr('<'),
              'next_text'    => esc_attr('>'),
              'type'         => 'list',
              'add_args'     => False,
              'add_fragment' => '',
              'before_page_number' => '',
              'after_page_number'  => ''
            ));
            ?>
          </div>
        </div>

        <div class="perform-new-search">
          <div class="perform-new-search-text"><?php echo esc_html__( 'Perform a new search:', 'amberd-online-store'); ?></div>
          <div class="amberd-search-page-form"><?php get_search_form(); ?></div>
        </div>

    </div>
    <?php if ( get_theme_mod( 'amberd_search_page_layout' ) != 'sidebarnone' ) { get_template_part( 'template-parts/sidebar/sidebar-default' ); } ?>
    </div>
    </div>

<?php get_footer(); ?>



