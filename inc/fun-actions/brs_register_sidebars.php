<?php
function brs_register_sidebars() {
	/* Register the 'primary' sidebar. */

	register_sidebar(
		array(
			'id'          => 'right_sidebar',
			'name'        => __( 'right sidebar' ),
			'description' => __( 'A short description of the sidebar.' ),
			//'before_widget' => '<div id="%1$s" class="widget %2$s">',
			//'after_widget'  => '</div>',
			//'before_title'  => '<h3 class="widget-title">',
			//	'after_title'   => '</h3>',
		)
	);
}