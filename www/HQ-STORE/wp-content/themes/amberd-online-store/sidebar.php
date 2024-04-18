<aside id="primary" class="sidebar-widget-area">
    <?php if (!is_active_sidebar('amberd_blog_sidebar')) { ?>
        <section id="search" class="widget widget_search">
            <h3 class="widget-title"><?php esc_html_e('Search', 'amberd-online-store'); ?></h3>
            <?php get_search_form(); ?>
        </section>
        <section id="meta" class="widget widget_meta">
            <h3 class="widget-title"><?php esc_html_e('Meta', 'amberd-online-store'); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </section>
        <section id="archives" class="widget widget_archive">
            <h3 class="widget-title"><?php esc_html_e('Archives', 'amberd-online-store'); ?></h3>
            <ul>
                <?php wp_get_archives(); ?>
            </ul>
        </section>
    <?php } else { dynamic_sidebar( 'amberd_blog_sidebar' ); } ?>
</aside>