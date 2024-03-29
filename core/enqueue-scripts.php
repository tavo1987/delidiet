<?php

function shiftpress_enqueue_scripts()
{
    /**
     * Css
     */
    wp_enqueue_style('shiftpress', get_template_directory_uri() . '/public/css/shiftpress.css', array(), '', 'all');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700', array(), '', 'all');

    /**
     * Scripts base
     */
    wp_enqueue_script('jquery', true);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/public/js/main.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'shiftpress_enqueue_scripts', 999);
