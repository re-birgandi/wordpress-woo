<?php
/**
 * $plugin : نام پوشه پلاگین و نام فایل اصلی پلاگین :
 * example wordpress-woo-pl/wordpress-woo-pl.php
 */
function brs_active_plugin( $plugin ) {
	return in_array( $plugin,
		(array) get_option( 'active_plugins' ) );
}