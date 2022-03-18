<?php
function brs_template_loop_product_title(){
	echo '<h2 class="' . esc_attr('product-name') . '">' . get_the_title() . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

}