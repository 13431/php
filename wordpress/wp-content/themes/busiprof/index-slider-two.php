<?php 
$current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );
if( $current_options['home_banner_strip_enabled'] == 'on' && $current_options['slider_head_title'] != '' ) { ?>
<div class="clearfix"></div>
<!-- Slider -->
<?php } if($current_options['slider_image']!='' ) { ?>
<div id="main" role="main">
	<section class="slider">
		<ul class="slides">
				<li>
					<img alt="img" src="<?php echo esc_url($current_options['slider_image']); ?>" />
					<div class="container">
						<div class="slide-caption">
							<?php if($current_options['caption_head']!='') {?>
							<h2><?php echo esc_html($current_options['caption_head']); ?></h2>
							<?php } if($current_options['caption_text']!='') {?>
							<p><?php echo esc_html($current_options['caption_text']); ?></p>
							<?php } ?>	
							<?php if($current_options['readmore_text_link']!=''){ ?>
							<div><a href="<?php echo esc_url($current_options['readmore_text_link']); ?>" 
							<?php if($current_options['readmore_target'] !=false) { ?>
							target="_blank" <?php } ?> class="flex-btn"><?php echo esc_html($current_options['readmore_text']); ?></a>
							</div>
							<?php }?>
						</div>		
					</div>
				</li>
			</ul>		
	</section>
</div>
<!-- End of Slider -->
<div class="clearfix"></div>
<?php } else{
	
	?>
<?php
} ?>
<section class="header-title"><h2><?php echo esc_html($current_options['slider_head_title']); ?> </h2></section>
<div class="clearfix"></div>