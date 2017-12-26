<?php

/*--------------------------------------------------------------------*/
/*     Register Google Fonts
/*--------------------------------------------------------------------*/
function busiprof_fonts_url() {
	
    $fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Droid Sans:400,700,800','Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900','Roboto: 100,300,400,500,700,900','Raleway :100,200,300,400,500,600,700,800,900','Droid Serif:400,700');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $fonts_url;
}
function busiprof_scripts_styles() {
    wp_enqueue_style( 'busiprof-fonts', busiprof_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'busiprof_scripts_styles' );
?>