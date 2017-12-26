<?php
/**
 * side bar template
 *
 * @package WordPress
 * @subpackage spasalon
 */
?>

<?php if ( is_active_sidebar( 'woocommerce-1' )  ) : ?>
<!--Sidebar-->
<div class="col-md-4 col-xs-12">
	<div class="sidebar">
	<?php dynamic_sidebar( 'woocommerce-1' ); ?>
	</div>
</div>
<!--/End of Sidebar-->
<?php endif; ?>