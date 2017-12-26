<?php 
$current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() );

if( $current_options['home_project_section_enabled'] == 'on' ) { 
?>
<!-- Portfolio Section -->
<section id="section" class="portfolio bg-color">
	<div class="container">
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<?php if($current_options['protfolio_tag_line']!='') {?>
					<h1 class="section-heading"><?php echo $current_options['protfolio_tag_line']; ?>
					</h1><?php } ?>
					<?php if($current_options['protfolio_description_tag']!='') {?>
					<p><?php echo esc_html($current_options['protfolio_description_tag']); ?></p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		
				
		<!-- Portfolio Item -->
	<div class="tab-content main-portfolio-section" id="myTabContent">
		<!-- Portfolio Item -->
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_one_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_one_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_one']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_one']); ?>" class="project_feature_img" />
							<?php } ?></a>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								<?php if($current_options['project_one_url']!='') {?>
								<h4 class="entry-title"><a href="<?php echo esc_url($current_options['project_one_url']); ?>">
								<?php } if($current_options['project_title_one']!='') {
								echo esc_html($current_options['project_title_one']); ?></a>
								<?php } ?>
								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_one']!='') {?>
								<p><?php echo esc_html($current_options['project_text_one']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_two_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_two_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_two']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_two']); ?>" class="project_feature_img" />
							<?php } ?></a>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								<?php if($current_options['project_two_url']!='') {?>
								<h4 class="entry-title"><a href="<?php echo esc_url($current_options['project_two_url']); ?>">
								<?php } if($current_options['project_title_two']!='') {
								echo esc_html($current_options['project_title_two']); ?></a>
								<?php } ?>
								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_two']!='') {?>
								<p><?php echo esc_html($current_options['project_text_two']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>	
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_three_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_three_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_three']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_three']); ?>" class="project_feature_img" />
							<?php } ?></a>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								<?php if($current_options['project_three_url']!='') {?>
								<h4 class="entry-title"><a href="<?php echo esc_url($current_options['project_three_url']); ?>">
								<?php } if($current_options['project_title_three']!='') {
								echo esc_html($current_options['project_title_three']); ?></a>
								<?php } ?>
								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_three']!='') {?>
								<p><?php echo esc_html($current_options['project_text_three']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<aside class="post">
						<figure class="post-thumbnail">
							<?php if($current_options['project_four_url']!='') {?>
							<a href="<?php echo esc_url($current_options['project_four_url']); ?>">
							<?php } ?>
							<?php if($current_options['project_thumb_four']!='') {?>
							<img alt="" src="<?php echo esc_url($current_options['project_thumb_four']); ?>" class="project_feature_img" />
							<?php } ?></a>
						</figure>
						<div class="portfolio-info">
							<div class="entry-header">
								<?php if($current_options['project_four_url']!='') {?>
								<h4 class="entry-title"><a href="<?php echo esc_url($current_options['project_four_url']); ?>">
								<?php } if($current_options['project_title_four']!='') {
								echo esc_html($current_options['project_title_four']); ?></a>
								<?php } ?>
								</h4>
							</div>
							<div class="entry-content">
								<?php if($current_options['project_text_four']!='') {?>
								<p><?php echo esc_html($current_options['project_text_four']); ?></p>
								<?php } ?>
							</div>
						</div>					
					</aside>
				</div>
			</div>
	</div>
</section>
<!-- End of Portfolio Section -->
<div class="clearfix"></div>
<?php } ?>