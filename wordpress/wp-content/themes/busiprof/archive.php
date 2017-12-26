<?php
/**
 * The archive template file
 * @package WordPress
 */
 
get_header(); 
?>
<!-- Page Title -->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="page-title">
					<h2><?php if ( is_day() ) :
			
						  _e( "Daily Archive ", 'busiprof' ); echo (get_the_date()); 
						  
						 elseif ( is_month() ) : 
						 
							 _e( "Monthly Archive ", 'busiprof' ); echo (get_the_date( 'F Y' )); 
							 
						 elseif ( is_year() ) :
						 
						 _e( "Yearly Archive ", 'busiprof' );  echo (get_the_date( 'Y' )); 
						 
						else : 
						
							 _e( "Blog Archive ", 'busiprof' ); 	
							 
						 endif; 
						 ?>
				    </h2>
					<p><?php bloginfo('description');?></p>
				</div>
			</div>
			<div class="col-md-6">
				<ul class="page-breadcrumb">
					<?php if (function_exists('busiprof_custom_breadcrumbs')) busiprof_custom_breadcrumbs();?>
				</ul>
			</div>
		</div>
	</div>	
</section>
<!-- End of Page Title -->
<div class="clearfix"></div>

<!-- Blog & Sidebar Section -->
<section>		
	<div class="container">
		<div class="row">
			<!--Blog Posts-->
			<div class="col-md-8 col-xs-12">
				<div class="site-content">
					<?php 
					if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();
					
						get_template_part( 'content','' );
						
					endwhile;
					?>
					<!-- Pagination -->			
					<div class="paginations">
						<?php
						// Previous/next page navigation.
						the_posts_pagination( array(
						'prev_text'          => __('Previous','busiprof'),
						'next_text'          => __('Next','busiprof'),
						'screen_reader_text' => ' ',
						) ); ?>
					</div>
					<?php endif; ?>
					<!-- /Pagination -->
				</div>
			<!--/End of Blog Posts-->
			</div>
			<!--Sidebar-->
			<?php get_sidebar();?>
			<!--/End of Sidebar-->
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->
 
<div class="clearfix"></div>

<?php get_footer(); ?>