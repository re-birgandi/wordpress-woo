<?php
function brs_loop_shop_per_page( $cols ) {
	$perPage = sanitize_text_field( $_GET['per_page'] );
	if ( $perPage == PER_PAGES['all'] ) {
		return - 1;
	}

	return isset( $perPage ) && $perPage && ! empty( $perPage ) && in_array( $perPage, PER_PAGES ) ? (int) sanitize_text_field( $perPage ) : DEFAULT_PER_PAGE;
}