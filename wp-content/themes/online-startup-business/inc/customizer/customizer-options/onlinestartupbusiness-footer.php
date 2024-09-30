<?php
function onlinestartupbusiness_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'online-startup-business'),
		) 
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','online-startup-business'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'onlinestartupbusiness_sanitize_text',
			'priority'  => 3,
		)
	);
	
	// Footer Copyright 
	$onlinestartupbusiness_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $onlinestartupbusiness_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	



	// footer copyright color
	$footercopyrightcolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer copyright bg color
	$footerbordercolor = esc_html__('#FF7A1F3D', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_coryrightbgcolor',
    	array(
			'default' => $footerbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_coryrightbgcolor',
		array(
		    'label'   		=> __('Border Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text color
	$footertextcolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer icon color
	$footericoncolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_iconcolor',
    	array(
			'default' => $footericoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_iconcolor',
		array(
		    'label'   		=> __('Icon Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer heading color
	$footerheadingcolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_headingcolor',
    	array(
			'default' => $footerheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listhover color
	$footerlisthovercolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_listhovercolor',
    	array(
			'default' => $footerlisthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhovercolor',
		array(
		    'label'   		=> __('List Hover Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopicon color
	$footerbacktotopiconcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_backtotopiconcolor',
    	array(
			'default' => $footerbacktotopiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopiconcolor',
		array(
		    'label'   		=> __('Back To Top Icon Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopbg color
	$footerbacktotopbgcolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_backtotopbgcolor',
    	array(
			'default' => $footerbacktotopbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopbgcolor',
		array(
		    'label'   		=> __('Back To Top BG Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer backtotopbghrv color
	$footerbacktotopbghrvcolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'footer_backtotopbghrvcolor',
    	array(
			'default' => $footerbacktotopbghrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_backtotopbghrvcolor',
		array(
		    'label'   		=> __('Back To Top BG Hover Color','online-startup-business'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);




}
add_action( 'customize_register', 'onlinestartupbusiness_footer' );
// Footer selective refresh
function onlinestartupbusiness_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'onlinestartupbusiness_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'onlinestartupbusiness_footer_partials' );


// copyright_content
function onlinestartupbusiness_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}