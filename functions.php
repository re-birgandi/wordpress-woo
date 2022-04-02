<?php
//CONST VALUES
const DEFAULT_PER_PAGE  = 10;
const PER_PAGES         = [ 'default' => DEFAULT_PER_PAGE, 'twenty' => 20, 'thirty' => 30, 'all' => 'کل محصولات' ];
const BRS_PLUGIN_ACTIVE = 'wordpress-woo-pl/wordpress-woo-pl.php';
const BRS_TYPE_PRODUCT  = [ 'variable' => 'variable' ];


//CONST  DIR
define( 'BRS_DIR_TH', get_template_directory() );
const BRS_DIR_INC           = BRS_DIR_TH . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR;
const BRS_DIR_FUN_ACTIONS   = BRS_DIR_INC . 'fun-actions' . DIRECTORY_SEPARATOR;
const BRS_FUN_AJAX          = BRS_DIR_FUN_ACTIONS . 'fun-ajax' . DIRECTORY_SEPARATOR;
const BRS_DIR_FUN_FILTERS   = BRS_DIR_INC . 'fun-filters' . DIRECTORY_SEPARATOR;
const BRS_DIR_TPL           = BRS_DIR_TH . DIRECTORY_SEPARATOR . 'tpl' . DIRECTORY_SEPARATOR;
const BRS_FUN_CUSTOM        = BRS_DIR_INC . 'fun-custom' . DIRECTORY_SEPARATOR;
const BRS_FUN_CUSTOM_FILTER = BRS_FUN_CUSTOM . 'fun-custom-filter' . DIRECTORY_SEPARATOR;


//CONST  URL
define( 'BRS_URL_TH', get_template_directory_uri() . '/' );
define( 'VERSION_FILE', time() );
const BRS_URL_ASSETS = BRS_URL_TH . 'assets/';
const BRS_URL_CSS    = BRS_URL_ASSETS . 'css/';
const BRS_URL_JS     = BRS_URL_ASSETS . 'js/';
const BRS_URL_IMG    = BRS_URL_ASSETS . 'img/';
const BRS_URL_AJAX   = BRS_URL_JS . 'ajax/';


//INCLUDE ACTIONS
include BRS_DIR_FUN_ACTIONS . 'brs_enqueue_scripts.php';
include BRS_DIR_FUN_ACTIONS . 'brs_after_setup_theme.php';
include BRS_DIR_FUN_ACTIONS . 'brs_register_sidebars.php';
include BRS_DIR_FUN_ACTIONS . 'brs_pagination.php';
include BRS_DIR_FUN_ACTIONS . 'brs_template_loop_product_title.php';
include BRS_DIR_FUN_ACTIONS . 'brs_template_loop_add_to_cart.php';
include BRS_DIR_FUN_ACTIONS . 'brs_template_loop_rating.php';

//INCLUDE AJAX ACTION
include BRS_FUN_AJAX . 'brs_add_cart_shop.php';
//INCLUDE FILTERS
include BRS_DIR_FUN_FILTERS . "brs_loop_shop_per_page.php";
include BRS_DIR_FUN_FILTERS . "brs_custom_sizes.php";


//INCLUDE FUN CUSTOM
include BRS_FUN_CUSTOM . 'brs_active_plugin.php';


//INCLUDE FUN CUSTOM FILTER
include BRS_FUN_CUSTOM_FILTER . 'brs_change_text_catalog_orderby.php';


//REMOVE ACTIONS
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );//TODO: REMOVE TITTLE PRODUCT
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);//single

//ACTIONS

add_action( 'wp_enqueue_scripts', 'brs_enqueue_scripts' );
add_action( 'after_setup_theme', 'brs_after_setup_theme' );
add_action( 'widgets_init', 'brs_register_sidebars' );
add_action( 'woocommerce_before_shop_loop', 'brs_pagination', 10 );//pagination top
add_action( 'woocommerce_after_shop_loop_item', 'brs_template_loop_product_title', 10 );//title product
add_action( 'woocommerce_after_shop_loop_item', 'brs_template_loop_add_to_cart', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'brs_template_loop_rating', 10 );

//ACTIONS AJAX TODO:ADD FUNCTION brs_add_cart_shop AND INCLUDE GET TYPE PRODUCT IN JS
add_action( 'wp_ajax_brs_add_cart_shop', 'brs_add_cart_shop' );
add_action( 'wp_ajax_nopriv_brs_add_cart_shop', 'brs_add_cart_shop' );


//FILTERS
add_filter( 'woocommerce_show_page_title', '__return_false' );
add_filter( 'loop_shop_per_page', 'brs_loop_shop_per_page', 20 );
add_filter( 'image_size_names_choose', 'brs_custom_sizes' );


//CUSTOM FILTER
add_filter( 'brs_catalog_orderby_options', 'brs_change_text_catalog_orderby' );

