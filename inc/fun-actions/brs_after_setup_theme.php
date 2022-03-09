<?php
if(! function_exists('brs_after_setup_theme')){
	function brs_after_setup_theme(){
		add_theme_support( 'custom-logo' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'woocommerce' );


		register_nav_menus( array(
			'top_menu' => __( 'top Menu', 'wordpress-woo' ),
 		) );
	}
}