<?php
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-header' );
add_theme_support( 'woocommerce' );

//CONST  DIR
define( 'BRS_DIR_TH', get_template_directory() );
const BRS_DIR_INC         = BRS_DIR_TH . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR;
const BRS_DIR_FUN_ACTIONS = BRS_DIR_INC . 'fun-actions' . DIRECTORY_SEPARATOR;
const BRS_DIR_FUN_FILTERS = BRS_DIR_INC . 'fun-filters' . DIRECTORY_SEPARATOR;
const BRS_DIR_TPL         = BRS_DIR_TH . DIRECTORY_SEPARATOR . 'tpl' . DIRECTORY_SEPARATOR;

//CONST  URL
define( 'BRS_URL_TH', get_template_directory_uri() . '/' );
define( 'VERSION_FILE', time() );
const BRS_URL_ASSETS = BRS_URL_TH . 'assets/';
const BRS_URL_CSS    = BRS_URL_ASSETS . 'css/';
const BRS_URL_JS     = BRS_URL_ASSETS . 'js/';
const BRS_URL_IMG    = BRS_URL_ASSETS . 'img/';


//INCLUDE
include BRS_DIR_FUN_ACTIONS . 'brs_enqueue_scripts.php';

//ACTIONS
add_action( 'wp_enqueue_scripts', 'brs_enqueue_scripts' );

//FILTERS


