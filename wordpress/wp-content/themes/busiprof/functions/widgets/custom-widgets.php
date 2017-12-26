<?php	
add_action( 'widgets_init', 'busiprof_widgets_init');
function busiprof_widgets_init() {

/*sidebar*/
register_sidebar( array(
		'name' => __( 'Sidebar widget area','busiprof' ),
		'id' => 'sidebar-primary',
		'description' => __('Sidebar widget area', 'busiprof' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

register_sidebar( array(
		'name' => __( 'Footer widget area', 'busiprof' ),
		'id' => 'footer-widget-area',
		'description' => __('Footer widget area', 'busiprof' ),
		'before_widget' => '<div class="col-md-3 col-sm-6">',
		'after_widget' => '</div>',
		'before_title' => '<aside class="widget"><h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
register_sidebar( array(
	'name' => __('WooCommerce sidebar area', 'busiprof' ),
	'id' => 'woocommerce-1',
	'description' => __( 'WooCommerce sidebar area', 'busiprof' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>'
	) );	
	
}	                     
?>