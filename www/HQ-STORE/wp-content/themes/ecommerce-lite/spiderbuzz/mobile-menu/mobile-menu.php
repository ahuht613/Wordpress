
<div class="menu-modal header-mobile-menu cover-modal header-footer-group" data-modal-target-string=".menu-modal">
    <div class="menu-modal-inner modal-inner">
        <div class="menu-wrapper section-inner">
            <div class="menu-top">

                <button class="toggle close-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
                    <span class="toggle-text"><?php esc_html_e( 'Close', 'ecommerce-lite' ); ?></span>
                    <i class="fa fa-times"></i>
                </button><!-- .nav-toggle -->

                <div class="menu-search-form widget_search">
                    <?php get_search_form(); ?>
                </div>

                <div class='ecommerce-lite-tab-wrap'>
                    <div class="ecommerce-lite-tabs we-tab-area">
                        <button class="ecommerce-lite-tab-menu active" id="ecommerce-lite-tab-menu1">
                            <span><?php echo esc_html( 'Menu','ecommerce-lite' ) ?></span>
                        </button>
                    </div>

                    <div class="ecommerce-lite-tab-content we-tab-content">
                        <div class="ecommerce-lite-tab-menu-content tab-content" id="ecommerce-lite-content-menu1">
                            <nav class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'ecommerce-lite' ); ?>" role="navigation">
                                <ul class="modal-menu">
                                    <?php
                                       wp_nav_menu( array(
                                            'theme_location' => 'primary-menu',
                                            'menu_id'        => 'primary-menu',
                                            'container'		=>'',
                                        ) );
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>