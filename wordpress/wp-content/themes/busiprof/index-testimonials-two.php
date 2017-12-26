<?php  $current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() ); ?>
<!-- Testimonial & Blog Section -->
<section id="section">
	<div class="container">	
		<div class="row">
		
			<!-- Testimonial -->
			<div class="col-md-6 testimonial">
				<!-- Section Title -->
				<div class="section-title-small">
					<?php if( $current_options['testimonials_title'] != '' ) { ?>
					<h3 class="section-heading"><?php echo $current_options['testimonials_title'];?></h3>
					<?php } if( $current_options['testimonials_text'] !='') { ?>
					<p><?php echo $current_options['testimonials_text'];?></p>
					<?php } ?>
				</div>
				<!-- /Section Title -->
				<div class="post" id="post1"> 
					<div class="media"> 
						<figure class="post-thumbnail width-lg">
						<div class="home-post-img">
						<img src="<?php if($current_options['testimonials_image_one']!='') { echo esc_url($current_options['testimonials_image_one']);} ?>" class="img-circle" alt="img">
						</div>
						</figure> 
						<div class="media-body">
							<div class="entry-content">
								<p><?php if($current_options['testimonials_text_one']!='') { echo $current_options['testimonials_text_one'];} ?></p>
								<span class="author-name"><?php if($current_options['testimonials_name_one']!='') { echo $current_options['testimonials_name_one'];} ?> <small class="designation">(<?php if($current_options['testimonials_designation_one']!='') { echo $current_options['testimonials_designation_one'];} ?>)</small></span>
							</div>
						</div> 
					</div>
				</div>
				
				<div class="post" id="post2"> 
					<div class="media"> 
						<figure class="post-thumbnail width-lg">
						<div class="home-post-img">
						<img src="<?php if($current_options['testimonials_image_two']!='') { echo esc_url($current_options['testimonials_image_two']);} ?>" class="img-circle" alt="img">
						</div>
						</figure> 
						<div class="media-body">
							<div class="entry-content">
								<p><?php if($current_options['testimonials_text_two']!='') { echo $current_options['testimonials_text_two'];} ?></p>
								<span class="author-name"><?php if($current_options['testimonials_name_two']!='') { echo $current_options['testimonials_name_two'];} ?> <small class="designation">(<?php if($current_options['testimonials_designation_two']!='') { echo $current_options['testimonials_designation_two'];} ?>)</small></span>
							</div>
						</div> 
					</div>
				</div>
			</div>
			<!-- /Testimonial -->
			
			<!-- Blog Post -->
			<div class="col-md-6 home-post">
				<!-- Section Title -->
				<div class="section-title-small">
				<?php
					if( $current_options['recent_blog_title'] != '' ) { ?> 
					<h3 class="section-heading"><?php echo $current_options['recent_blog_title'];?></h3>
					<?php } if( $current_options['recent_blog_description'] !='')  { ?>
					<p><?php echo $current_options['recent_blog_description'];?></p>
					<?php } ?>
				</div>
				<!-- /Section Title -->	
				
				<div class="row">
					<?php 	$args = array( 'post_type' => 'post','posts_per_page' => 4,'post__not_in'=>get_option("sticky_posts")) ; 	
						query_posts( $args );
						if(query_posts( $args ))
					{	
						$i=1;
						while(have_posts()):the_post();
					{ ?>
					<div class="col-md-6">
						<div class="post"> 
							<div class="media"> 
								<figure class="post-thumbnail width-lg">
								<div class="home-post-img">
								<?php $defalt_arg =array('class' => "img-circle");?>
								<?php if(has_post_thumbnail()){?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$defalt_arg);?></a>
								<?php } ?>
								</div>
								</figure> 
								<div class="media-body">
									<div class="entry-header">
										<h5 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
										<span class="entry-date">
											<a href="<?php the_permalink(); ?>"><?php echo get_the_date('M j,Y');?></a>
										</span>
									</div>
								</div> 
							</div>
						</div>
					</div>
					<?php
					}					
					if($i==2)
					{ 
					echo '<div class="clearfix"></div>';
					$i=0;
					}$i++;
					wp_reset_postdata();
					endwhile;  } ?>
				</div>
			</div>
			<!-- /Blog Post -->
		</div>	
	</div>
</section>
<!-- End of Testimonial & Blog Section -->

<div class="clearfix"></div>