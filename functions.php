<?php

function follow_andrew_register_styles()
{
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0');
    wp_enqueue_style('boot-strap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0');
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'follow_andrew_register_styles');


function follow_andrew_register_scripts()
{
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('popper-js', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('boot-strap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'follow_andrew_register_scripts');


function follow_andrew_register_nav_menus()
{
    $locations = array(
        'primary' => "left sidebar",
        'secondary' => "footer nav"
    );

    register_nav_menus($locations);
}

add_action('init', 'follow_andrew_register_nav_menus');

function follow_andrew_register_site()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'follow_andrew_register_site');
