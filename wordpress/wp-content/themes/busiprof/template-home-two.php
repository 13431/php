<?php 
/* 	
* Template Name: Home Two
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

$busiprof_service_content  = get_option( 'busiprof_theme_options');

   if($current_options['enable_services']=="on") {
   if(empty($busiprof_service_content)){
			 get_template_part('index', 'services') ;
		}else{
			
			$json_object  = get_theme_mod( 'busiprof_service_content');
			$str_test = json_decode($json_object);
			
			$i=0;
			if(isset($str_test)){
				//print_r($str_test);
			foreach($str_test as $data){
				//print_r($data->text);
				if($data){
					$i = $i+1;
				}
			}
			
			//echo $i;
			if($i>= 0){
				get_template_part('index', 'services') ;
			}else{
			 get_template_part('index', 'services-two') ;
			}
		}else {
			get_template_part('index', 'services-two') ;
		}
		
		}

  }
 ?>
<!-- Projects Section of index Page -->
<?php if($current_options['enable_projects']=="on") {
get_template_part('index', 'projects'); }
?>
<!-- footer Section of index Testimonial -->
<?php
get_template_part('index', 'testimonials-two') ;
?>
<?php get_footer(); } ?>