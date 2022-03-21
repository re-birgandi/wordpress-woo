<?php
function brs_add_cart_shop() {
	check_ajax_referer( 'brs_nonce', 'brs_get_nonce' );
	$product = wc_get_product( $_POST['product_id'] );
	if ( $product->is_purchasable() && $product->get_type() != BRS_TYPE_PRODUCT['variable'] ) {
		WC()->cart->add_to_cart( sanitize_text_field( $_POST['product_id'] ) );
	}

}