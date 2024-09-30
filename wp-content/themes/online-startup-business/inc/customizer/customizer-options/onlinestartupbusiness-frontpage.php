<?php
function onlinestartupbusiness_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'onlinestartupbusiness_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'online-startup-business' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'online-startup-business' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 3000*2000','online-startup-business'),
			'priority' => 1,
			'panel' => 'onlinestartupbusiness_frontpage_sections',
		)
	);



	$wp_customize->add_setting('onlinestartupbusiness_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlinestartupbusiness_Tab_Control($wp_customize, 'onlinestartupbusiness_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-startup-business'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'online-startup-business'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'slider_headingcolor',
                'slider_titlecolor',
				'slider_btntextcolor',
				'slider_btnbgcolor',
				'slider_btntexthrvcolor'
            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Style setting

	// slider heading Color
	$sliderheadingcolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'slider_headingcolor',
    	array(
			'default' => $sliderheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider title Color
	$slidertitlecolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntext Color
	$sliderbtntextcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'slider_btntextcolor',
    	array(
			'default' => $sliderbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg Color
	$sliderbtnbgcolor = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'slider_btnbgcolor',
    	array(
			'default' => $sliderbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntexthrv Color
	$sliderbtntexthrvcolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'slider_btntexthrvcolor',
    	array(
			'default' => $sliderbtntexthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntexthrvcolor',
		array(
		    'label'   		=> __('Button Text Hover Color','online-startup-business'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	
	
	/*=========================================
	aboutus Section
	=========================================*/
	$wp_customize->add_section(
		'aboutus_setting', array(
			'title' => esc_html__( 'AboutUs Section', 'online-startup-business' ),
			'priority' => 2,
			'panel' => 'onlinestartupbusiness_frontpage_sections',
		)
	);

	$wp_customize->add_setting('onlinestartupbusiness_aboutus_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlinestartupbusiness_Tab_Control($wp_customize, 'onlinestartupbusiness_aboutus_tabs', array(
	   'section' => 'aboutus_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-startup-business'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'aboutus_image',
				'aboutus_image2',
				'aboutus_yearofexperiencenum',
				'aboutus_yearofexperiencetext',
            	'aboutus_heading',
				'aboutus_subheading',
				'aboutus_description',
				'aboutus_box1title',
				'aboutus_box1description',
				'aboutus_box2title',
				'aboutus_box2description',
            	'aboutus_readmorebtn_link'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'online-startup-business'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'aboutus_yeartextcolor',
				'aboutus_yearboxbgcolor',
				'aboutus_headingcolor',
				'aboutus_subheadingcolor',
				'aboutus_descriptioncolor',
				'aboutus_boxiconcolor',
				'aboutus_boxiconbgcolor',
				'aboutus_boxtitlecolor',
				'aboutus_boxdescriptioncolor',
				'aboutus_btntextcolor',
				'aboutus_btnbgcolor1',
				'aboutus_btntexthovercolor',
				'aboutus_imagebgcirclecolor',
				'aboutus_headingtopcirclecolor'
            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'online-startup-business'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'online_startup_business_aboutus_section_width',
			   'onlinestartupbusiness_aboutus_padding',
			   'online_startup_business_aboutus_top_padding',
			   'online_startup_business_aboutus_bottom_padding'
		   ),
		)
	    
    	),
	))); 


	// aboutus_image
	$wp_customize->add_setting(
    	'aboutus_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_image',
	        array(
			    'label'   		=> __('Image 1','online-startup-business'),
				'description'=> __('Image Size Should Be 342*425','online-startup-business'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_image'
	        )
	    )
	);

	// aboutus_image2
	$wp_customize->add_setting(
    	'aboutus_image2',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_image2',
	        array(
			    'label'   		=> __('Image 2','online-startup-business'),
				'description'=> __('Image Size Should Be 342*425','online-startup-business'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_image2'
	        )
	    )
	);

	// aboutus_yearofexperiencenum
	$wp_customize->add_setting(
    	'aboutus_yearofexperiencenum',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearofexperiencenum',
		array(
		    'label'   		=> __('Year Of Experience Number','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_yearofexperiencetext
	$wp_customize->add_setting(
    	'aboutus_yearofexperiencetext',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearofexperiencetext',
		array(
		    'label'   		=> __('Year Of Experience Text','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_heading
	$wp_customize->add_setting(
    	'aboutus_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_heading',
		array(
		    'label'   		=> __('Heading','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_subheading
	$wp_customize->add_setting(
    	'aboutus_subheading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_subheading',
		array(
		    'label'   		=> __('Sub Heading','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// aboutus_description
	$wp_customize->add_setting(
    	'aboutus_description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_description',
		array(
		    'label'   		=> __('Description','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_box1title
	$wp_customize->add_setting(
    	'aboutus_box1title',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_box1title',
		array(
		    'label'   		=> __('Box 1 Title','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_box1description
	$wp_customize->add_setting(
    	'aboutus_box1description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_box1description',
		array(
		    'label'   		=> __('Box 1 Description','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_box2title
	$wp_customize->add_setting(
    	'aboutus_box2title',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_box2title',
		array(
		    'label'   		=> __('Box 2 Title','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_box2description
	$wp_customize->add_setting(
    	'aboutus_box2description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_box2description',
		array(
		    'label'   		=> __('Box 2 Description','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_readmorebtn_link
	$aboutusreadmorebtnlink = esc_html__('#', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_readmorebtn_link',
    	array(
			'default' => $aboutusreadmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_readmorebtn_link',
		array(
		    'label'   		=> __('Read More Button Link','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	//style

	// aboutus yeartext Color
	$aboutusyeartextcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_yeartextcolor',
    	array(
			'default' => $aboutusyeartextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yeartextcolor',
		array(
		    'label'   		=> __('Year Text Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus yearboxbg Color
	$aboutusyearboxbgcolor = esc_html__('#808080', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_yearboxbgcolor',
    	array(
			'default' => $aboutusyearboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_yearboxbgcolor',
		array(
		    'label'   		=> __('Year Box BG Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus heading Color
	$aboutusheadingcolor = esc_html__('#635C5C', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_headingcolor',
    	array(
			'default' => $aboutusheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus subheading Color
	$aboutussubheadingcolor = esc_html__('#635C5C', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_subheadingcolor',
    	array(
			'default' => $aboutussubheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_subheadingcolor',
		array(
		    'label'   		=> __('Sub Heading Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus description Color
	$aboutusdescriptioncolor = esc_html__('#292727', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_descriptioncolor',
    	array(
			'default' => $aboutusdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus boxicon Color
	$aboutusboxiconcolor = esc_html__('#FF4938', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_boxiconcolor',
    	array(
			'default' => $aboutusboxiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_boxiconcolor',
		array(
		    'label'   		=> __('Box Icon Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus boxiconbg Color
	$aboutusboxiconbgcolor = esc_html__('#FDE5DE', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_boxiconbgcolor',
    	array(
			'default' => $aboutusboxiconbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_boxiconbgcolor',
		array(
		    'label'   		=> __('Box Icon BG Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus boxtitle Color
	$aboutusboxtitlecolor = esc_html__('#FF4938', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_boxtitlecolor',
    	array(
			'default' => $aboutusboxtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_boxtitlecolor',
		array(
		    'label'   		=> __('Box Title Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus boxdescription Color
	$aboutusboxdescriptioncolor = esc_html__('#292727', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_boxdescriptioncolor',
    	array(
			'default' => $aboutusboxdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_boxdescriptioncolor',
		array(
		    'label'   		=> __('Box Description Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus btntext Color
	$aboutusbtntextcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_btntextcolor',
    	array(
			'default' => $aboutusbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btnbg Color 1
	$aboutusbtnbgcolor1 = esc_html__('#EF6135', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_btnbgcolor1',
    	array(
			'default' => $aboutusbtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus btntexthover Color
	$aboutusbtntexthovercolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_btntexthovercolor',
    	array(
			'default' => $aboutusbtntexthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btntexthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus imagebgcircle Color
	$aboutusimagebgcirclecolor = esc_html__('#FDE5DE', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_imagebgcirclecolor',
    	array(
			'default' => $aboutusimagebgcirclecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imagebgcirclecolor',
		array(
		    'label'   		=> __('Image BG Circle Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus headingtopcircle Color
	$aboutusheadingtopcirclecolor = esc_html__('#989492', 'online-startup-business' );
	$wp_customize->add_setting(
    	'aboutus_headingtopcirclecolor',
    	array(
			'default' => $aboutusheadingtopcirclecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_headingtopcirclecolor',
		array(
		    'label'   		=> __('Heading Top Circle Color','online-startup-business'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus layout setting
	$wp_customize->add_setting('online_startup_business_aboutus_section_width',array(
		'default' => 'Box Width',
		'sanitize_callback' => 'onlinestartupbusiness_sanitize_choices',
	));
	$wp_customize->add_control('online_startup_business_aboutus_section_width',array(
		'type' => 'select',
		'label' => __('Section Width','online-startup-business'),
		'choices' => array (
			'Box Width' => __('Box Width','online-startup-business'),
			'Full Width' => __('Full Width','online-startup-business')
		),
		'section' => 'aboutus_setting',
	));


	// aboutus section padding 
	$wp_customize->add_setting('onlinestartupbusiness_aboutus_padding',array(
		'sanitize_callback'   => 'esc_html'
	));
	$wp_customize->add_control('onlinestartupbusiness_aboutus_padding',array(
		'label' => __('Section Padding','online-startup-business'),
		'section' => 'aboutus_setting'
	));

	$wp_customize->add_setting('online_startup_business_aboutus_top_padding',array(
		'default' => '5',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('online_startup_business_aboutus_top_padding',array(
		'type' => 'number',
		'label' => __('Top','online-startup-business'),
		'section' => 'aboutus_setting',
	));

		$wp_customize->add_setting('online_startup_business_aboutus_bottom_padding',array(
		'default' => '2',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('online_startup_business_aboutus_bottom_padding',array(
		'type' => 'number',
		'label' => __('Bottom','online-startup-business'),
		'section' => 'aboutus_setting',
	));
	


	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Service Section', 'online-startup-business' ),
			'priority' => 2,
			'panel' => 'onlinestartupbusiness_frontpage_sections',
		)
	);



	$wp_customize->add_setting('onlinestartupbusiness_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new onlinestartupbusiness_Tab_Control($wp_customize, 'onlinestartupbusiness_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'online-startup-business'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'service_heading',
            	'Service1',
            	'Service2',
            	'Service3'
			),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'online-startup-business'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_bgbrdcolor',
				'service_headingcolor',
				'service_headingbrdcolor',
            	'service_boxtitlecolorcolor',
            	'service_boxtitlebgcolor',
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'online-startup-business'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'online_startup_business_service_section_width',
	            'onlinestartupbusiness_service_padding',
	            'online_startup_business_service_top_padding',
	            'online_startup_business_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new onlinestartupbusiness_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'online-startup-business' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'online-startup-business' ),
                    'off' => __( 'No', 'online-startup-business' )
                ),
            )
        )
    );


	

    // service title
	$wp_customize->add_setting(
    	'service_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_heading',
		array(
		    'label'   		=> __('Heading','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Service 1','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		


	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Service 2','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Service 3','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	

	// style

	// service bgbrdcolor color
	$servicebgbrdcolor = esc_html__('#FDE5DE', 'online-startup-business' );
	$wp_customize->add_setting(
    	'service_bgbrdcolor',
    	array(
			'default' => $servicebgbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_bgbrdcolor',
		array(
		    'label'   		=> __('BG Border Color','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service headingcolor color
	$serviceheadingcolor = esc_html__('#000', 'online-startup-business' );
	$wp_customize->add_setting(
    	'service_headingcolor',
    	array(
			'default' => $serviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingcolor',
		array(
		    'label'   		=> __('Heading Color','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service headingbrdcolor color
	$serviceheadingbrdcolor = esc_html__('#808080', 'online-startup-business' );
	$wp_customize->add_setting(
    	'service_headingbrdcolor',
    	array(
			'default' => $serviceheadingbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingbrdcolor',
		array(
		    'label'   		=> __('Heading Border Color','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#fff', 'online-startup-business' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#000000B3', 'online-startup-business' );
	$wp_customize->add_setting(
    	'service_boxtitlebgcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlebgcolor',
		array(
		    'label'   		=> __('Box Title BG Color','online-startup-business'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	
	// layout setting
	$wp_customize->add_setting('online_startup_business_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'onlinestartupbusiness_sanitize_choices',
    ));
    $wp_customize->add_control('online_startup_business_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','online-startup-business'),
        'choices' => array (
            'Box Width' => __('Box Width','online-startup-business'),
            'Full Width' => __('Full Width','online-startup-business')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('onlinestartupbusiness_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('onlinestartupbusiness_service_padding',array(
      'label' => __('Section Padding','online-startup-business'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('online_startup_business_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('online_startup_business_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','online-startup-business'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('online_startup_business_service_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('online_startup_business_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','online-startup-business'),
	    'section' => 'Service_setting',
    ));


	$wp_customize->register_control_type('onlinestartupbusiness_Tab_Control');

}

add_action( 'customize_register', 'onlinestartupbusiness_blog_setting' );

// service selective refresh
function onlinestartupbusiness_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'onlinestartupbusiness_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'onlinestartupbusiness_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'onlinestartupbusiness_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'onlinestartupbusiness_blog_section_partials' );

// blog_title
function onlinestartupbusiness_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function onlinestartupbusiness_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function onlinestartupbusiness_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


