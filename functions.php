<?php

function load_stylesheets() {
    wp_register_style('main', get_template_directory_uri() .'/static/css/main.min.css', array(), 1, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function addjs() {
    wp_register_script('main', get_template_directory_uri() . '/static/js/main.min.js', array(), 1, 1, 1);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'addjs');

/// menus support
add_theme_support('menus');

/// register menus
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
    )
);

/// enable wp custom background
/* custom background*/
$args = array (
    'deault-color' => '000000',
    'default-image' => get_template_directory_uri() .'/Images/background.jpg',
);
add_theme_support( 'custom-background', $args );

add_action('acf/register_fields', 'my_register_fields');

function my_register_fields() {
    include_once('acf-image-crop/acf-image-crop.php');
}
