<?php 
/* 	
* Template Name: Home
*/
$busiprof_theme_options=theme_setup_data();
  $is_front_page = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), $busiprof_theme_options );
  
  if (  $is_front_page['front_page'] != 'yes' ) {
  get_template_part('index');
  }
  else {	
  		get_header();
  $current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), $busiprof_theme_options );
  		?>
<!-- Slider Section of Index Page -->
<?php 
if($current_options['home_page_slider_enabled']=="on"){
$busiprof_slide_content = get_theme_mod('busiprof_slider_content');
	if(!empty($busiprof_slide_content)){
		get_template_part('index', 'slider') ;
	}
else
{
	get_template_part('index', 'slider-two') ;
	
}	
}
?>
<!-- Service Section of index Page -->
<?php
if( $current_options['enable_services']=="on" ) {
get_template_part('index', 'services') ;
}
 ?>
<!-- Projects Section of index Page -->
<?php if($current_options['enable_projects']=="on") {
get_template_part('index', 'projects'); }
?>
<!-- footer Section of index blog -->
<?php get_template_part('index', 'blog'); ?>
<!-- footer Section of index Testimonial -->
<?php get_template_part('index', 'testimonials') ; ?>
<?php get_footer(); } ?>