<?php
/**
 * Woodcraft Lite Theme Customizer
 *
 * @package Woodcraft Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function woodcraft_lite_customize_register( $wp_customize ) {
	function woodcraft_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	$wp_customize->get_setting( 'blogname' )->woodcraft_lite         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->woodcraft_lite  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
	    'selector' => '.site-name-desc a',
	    'render_callback' => 'woodcraft-lite_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => '.site-name-desc p',
	    'render_callback' => 'woodcraft-lite_customize_partial_blogdescription',
	) );

	/*========================
	==	Theme Colors Start
	========================*/

	$wp_customize->add_setting('color_scheme', array(
		'default' => '#ab7442',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','woodcraft-lite'),
			'description'	=> __('Select theme main color from here.','woodcraft-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);

	$wp_customize->add_setting('woodcraft_headerbg-color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'woodcraft_headerbg-color',array(
			'label' => __('Header Background Color','woodcraft-lite'),
			'description'	=> __('Select background color for header.','woodcraft-lite'),
			'section' => 'colors',
			'settings' => 'woodcraft_headerbg-color'
		))
	);

	$wp_customize->add_setting('woodcraft_footer-color', array(
		'default' => '#0a0a0a',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'woodcraft_footer-color',array(
			'label' => __('Footer Background Color','woodcraft-lite'),
			'description'	=> __('Select background color for footer.','woodcraft-lite'),
			'section' => 'colors',
			'settings' => 'woodcraft_footer-color'
		))
	);

	/*========================
	==	Theme Colors End
	========================*/

	/*========================
	==	Top Bar Start
	========================*/

	$wp_customize->add_section(
        'woodcraft_tpbar_info',
        array(
            'title' => __('Setting Up Top Bar Information', 'woodcraft-lite'),
            'priority' => null,
			'description'	=> __('Setup top bar information here.','woodcraft-lite'),	
        )
    );

	$wp_customize->add_setting('woodcraft_tpbar_add',array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_add',array(
		'type'	=> 'text',
		'label'	=> __('Add Address here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('woodcraft_tpbar_mail',array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_mail',array(
		'type'	=> 'text',
		'label'	=> __('Add Email Address here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('woodcraft_tpbar_phone',array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_phone',array(
		'type'	=> 'text',
		'label'	=> __('Add Phone Number here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('woodcraft_tpbar_fb',array(
		'sanitize_callback'	=> 'esc_url_raw',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_fb',array(
		'type'	=> 'url',
		'label'	=> __('Add facebook url here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

    $wp_customize->add_setting('woodcraft_tpbar_tw',array(
		'sanitize_callback'	=> 'esc_url_raw',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_tw',array(
		'type'	=> 'url',
		'label'	=> __('Add twitter url here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('woodcraft_tpbar_ins',array(
		'sanitize_callback'	=> 'esc_url_raw',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_ins',array(
		'type'	=> 'url',
		'label'	=> __('Add instagram url here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('woodcraft_tpbar_in',array(
		'sanitize_callback'	=> 'esc_url_raw',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_in',array(
		'type'	=> 'url',
		'label'	=> __('Add linkedin url here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('woodcraft_tpbar_gp',array(
		'sanitize_callback'	=> 'esc_url_raw',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_gp',array(
		'type'	=> 'url',
		'label'	=> __('Add google plus url here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('woodcraft_tpbar_yt',array(
		'sanitize_callback'	=> 'esc_url_raw',
		'transport' => 'refresh'
	));

	$wp_customize->add_control('woodcraft_tpbar_yt',array(
		'type'	=> 'url',
		'label'	=> __('Add youtube url here.','woodcraft-lite'),
		'section'	=> 'woodcraft_tpbar_info'
	));

	$wp_customize->add_setting('hide_tpbar',array(
		'default' => true,
		'sanitize_callback' => 'woodcraft_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'hide_tpbar', array(
	   'settings' => 'hide_tpbar',
	   'section'   => 'woodcraft_tpbar_info',
	   'label'     => __('Check this to top bar.','woodcraft-lite'),
	   'type'      => 'checkbox'
    ));

	/*========================
	==	Header Info End
	========================*/
	
	/*========================
	==	Slider Start
	========================*/
	$wp_customize->add_section(
        'woodcraft_theme_slider',
        array(
            'title' => __('Setting Up Theme Slider', 'woodcraft-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1600x900). Slider will work only when you select the static front page.','woodcraft-lite'),	
        )
    );

    $wp_customize->add_setting('slidesmlttl',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slidesmlttl',array(
		'type'	=> 'text',
		'label'	=> __('Add sub title for all slides','woodcraft-lite'),
		'section'	=> 'woodcraft_theme_slider'
	));

	$wp_customize->add_setting('theme-slide1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('theme-slide1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide one:','woodcraft-lite'),
		'section'	=> 'woodcraft_theme_slider'
	));	

	$wp_customize->add_setting('theme-slide2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',	
		'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('theme-slide2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide two:','woodcraft-lite'),
		'section'	=> 'woodcraft_theme_slider'
	));	

	$wp_customize->add_setting('theme-slide3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',	
		'sanitize_callback'	=> 'absint'
	));

	$wp_customize->add_control('theme-slide3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide three:','woodcraft-lite'),
		'section'	=> 'woodcraft_theme_slider'
	));	
	
	$wp_customize->add_setting('slide_read_more',array(
		'default'	=> __('','woodcraft-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_read_more',array(
		'label'	=> __('Add slider link button text.','woodcraft-lite'),
		'section'	=> 'woodcraft_theme_slider',
		'setting'	=> 'slide_read_more',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('hide_theme_slider',array(
		'default' => true,
		'sanitize_callback' => 'woodcraft_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'hide_theme_slider', array(
	   'settings' => 'hide_theme_slider',
	   'section'   => 'woodcraft_theme_slider',
	   'label'     => __('Check this to hide slider.','woodcraft-lite'),
	   'type'      => 'checkbox'
    ));
	/*========================
	==	Slider End
	========================*/

	/*========================
	==	First Section Start
	========================*/
	$wp_customize->add_section(
        'woodcraft_ser_sec',
        array(
            'title' => __('Setting Up Services Section', 'woodcraft-lite'),
            'priority' => null,
			'description'	=> __('Select pages for setting up first / Services section. This section will be displayed only when you select the static front page.','woodcraft-lite'),	
        )
    );

	$wp_customize->add_setting('woodcraft_ser1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('woodcraft_ser1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for 1st column','woodcraft-lite'),
		'section'	=> 'woodcraft_ser_sec'
	));

	$wp_customize->add_setting('woodcraft_ser2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('woodcraft_ser2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for 2nd column','woodcraft-lite'),
		'section'	=> 'woodcraft_ser_sec'
	));

	$wp_customize->add_setting('woodcraft_ser3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('woodcraft_ser3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for 3rd column','woodcraft-lite'),
		'section'	=> 'woodcraft_ser_sec'
	));

	$wp_customize->add_setting('woodcraft_ser_hide',array(
		'default' => true,
		'sanitize_callback' => 'woodcraft_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'woodcraft_ser_hide', array(
	   'settings' => 'woodcraft_ser_hide',
	   'section'   => 'woodcraft_ser_sec',
	   'label'     => __('Check this to hide section.','woodcraft-lite'),
	   'type'      => 'checkbox'
    ));

	/*========================
	==	Second Section End
	========================*/
	
	/*========================
	==	fisrt Section Start
	========================*/

	$wp_customize->add_section(
        'woodcraft_about_sec',
        array(
            'title' => __('Setting Up About Us Section', 'woodcraft-lite'),
            'priority' => null,
			'description'	=> __('Select pages for setting up second / About Us section. This section will be displayed only when you select the static front page.','woodcraft-lite'),	
        )
    );
	
	$wp_customize->add_setting('woodcraft_about_ttl',array(
		'default'	=> __('','woodcraft-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('woodcraft_about_ttl',array(
		'label'	=> __('Add sub title text here.','woodcraft-lite'),
		'section'	=> 'woodcraft_about_sec',
		'setting'	=> 'woodcraft_about_ttl',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('woodcraft_about',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('woodcraft_about',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for About Us Section','woodcraft-lite'),
		'section'	=> 'woodcraft_about_sec'
	));
	
	$wp_customize->add_setting('woodcraft_about_more',array(
		'default'	=> __('','woodcraft-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('woodcraft_about_more',array(
		'label'	=> __('Add Read More text here.','woodcraft-lite'),
		'section'	=> 'woodcraft_about_sec',
		'setting'	=> 'woodcraft_about_more',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('woodcraft_about_hide',array(
		'default' => true,
		'sanitize_callback' => 'woodcraft_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'woodcraft_about_hide', array(
	   'settings' => 'woodcraft_about_hide',
	   'section'   => 'woodcraft_about_sec',
	   'label'     => __('Check this to hide section.','woodcraft-lite'),
	   'type'      => 'checkbox'
     ));

	/*========================
	==	First Section End
	========================*/
	
}
add_action( 'customize_register', 'woodcraft_lite_customize_register' );	

function woodcraft_lite_css(){
		?>
        <style>
			a, 
			.tm_client strong,
			.postmeta a:hover,
			#sidebar ul li a:hover,
			.blog-post h3.entry-title,
			a.blog-more:hover,
			#commentform input#submit,
			input.search-submit,
			.blog-date .date,
			.sitenav ul li.current_page_item a,
			.sitenav ul li a:hover, 
			.sitenav ul li.current_page_item ul li a:hover,
			.site-name-desc p,
			.intro-right h4,
			.top-bar-col .social-icons a:hover{
				color:<?php echo esc_attr(get_theme_mod('color_scheme','#ab7442')); ?>;
			}
			h3.widget-title,
			.nav-links .current,
			.nav-links a:hover,
			p.form-submit input[type="submit"],
			.social a:hover,
			.nivo-controlNav a.active,
			a.nivo-prevNav,
			a.nivo-nextNav,
			.top-bar,
			.caption-holder h4,
			.caption-holder a.slide-button:after,
			.intro-left:before,
			.intro-right h4:before,
			.read-more a:after{
				background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#ab7442')); ?>;
			}
			.nivo-controlNav a.active,
			.service-more:before{
				border-color:<?php echo esc_attr(get_theme_mod('color_scheme','#ab7442')); ?>;
			}
			#header{
				background-color:<?php echo esc_attr(get_theme_mod('woodcraft_headerbg-color','#ffffff')); ?>;
			}
			.copyright-wrapper{
				background-color:<?php echo esc_attr(get_theme_mod('woodcraft_footer-color','#000000')); ?>;
			}
		</style>
	<?php }
add_action('wp_head','woodcraft_lite_css');

function woodcraft_lite_customize_preview_js() {
	wp_enqueue_script( 'woodcraft-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'woodcraft_lite_customize_preview_js' );