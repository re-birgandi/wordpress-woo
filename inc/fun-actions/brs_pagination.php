<?php
function brs_pagination() {
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

	$pull_left = $args['total'] > 5 ? 'new-pull-left' : 'pull-left';

	?>
    <div class="<?php echo $pull_left;?>">
        <div class="page-filter">
            <span class="text-uppercase">نمایش:</span>
            <form method="get" class="form-per-page">
                <select name="select_per_page" class="input select-per-page">
		            <?php foreach ( PER_PAGES as $key => $item ):
			            $per_page = isset($_GET['per_page']) ? $_GET['per_page'] : PER_PAGES['default'];
			            ?>
                        <option <?php selected( PER_PAGES[ $key ],  sanitize_text_field( $per_page ) ) ?>
                                value="<?php echo add_query_arg( array(
						            'per_page' => PER_PAGES[ $key ]
					            ) ); ?>">
				            <?php echo PER_PAGES[ $key ] ?></option>
		            <?php endforeach; ?>
                </select>
            </form>
        </div>

		<?php

		wc_get_template( 'loop/pagination.php', $args );
		?>
    </div>
	<?php
}