<?php
//تعیین تعداد محصول در هر صفحه
function brs_loop_shop_per_page( $posts_per_page ) {
	//$posts_per_page:تعداد محصول در هر صفحه
	if(isset($_GET['per_page'])):
		$perPage = sanitize_text_field( $_GET['per_page'] );
		if ( $perPage == PER_PAGES['all'] ) {
			return - 1;
		}

		return isset( $perPage ) && $perPage && ! empty( $perPage ) && in_array( $perPage, PER_PAGES ) ? (int) sanitize_text_field( $perPage ) : DEFAULT_PER_PAGE;
	endif;
	return DEFAULT_PER_PAGE;
}