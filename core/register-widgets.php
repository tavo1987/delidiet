<?php

/**
 * [blankslate_widgets_init register widgets for theme]
 * @return [type] [description]
 */
function shiftpress_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'shiftpress'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Header Widget Area', 'shiftpress'),
        'id' => 'header-widget-area',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Widget Area', 'shiftpress'),
        'id' => 'footer-widget-area',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'shiftpress_widgets_init');
