<?php get_header(); 
get_template_part('index', 'bannerstrip');
?>
<!-- Page Title -->
<!-- End of Page Title -->

<div class="clearfix"></div>

<!-- Blog & Sidebar Section -->
<section>		
	<div class="container">
		<div class="row">
			
			<!--Blog Detail-->
			<div class="col-md-8 col-xs-12">
				<div class="site-content">
					<?php 
					if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();
					
						get_template_part( 'content','' );
						
					endwhile; endif;
					?>
					<!--Comments-->
					<?php comments_template( '', true );?>
					<!--/End of Comments-->
					
					<!--Comment Form-->
					
					
					<?php if(wp_link_pages(array('echo'=>0))):?>
					<div class="pagination_blog"><ul><?php 
						$args=array('before' => '<li>', ' after' => '</li>');
						wp_link_pages($args); ?></ul>
					</div>
				<?php endif;?>
					
					<!--/End of Comment Form-->
			
				</div>
			</div>
			<!--/End of Blog Detail-->

			<!--Sidebar-->
			<?php get_sidebar(); ?>
			<!--/End of Sidebar-->
		
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
<?php get_footer(); ?>