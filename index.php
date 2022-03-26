<?php
if ( ! brs_active_plugin( 'woocommerce/woocommerce.php' ) ) {
	__( "please install plugin woocommerce", "wordpress-woo" );//translate

	return;
}
get_header();

get_footer();