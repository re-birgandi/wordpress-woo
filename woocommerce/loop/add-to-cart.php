<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
  ?>
    <div class="product-btns">
        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
		<?php
		//echo esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' );//TODO::CHECKED
		echo apply_filters(
			'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
			sprintf(
				'<button class="primary-btn add-to-cart"   >
                       <a data-type-product="%s" href="%s" data-quantity="%s" %s class="%s">
                       <i class="fa fa-shopping-cart"></i>%s</a></button>',
				esc_html( $product->get_type() ),
				esc_url( $product->add_to_cart_url() ),
				esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
				isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
				$product->is_purchasable()
				&& $product->is_in_stock() && $product->get_type() != BRS_TYPE_PRODUCT['variable'] ? 'add-cart' : '',
				esc_html( $product->add_to_cart_text() ),
			),
			$product,
			$args
		);


		?>

    </div>
    <div class="massage-add-cart"> </div>


 <?php