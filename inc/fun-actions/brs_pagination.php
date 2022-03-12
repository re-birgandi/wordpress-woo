<?php
function brs_pagination(){
	if ( ! wc_get_loop_prop( 'is_paginated' ) || ! woocommerce_products_will_display() ) {
		return;
	}

	$args = array(
		'total'   => wc_get_loop_prop( 'total_pages' ),
		'current' => wc_get_loop_prop( 'current_page' ),
		'base'    => esc_url_raw( add_query_arg( 'product-page', '%#%', false ) ),
		'format'  => '?product-page=%#%',
	);

	if ( ! wc_get_loop_prop( 'is_shortcode' ) ) {
		$args['format'] = '';
		$args['base']   = esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
	}
  ?>
	<div class="pull-left">
        <div class="page-filter">
            <span class="text-uppercase">نمایش:</span>
            <select class="input">
                <option  value="0">10</option>
                <option value="1">20</option>
                <option value="2">30</option>
            </select>
        </div>
<?php
	wc_get_template( 'loop/pagination.php', $args );
	?>
	</div>
		<?php
}