<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
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
	exit; // Exit if accessed directly
}
global $product;

?>
<div class="product-label">
	<?php
	if ( function_exists( 'brs_offer_new_product' ) && brs_offer_new_product() ):
		echo '<span>جدید</span>';
	endif;

	global $post, $product;
	if ( $product->is_on_sale() ) : ?>
		<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="sale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?>
	<?php
	endif;
	?>
</div>
<!------------ TODO : ZOOM PRODUCT IN مشاهده سریع-------------------->
<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="<?php the_permalink( get_the_ID() ); ?>">مشاهده
        سریع</a></button>

