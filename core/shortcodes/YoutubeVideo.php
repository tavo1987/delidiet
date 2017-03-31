<?php

/**
* Class to register shortcode youtube video
*/
class YoutubeVideo
{

    public function __construct()
    {
        add_shortcode('sp_youtube', [$this, 'shortcode_youtube_video']);
    }

    public function shortcode_youtube_video($atts, $content=null)
    {
        $attributes = shortcode_atts(['id' => '',], $atts);

        extract($attributes);

        $output  = '<div class="youtube-player" data-id="'.$id.'"></div>';

        return $output;
    }
}
