<?php
/**
*Theme Name	: BusiProf
	
 * @file           searchform.php
 * @package        Busiprof
 * @author         Priyanshu Mittal
 * @copyright      2013 Webriti
 * @license        license.txt
 * @filesource     wp-content/themes/Busiprof/searchform.php
*/
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search_btn"  name="s" id="s" placeholder="<?php esc_attr_e( "Search", 'busiprof' ); ?>" />
	<input type="submit" class="submit_search" style="" name="submit" value="<?php esc_attr_e( "Search", 'busiprof' ); ?>" />
</form>