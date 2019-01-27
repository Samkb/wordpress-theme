<?php
/**
 * yalatech-education-theme Theme Customizer
 *
 * @package yalatech-education-theme
 */

/**
 * Setting for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */


function yalatech_education_customizer( $wp_customize ){

	// require get_template_directory() . '/inc/customizer-controls.php';
	load_template( get_template_directory() . '/inc/customizer-controls.php' );

	 /***********************
     * Page Layout
     * * *************************/

	 $wp_customize->add_panel('yalatech_education_theme_options', array(
	 	'priority' => 10,
	 	'capability' => 'edit_theme_options',
	 	'title' => esc_html__(' Front Page Header Section', 'yalatech-education'),
	 	'description' => esc_html__('Manage Options for Yalatech Education', 'yalatech-education'),
	 ));

	 $wp_customize->add_section('yalatech_education_front_page_settings_section', array(
	 	'priority' => 20,
	 	'panel' => 'yalatech_education_theme_options',
	 	'capability' => 'edit_theme_options',
	 	'title' => esc_html__('Contact Text', 'yalatech-education'),
	 	'description' => esc_html__('Manage Options for front page', 'yalatech-education'),
	 ));

// Mail section
	 $wp_customize->add_setting('yalatech_education_theme_mail', array(
	 	'capability' => 'edit_theme_options',
	 	'default' => '',
	 	'sanitize_callback' => 'sanitize_textarea_field',
	 ));
	 $wp_customize->add_control('yalatech_education_theme_mail', array(
	 	'type' => 'email',
	 	'settings' => 'yalatech_education_theme_mail',
	 	'section' => 'yalatech_education_front_page_settings_section',
	 	'label' => esc_html__('Mail Text', 'yalatech-education'),

	 ));
	 // Contact Section
	 $wp_customize->add_setting('yalatech_education_theme_ph_no', array(
	 	'capability' => 'edit_theme_options',
	 	'default' => '',
	 	'sanitize_callback' => 'sanitize_textarea_field',
	 ));
	 $wp_customize->add_control('yalatech_education_theme_ph_no', array(
	 	'type' => 'text',
	 	'settings' => 'yalatech_education_theme_ph_no',
	 	'section' => 'yalatech_education_front_page_settings_section',
	 	'label' => esc_html__('Enter Contact No', 'yalatech-education'),

	 ));

	  // Location Section
	 $wp_customize->add_setting('yalatech_education_theme_location', array(
	 	'capability' => 'edit_theme_options',
	 	'default' => '',
	 	'sanitize_callback' => 'sanitize_textarea_field',
	 ));
	 $wp_customize->add_control('yalatech_education_theme_location', array(
	 	'type' => 'text',
	 	'settings' => 'yalatech_education_theme_location',
	 	'section' => 'yalatech_education_front_page_settings_section',
	 	'label' => esc_html__('Enter Address', 'yalatech-education'),

	 ));

// Download section 

	 $wp_customize->add_section('yalatech_education_front_page_download_section', array(
	 	'priority' => 25,
	 	'panel' => 'yalatech_education_theme_options',
	 	'capability' => 'edit_theme_options',
	 	'title' => esc_html__('Download Text', 'yalatech-education'),
	 	'description' => esc_html__('Manage Options for front page', 'yalatech-education'),
	 ));

	   // Download Notice Section
	 $wp_customize->add_setting('yalatech_education_theme_download_button_title', array(
	 	'capability' => 'edit_theme_options',
	 	'default' => '',
	 	'sanitize_callback' => 'sanitize_textarea_field',
	 ));
	 $wp_customize->add_control('yalatech_education_theme_download_button_title', array(
	 	'type' => 'text',
	 	'settings' => 'yalatech_education_theme_download_button_title',
	 	'section' => 'yalatech_education_front_page_download_section',
	 	'label' => esc_html__('Enter Download Title', 'yalatech-education'),

	 ));
	 $wp_customize->add_setting('yalatech_education_theme_download_button_url', array(
	 	'capability' => 'edit_theme_options',
	 	'default' => '',
	 	'sanitize_callback' => 'sanitize_textarea_field',
	 ));
	 $wp_customize->add_control('yalatech_education_theme_download_button_url', array(
	 	'type' => 'text',
	 	'settings' => 'yalatech_education_theme_download_button_url',
	 	'section' => 'yalatech_education_front_page_download_section',
	 	'label' => esc_html__('Enter Download Url', 'yalatech-education'),

	 ));




	 /**
	  * Top header background color
	  */

	 $wp_customize->add_section('top_header_colors', array(

	 	'title'		=>	esc_html__( 'Top Header Color', 'yalatech-education' ),
	 	'priority'	=> 10,
	 	'panel' => 'yalatech_education_theme_options',
	 ));
	 $wp_customize->add_setting('top_header_bg', array(
	 	'default'	=> '#2e5f85',
	 	'transport'	=> 'refresh',
	 	'sanitize_callback' => 'sanitize_textarea_field',

	 ));
	 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_color_control', array(

	 	'label'		=> esc_html__( 'Top Header Background Color', 'yalatech-education' ),
	 	'section'	=> 'top_header_colors',
	 	'settings'	=> 'top_header_bg',


	 ) ) );

 	/**
	  * Copyright Text
	  */

 	$wp_customize->add_section('yalatech_education_copyright_text', array(

 		'title'		=>	esc_html__( 'Copyright Text', 'yalatech-education' ),
 		'priority'	=> 35,
 		'panel' => 'yalatech_education_theme_options',
 	));
 	$wp_customize->add_setting('yalatech_education_copyright', array(
 		'default'	=> 'COPYRIGHT',
 		'transport'	=> 'refresh',
 		'sanitize_callback' => 'sanitize_textarea_field',

 	));
 	$wp_customize->add_control('yalatech_education_copyright', array(
 		'type' => 'text',
 		'settings' => 'yalatech_education_copyright',
 		'section' => 'yalatech_education_copyright_text',
 		'label' => esc_html__('Enter Copyright Text', 'yalatech-education'),

 	));




	 /**
	  * Breadcrumb Images 
	  */

	 $wp_customize->add_section('yalatech_education_breadcrumb_image', array(
	 	'priority' => 40,
	 	'panel' => 'yalatech_education_theme_options',
	 	'capability' => 'edit_theme_options',
	 	'title' => esc_html__('Breadcrumb', 'yalatech-education'),
	 	'description' => esc_html__('Manage Options Breadcrumb', 'yalatech-education'),
	 ));
	 $wp_customize->add_setting('yalatech_education_breadcrumb_background_image', array(
	 	'capability' => 'edit_theme_options',
	 	'default' => get_stylesheet_directory_uri() . '/assets/images/page-bg.png',
	 	'sanitize_callback' => 'esc_url_raw',
	 ));

	 $wp_customize->add_control(new WP_Customize_Image_Control(
	 	$wp_customize,
	 	'yalatech_education_breadcrumb_background_image',
	 	array(
	 		'label' => esc_html__('Select Breadcrumb Background Image ', 'yalatech-education'),
	 		'section' => 'yalatech_education_breadcrumb_image',
	 		'settings' => 'yalatech_education_breadcrumb_background_image',

	 	)
	 ));
	 	/**
		* Main Social Icon Settings
		*/


	 	/**
		 * Top Header Social Icon Settings Area 
		*/
	 	$wp_customize->add_section('yalatech_education_social_link_activate_settings', array(
	 		'priority' => 25,
	 		'title'    => esc_html__('Social Media Link Options', 'yalatech-education'),
	 		'panel' => 'yalatech_education_theme_options',
	 	));

	 	$yalatech_education_social_links = array( 
	 		'yalatech_education_social_facebook' => array(
	 			'id' => 'yalatech_education_social_facebook',
	 			'title' => esc_html__('Facebook', 'yalatech-education'),
	 			'default' => '',
	 		),
	 		'yalatech_education_social_twitter' => array(
	 			'id' => 'yalatech_education_social_twitter',
	 			'title' => esc_html__('Twitter', 'yalatech-education'),
	 			'default' => '',
	 		),
	 		'yalatech_education_social_instagram' => array(
	 			'id' => 'yalatech_education_social_instagram',
	 			'title' => esc_html__('Instagram', 'yalatech-education'),
	 			'default' => '',
	 		),
	 		'yalatech_education_social_linkedin' => array(
	 			'id' => 'yalatech_education_social_linkedin',
	 			'title' => esc_html__('Linkedin', 'yalatech-education'),
	 			'default' => '',
	 		),
	 		'yalatech_education_social_youtube' => array(
	 			'id' => 'yalatech_education_social_youtube',
	 			'title' => esc_html__('YouTube', 'yalatech-education'),
	 			'default' => '',
	 		)
	 	);

	 	$i = 20;
	 	foreach($yalatech_education_social_links as $yalatech_education_social_link) {
	 		$wp_customize->add_setting($yalatech_education_social_link['id'], array(
	 			'default' => $yalatech_education_social_link['default'],
	 			'capability' => 'edit_theme_options',
	 			'sanitize_callback' => 'esc_url_raw'
	 		));

	 		$wp_customize->add_control($yalatech_education_social_link['id'], array(
	 			'label' => $yalatech_education_social_link['title'],
	 			'section'=> 'yalatech_education_social_link_activate_settings',
	 			'settings'=> $yalatech_education_social_link['id'],
	 			'priority' => $i
	 		));

	 		$i++;
	 	}

	 	$wp_customize->add_panel('yalatech_education_theme_front_page_section', array(
	 		'priority' => 15,
	 		'capability' => 'edit_theme_options',
	 		'title' => esc_html__('Front Page Sections', 'yalatech-education'),
	 		'description' => esc_html__('Manage Options for Yalatech Education', 'yalatech-education'),
	 	));

		    /**
		     * Yalatech Front-page slider customizer setting
		     */
		    
		    $wp_customize->add_section('yalatech_education_front_page_slider_section', array(
		    	'priority' => 30,
		    	'panel' => 'yalatech_education_theme_front_page_section',
		    	'capability' => 'edit_theme_options',
		    	'title' => esc_html__('Front Page Slider', 'yalatech-education'),
		    	'description' => esc_html__('Manage Options for front page Slider', 'yalatech-education'),
		    ));

		    $wp_customize->add_setting('yalatech_education_front_page_no_of_slides', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => 3,
		    	'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    ));

		    $wp_customize->add_control('yalatech_education_front_page_no_of_slides', array(
		    	'type' => 'number',
		    	'settings' => 'yalatech_education_front_page_no_of_slides',
		    	'section' => 'yalatech_education_front_page_slider_section',
		    	'label' => esc_html__('Select No of Slides (Refresh page once No. of Slides selected)', 'yalatech-education'),

		    ));

		    $slides = get_theme_mod('yalatech_education_front_page_no_of_slides', 3);

		    for ($i = 1; $i <= $slides; $i++) {

		    	$wp_customize->add_setting('yalatech_education_front_page_slider_image_' . $i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => '',
		    		'sanitize_callback' => 'esc_url_raw',
		    	));

		    	$wp_customize->add_control(new WP_Customize_Image_Control(
		    		$wp_customize,
		    		'yalatech_education_front_page_slider_image_' . $i,
		    		array(
		    			'label' => esc_html__('Slider Image ', 'yalatech-education') . $i,
		    			'section' => 'yalatech_education_front_page_slider_section',
		    			'settings' => 'yalatech_education_front_page_slider_image_' . $i,

		    		)
		    	));

		    	$wp_customize->add_setting( 'yalatech_education_front_page_slider_caption_'.$i, array(
		    		'capability'     => 'edit_theme_options',
		    		'default'        => '',
		    		'sanitize_callback' => 'sanitize_text_field',
		    	) );

		    	$wp_customize->add_control( 'yalatech_education_front_page_slider_caption_'.$i, array(
		    		'type'         => 'text',
		    		'settings'     => 'yalatech_education_front_page_slider_caption_'.$i,
		    		'section'      => 'yalatech_education_front_page_slider_section',
		    		/* translators: %s: caption */
		    		'label'        => sprintf(esc_html__( 'Slide %1$s Caption', 'yalatech-education' ), $i), //Translator for the no of slider caption
		    		
		    	) );

		    	$wp_customize->add_setting( 'yalatech_education_front_page_slider_desc_'.$i, array(
		    		'capability'     => 'edit_theme_options',
		    		'default'        => '',
		    		'sanitize_callback' => 'sanitize_textarea_field',
		    	) );

		    	$wp_customize->add_control( 'yalatech_education_front_page_slider_desc_'.$i, array(
		    		'type'         => 'textarea',
		    		'settings'     => 'yalatech_education_front_page_slider_desc_'.$i,
		    		'section'      => 'yalatech_education_front_page_slider_section',
		    		/* translators: %s: Descritpion */
		    		'label'        => sprintf(esc_html__( 'Slide %1$s Description', 'yalatech-education' ), $i),
		    		
		    	) );
		    	
		    }


		    /* Dropdownppages and icon for the featured pages */

		    $wp_customize->add_section('yalatech_education_front_page_dropdownpages_section_featured_pages', array(
		    	'priority' => 60,
		    	'panel' => 'yalatech_education_theme_front_page_section',
		    	'capability' => 'edit_theme_options',
		    	'title' => esc_html__('Featured Page', 'yalatech-education'),
		    	'description' => esc_html__('select page for featured item', 'yalatech-education'),
		    ));

		       // enable field setting.
		    $wp_customize->add_setting('yalatech_education_options_featured_page_section_enable', array(
		    	'default' => 1,
		    	'sanitize_callback' => 'esc_attr',
		    ));

			// enable field control.
		    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yalatech_education_options_featured_page_section_enable', array(
		    	'label'    => esc_html__( 'Enable/Disable Section', 'yalatech-education' ),
		    	'section'  => 'yalatech_education_front_page_dropdownpages_section_featured_pages',
		    	'settings' => 'yalatech_education_options_featured_page_section_enable',
		    	'type'     => 'checkbox',
		    	'priority'    => 10,
		    ) ) );


		    $select_page = 3;

		    for ($i = 1; $i <= $select_page; $i++) {

		    	$wp_customize->add_setting('yalatech_education_front_page_dropdownpages_setting_id' . $i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => 3,
		    		'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    	));

		    	$wp_customize->add_control('yalatech_education_front_page_dropdownpages_setting_id' . $i, array(
		    		'type' => 'dropdown-pages',
		    		'settings' => 'yalatech_education_front_page_dropdownpages_setting_id' . $i,
		    		'section' => 'yalatech_education_front_page_dropdownpages_section_featured_pages', 
		    		'label' => esc_html__('Select featured page', 'yalatech-education') . $i,
		    		'description' => esc_html__('Select page for front page featured post', 'yalatech-education' ) . $i,
		    		

		    	));
		    	$wp_customize->add_setting('yalatech_education_front_page_icon_setting_id' . $i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => 'fas fa-user-graduate',
		    		'sanitize_callback' => 'sanitize_textarea_field',
		    	));

		    	$wp_customize->add_control('yalatech_education_front_page_icon_setting_id' . $i, array(
		    		'type' => 'select',
		    		'settings' => 'yalatech_education_front_page_icon_setting_id' . $i,
		    		'section' => 'yalatech_education_front_page_dropdownpages_section_featured_pages', 
		    		'label' => esc_html__('Icon', 'yalatech-education') . $i,
		    		'description' => esc_html__('Select Icon', 'yalatech-education') . $i,
		    		'choices' => array(
		    			'fas fa-user-graduate' 		=> esc_html__( 'Graduate Icon', 'yalatech-education'),
		    			'fas fa-book' 				=> esc_html__( 'Book Icon', 'yalatech-education' ),
		    			'fas fa-graduation-cap' 	=> esc_html__( 'Graduation Cap Icon', 'yalatech-education' ),
		    			'fas fa-user-graduate' 		=> esc_html__( 'Graduate Icon', 'yalatech-education' ),
		    			'fas fa-school'				=> esc_html__( 'School Icon', 'yalatech-education' ),
		    			'fas fa-chalkboard-teacher'	=> esc_html__( 'Chalkboard Teacher Icon', 'yalatech-education' ),
		    			'fas fa-users' 				=> esc_html__( 'Users Icon', 'yalatech-education' ),
		    			'fas fa-university'			=> esc_html__( 'University Icon', 'yalatech-education' ),
		    			'fas fa-trophy'				=> esc_html__( 'Trophy Icon', 'yalatech-education' ),
		    			'fas fa-bus'				=> esc_html__( 'Bus Icon', 'yalatech-education' ),
		    			'fas fa-book-open'			=> esc_html__( 'Book Open Icon', 'yalatech-education' ),
		    			'fas fa-laptop'				=> esc_html__( 'Laptop Icon', 'yalatech-education' ),
		    			'fas fa-desktop'			=> esc_html__( 'Desktop Icon', 'yalatech-education' ),
		    			'fab fa-leanpub'			=> esc_html__( 'Copy Icon', 'yalatech-education' ),
		    			'fas fa-edit'				=> esc_html__( 'Writer Icon', 'yalatech-education' ),
		    		)					
		    	));
		    }


		      // front page welcome section


		    $wp_customize->add_section('yalatech_education_welcome_section', array(

		    	'title'		=>	esc_html__( 'Welcome Section', 'yalatech-education' ),
		    	'priority'	=> 65,
		    	'panel' => 'yalatech_education_theme_front_page_section',
		    ));

		    // enable field setting.
		    $wp_customize->add_setting('yalatech_education_options_welcome_section_enable', array(
		    	'default' => 1,
		    	'sanitize_callback' => 'esc_attr',
		    ));

			// enable field control.
		    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yalatech_education_options_welcome_section_enable', array(
		    	'label'    => esc_html__( 'Enable/Disable Section', 'yalatech-education' ),
		    	'section'  => 'yalatech_education_welcome_section',
		    	'settings' => 'yalatech_education_options_welcome_section_enable',
		    	'type'     => 'checkbox',
		    	'priority'    => 10,
		    ) ) );

		    $wp_customize->add_setting('yalatech_education_welcome_section_setting', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => 1,
		    	'sanitize_callback' => 'yalatech_education_sanitize_integer',

		    ));
		    $wp_customize->add_control('yalatech_education_welcome_section_setting', array(
		    	'type' => 'dropdown-pages',
		    	'settings' => 'yalatech_education_welcome_section_setting',
		    	'section' => 'yalatech_education_welcome_section', 
		    	'label' => esc_html__('Select Page', 'yalatech-education'),
		    	'description' => esc_html__('Select page for welcome page featured post', 'yalatech-education' ),

		    ));

		    $wp_customize->add_setting('yalatech_education_welcome_page_image_setting', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => '',
		    	'sanitize_callback' => 'esc_url_raw',
		    ));

		    $wp_customize->add_control(new WP_Customize_Image_Control(
		    	$wp_customize,
		    	'yalatech_education_welcome_page_image_setting',
		    	array(
		    		'label' => esc_html__('Select Top Image ', 'yalatech-education'),
		    		'section' => 'yalatech_education_welcome_section',
		    		'settings' => 'yalatech_education_welcome_page_image_setting',

		    	)
		    ));


		   // front page popular course section




		    $wp_customize->add_section('yalatech_education_front_page_popular_course_section', array(
		    	'priority' => 70,
		    	'panel' => 'yalatech_education_theme_front_page_section',
		    	'capability' => 'edit_theme_options',
		    	'title' => esc_html__('Popular Course Section', 'yalatech-education'),
		    	'description' => esc_html__('Manage Options for front page', 'yalatech-education'),
		    ));


    // enable field setting.
		    $wp_customize->add_setting('yalatech_education_options_courses_section_enable', array(
		    	'default' => 1,
		    	'sanitize_callback' => 'esc_attr',
		    ));

			// enable field control.
		    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yalatech_education_options_courses_section_enable', array(
		    	'label'    => esc_html__( 'Enable/Disable Section', 'yalatech-education' ),
		    	'section'  => 'yalatech_education_front_page_popular_course_section',
		    	'settings' => 'yalatech_education_options_courses_section_enable',
		    	'type'     => 'checkbox',
		    	'priority'    => 10,
		    ) ) );


		    $wp_customize->add_setting('yalatech_education_theme_popular_course_title_setting', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => '',
		    	'sanitize_callback' => 'sanitize_textarea_field',
		    ));
		    $wp_customize->add_control('yalatech_education_theme_popular_course_title_setting', array(
		    	'type' => 'text',
		    	'settings' => 'yalatech_education_theme_popular_course_title_setting',
		    	'section' => 'yalatech_education_front_page_popular_course_section',
		    	'label' => esc_html__('Course Title', 'yalatech-education'),

		    ));

		    $wp_customize->add_setting('yalatech_education_theme_popular_course_sub_title_setting', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => '',
		    	'sanitize_callback' => 'sanitize_textarea_field',
		    ));
		    $wp_customize->add_control('yalatech_education_theme_popular_course_sub_title_setting', array(
		    	'type' => 'text',
		    	'settings' => 'yalatech_education_theme_popular_course_sub_title_setting',
		    	'section' => 'yalatech_education_front_page_popular_course_section',
		    	'label' => esc_html__('Course Sub Title', 'yalatech-education'),

		    ));

		    $wp_customize->add_setting('yalatech_education_front_page_no_of_courses', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => 3,
		    	'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    ));

		    $wp_customize->add_control('yalatech_education_front_page_no_of_courses', array(
		    	'type' => 'number',
		    	'settings' => 'yalatech_education_front_page_no_of_courses',
		    	'section' => 'yalatech_education_front_page_popular_course_section',
		    	'label' => esc_html__('Select No of Courses (Refresh page once No. of Courses is selected)', 'yalatech-education'),

		    ));

		    $popular_course = get_theme_mod('yalatech_education_front_page_no_of_courses', 3);


		    /*droup down pages for popular course*/


		    for ($i = 1; $i <= $popular_course; $i++) {

		    	$wp_customize->add_setting('yalatech_education_front_page_dropdownpages_popular_course_setting_id' . $i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => 3,
		    		'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    	));

		    	$wp_customize->add_control('yalatech_education_front_page_dropdownpages_popular_course_setting_id' . $i, array(
		    		'type' => 'dropdown-pages',
		    		'settings' => 'yalatech_education_front_page_dropdownpages_popular_course_setting_id' . $i,
		    		'section' => 'yalatech_education_front_page_popular_course_section', 
		    		'label' => esc_html__('Select course page', 'yalatech-education') . $i,
		    		'description' => esc_html__('Select page for front page Popular Course', 'yalatech-education') . $i,

		    	));

		    	$wp_customize->add_setting( 'yalatech_education_front_page_course_duration'.$i, array(
		    		'capability'     => 'edit_theme_options',
		    		'default'        => '',
		    		'sanitize_callback' => 'sanitize_text_field',
		    	) );

		    	$wp_customize->add_control( 'yalatech_education_front_page_course_duration'.$i, array(
		    		'type'         => 'text',
		    		'settings'     => 'yalatech_education_front_page_course_duration'.$i,
		    		'section'      => 'yalatech_education_front_page_popular_course_section',
		    		/* translators: %s: Duration */
		    		'label'        => sprintf(esc_html__( 'Course %1$s Duration', 'yalatech-education' ), $i),
		    		
		    	) );
		    }

		    /*yalatech education counter section*/

		    $wp_customize->add_section('yalatech_education_front_page_counter_section', array(
		    	'priority' => 70,
		    	'panel' => 'yalatech_education_theme_front_page_section',
		    	'capability' => 'edit_theme_options',
		    	'title' => esc_html__('Skills Section (counter)', 'yalatech-education'),
		    	'description' => esc_html__('Manage Options for front page Skills', 'yalatech-education'),
		    ));

		     // enable field setting.
		    $wp_customize->add_setting('yalatech_education_options_counter_section_enable', array(
		    	'default' => 1,
		    	'sanitize_callback' => 'esc_attr',
		    ));

			// enable field control.
		    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yalatech_education_options_counter_section_enable', array(
		    	'label'    => esc_html__( 'Enable/Disable Section', 'yalatech-education' ),
		    	'section'  => 'yalatech_education_front_page_counter_section',
		    	'settings' => 'yalatech_education_options_counter_section_enable',
		    	'type'     => 'checkbox',
		    	'priority'    => 10,
		    ) ) );

		    for ($i = 1; $i <= 4; $i++) {

		    	$wp_customize->add_setting('yalatech_education_counter_section_title' .$i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => '',
		    		'sanitize_callback' => 'sanitize_textarea_field',
		    	));
		    	$wp_customize->add_control('yalatech_education_counter_section_title' .$i, array(
		    		'type' => 'text',
		    		'settings' => 'yalatech_education_counter_section_title' .$i,
		    		'section' => 'yalatech_education_front_page_counter_section',
		    		/* translators: %s: Title */
		    		'label' => sprintf(esc_html__( 'Skill %1$s Title', 'yalatech-education' ), $i),

		    	));


		    	$wp_customize->add_setting('yalatech_education_counter_section_number' .$i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => '',
		    		'sanitize_callback' => 'sanitize_textarea_field',
		    	));
		    	$wp_customize->add_control('yalatech_education_counter_section_number' .$i, array(
		    		'type' => 'number',
		    		'settings' => 'yalatech_education_counter_section_number' .$i,
		    		'section' => 'yalatech_education_front_page_counter_section',
		    		/* translators: %s: number */
		    		'label' => sprintf(esc_html__( 'Skill %1$s number', 'yalatech-education' ), $i),

		    	));

		    	$wp_customize->add_setting('yalatech_education_front_page_skill_icon_setting' . $i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => 'fas fa-user-graduate',
		    		'sanitize_callback' => 'sanitize_textarea_field',
		    	));

		    	$wp_customize->add_control('yalatech_education_front_page_skill_icon_setting' . $i, array(
		    		'type' => 'select',
		    		'settings' => 'yalatech_education_front_page_skill_icon_setting' . $i,
		    		'section' => 'yalatech_education_front_page_counter_section', 
		    		'label' => esc_html__('Icon', 'yalatech-education') . $i,
		    		'description' => esc_html__('Select Icon', 'yalatech-education' ) . $i,
		    		'choices' => array(
		    			'fas fa-user-graduate' 		=> esc_html__( 'Graduate Icon', 'yalatech-education' ),
		    			'fas fa-book' 				=> esc_html__( 'Book Icon', 'yalatech-education' ),
		    			'fas fa-graduation-cap' 	=> esc_html__( 'Graduation Cap Icon', 'yalatech-education' ),
		    			'fas fa-user-graduate' 		=> esc_html__( 'Graduate Icon', 'yalatech-education' ),
		    			'fas fa-school'				=> esc_html__( 'School Icon', 'yalatech-education' ),
		    			'fas fa-chalkboard-teacher'	=> esc_html__( 'Chalkboard Teacher Icon', 'yalatech-education' ),
		    			'fas fa-users' 				=> esc_html__( 'Users Icon', 'yalatech-education' ),
		    			'fas fa-university'			=> esc_html__( 'University Icon', 'yalatech-education' ),
		    			'fas fa-trophy'				=> esc_html__( 'Trophy Icon', 'yalatech-education' ),
		    			'fas fa-bus'				=> esc_html__( 'Bus Icon', 'yalatech-education' ),
		    			'fas fa-book-open'			=> esc_html__( 'Book Open Icon', 'yalatech-education' ),
		    			'fas fa-laptop'				=> esc_html__( 'Laptop Icon', 'yalatech-education' ),
		    			'fas fa-desktop'			=> esc_html__( 'Desktop Icon', 'yalatech-education' ),
		    			'fab fa-leanpub'			=> esc_html__( 'Copy Icon', 'yalatech-education' ),
		    			'fas fa-edit'				=> esc_html__( 'Writer Icon', 'yalatech-education' ),
		    		)					
		    	));

		    }

		    $wp_customize->add_setting('yalatech_education_counter_skill_image', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => get_stylesheet_directory_uri() . '/assets/images/page-bg.png',
		    	'sanitize_callback' => 'esc_url_raw',
		    ));

		    $wp_customize->add_control(new WP_Customize_Image_Control(
		    	$wp_customize,
		    	'yalatech_education_counter_skill_image',
		    	array(
		    		'label' => esc_html__('Select Background Image ', 'yalatech-education'),
		    		'section' => 'yalatech_education_front_page_counter_section',
		    		'settings' => 'yalatech_education_counter_skill_image',

		    	)
		    ));




		    /*Gallery Section*/

		    $wp_customize->add_section( 'yalatech_education_gallery_settings', array(
		    	'title'           => esc_html__('Gallery Section Settings', 'yalatech-education'),
		    	'priority'        => 75,
		    	'panel'			  => 'yalatech_education_theme_front_page_section'
		    ));


		     // enable field setting.
		    $wp_customize->add_setting('yalatech_education_options_gallery_section_enable', array(
		    	'default' => 1,
		    	'sanitize_callback' => 'esc_attr',
		    ));

			// enable field control.
		    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yalatech_education_options_gallery_section_enable', array(
		    	'label'    => esc_html__( 'Enable/Disable Section', 'yalatech-education' ),
		    	'section'  => 'yalatech_education_gallery_settings',
		    	'settings' => 'yalatech_education_options_gallery_section_enable',
		    	'type'     => 'checkbox',
		    	'priority'    => 10,
		    ) ) );

		    $wp_customize->add_setting('yalatech_education_gallery_section_title', array(
		    	'default'       =>      '',
		    	'sanitize_callback' => 'sanitize_text_field'
		    ));

		    $wp_customize->add_control('yalatech_education_gallery_section_title', array(
		    	'section'    => 'yalatech_education_gallery_settings',
		    	'label'      => esc_html__('Enter Gallery Main Title', 'yalatech-education'),
		    	'type'       => 'text'  
		    ));

		    $wp_customize->add_setting('education_web_gallery_section_subtitle', array(
		    	'default'       =>      '',
		    	'sanitize_callback' => 'sanitize_text_field'
		    ));

		    $wp_customize->add_control('education_web_gallery_section_subtitle', array(
		    	'section'    => 'yalatech_education_gallery_settings',
		    	'label'      => esc_html__('Enter Gallery Main SubTitle', 'yalatech-education'),
		    	'type'       => 'text'  
		    ));

		    $wp_customize->add_setting('yalatech_education_gallery_image_no_of_image', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => 3,
		    	'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    ));

		    $wp_customize->add_control('yalatech_education_gallery_image_no_of_image', array(
		    	'type' => 'number',
		    	'settings' => 'yalatech_education_gallery_image_no_of_image',
		    	'section' => 'yalatech_education_gallery_settings',
		    	'label' => esc_html__('Select No of Image (Refresh page once No. of Images selected)', 'yalatech-education'),

		    ));

		    
		    $no_of_image = get_theme_mod('yalatech_education_gallery_image_no_of_image', 3);

		    for ($i = 1; $i <= $no_of_image; $i++) {


		    	$wp_customize->add_setting( 'yalatech_education_gallery_image'  .$i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => '',
					'sanitize_callback' => 'sanitize_text_field' // Done
				) );


		    	$wp_customize->add_control(new WP_Customize_Image_Control(
		    		$wp_customize,
		    		'yalatech_education_gallery_image' .$i,
		    		array(
		    			'label' => esc_html__('Select Gallery Image ', 'yalatech-education') .$i,
		    			'section' => 'yalatech_education_gallery_settings',
		    			'settings' => 'yalatech_education_gallery_image' .$i,

		    		)
		    	));

		    }




		    /*testimonial section*/

		    $wp_customize->add_section('yalatech_education_front_page_testimonials', array(
		    	'priority' => 80,
		    	'panel' => 'yalatech_education_theme_front_page_section',
		    	'capability' => 'edit_theme_options',
		    	'title' => esc_html__('Testimonials', 'yalatech-education'),
		    	'description' => esc_html__('Manage Options Testimonials', 'yalatech-education'),
		    ));

		      // enable field setting.
		    $wp_customize->add_setting('yalatech_education_options_testimonials_section_enable', array(
		    	'default' => 1,
		    	'sanitize_callback' => 'esc_attr',
		    ));

			// enable field control.
		    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yalatech_education_options_testimonials_section_enable', array(
		    	'label'    => esc_html__( 'Enable/Disable Section', 'yalatech-education' ),
		    	'section'  => 'yalatech_education_front_page_testimonials',
		    	'settings' => 'yalatech_education_options_testimonials_section_enable',
		    	'type'     => 'checkbox',
		    	'priority'    => 10,
		    ) ) );

		    $wp_customize->add_setting('yalatech_education_theme_testimonials_title_setting', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => '',
		    	'sanitize_callback' => 'sanitize_textarea_field',
		    ));
		    $wp_customize->add_control('yalatech_education_theme_testimonials_title_setting', array(
		    	'type' => 'text',
		    	'settings' => 'yalatech_education_theme_testimonials_title_setting',
		    	'section' => 'yalatech_education_front_page_testimonials',
		    	'label' => esc_html__('Testimonial Title', 'yalatech-education'),

		    ));


		    $wp_customize->add_setting('yalatech_education_front_page_no_of_testimonial', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => 3,
		    	'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    ));

		    $wp_customize->add_control('yalatech_education_front_page_no_of_testimonial', array(
		    	'type' => 'number',
		    	'settings' => 'yalatech_education_front_page_no_of_testimonial',
		    	'section' => 'yalatech_education_front_page_testimonials',
		    	'label' => esc_html__('Select No of Testimonial (Refresh page once No. of Testimonial is selected)', 'yalatech-education'),

		    ));

		    $testimonial = get_theme_mod('yalatech_education_front_page_no_of_testimonial', 3);


		    /*droup down pages for Testimonial section*/


		    for ($i = 1; $i <= $testimonial; $i++) {

		    	$wp_customize->add_setting('yalatech_education_front_page_dropdownpages_testimonial_setting_id' . $i, array(
		    		'capability' => 'edit_theme_options',
		    		'default' => 3,
		    		'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    	));

		    	$wp_customize->add_control('yalatech_education_front_page_dropdownpages_testimonial_setting_id' . $i, array(
		    		'type' => 'dropdown-pages',
		    		'settings' => 'yalatech_education_front_page_dropdownpages_testimonial_setting_id' . $i,
		    		'section' => 'yalatech_education_front_page_testimonials', 
		    		'label' => esc_html__('Select Testimonial page', 'yalatech-education') . $i,
		    		'description' => esc_html__('Select page for front page Testimonial', 'yalatech-education') . $i,

		    	));

		    	$wp_customize->add_setting( 'yalatech_education_front_page_testimonial_post'.$i, array(
		    		'capability'     => 'edit_theme_options',
		    		'default'        => '',
		    		'sanitize_callback' => 'sanitize_text_field',
		    	) );

		    	$wp_customize->add_control( 'yalatech_education_front_page_testimonial_post'.$i, array(
		    		'type'         => 'text',
		    		'settings'     => 'yalatech_education_front_page_testimonial_post'.$i,
		    		'section'      => 'yalatech_education_front_page_testimonials',
		    		/* translators: %s: Post */
		    		'label'        => sprintf(esc_html__( 'Testimonial %1$s Post', 'yalatech-education' ), $i),
		    		
		    	) );
		    }

		    $wp_customize->add_setting('yalatech_education_testimonial_background_image', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => get_stylesheet_directory_uri() . '/assets/images/page-bg.png',
		    	'sanitize_callback' => 'esc_url_raw',
		    ));

		    $wp_customize->add_control(new WP_Customize_Image_Control(
		    	$wp_customize,
		    	'yalatech_education_testimonial_background_image',
		    	array(
		    		'label' => esc_html__('Select Background Image ', 'yalatech-education'),
		    		'section' => 'yalatech_education_front_page_testimonials',
		    		'settings' => 'yalatech_education_testimonial_background_image',

		    	)
		    ));
		    $wp_customize->add_section('yalatech_education_front_page_new_event', array(
		    	'priority' => 85,
		    	'panel' => 'yalatech_education_theme_front_page_section',
		    	'capability' => 'edit_theme_options',
		    	'title' => esc_html__('News Event', 'yalatech-education'),
		    	'description' => esc_html__('Manage Options News & Event', 'yalatech-education'),
		    ));


		         // enable field setting.
		    $wp_customize->add_setting('yalatech_education_options_news_event_section_enable', array(
		    	'default' => 1,
		    	'sanitize_callback' => 'esc_attr',
		    ));

			// enable field control.
		    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'yalatech_education_options_news_event_section_enable', array(
		    	'label'    => esc_html__( 'Enable/Disable Section', 'yalatech-education' ),
		    	'section'  => 'yalatech_education_front_page_new_event',
		    	'settings' => 'yalatech_education_options_news_event_section_enable',
		    	'type'     => 'checkbox',
		    	'priority'    => 10,
		    ) ) );

		    $wp_customize->add_setting('yalatech_education_theme_news_event_title_setting', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => '',
		    	'sanitize_callback' => 'sanitize_textarea_field',
		    ));
		    $wp_customize->add_control('yalatech_education_theme_news_event_title_setting', array(
		    	'type' => 'text',
		    	'settings' => 'yalatech_education_theme_news_event_title_setting',
		    	'section' => 'yalatech_education_front_page_new_event',
		    	'label' => esc_html__('News & Event Title', 'yalatech-education'),

		    ));

		    $wp_customize->add_setting('yalatech_education_theme_news_event_sub_title_setting', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => '',
		    	'sanitize_callback' => 'sanitize_textarea_field',
		    ));
		    $wp_customize->add_control('yalatech_education_theme_news_event_sub_title_setting', array(
		    	'type' => 'text',
		    	'settings' => 'yalatech_education_theme_news_event_sub_title_setting',
		    	'section' => 'yalatech_education_front_page_new_event',
		    	'label' => esc_html__('News & Event Sub Title', 'yalatech-education'),

		    ));

		    $wp_customize->add_setting('yalatech_education_theme_no_of_news_event', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => 3,
		    	'sanitize_callback' => 'yalatech_education_sanitize_integer',
		    ));
		    $wp_customize->add_control('yalatech_education_theme_no_of_news_event', array(
		    	'type' => 'number',
		    	'settings' => 'yalatech_education_theme_no_of_news_event',
		    	'section' => 'yalatech_education_front_page_new_event',
		    	'label' => esc_html__('No of Events', 'yalatech-education'),

		    ));

		    $wp_customize->add_setting('yalatech_education_front_page_news_categories', array(
		    	'capability' => 'edit_theme_options',
		    	'default' => '',
		    	'sanitize_callback' => 'yalatech_education_sanitize_multiple_dropdown_taxonomies',
		    ));


		    $wp_customize->add_control( new Yalatech_Education_Dropdown_Taxonomies_Control(
		    	$wp_customize,
		    	'yalatech_education_front_page_news_categories',
		    	array(
		    		'label'      => __( 'Select Category Hold down the Ctrl (windows) / Command (Mac) button to select multiple options. ', 'yalatech-education' ),
		    		'section'    => 'yalatech_education_front_page_new_event',
		    		'settings'   => 'yalatech_education_front_page_news_categories',
		    		'multiple'   => true,
		    	)
		    ) );



		}

		add_action('customize_register', 'yalatech_education_customizer');

