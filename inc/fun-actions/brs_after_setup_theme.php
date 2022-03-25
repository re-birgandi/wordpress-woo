<?php
if(! function_exists('brs_after_setup_theme')){
	function brs_after_setup_theme(){
		$header_info = array(
			'width'         => 155,
			'height'        => 70,
 		);
		add_theme_support( 'custom-logo', $header_info );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-header' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'top_menu_header' => __( 'top_menu_header', 'wordpress-woo' ),
 		) );
		register_nav_menus( array(
			'top_menu_navigation' => __( 'top_menu_navigation', 'wordpress-woo' ),
		) );


		add_image_size( "image-content-product", 270, 360 );

	}
}

