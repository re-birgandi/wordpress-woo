<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directlyfff
}

global $product;
?>
<h3 class="product-price">
	<?php if ( $price_html = $product->get_price_html() ) :
    $price_html=str_replace('<del aria-hidden="true">','<del class="product-old-price">',$price_html);
	$price_html = str_replace( [
		'<span class="woocommerce-Price-amount amount">',
		'</span>',
		'<span class="woocommerce-Price-currencySymbol">',
		'<bdi>',
		'</bdi>',
		'<ins>',
		'</ins>'
	], '', $price_html )
	?>
	<?php echo $price_html; ?>
</h3>
<?php endif; ?>
