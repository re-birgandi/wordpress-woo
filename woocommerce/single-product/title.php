<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $product;
if ( function_exists( 'brs_offer_new_product' ) && brs_offer_new_product() ):

	new Brs_Discount_Price( $product->get_id() );
	$discount = Brs_Discount_Price::brs_handle_discount_product( $product->get_type() );
	if ( $discount ):
		?>
        <div class="product-label">
			<?php echo brs_offer_new_product() ? '<span>جدید</span>' : '' ?>
            <span class="sale">
            <?php
            echo ! $discount['max'] ? $discount['min'] . '%' : $discount['min'] . '%' . ' - ' . $discount['max'] . '%'; ?></span>
        </div>

	<?php
	endif;
endif;

the_title( '<h2 class="product-name">', '</h1>' );
