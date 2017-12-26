<?php
$current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );
 ?>
<!-- Service Section -->
<section id="section" class="service">
	<div class="container">
	
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<?php if( $current_options['service_heading_one'] != '' ) { ?>
					<h1 class="section-heading"><?php echo $current_options['service_heading_one']; ?></h1>
					<?php } if( $current_options['service_tagline'] != '' ) { ?>
					<p><?php echo $current_options['service_tagline']; ?></p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /Section Title -->	
		<div id="service_content" class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="post">
					<?php if($current_options['service_icon_one']!='') {?>
					<div class="service-icon"><i class="fa <?php echo $current_options['service_icon_one']; ?>"></i>
					<?php } else { echo '<div class="service-icon">'; ?>
					<?php if($current_options['service_image_one']!='') {?>
					<img class="services_cols_mn_icon" alt="Web Design" src="<?php echo esc_url($current_options['service_image_one']); ?>">
					<?php } } ?>
					</div>
					<?php if($current_options['service_title_one']!='') {?>
					<div class="entry-header">
						<h4 class="entry-title"><?php echo esc_html($current_options['service_title_one']); ?></h4>
						
					</div>
					<?php } if($current_options['service_text_one']!='') {?>
					<div class="entry-content">
						<p><?php echo esc_html($current_options['service_text_one']); ?></p>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="post">
					<?php if($current_options['service_icon_two']!='') {?>
					<div class="service-icon"><i class="fa <?php echo $current_options['service_icon_two']; ?>"></i>
					<?php } else { echo '<div class="service-icon">'; ?>
					<?php if($current_options['service_image_two']!='') {?>
					<span><img class="services_cols_mn_icon" alt="Web Design" src="<?php echo esc_url($current_options['service_image_two']); ?>"></span>
					<?php } } ?>
					</div>
					<?php if($current_options['service_title_two']!='') {?>
					<div class="entry-header">
						<h4 class="entry-title"><?php echo esc_html($current_options['service_title_two']); ?></h4>
						
					</div>
					<?php } if($current_options['service_text_two']!='') {?>
					<div class="entry-content">
						<p><?php echo esc_html($current_options['service_text_two']); ?></p>
					</div>
					<?php } ?>
				</div>
			</div>			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="post">
					<?php if($current_options['service_icon_three']!='') {?>
					<div class="service-icon"><i class="fa <?php echo $current_options['service_icon_three']; ?>"></i>
					<?php } else { echo '<div class="service-icon">'; ?>
					<?php if($current_options['service_image_three']!='') {?>
					<span><img class="services_cols_mn_icon" alt="Web Design" src="<?php echo esc_url($current_options['service_image_three']); ?>"></span>
					<?php } } ?>
					</div>
					<?php if($current_options['service_title_three']!='') {?>
					<div class="entry-header">
						<h4 class="entry-title"><?php echo esc_html($current_options['service_title_three']); ?></h4>
						
					</div>
					<?php } if($current_options['service_text_three']!='') {?>
					<div class="entry-content">
						<p><?php echo esc_html($current_options['service_text_three']); ?></p>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="post">
					<?php if($current_options['service_icon_four']!='') {?>
					<div class="service-icon"><i class="fa <?php echo $current_options['service_icon_four']; ?>"></i>
					<?php } else { echo '<div class="service-icon">'; ?>
					<?php if($current_options['service_image_four']!='') {?>
					<span><img class="services_cols_mn_icon" alt="Web Design" src="<?php echo esc_url($current_options['service_image_four']); ?>"></span>
					<?php } } ?>
					</div>
					<?php if($current_options['service_title_four']!='') {?>
					<div class="entry-header">
						<h4 class="entry-title"><?php echo esc_html($current_options['service_title_four']); ?></h4>
						
					</div>
					<?php } if($current_options['service_text_four']!='') {?>
					<div class="entry-content">
						<p><?php echo esc_html($current_options['service_text_four']); ?></p>
					</div>
					<?php } ?>
				</div>
			</div>
			
			<div class="clearfix"></div>

			<div class="col-md-12 col-xs-12">
				<div class="btn-wrap">
					<div class="services_more_btn">
						<?php if($current_options['service_link_btn']!='') {?>
						<a href="<?php echo esc_url($current_options['service_link_btn']); ?>">
					   <?php } if($current_options['service_button_value']!='') { 
					   echo esc_html($current_options['service_button_value']); ?></a>
					   <?php } ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Service Section -->
<div class="clearfix"></div>