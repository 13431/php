<?php
/*
 * @file           comment-function.php
 * @package        Busiprof
 * @author         Webriti
 * @copyright      2013 Webrit
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/comment-function.php
*/	
// code for comment
if ( ! function_exists( 'busiprof_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own appointment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since appointment
 */
function busiprof_comment( $comment, $args, $depth ) {
	
	$GLOBALS['comment'] = $comment;

//get theme data
global $comment_data;

//translations
$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : __('Reply','busiprof');
?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
				
					<div class="comments">
                    <figure class="comment-author">
                        <?php echo get_avatar($comment,$size = '65'); ?>
					</figure>
					<div class="media-body">		
                    <!-- /comment-avatar -->
                    <div class="comment-content">
						<h5 class="fn"><?php printf(__('%s','busiprof'), get_comment_author_link()) ?><span>|</span>
						<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>" class="datetime"><?php echo get_comment_date(); ?></a></h5>
                    <!-- /comment-meta -->
                    <?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'busiprof' ); ?></em>
					<br />
				<?php endif; ?>
    	                <p>
    	                    <?php comment_text() ?>
    	                </p><!-- /comment-text -->
    	              <div class="reply">
    	                    <?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    	              </div>
					 </div> <!-- /reply -->
                    </div><!-- /comment-content -->
					</div>
					<!-- /comment-details -->
		<!-- /comment -->
		
<?php
}
endif;
add_filter('get_avatar','busiprof_add_gravatar_class');

function busiprof_add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='img-circle", $class);
    return $class;
}
?>