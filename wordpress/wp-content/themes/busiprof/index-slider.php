<?php
$slide_options = wp_parse_args(  get_theme_mod('busiprof_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );
if( $current_options['home_banner_strip_enabled'] == 'on' && $current_options['slider_head_title'] != '' ) { ?>
<div class="clearfix"></div>
<!-- Slider -->
<?php 
 if($slide_options!='') {
 ?>
<div id="main" role="main">
	<section class="slider">
		<ul class="slides">
				<li>
					<?php if($slide_options['image_url']!='') { ?>
					<img alt="img" src="<?php echo esc_url($slide_options['image_url']); ?>" />
					<?php } else { ?>
					<img alt="img" src="<?php echo esc_url($current_options['slider_image']); ?>" />	
					<?php } ?>
					<div class="container">
						<div class="slide-caption">
							<?php if($slide_options['title']!='') {?>
							<h2><?php echo esc_html($slide_options['title']); ?></h2>
							<?php } 
							else { ?> <h2><?php echo esc_html($current_options['caption_head']); ?></h2> <?php }
							if($slide_options['text']!='') {?>
							<p><?php echo esc_html($slide_options['text']); ?></p>
							<?php } else if($current_options['caption_text']!='') {?>
							<p><?php echo esc_html($current_options['caption_text']); ?></p>	
							<?php } if($slide_options['link']!=''){ ?>
							<div><a href="<?php echo esc_url($slide_options['link']); ?>" <?php if(
							$slide_options['open_new_tab'] == 'yes') { echo "target='_blank'"; } ?> class="flex-btn"><?php echo esc_html($slide_options['button_text']); ?></a>
							</div>
							<?php } 
							else
							{ ?>
							<?php if($current_options['readmore_text_link']!=''){ ?>
							<div><a href="<?php echo esc_url($current_options['readmore_text_link']); ?>" target="_blank" class="flex-btn"><?php echo esc_html($current_options['readmore_text']); ?></a>
							</div>
							<?php }?>	
								
							<?php } ?>
						</div>		
					</div>
				</li>
			</ul>		
	</section>
</div>
<!-- End of Slider -->
<div class="clearfix"></div>
<?php } }?>
<section class="header-title"><h2><?php echo esc_html($current_options['slider_head_title']); ?> </h2></section>
<div class="clearfix"></div>