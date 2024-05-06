<?php 
function enqueue_scripts() {

    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array());
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function register_my_menu()
{
    register_nav_menu('main-menu', 'Menu principal');
}
add_action('after_setup_theme', 'register_my_menu');

add_theme_support('custom-logo');