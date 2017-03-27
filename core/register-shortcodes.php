<?php

 require_once 'shortcodes/SectionOne.php';
 $sectionone = new SectionOne();



 /*
    ==================================================================
        ROW
    ==================================================================
*/
    function row($atts, $content=null)
    {
        $attributes = shortcode_atts(
            [
                'class'      => '',
            ], $atts);
        extract($attributes);

        $output  = '<div class="row '.$class.'">';
        $output .=  do_shortcode($content);
        $output .= '</div>';
        return $output;
    }
    add_shortcode('sp_row', 'row');

/*
    ==================================================================
        COLUMN
    ==================================================================
*/
    function column($atts, $content=null)
    {
        $attributes = shortcode_atts(
            [
                'class' => '',
            ], $atts);
        extract($attributes);

        $output  = '<div class="'.$class.' columns">'.do_shortcode($content).'</div>';
        return $output;
    }
    add_shortcode('sp_column', 'column');

/*
    ==================================================================
        BUTTON
    ==================================================================
*/

function button($atts, $content=null)
{
    $attributes = shortcode_atts(
        [
            'href'  => '#',
            'target' => '_self',
            'class' => '',
        ], $atts);
    extract($attributes);

    return '<a href="'.$href.'" target="'.$target.'" class="button radius'.$class.' columns">'.$content.'</a>';
}
add_shortcode('sp_button', 'button');

function plusButton($atts, $content=null)
{
    $attributes = shortcode_atts(
        [
            'href'  => '#',
            'target' => '_self',
            'class' => '',
            'text' => '',
        ], $atts);
    extract($attributes);

    $output  = '<a href="'.$href.'" target="'.$target.'" class="button button--plus '.$class.'">';
    $output .= $text;
    $output .= '</a>';
    return $output;
}
add_shortcode('sp_plus_button', 'plusButton');


 /*
    ==================================================================
        SP STEPS
    ==================================================================
*/
    require_once 'shortcodes/Steps.php';
    $steps = new Steps();

/*
    ==================================================================
        SP STEPS
    ==================================================================
*/
    require_once 'shortcodes/FeaturedSection.php';
    $feturedSection = new FeaturedSection();

/*
    ==================================================================
        RESPONSIVE EMBED
    ==================================================================
*/
    function responsive_embed($atts, $content= null)
    {
        $attributes = shortcode_atts(
            [
                'class' => '',
            ], $atts);

        extract($attributes);

        $output  = '<div class="js-remove-paragraph responsive-embed '.$class.'">'.do_shortcode($content).'</div>';
        return $output;
    }
    add_shortcode('sp_responsive_embed', 'responsive_embed');

/*
    ==================================================================
        PARALLAX SECCTION
    ==================================================================
*/
    require_once 'shortcodes/ParallaxSection.php';
    $parallaxSection = new ParallaxSection();

/*
    ==================================================================
        SP WHATS APP WIDGET
    ==================================================================
*/
    require_once 'shortcodes/WhatsAppWidget.php';
    $whatsappWidget = new WhatsAppWidget();


/**
 * Formating all shortcodes scapping auto <p></p>
 */

add_filter('the_content', 'shortcode_unautop', 100);
remove_filter('acf_the_content', 'wpautop');
//decide when you want to apply the auto paragraph
add_filter('the_content', 'remove_autoparagraph');
function remove_autoparagraph($content)
{
    remove_filter('the_content', 'wpautop', 99);
    if (is_page('25') || is_singular('showroom')) {
        return $content;
    }
    add_filter('the_content', 'wpautop', 99);
    return $content;
}
