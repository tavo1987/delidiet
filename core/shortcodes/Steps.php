<?php

/**
 * Shortcode to show steps delidiet process
 */
class Steps
{
    public function __construct()
    {
        add_shortcode('sp_steps', [$this, 'shortcode_steps']);
        add_shortcode('sp_steps_item', [$this, 'shortcode_step_item']);
    }

    public function shortcode_steps($atts, $content=null)
    {
        $attributes = shortcode_atts(['class' => '',], $atts);

        extract($attributes);

        $output  = '<div class="sp-steps '.$class.'">';
        $output .=  do_shortcode($content);
        $output .= '</div>';

        return $output;
    }

    public function shortcode_step_item($atts, $content='')
    {
        $attributes = shortcode_atts(
            [
                'icon'  => '',
                'number'  => '',
            ], $atts);

        extract($attributes);

        $output = '<div class="sp-steps__item">';
            $output .= '<div><img class="sp-steps__item__icon" src="'.$icon.'" alt="icon"></div>';
            $output .= '<div class="sp-steps__item__number"><span>'.$number.'</span><span>PASO</span></div>';
            $output .= '<div class="sp-steps__item__description">'.do_shortcode($content).'</div>';
        $output .= '</div>';

        return $output;
    }

}
