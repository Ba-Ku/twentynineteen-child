<?php

add_action('wp_enqueue_scripts', 'twentynineteen_child_enqueue_styles');

function twentynineteen_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

}

function register_nasenfarbe_style(){
    wp_register_style('nasenfarbe', '/wp-content/themes/twentynineteen-child/nasenfarbe.css');
    wp_enqueue_style('nasenfarbe', '/wp-content/themes/twentynineteen-child/nasenfarbe.css');
}

add_action('wp_enqueue_scripts', 'register_nasenfarbe_style');

