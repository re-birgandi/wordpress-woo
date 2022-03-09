<?php
if ( ! function_exists( 'brs_enqueue_scripts' ) ):
	function brs_enqueue_scripts() {
		//CSS
		wp_enqueue_style( 'brs-googleapis-css', 'https://fonts.googleapis.com/css?family=Hind:400,700', '', VERSION_FILE );
		wp_enqueue_style( 'brs-bootstrap-css', BRS_URL_CSS . 'bootstrap.min.css', '', VERSION_FILE );
		wp_enqueue_style( 'brs-slick-css', BRS_URL_CSS . 'slick.css', '', VERSION_FILE );
		wp_enqueue_style( 'brs-slick-theme-css', BRS_URL_CSS . 'slick-theme.css', [ 'brs-slick-css' ], VERSION_FILE );
		wp_enqueue_style( 'brs-nouislider-css', BRS_URL_CSS . 'nouislider.min.css', '', VERSION_FILE );
		wp_enqueue_style( 'brs-style-css', BRS_URL_CSS . 'style.css', '', VERSION_FILE );
		//JS
		wp_enqueue_script( 'brs-bootstrap-js', BRS_URL_JS . 'bootstrap.min.js', [ 'jquery' ], VERSION_FILE, true );
		wp_enqueue_script( 'brs-slick-js', BRS_URL_JS . 'slick.min.js', [ 'jquery' ], VERSION_FILE, true );
		wp_enqueue_script( 'brs-nouislider-js', BRS_URL_JS . 'nouislider.min.js', [ 'jquery' ], VERSION_FILE, true );
		wp_enqueue_script( 'brs-jquery-zoom-js', BRS_URL_JS . 'jquery.zoom.min.js', [ 'jquery' ], VERSION_FILE, true );
		wp_enqueue_script( 'brs-main-js', BRS_URL_JS . 'main.js', [ 'jquery' ], VERSION_FILE, true );
		wp_enqueue_script( 'brs-kit-fontawesome', BRS_URL_JS. 'fontawesome.js', '', VERSION_FILE );
	}
endif;