<?php
function brs_add_cart_shop() {
	check_ajax_referer( 'brs_nonce', 'brs_get_nonce' );
	$product = wc_get_product( $_POST['product_id'] );
	if ( $product->is_purchasable() && $product->get_type() != BRS_TYPE_PRODUCT['variable'] ) {
		if( WC()->cart->add_to_cart( sanitize_text_field($_POST['product_id'] ) )) {
			$info_html_product = Add_To_Cart_Ajax::get_refreshed_fragments();
			wp_send_json( [
				'massage' => __( 'به سبد خرید اضافه شد', 'wordpress-woo' ),
				'info_html_product' => $info_html_product
			], 200 );
		}

	}

	wp_send_json( [
		'massage' => __( 'به سبد خرید اضافه نشد', 'wordpress-woo' ),
	], 403 );

}