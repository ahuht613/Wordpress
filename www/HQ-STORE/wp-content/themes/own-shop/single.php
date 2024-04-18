<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package own-shop
 */

get_header();
own_shop_get_breadcrumbs_content();

?>
<div class="content-section img-overlay"></div>
<div id="primary" class="<?php echo esc_attr(get_theme_mod('own_shop_header_menu_style','style1')); ?> <?php echo esc_attr(OWN_SHOP_CONTAINER_CLASS) ?>  content-area">
	<main id="main" class="site-main" role="main">
		<div class="content-inner">
			<div id="blog-section">
		        <div class="row">
		        	<?php
		        		if('right'===esc_html(get_theme_mod('own_shop_blog_single_sidebar_layout','no'))) :
		        			?>
		        				<?php
		        					if ( is_active_sidebar('sidebar-1')) :
		        						?>
		        							<div id="post-wrapper" class="col-md-9">
												<?php
													while ( have_posts() ) : the_post();

														get_template_part( 'template-parts/post/content', 'single');

														the_post_navigation(
														    array(
														        'prev_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Previous Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text"> '.esc_html__('Previous Article', 'own-shop') .' </span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'next_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'screen_reader_text' => esc_html__('Posts navigation', 'own-shop')
														    )
														);

														// If comments are open or we have at least one comment, load up the comment template.
														if ( comments_open() || get_comments_number() ) :
															comments_template();
														endif;

													endwhile; // End of the loop.
												?>							
											</div>
											<div id="sidebar-wrapper" class="col-md-3">
												<?php get_sidebar('sidebar-1'); ?>
											</div>	
		        						<?php
		        					
		        					else :
		        						?>
		        							<div class="col-md-12">
												<?php
													while ( have_posts() ) : the_post();

														get_template_part( 'template-parts/post/content', 'single');

														the_post_navigation(
														    array(
														        'prev_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Previous Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text"> '.esc_html__('Previous Article', 'own-shop') .' </span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'next_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'screen_reader_text' => esc_html__('Posts navigation', 'own-shop')
														    )
														);

														// If comments are open or we have at least one comment, load up the comment template.
														if ( comments_open() || get_comments_number() ) :
															comments_template();
														endif;

													endwhile; // End of the loop.
												?>							
											</div>
		        						<?php
		        					endif;
                				?>
		        				
		        			<?php
		        		
		        		elseif('left'===esc_html(get_theme_mod('own_shop_blog_single_sidebar_layout','no'))) :
		        			?>
		        				<?php
		        					if ( is_active_sidebar('sidebar-1')) :
		        						?>
		        							<div id="sidebar-wrapper" class="col-md-3">
												<?php get_sidebar('sidebar-1'); ?>
											</div>
					        				<div id="post-wrapper" class="col-md-9">
												<?php
													while ( have_posts() ) : the_post();

														get_template_part( 'template-parts/post/content', 'single');

														the_post_navigation(
														    array(
														        'prev_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Previous Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text"> '.esc_html__('Previous Article', 'own-shop') .' </span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'next_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'screen_reader_text' => esc_html__('Posts navigation', 'own-shop')
														    )
														);

														// If comments are open or we have at least one comment, load up the comment template.
														if ( comments_open() || get_comments_number() ) :
															comments_template();
														endif;

													endwhile; // End of the loop.
												?>							
											</div>												
		        						<?php
		        					
		        					else :
		        						?>
		        							<div class="col-md-12">
												<?php
													while ( have_posts() ) : the_post();

														get_template_part( 'template-parts/post/content', 'single');

														the_post_navigation(
														    array(
														        'prev_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Previous Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text"> '.esc_html__('Previous Article', 'own-shop') .' </span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'next_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<span class="screen-reader-text">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																				'<h5 class="post-title">%title</h5>',
														        'screen_reader_text' => esc_html__('Posts navigation', 'own-shop')
														    )
														);
														
														// If comments are open or we have at least one comment, load up the comment template.
														if ( comments_open() || get_comments_number() ) :
															comments_template();
														endif;

													endwhile; // End of the loop.
												?>							
											</div>
		        						<?php
		        					endif;
		        				?>			        				
		        			<?php
		        		
		        		else :
		        			?>
								<div class="col-md-12">
									<?php
										while ( have_posts() ) : the_post();

											get_template_part( 'template-parts/post/content', 'single');

											the_post_navigation(
											    array(
											        'prev_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Previous Article', 'own-shop') .'</span> ' .
																	'<span class="screen-reader-text"> '.esc_html__('Previous Article', 'own-shop') .' </span> ' .
																	'<h5 class="post-title">%title</h5>',
											        'next_text' => '<span class="meta-nav" aria-hidden="true">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																	'<span class="screen-reader-text">'.esc_html__('Next Article', 'own-shop') .'</span> ' .
																	'<h5 class="post-title">%title</h5>',
											        'screen_reader_text' => esc_html__('Posts navigation', 'own-shop')
											    )
											);
											
											// If comments are open or we have at least one comment, load up the comment template.
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;

										endwhile; // End of the loop.
									?>
					            </div>
							<?php
		        		endif;
		        	?>							
				</div>
			</div>
		</div>		
	</main>
</div>

<?php
get_footer();
