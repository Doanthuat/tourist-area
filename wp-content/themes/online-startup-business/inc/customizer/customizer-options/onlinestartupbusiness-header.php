<?php
function onlinestartupbusiness_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'online-startup-business'),
		) 
	);

	
	/*=========================================
	Online Startup Business Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','online-startup-business'),
			'panel'  		=> 'header_section',
		)
    );





    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','online-startup-business'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','online-startup-business'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Online Startup Business header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','online-startup-business'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('onlinestartupbusiness_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new onlinestartupbusiness_Reset_Custom_Control($wp_customize, 'online_startup_business_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'online-startup-business'),
	  'description' => 'online_startup_business_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('onlinestartupbusiness_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlinestartupbusiness_Tab_Control($wp_customize, 'onlinestartupbusiness_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'online-startup-business'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_phonetext',
				'topheader_fblink',
				'topheader_instagramlink',
				'topheader_twitterlink',
				'topheader_linkedinlink',
            	'topheader_btntext',
            	'topheader_btnlink'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'online-startup-business'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'header_bgcolor',
            	'header_menuscolor',
            	'header_menuiconcolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor',
            	'header_btntextcolor',
            	'header_btnbgcolor1',
            	'header_btntxthovercolor',
				'header_btnbghovercolor',
				'header_btniconcolor',
				'header_btniconbgcolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'onlinestartupbusiness_switch_sanitization'
   	) );
   	$wp_customize->add_control( new onlinestartupbusiness_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','online-startup-business' ),
        'section' => 'top_header'
   	)));


	// topheader text 1
	$topheaderbtntext = esc_html__('', 'online-startup-business' );
	$wp_customize->add_setting(
    	'topheader_btntext',
    	array(
			'default' => $topheaderbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btntext',
		array(
		    'label'   		=> __('Button Text','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// topheader btn link
	$topheaderbtnlink = esc_html__('#', 'online-startup-business' );
	$wp_customize->add_setting(
    	'topheader_btnlink',
    	array(
			'default' => $topheaderbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_btnlink',
		array(
		    'label'   		=> __('Button Link','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	


	// Style setting

	// header bg Color
	$headerbgcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_bgcolor',
    	array(
			'default' => $headerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_bgcolor',
		array(
		    'label'   		=> __('BG Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menus Color
	$headermenuscolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menuicon Color
	$headermenuiconcolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_menuiconcolor',
    	array(
			'default' => $headermenuiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuiconcolor',
		array(
		    'label'   		=> __('Menu Icon Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('Menu Hover Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntext Color
	$headerbtntextcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_btntextcolor',
    	array(
			'default' => $headerbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbg Color 1
	$headerbtnbgcolor1 = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_btnbgcolor1',
    	array(
			'default' => $headerbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color 1','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntxthover Color 
	$headerbtntxthovercolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_btntxthovercolor',
    	array(
			'default' => $headerbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnbghover Color 
	$headerbtnbghovercolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_btnbghovercolor',
    	array(
			'default' => $headerbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btnicon Color 
	$headerbtniconcolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_btniconcolor',
    	array(
			'default' => $headerbtniconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btniconcolor',
		array(
		    'label'   		=> __('Button Icon Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btniconbg Color 
	$headerbtniconbgcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'header_btniconbgcolor',
    	array(
			'default' => $headerbtniconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btniconbgcolor',
		array(
		    'label'   		=> __('Button Icon BG Color','online-startup-business'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	$wp_customize->register_control_type('onlinestartupbusiness_Tab_Control');
	$wp_customize->register_panel_type( 'onlinestartupbusiness_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'onlinestartupbusiness_WP_Customize_Section' );

}
add_action( 'customize_register', 'onlinestartupbusiness_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class onlinestartupbusiness_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'onlinestartupbusiness_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class onlinestartupbusiness_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'onlinestartupbusiness_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






