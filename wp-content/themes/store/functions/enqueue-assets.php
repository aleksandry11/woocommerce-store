<?php 
function enqueue_assets() {
    //slick slider
    wp_enqueue_style('slick', get_template_directory_uri() . '/dist/css/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/dist/css/slick-theme.css', array(), 'all');

    wp_enqueue_script('slick-js', get_template_directory_uri() . '/src/js/libs/slick.min.js', array('jquery'), true);

    //bootstrap
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '1.0.0', 'all');


    //custom styles
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', array());
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');

    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
    
}
add_action('wp_head', 'enqueue_assets');