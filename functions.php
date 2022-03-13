<?php
//CONST VALUES
const PER_PAGES = [ 'ten'=>10, 'twenty'=>20, 'thirty'=>30, 'all'=>'کل محصولات'];

//CONST  DIR
define( 'BRS_DIR_TH', get_template_directory() );
const BRS_DIR_INC         = BRS_DIR_TH . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR;
const BRS_DIR_FUN_ACTIONS = BRS_DIR_INC . 'fun-actions' . DIRECTORY_SEPARATOR;
const BRS_DIR_FUN_FILTERS = BRS_DIR_INC . 'fun-filters' . DIRECTORY_SEPARATOR;
const BRS_DIR_TPL         = BRS_DIR_TH . DIRECTORY_SEPARATOR . 'tpl' . DIRECTORY_SEPARATOR;

//CONST  URL
define( 'BRS_URL_TH', get_template_directory_uri() . '/' );
define( 'VERSION_FILE', time() );
const BRS_URL_ASSETS      = BRS_URL_TH . 'assets/';
const BRS_URL_CSS         = BRS_URL_ASSETS . 'css/';
const BRS_URL_JS          = BRS_URL_ASSETS . 'js/';
const BRS_URL_IMG         = BRS_URL_ASSETS . 'img/';


//INCLUDE ACTIONS
include BRS_DIR_FUN_ACTIONS . 'brs_enqueue_scripts.php';
include BRS_DIR_FUN_ACTIONS . 'brs_after_setup_theme.php';
include BRS_DIR_FUN_ACTIONS . 'brs_register_sidebars.php';
include BRS_DIR_FUN_ACTIONS . 'brs_pagination.php';


//INCLUDE FILTERS




//REMOVE ACTIONS
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);

//ACTIONS
add_action( 'wp_enqueue_scripts', 'brs_enqueue_scripts' );
add_action( 'after_setup_theme', 'brs_after_setup_theme' );
add_action( 'widgets_init', 'brs_register_sidebars' );
add_action('woocommerce_before_shop_loop','brs_pagination');



//FILTERS
add_filter( 'woocommerce_show_page_title', '__return_false' );


add_action('pre_get_posts', 'tf_change_products_query_for_page');

function tf_change_products_query_for_page($query) {

	$perPage = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);

	if ( $query->is_main_query() && !is_admin() && is_post_type_archive('product') ) :
		$query->set('posts_per_page', $perPage);
	endif;
}
