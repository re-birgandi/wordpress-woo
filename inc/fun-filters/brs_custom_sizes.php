<?php
function brs_custom_sizes( $sizes ) {

	return array_merge( $sizes, array(
		'image-content-product' => __('Image content product'),
	) );
}