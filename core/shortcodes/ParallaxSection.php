<?php

/**
 * Shortcode to show parallax section
 */
class ParallaxSection
{
    public function __construct()
    {
        add_shortcode('sp_parallax_section', [$this, 'shortcode_parallax_section']);
    }

    public function shortcode_parallax_section($atts, $content='')
    {
        $attributes = shortcode_atts(
            [
                'background'  => '',
            ], $atts);

        extract($attributes);

        $output = '<div class="background-section parallax" data-background-src="'.$background.'">';
        $output .= do_shortcode($content);
        $output .= '</div>';

        return $output;
    }
}
