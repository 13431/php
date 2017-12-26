<?php  $current_options = wp_parse_args(  get_option( 'busiprof_theme_options', array() ), theme_setup_data() ); 
if( $current_options['home_recentblog_section_enabled']=='on' ) { ?>
<!-- Testimonial & Blog Section -->
<section id="section" class="home-post-latest">
	<div class="container">	
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<?php
					if( $current_options['recent_blog_title'] != '' ) { ?> 
					<h1 class="section-heading"><?php echo $current_options['recent_blog_title'];?></h1>
					<?php } if( $current_options['recent_blog_description'] !='')  { ?>
					<p><?php echo $current_options['recent_blog_description'];?></p>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- /Section Title -->	
			
		<!-- Blog Post -->				
		<div class="row">
		<?php 	$args = array( 'post_type' => 'post','posts_per_page' => 4,'post__not_in'=>get_option("sticky_posts")) ; 	
						query_posts( $args );
						if(query_posts( $args ))
					{	
						while(have_posts()):the_post();
					{ ?>
			<div class="col-md-6">
				<div class="post"> 
					<div class="media"> 
						<figure class="post-thumbnail"><?php $defalt_arg =array('class' => "");?>
							<?php if(has_post_thumbnail()){?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$defalt_arg);?></a>
							<?php } ?>
						</figure> 
						<div class="media-body">
							<?php if( $current_options['home_recentblog_meta_enable']=='on' ) { ?>
							<div class="entry-meta">
							<span class="entry-date"><a href="<?php the_permalink(); ?>"><time datetime=""><?php the_time('M j,Y');?></time></a></span>
							<span class="comments-link"><a href="<?php the_permalink(); ?>"><?php  comments_popup_link( __( 'Leave a Reply', 'busiprof' ) ); ?></a></span>
							<?php if( get_the_tags() ) { ?>
							<span class="tag-links"><a href="<?php the_permalink(); ?>"><?php the_tags('', ', ', ''); ?></a></span>
							<?php } ?>
							</div>
							<?php } ?>

							
							<div class="entry-header">
								<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
							</div>
							<div class="entry-content">
								<p><?php the_content(__('Read More','busiprof')); ?></p>
							</div>
						</div> 
					</div>
				</div>
			</div>
			<?php } endwhile; } ?>
		</div>
		<!-- /Blog Post -->
			
			
	</div>
</section>
<!-- End of Testimonial & Blog Section -->
<div class="clearfix"></div>
<?php } ?>