<?php

function load_scripts()
{
    $parent_style = 'twentytwentyfive';

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap',
        false
    );

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri()  . '/assets/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version'));
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), null);
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('bootstrap-bundle-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

function register_navwalker()
{
    $navwalker_path = get_stylesheet_directory() . '/class-wp-bootstrap-navwalker.php';
    if (file_exists($navwalker_path)) {
        require_once $navwalker_path;
    }
}

add_action('after_setup_theme', 'register_navwalker');

function register_menu()
{
    register_nav_menus(array(
        'top_menu' => 'Top Menu',
        'footer_menu' => 'Footer Menu'
    ));
}

add_action('after_setup_theme', 'register_menu');

add_theme_support('post-thumbnails');

remove_action('wp_head', 'wp_generator'); // quita la versión de WordPress
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_shortlink_wp_head');

add_filter('xmlrpc_enabled', '__return_false');

add_theme_support('title-tag');
