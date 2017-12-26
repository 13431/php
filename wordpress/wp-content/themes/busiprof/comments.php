<?php
/*
 * @file           comment.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webrit
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/comment.php
*/	?>	
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'busiprof' ); ?></p>
	<?php return;endif;?>
         <?php if ( have_comments() ) : ?>		
         <div class="comments-area">	
			<h3><?php _e('Comment','busiprof');?> <span>(<?php echo get_comments_number();?>)</span></h3>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'busiprof' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'busiprof' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'busiprof' ) ); ?></div>
		</nav>
		<?php endif;  ?>
		<?php wp_list_comments( array( 'callback' => 'busiprof_comment' ) ); ?>
		<!-- comment_mn -->
		</div>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'busiprof' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'busiprof' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'busiprof' ) ); ?></div>
		</nav>
		<?php endif;  ?>
		<?php
			elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :  ?>			
	<?php endif; ?>   
<?php if ('open' == $post->comment_status) : ?> 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php echo sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment','busiprof' ), site_url( 'wp-login.php' ) . '?redirect_to=' .  urlencode(get_permalink())); ?></p>
<?php else : ?>
<div class="comment-form">
	<div class="row">
	<?php 
 $fields=array(
    'author' => '<div class="form-group col-xs-6"><input name="author" id="author" value="" type="text"  placeholder="'. __( "Name",'busiprof' ).'"  /></div>',
    'email'  => '<div class="form-group col-xs-6"><input name="email" id="email" value=""   type="text" placeholder="'. __( "Email",'busiprof' ).'"></div>',    
); 
 function my_fields($fields) { 
return $fields;
}
add_filter('comment_form_default_fields','my_fields'); 
	$defaults = array(
     'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
	'comment_field'        => '<div class="form-group col-xs-12"><textarea rows="5" id="comment" name="comment" type="text" placeholder="Message" rows="3"></textarea></div>',		
	 'logged_in_as' => '<div class="col-xs-12"><p class="logged-in-as">' . __("Logged in as",'busiprof' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Logout of this account">'.__("Logout",'busiprof').'</a>' . '</p></div>',
	 'id_submit'            => 'submit_btn',
	'label_submit'         =>__('Send Message','busiprof'),
	'comment_notes_after'  => '',
	 'title_reply'       => '<div class="col-xs-12"><h3 class="comment-title">' . __('Leave a Reply','busiprof') .'</h3></div>',
	 'id_form'      => 'action'	
	);
comment_form($defaults);
?></div>				
</div><!-- leave_comment_mn -->
<?php endif; // If registration required and not logged in ?>
<?php endif;  ?>