<?php
if ( ! function_exists( 'brs_change_text_catalog_orderby' ) ) :
	function brs_change_text_catalog_orderby( $orderby_options ) {
		if ( array_key_exists( 'relevance', $orderby_options ) && is_search() ) {
			$keys                                       = array_keys( $orderby_options );
			$keys[ array_search( 'relevance', $keys ) ] = 'menu_order';
			$orderby_options                            = array_combine( $keys, $orderby_options );
			$orderby_options['menu_order']              = 'پیش فرض';

			return $orderby_options;
		}

		return $orderby_options;
	}
endif;