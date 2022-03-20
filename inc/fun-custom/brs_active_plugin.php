<?php
/**
 * $plugin : نام پوشه پلاگین و نام فایل اصلی پلاگین :
 *
 */
function brs_active_plugin( $plugin = 'wordpress-woo-pl/wordpress-woo-pl.php' ) {
	return in_array( $plugin,
		(array) get_option( 'active_plugins' ) );
}