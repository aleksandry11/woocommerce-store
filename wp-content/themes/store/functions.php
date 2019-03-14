<?php 
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

include_once(get_template_directory() . '/functions/enqueue-assets.php');

function header_menu() {
    register_nav_menu('header-menu', __( 'Header Menu'));
}
add_action('init', 'header_menu');
