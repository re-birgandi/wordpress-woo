<?php
if ( ! function_exists( 'brs_enqueue_scripts' ) ):
	function brs_enqueue_scripts() {
		//CSS
		wp_enqueue_style( 'brs-bootstrap-css', BRS_URL_CSS . 'bootstrap.rtl.min.css','', VERSION_FILE );

		//JS
		wp_enqueue_script( 'brs-bootstrap-js', BRS_URL_JS . 'bootstrap.bundle.min.js', [ 'jquery' ], VERSION_FILE, true );

	}
endif;