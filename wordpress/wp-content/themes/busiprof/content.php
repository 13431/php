<article class="post"> 
	<span class="site-author">
		<figure class="avatar">
		<?php $author_id=$post->post_author; ?>
			<a data-tip="<?php the_author() ;?>" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>" data-toggle="tooltip" title="<?php echo the_author_meta( 'display_name' , $author_id ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>
		</figure>
	</span>
		<header class="entry-header">
			<?php 	
				if ( is_single() ) :
				
				the_title('<h3 class="entry-title">', '</h3>' );
				
				else:
				
				the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); 
				
				endif; 
				?>
		</header>
	
		<div class="entry-meta">
		
			<span class="entry-date"><a href="<?php the_permalink(); ?>"><time datetime=""><?php the_time('M j,Y');?></time></a></span>
			
			<span class="comments-link"><a href="<?php the_permalink(); ?>">
			<?php  comments_popup_link( __('Leave a comment', 'busiprof' ) ); ?></a></span>
			
			<?php if( get_the_tags() ) { ?>
			<span class="tag-links"><a href="<?php the_permalink(); ?>"><?php the_tags('', ', ', ''); ?></a></span>
			<?php } ?>
		</div>
	
		<a  href="<?php the_permalink(); ?>" class="post-thumbnail" ><?php the_post_thumbnail(); ?></a>
	
	<div class="entry-content">
		<?php the_content( __('Read More','busiprof') ); ?>
	</div>
</article>