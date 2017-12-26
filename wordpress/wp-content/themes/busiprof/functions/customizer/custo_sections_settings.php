<?php
$repeater_path = trailingslashit( get_template_directory() ) . '/functions/customizer-repeater/functions.php';
if ( file_exists( $repeater_path ) ) {
require_once( $repeater_path );
}
function busiprof_sections_settings( $wp_customize ){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? true : false;

/* Sections Settings */
	$wp_customize->add_panel( 'section_settings', array(
		'priority'       => 126,
		'capability'     => 'edit_theme_options',
		'title'      => __('Homepage section settings', 'busiprof'),
	) );
	
	/* Banner strip section */
	$wp_customize->add_section( 'bannerstrip_section' , array(
		'title'      => __('Infobar settings', 'busiprof'),
		'panel'  => 'section_settings',
		'priority'   => 0,
   	) );
	
		// Enable banner strip
		$wp_customize->add_setting( 'busiprof_theme_options[home_banner_strip_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_theme_options[home_banner_strip_enabled]' , array(
				'label'    => __('Enable Infobar', 'busiprof' ),
				'section'  => 'bannerstrip_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));
		
		// Banner strip text
		$wp_customize->add_setting( 'busiprof_theme_options[slider_head_title]', 
		array( 'default' => __('Busiprof: the perfect WordPress theme for an app and web developer','busiprof') , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_theme_options[slider_head_title]', 
			array(
				'label'    => __( 'Infobar text', 'busiprof' ),
				'section'  => 'bannerstrip_section',
				'type'     => 'textarea',
		));
		
	/* Slider Section */
	$wp_customize->add_section( 'slider_section' , array(
		'title'      => __('Slider settings', 'busiprof'),
		'panel'  => 'section_settings',
		'priority'   => 1,
   	) );
		
		// Enable slider
		$wp_customize->add_setting( 'busiprof_theme_options[home_page_slider_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_theme_options[home_page_slider_enabled]' , array(
				'label'    => __('Enable slider', 'busiprof' ),
				'section'  => 'slider_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));

		
		//Slider Setting
		$wp_customize->add_setting( 'busiprof_theme_options[slider_image]',array('default' => get_template_directory_uri().'/images/default/home_slide.jpg','sanitize_callback' => 'esc_url_raw','type' => 'option',
		));
 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'busiprof_theme_options[slider_image]',
				array(
					'type'        => 'upload',
					'label' => __('Image','busiprof'),
					'section' => 'example_section_one',
					'settings' =>'busiprof_theme_options[slider_image]',
					'section' => 'slider_section',
					
				)
			)
		);
		
		//Slider Title
		$wp_customize->add_setting(
		'busiprof_theme_options[caption_head]', array(
			'default'        => __('Responsive WP theme','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[caption_head]', array(
			'label'   => __('Title', 'busiprof'),
			'section' => 'slider_section',
			'type' => 'text',
		));
		
		//Slider sub title
		$wp_customize->add_setting(
		'busiprof_theme_options[caption_text]', 
			array(
			'default'        => __('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[caption_text]', array(
			'label'   => __('Description', 'busiprof'),
			'section' => 'slider_section',
			'type' => 'textarea',
		));
		
		
		
		//Slider read more button
		$wp_customize->add_setting(
		'busiprof_theme_options[readmore_text]', 
			array(
			'default'        => __('Read more','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[readmore_text]', array(
			'label'   => __('Button Text', 'busiprof'),
			'section' => 'slider_section',
			'type' => 'text',
		));
		
		
		//Slider read more button link
		$wp_customize->add_setting(
		'busiprof_theme_options[readmore_text_link]', 
			array(
			'default'        => __('#','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[readmore_text_link]', array(
			'label'   => __('Button Link', 'busiprof'),
			'section' => 'slider_section',
			'type' => 'text',
		));
		
		
		//Slider read more button target
		$wp_customize->add_setting(
		'busiprof_theme_options[readmore_target]', 
			array(
			'default'        => false,
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[readmore_target]', array(
			'label'   => __('Open link in new tab', 'busiprof'),
			'section' => 'slider_section',
			'type' => 'checkbox',
		));
		
		
	class WP_slider_pro_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
     <div class="pro-vesrion">
	 <P><?php _e('To add more slider and animation effects click to upgrade to pro','busiprof');?></P>
	 </div>
	  <div class="pro-box">
	 <a href="<?php echo esc_url('http://webriti.com/busiprof/');?>" class="service" id="review_pro" target="_blank"><?php _e( 'Upgrade to Pro','busiprof' ); ?></a>
	 <div>
    <?php
    }
}

	$wp_customize->add_setting(
		'add_more_slider',
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new WP_slider_pro_Customize_Control( $wp_customize, 'add_more_slider', array(	
			'section' => 'slider_section',
			'setting' => 'add_more_slider',
	
	)));
	
	
	
	/* Services section */
	$wp_customize->add_section( 'services_section' , array(
		'title'    => esc_html__( 'Service settings', 'busiprof' ),
		'panel'  => 'section_settings',
		'priority'   => 3,
   	) );
	
	
	
	
	// Enable service more btn
		$wp_customize->add_setting( 'busiprof_theme_options[enable_services]' , array( 'default' => 'on' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_theme_options[enable_services]' , array(
				'label'    => __( 'Enable Services on homepage', 'busiprof' ),
				'section'  => 'services_section',
				'type'     => 'radio',
				'priority'   => 1,
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));
		
		
		//Service Heading One
		$wp_customize->add_setting(
		'busiprof_theme_options[service_heading_one]',
		array(
			'default' => __('Awesome Services','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		)	
		);
		$wp_customize->add_control(
		'busiprof_theme_options[service_heading_one]',
		array(
			'label' => __('Title','busiprof'),
			'section' => 'services_section',
			'type' => 'text',
			'priority'   => 2,
		)
		);
		
		//Service Tagline Description
		$wp_customize->add_setting(
		'busiprof_theme_options[service_tagline]',
		array(
			'default' => __('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','busiprof'),
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		)	
		);
		$wp_customize->add_control(
		'busiprof_theme_options[service_tagline]',
		array(
			'label' => __('Description','busiprof'),
			'section' => 'services_section',
			'type' => 'textarea',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'priority'   => 3,
		)
		);	
	
	
		
		

		if ( class_exists( 'Busiprof_Repeater' ) ) {
			$wp_customize->add_setting( 'busiprof_service_content', array(
				'sanitize_callback' => 'busiprof_repeater_sanitize',
			) );

			$wp_customize->add_control( new Busiprof_Repeater( $wp_customize, 'busiprof_service_content', array(
				'label'                             => esc_html__( 'Service content', 'busiprof' ),
				'section'                           => 'services_section',
				'priority'                          => 4,
				'add_field_label'                   => esc_html__( 'Add new Service', 'busiprof' ),
				'item_name'                         => esc_html__( 'Service', 'busiprof' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_color_control' => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}
		
			
		// Services Read More Text
		$wp_customize->add_setting( 'busiprof_theme_options[service_button_value]', 
		array( 'default' => __('More Services','busiprof') , 'type'=>'option', 'sanitize_callback' => 'busiprof_input_field_sanitize_text' ) );
		$wp_customize->add_control(	'busiprof_theme_options[service_button_value]', 
			array(
				'label'    => __('Button Text', 'busiprof' ),
				'section'  => 'services_section',
				'type'     => 'text',
				'priority'   => 5,
		));
		
		// Services Read More Button URL
		$wp_customize->add_setting( 'busiprof_theme_options[service_link_btn]', array( 'default' => '#' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_theme_options[service_link_btn]', 
			array(
				'label'    => __('Button Link', 'busiprof' ),
				'section'  => 'services_section',
				'type'     => 'text',
				'priority'   => 6,
		));
		
		
		//Pro Service	
		class WP_service_pro_Customize_Control extends WP_Customize_Control {
		public $type = 'new_menu';
		/**
		* Render the control's content.
		*/
		public function render_content() {
		?>
		 <div class="pro-vesrion">
		 <P><?php _e('Want to add more Services? Then upgrade to Pro!','busiprof');?></P>
		 </div>
		  <div class="pro-box">
		 <a href="<?php echo esc_url('http://webriti.com/busiprof/');?>" class="service" id="review_pro" target="_blank"><?php _e( 'Upgrade to Pro','busiprof' ); ?></a>
		 <div>
		<?php
		}
	}

		$wp_customize->add_setting(
			'add_more_service',
			array(
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			)	
		);
		$wp_customize->add_control( new WP_service_pro_Customize_Control( $wp_customize, 'add_more_service', array(	
				'section' => 'services_section',
				'setting' => 'add_more_service',
		
		)));
		
		
	//Projects Setting
	
	$wp_customize->add_section( 'projects_settings' , array(
		'title'      => __('Project settings', 'busiprof'),
		'panel'  => 'section_settings',
		'priority'   => 4,
   	) );
	
	
		// Enable Projects
		$wp_customize->add_setting( 'busiprof_theme_options[enable_projects]' , array( 'default' => 'on' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_theme_options[enable_projects]' , array(
				'label'    => __( 'Enable Home Project section', 'busiprof' ),
				'section'  => 'projects_settings',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));
		
		//Projects Heading One
		$wp_customize->add_setting(
		'busiprof_theme_options[protfolio_tag_line]', array(
			'default'        => __('Recent Projects','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[protfolio_tag_line]', array(
			'label'   => __('Title', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Projects Heading two
		$wp_customize->add_setting(
		'busiprof_theme_options[protfolio_description_tag]', array(
			'default'        => __('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[protfolio_description_tag]', array(
			'label'   => __('Description', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		
		//Project One Title
		$wp_customize->add_setting(
		'busiprof_theme_options[project_title_one]', array(
			'default'        => __('Business cards','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_title_one]', array(
			'label'   => __('Project One', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Projects one image
		$wp_customize->add_setting( 'busiprof_theme_options[project_thumb_one]',array('default' => get_template_directory_uri().'/images/default/rec_project.jpg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'busiprof_theme_options[project_thumb_one]',
				array(
					'label' => __('Image','busiprof'),
					'section' => 'example_section_one',
					'settings' =>'busiprof_theme_options[project_thumb_one]',
					'section' => 'projects_settings',
					'type' => 'upload',
				)
			)
		);
		
		
		//Project One Description
		$wp_customize->add_setting(
		'busiprof_theme_options[project_text_one]', array(
			'default'        => __('Graphic design & web design','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_text_one]', array(
			'label'   => __('Description', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Project Two Title
		$wp_customize->add_setting(
		'busiprof_theme_options[project_title_two]', array(
			'default'        => __('Business cards','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_title_two]', array(
			'label'   => __('Project Two', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Projects Two image
		$wp_customize->add_setting( 'busiprof_theme_options[project_thumb_two]',array('default' => get_template_directory_uri().'/images/default/rec_project2.jpg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'busiprof_theme_options[project_thumb_two]',
				array(
					'label' => __('Image','busiprof'),
					'section' => 'example_section_one',
					'settings' =>'busiprof_theme_options[project_thumb_two]',
					'section' => 'projects_settings',
					'type' => 'upload',
				)
			)
		);
		
		
		
		//Project Two Description
		$wp_customize->add_setting(
		'busiprof_theme_options[project_text_two]', array(
			'default'        => __('Graphic design & web design','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_text_two]', array(
			'label'   => __('Description', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Project Three Title
		$wp_customize->add_setting(
		'busiprof_theme_options[project_title_three]', array(
			'default'        => __('Business cards','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_title_three]', array(
			'label'   => __('Project Three', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Projects Three image
		$wp_customize->add_setting( 'busiprof_theme_options[project_thumb_three]',array('default' => get_template_directory_uri().'/images/default/rec_project3.jpg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'busiprof_theme_options[project_thumb_three]',
				array(
					'label' => __('Image','busiprof'),
					'settings' =>'busiprof_theme_options[project_thumb_three]',
					'section' => 'projects_settings',
					'type' => 'upload',
				)
			)
		);
		
		
		
		//Project three Description
		$wp_customize->add_setting(
		'busiprof_theme_options[project_text_three]', array(
			'default'        => __('Graphic design & web design','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_text_three]', array(
			'label'   => __('Description', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Project Four Title
		$wp_customize->add_setting(
		'busiprof_theme_options[project_title_four]', array(
			'default'        => __('Business cards','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_title_four]', array(
			'label'   => __('Project Four', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Projects four image
		$wp_customize->add_setting( 'busiprof_theme_options[project_thumb_four]',array('default' => get_template_directory_uri().'/images/default/rec_project4.jpg',
		'type' => 'option','sanitize_callback' => 'esc_url_raw',));
	 
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'busiprof_theme_options[project_thumb_four]',
				array(
					'label' => __('Image','busiprof'),
					'settings' =>'busiprof_theme_options[project_thumb_four]',
					'section' => 'projects_settings',
					'type' => 'upload',
				)
			)
		);
		
		
		//Project Four Description
		$wp_customize->add_setting(
		'busiprof_theme_options[project_text_four]', array(
			'default'        => __('Graphic design & web design','busiprof'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'busiprof_input_field_sanitize_text',
			'type' => 'option',
		));
		$wp_customize->add_control('busiprof_theme_options[project_text_four]', array(
			'label'   => __('Description', 'busiprof'),
			'section' => 'projects_settings',
			'type' => 'text',
		));
		
		
		//Upgrade to Pro
		class WP_Projects_Customize_Control extends WP_Customize_Control {
		public $type = 'new_menu';
		/**
		* Render the control's content.
		*/
		public function render_content() {
		?>
		 <div class="pro-vesrion">
		 <P><?php _e('Want to add more projects and categorisations? Then upgrade to Pro.','busiprof');?></P>
		 </div>
		  <div class="pro-box">
		 <a href="<?php echo esc_url('http://webriti.com/busiprof/');?>" class="service" id="review_pro" target="_blank"><?php _e('Upgrade to Pro','busiprof' ); ?></a>
		 <div>
		<?php
		}
		}

		$wp_customize->add_setting(
			'Projects_pro',
			array(
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			)	
		);
		$wp_customize->add_control( new WP_Projects_Customize_Control( $wp_customize, 'Projects_pro', array(	
				'section' => 'projects_settings',
				'setting' => 'Projects_pro',
			))
		);
		
		
		//Recent Blog Setting
		$wp_customize->add_section( 'recent_blog_settings' , array(
		'title'      => __('Recent Blog setting', 'busiprof'),
		'panel'  => 'section_settings',
		'priority'   => 5,
		) );
		
		
		// Enable Recent Blog
		$wp_customize->add_setting( 'busiprof_theme_options[home_recentblog_section_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_theme_options[home_recentblog_section_enabled]' , array(
				'label'    => __( 'Enable Home Blog section', 'busiprof' ),
				'section'  => 'recent_blog_settings',
				'type'     => 'radio',
				'choices' => array(
					'on'=>__('ON', 'busiprof'),
					'off'=>__('OFF', 'busiprof')
				)
		));
		
		// Enable Recent Blog
		$wp_customize->add_setting( 'busiprof_theme_options[home_recentblog_meta_enable]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field'  ) );
		$wp_customize->add_control(	'busiprof_theme_options[home_recentblog_meta_enable]' , array(
				'label'    => __( 'Enable Home Blog meta', 'busiprof' ),
				'section'  => 'recent_blog_settings',
				'type'     => 'radio',
				'choices' => array(
					'on'=>__('ON', 'busiprof'),
					'off'=>__('OFF', 'busiprof')
				)
		));	
		
		
		// blog section title
		$wp_customize->add_setting( 'busiprof_theme_options[recent_blog_title]', array( 'default' => __('Recent Blog', 'busiprof' ) , 'type'=>'option', 'sanitize_callback' => 'busiprof_input_field_sanitize_text'  ) );
		$wp_customize->add_control(	'busiprof_theme_options[recent_blog_title]', 
			array(
				'label'    => __( 'Title', 'busiprof' ),
				'section'  => 'recent_blog_settings',
				'type'     => 'text',
		));
		
		// blog section desc
		$wp_customize->add_setting( 'busiprof_theme_options[recent_blog_description]', array( 'default' => __('We are a group of passionate designers & developers', 'busiprof' ) , 'type'=>'option', 'sanitize_callback' => 'busiprof_input_field_sanitize_text'  ) );
		$wp_customize->add_control(	'busiprof_theme_options[recent_blog_description]', 
			array(
				'label'    => __( 'Description', 'busiprof' ),
				'section'  => 'recent_blog_settings',
				'type'     => 'textarea',
		));
		
		
		//Testimonial Section
			
	$wp_customize->add_section( 'testimonial_settings' , array(
		'title'      => __('Testimonial settings', 'busiprof'),
		'panel'  => 'section_settings',
		'priority'   => 6,
   	) );
	
		
		$wp_customize->add_setting( 'busiprof_theme_options[home_testimonial_section_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field'  ) );
		$wp_customize->add_control(	'busiprof_theme_options[home_testimonial_section_enabled]' , array(
				'label'    => __( 'Enable Home Testimonial section', 'busiprof' ),
				'section'  => 'testimonial_settings',
				'type'     => 'radio',
				'choices' => array(
					'on'=>__('ON', 'busiprof'),
					'off'=>__('OFF', 'busiprof')
				)
		));
		
		// testmonial section title
		$wp_customize->add_setting( 'busiprof_theme_options[testimonials_title]', 
		array( 'default' => __('<b>Our</b> Testimonials', 'busiprof' ) , 'type'=>'option', 'sanitize_callback' => 'busiprof_input_field_sanitize_text'  ) );
		$wp_customize->add_control(	'busiprof_theme_options[testimonials_title]', 
			array(
				'label'    => __( 'Title', 'busiprof' ),
				'section'  => 'testimonial_settings',
				'type'     => 'text',
		));
		
		// testmonial section desc
		$wp_customize->add_setting( 'busiprof_theme_options[testimonials_text]', array( 'default' => __('We are a group of passionate designers & developers', 'busiprof' ) , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field'  ) );
		$wp_customize->add_control(	'busiprof_theme_options[testimonials_text]', 
			array(
				'label'    => __( 'Description', 'busiprof' ),
				'section'  => 'testimonial_settings',
				'type'     => 'textarea',
		));	
		
		if ( class_exists( 'Busiprof_Repeater' ) ) {
			$wp_customize->add_setting( 'busiprof_testimonial_content', array(
			'sanitize_callback' => 'busiprof_repeater_sanitize',
			) );

			$wp_customize->add_control( new Busiprof_Repeater( $wp_customize, 'busiprof_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial content', 'busiprof' ),
				'section'                           => 'testimonial_settings',
				'add_field_label'                   => esc_html__( 'Add new Testimonial', 'busiprof' ),
				'item_name'                         => esc_html__( 'Testimonial', 'busiprof' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				'customizer_repeater_designation_control' => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}
		
		
		/* Client Slider Section */
	$wp_customize->add_section( 'clientslider_section' , array(
		'title'      => __('Client Slider setting', 'busiprof'),
		'panel'  => 'section_settings',
		'priority'   => 7,
   	) );
	
		
		
		//Client Pro
		class busiprof_Customize_client_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e('Want to add a Client section with slider animations? Then','busiprof'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/busiprof' ); ?>" target="_blank">
			<?php _e('Upgrade to Pro','busiprof'); ?> </a>  
			<?php
			}
		}
		
		
		$wp_customize->add_setting( 'client_upgrade', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new busiprof_Customize_client_upgrade(
			$wp_customize,
			'client_upgrade',
				array(
					'section'				=> 'clientslider_section',
					'settings'				=> 'client_upgrade',
				)
			)
		);
		
		
		
		// Enable Client Strip
		$wp_customize->add_setting( 'busiprof_pro_theme_options[home_client_section_enabled]' , array( 'default' => 'on' , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field',  ) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[home_client_section_enabled]' , array(
				'label'    => __('Enable Home Client section', 'busiprof' ),
				'section'  => 'clientslider_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>'ON',
					'off'=>'OFF'
				)
		));	
	
	
		// Client section title
		$wp_customize->add_setting( 'busiprof_pro_theme_options[client_title]', array( 'sanitize_callback' => 'sanitize_text_field', 'default' => __('Meet our clients','busiprof') , 'type'=>'option',) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[client_title]', 
			array(
				'label'    => __( 'Title', 'busiprof' ),
				'section'  => 'clientslider_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));
		
		
		// Client section Description
		$wp_customize->add_setting( 'busiprof_pro_theme_options[client_desc]', array( 'sanitize_callback' => 'sanitize_text_field', 'default' => __('We are a group of passionate designers and developers who really love creating awesome WordPress themes & giving support.','busiprof') , 'type'=>'option' ) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[client_desc]', 
			array(
				'label'    => __('Description', 'busiprof' ),
				'section'  => 'clientslider_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));
		
		// client to show
		$wp_customize->add_setting( 'busiprof_pro_theme_options[client_strip_total]', array( 'default' => 5 , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field', ) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[client_strip_total]', 
			array(
				'label'    => __('Number of shown clients', 'busiprof' ),
				'section'  => 'clientslider_section',
				'type'     => 'select',
				'choices'=>array(
					'5'=>'5',
				)
		));
		
		// Client Strip slide Speed
		$wp_customize->add_setting( 'busiprof_pro_theme_options[client_strip_slide_speed]', array( 'default' => 2000 , 'type' => 'option', 'sanitize_callback' => 'sanitize_text_field', ) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[client_strip_slide_speed]', 
			array(
				'label'    => __('Animation speed', 'busiprof' ),
				'section'  => 'clientslider_section',
				'type'     => 'select',
				'choices' => array(
					'2000'=>'2.0',
				)
		));
		
		//link
		class WP_client_Customize_Control extends WP_Customize_Control {
		public $type = 'new_menu';
		/**
		* Render the control's content.
		*/
		public function render_content() {
		?>
		<a href="#" class="button"><?php _e('Click here to add client','busiprof' ); ?></a>
		<?php
		}
	}

	$wp_customize->add_setting(
		'pro_cleint',
		array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)	
	);
	$wp_customize->add_control( new WP_client_Customize_Control( $wp_customize, 'pro_cleint', array(	
			'section' => 'clientslider_section',
		))
	);
		
		
		
		
		
		function busiprof_input_field_sanitize_text( $input ) 
		{
		return wp_kses_post( force_balance_tags( $input ) );
		}
		function busiprof_input_field_sanitize_html( $input ) 
		{
		return force_balance_tags( $input );
		}	
		
}
add_action( 'customize_register', 'busiprof_sections_settings' );


/**
 * Add selective refresh for Front page section section controls.
 */
function busiprof_register_home_section_partials( $wp_customize ){

$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[slider_head_title]', array(
		'selector'            => '.header-title h2',
		'settings'            => 'busiprof_theme_options[slider_head_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[caption_head]', array(
		'selector'            => '.slide-caption h2',
		'settings'            => 'busiprof_theme_options[caption_head]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[caption_text]', array(
		'selector'            => '.slide-caption p',
		'settings'            => 'busiprof_theme_options[caption_text]',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_heading_one]', array(
		'selector'            => '.service .section-title .section-heading',
		'settings'            => 'busiprof_theme_options[service_heading_one]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_tagline]', array(
		'selector'            => '.service .section-title p',
		'settings'            => 'busiprof_theme_options[service_tagline]',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_icon_one]', array(
		'selector'            => '.service #service_content',
		'settings'            => 'busiprof_theme_options[service_icon_one]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[service_button_value]', array(
		'selector'            => '.services_more_btn',
		'settings'            => 'busiprof_theme_options[service_button_value]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[protfolio_tag_line]', array(
		'selector'            => '.portfolio .section-title h1',
		'settings'            => 'busiprof_theme_options[protfolio_tag_line]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[protfolio_description_tag]', array(
		'selector'            => '.portfolio .section-title p',
		'settings'            => 'busiprof_theme_options[protfolio_description_tag]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[project_title_one]', array(
		'selector'            => '.portfolio #myTabContent',
		'settings'            => 'busiprof_theme_options[project_title_one]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[testimonials_title]', array(
		'selector'            => '.testimonial-scroll .section-heading',
		'settings'            => 'busiprof_theme_options[testimonials_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[testimonials_text]', array(
		'selector'            => '.testimonial-scroll .section-title p',
		'settings'            => 'busiprof_theme_options[testimonials_text]',
	
	) );
	
	
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[recent_blog_title]', array(
		'selector'            => '.home-post-latest .section-heading',
		'settings'            => 'busiprof_theme_options[recent_blog_title]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[recent_blog_description]', array(
		'selector'            => '.home-post-latest .section-title p',
		'settings'            => 'busiprof_theme_options[recent_blog_description]',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'busiprof_theme_options[readmore_text]', array(
		'selector'            => '.slider .flex-btn',
		'settings'            => 'busiprof_theme_options[readmore_text]',
	
	) );
	
}
add_action( 'customize_register', 'busiprof_register_home_section_partials' );