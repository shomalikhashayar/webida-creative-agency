<?php

// Add styles
function load_css()
{

    wp_register_style(
        'quasar-style',
        get_template_directory_uri() . '/css/quasar.rtl.prod.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('quasar-style');

    wp_register_style(
        'material_ui',
        get_template_directory_uri() . '/css/css.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('material_ui');

    wp_register_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('main-style');
}

add_action('wp_enqueue_scripts', 'load_css');

// Add js
function load_js()
{

    wp_enqueue_script('vue', get_template_directory_uri() . '/js/vue.global.js', array(), null, true);
    wp_enqueue_script('quasar', get_template_directory_uri() . '/js/quasar.umd.prod.js', array(), null, true);
    wp_enqueue_script('fa-quasar', get_template_directory_uri() . '/js/fa.umd.prod.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

// Register menus location
register_nav_menus(
    array('top-menu' => 'Top Menu Location', 'footer-menu' => 'Footer Menu Location')
);

// Access upload SVG files
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

//Jalali Calendar
require_once(get_template_directory() . '/assets/jalali-date/jdatetime.class.php');

function convert_to_persian_date($gregorian_date) {
    $dateObj = new jDateTime(true, true, 'Asia/Tehran'); 
    return $dateObj->date("d F Y", strtotime($gregorian_date));
}

