<?php 
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10); 

add_action('woocommerce_before_main_content', 'webriti_busiprof_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'webriti_busiprof_wrapper_end', 10);

function webriti_busiprof_wrapper_start() {?>
<!-- Header Strip -->
<?php get_template_part('index', 'bannerstrip'); ?>
<!-- /Header Strip -->
 <section>		
	<div class="container">
		<div class="row">
 <div class="col-md-<?php echo ( !is_active_sidebar( 'woocommerce-1' ) ? '12' :'8' ); ?> col-md-12">
	<div class="page-content">
<?php } 
function webriti_busiprof_wrapper_end() {
if ( is_active_sidebar( 'woocommerce-1' )  ){ echo "</div></div>"; get_sidebar('woocommerce'); echo "</div></div></section>"; }
else { echo "</div></div></div></section>"; } }?>