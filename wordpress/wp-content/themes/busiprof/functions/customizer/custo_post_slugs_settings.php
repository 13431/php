<?php 
function busiprof_post_slugs_settings( $wp_customize ){

	/* Post slug section */
	$wp_customize->add_section( 'custom_post_slug_section' , array(
		'title'      => __("SEO Friendly URL","busiprof"),
		'priority'       => 128,
   	) );
	
		//Portfolio Pro
		class busiprof_Customize_slug_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e('Want to add a custom post type slug? Then','busiprof'); ?><a href="<?php echo esc_url( 'http://www.webriti.com/busiprof' ); ?>" target="_blank"><?php _e('Upgrade to Pro','busiprof'); ?> </a>  
			<?php
			}
		}
		
		
		$wp_customize->add_setting( 'slug_upgrade', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new busiprof_Customize_slug_upgrade(
			$wp_customize,
			'slug_upgrade',
				array(
					'section'				=> 'custom_post_slug_section',
					'settings'				=> 'slug_upgrade',
				)
			)
		);
		
		
		// Projects Slug
		$wp_customize->add_setting( 'busiprof_pro_theme_options[busiprof_project_slug]', array( 'default' => 'busiprof-project' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[busiprof_project_slug]', 
			array(
				'label'    => __( 'Projects slug', 'busiprof' ),
				'section'  => 'custom_post_slug_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));
		
		// Portfolio Slug
		$wp_customize->add_setting( 'busiprof_pro_theme_options[busiprof_portfolio_slug]', array( 'default' => 'project-category' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[busiprof_portfolio_slug]', 
			array(
				'label'    => __( "Project’s category slug ", "busiprof" ),
				'section'  => 'custom_post_slug_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));
		
		
		// Team Slug
		$wp_customize->add_setting( 'busiprof_pro_theme_options[busiprof_team_slug]', array( 'default' => 'busiprof-team' , 'type'=>'option', 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control(	'busiprof_pro_theme_options[busiprof_team_slug]', 
			array(
				'label'    => __( 'Team slug', 'busiprof' ),
				'section'  => 'custom_post_slug_section',
				'type'     => 'text',
				'input_attrs' => array('disabled' => 'disabled'),
		));
		
class WP_amenities_Customize_Control extends WP_Customize_Control {
    public $type = 'new_menu';
    /**
    * Render the control's content.
    */
    public function render_content() {
    ?>
    <p><?php _e("After changing the slug, please don't forget to save the permalinks. Without saving them, the old permalinks will not be updated.", "busiprof" ); ?></p>
    <?php
    }
}
		$wp_customize->add_setting( 'custom_label_slug' ,
			array(
				'capability'     => 'edit_theme_options',
				'type' => 'option',
				'sanitize_callback' => 'sanitize_text_field'
			)	
		);
		$wp_customize->add_control( new WP_amenities_Customize_Control( $wp_customize, 'custom_label_slug', array(	
				'section' => 'custom_post_slug_section',
			))
		);
		
}
add_action( 'customize_register', 'busiprof_post_slugs_settings' );