<?php

/**
 * Shortcode to WhatsApp Widget
 */
class WhatsAppWidget
{
    public function __construct()
    {
        add_shortcode('sp_whats_app', [$this, 'shortcode_whats_app']);
    }

    public function shortcode_whats_app($atts, $content=null)
    {
        $attributes = shortcode_atts(
            [
                'class' => '',
                'href' => '',
                'title' => '',
                'phone' => ''
        ], $atts);

        extract($attributes);

        $output = '<div class="js-remove-paragraph whatsapp-widget">';
            $output .= '<a href="'.$href.'">';
                $output .= '<i class="icon-whatsapp"></i>';
                $output .= '<span class="whatsapp-widget__item whatsapp-widget__title">'.$title.'</span>';
                $output .= '<span class=" whatsapp-widget__item whatsapp-widget__number">'.$phone.'</span>';
            $output .= '</a>';
        $output .= '</div>';

        return $output;
    }

}
