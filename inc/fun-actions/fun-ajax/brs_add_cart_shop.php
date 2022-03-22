<?php
function brs_add_cart_shop() {
	check_ajax_referer( 'brs_nonce', 'brs_get_nonce' );
	$product = wc_get_product( $_POST['product_id'] );
	if ( $product->is_purchasable() && $product->get_type() != BRS_TYPE_PRODUCT['variable'] ) {
		WC()->cart->add_to_cart( sanitize_text_field( $_POST['product_id'] ) );
		wp_send_json( [
			'massage' => __( 'به سبد خرید اضافه شد', 'wordpress-woo' ),//TODO: translate
			'sku'     => __( sanitize_text_field($_POST['product_sku']), 'wordpress-woo' ),
			'title'   => __( sanitize_text_field($product->get_title()), 'wordpress-woo' ),
		], 200 );
	}

	wp_send_json( [
		'massage' => __( 'به سبد خرید اضافه نشد', 'wordpress-woo' ),
	], 403 );

}