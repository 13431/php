<?php 
function busiprof_home_page_manager_settings( $wp_customize ){
	
	/* section manager section */
	
	$wp_customize->add_section( 'homepage_layout_manager_section' , 
	
	array(
	
		'title'      => __('Theme Layout Manager', 'busiprof'),
		
		'priority'   => 130,
		
   	) );
	
	
		//Layout Pro
		class busiprof_Customize_section_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e('Want to change the Homepage layout section? Then','busiprof'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/busiprof' ); ?>" target="_blank"><?php _e('Upgrade to Pro','busiprof'); ?> </a>  
			<?php
			}
		}
		
		
		$wp_customize->add_setting( 'layout_upgrade', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new busiprof_Customize_section_upgrade(
			$wp_customize,
			'layout_upgrade',
				array(
					'section'				=> 'homepage_layout_manager_section',
					'settings'				=> 'layout_upgrade',
				)
			)
		);
		
		// section 1

		$wp_customize->add_setting( 'busiprof_pro_theme_options[busi_layout_section1]', array( 'default' => 'slider' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field'  ) );

		$wp_customize->add_control(	'busiprof_pro_theme_options[busi_layout_section1]', 

			array(

				'label'    => __( 'Section 1', 'busiprof' ),

				'section'  => 'homepage_layout_manager_section',

				'type'     => 'select',

				'choices' => array(

					'slider'=>'slider',

				)

		));

		

		// section 2

		$wp_customize->add_setting( 'busiprof_pro_theme_options[busi_layout_section2]', array( 'default' => 'Service Section' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );

		$wp_customize->add_control(	'busiprof_pro_theme_options[busi_layout_section2]', 

			array(

				'label'    => __( 'Section 2', 'busiprof' ),

				'section'  => 'homepage_layout_manager_section',

				'type'     => 'select',

				'choices' => array(
					'Service Section'=>'Service Section',
				)

		));

		

		// section 3

		$wp_customize->add_setting( 'busiprof_pro_theme_options[busi_layout_section3]', array( 'default' => 'Project Section' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );

		$wp_customize->add_control(	'busiprof_pro_theme_options[busi_layout_section3]', 

			array(

				'label'    => __( 'Section 3', 'busiprof' ),

				'section'  => 'homepage_layout_manager_section',

				'type'     => 'select',

				'choices' => array(
				'Project Section'=>'Project Section',
				)
		));

		

		// section 4

		$wp_customize->add_setting( 'busiprof_pro_theme_options[busi_layout_section4]', array( 'default' => 'Testimonials section' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );

		$wp_customize->add_control(	'busiprof_pro_theme_options[busi_layout_section4]', 

			array(

				'label'    => __( 'Section 4', 'busiprof' ),

				'section'  => 'homepage_layout_manager_section',

				'type'     => 'select',

				'choices' => array(
					'Testimonials section'=>'Testimonials section',
				)
		));

		

		// section 5

		$wp_customize->add_setting( 'busiprof_pro_theme_options[busi_layout_section5]', array( 'default' => 'Client strip' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );

		$wp_customize->add_control(	'busiprof_pro_theme_options[busi_layout_section5]', 

			array(

				'label'    => __( 'Section 5', 'busiprof' ),

				'section'  => 'homepage_layout_manager_section',

				'type'     => 'select',

				'choices' => array(
					'Client strip'=>'Client strip',

				)

		));
}
add_action( 'customize_register', 'busiprof_home_page_manager_settings' );