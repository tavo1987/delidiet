    <?php

/**
 * Shortcode to show steps delidiet process
 */
class FeaturedSection
{
    public function __construct()
    {
        add_shortcode('sp_featured_section', [$this, 'featured_section']);
    }

    public function featured_section($atts, $content='')
    {
        $attributes = shortcode_atts(
            [
                'class'  => '',
                'image'  => '',
            ], $atts);

        extract($attributes);

        $output = ' <div class="featured-section '.$class.'">';
            $output .= '<div class="featured-section__header">';
                $output .= '<div class="row">';
                    $output .= '<div class="columns">';
                        $output .= '<img class="featured-section__image" src="'.$image.'" alt="Feaured section image"/>';
                    $output .= '</div>';
                $output .= '</div>';
            $output .= '</div>';

            $output .= '<div class="row featured-section__content">';
                $output .= '<div class="small-12 medium-12 large-12 columns section section--padding-top-none small-text-center">';
                    $output .= do_shortcode($content);
                $output .= '</div>';
            $output .= '</div>';
         $output .= '</div>';

        return $output;
    }

}
