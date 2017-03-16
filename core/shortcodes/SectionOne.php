<?php

/**
 * Shortcode para la sección 1 del front-page
 */
class SectionOne
{
    public function __construct()
    {
        add_shortcode('sp_one_section', [$this, 'shortcode_one_section']);
        add_shortcode('sp_one_section_item', [$this, 'shortcode_one_section_item']);
    }

    public function shortcode_one_section($atts, $content=null)
    {
        $attributes = shortcode_atts(
            [
                'class' => '',
            ], $atts);

        extract($attributes);

        $output  = '<div class="row">';
        $output .=  do_shortcode($content);
        $output .= '</div>';

        return $output;
    }

    public function shortcode_one_section_item($atts, $content='')
    {
        $attributes = shortcode_atts(
            [
                'title'                 => '',
                'src'                   =>'',
                'alt'                   =>'',
                'description'           =>'',
                'url'                   => '',
                'text'                  =>  '',
                'src2'                  =>  '',
                'alt2'                  =>  '',
                'bg'                  =>  '',
                'text'                  =>  '',
                'imc'                  =>  '',
                'description2'                  =>  '',
                'bg2'                  =>  '',
                'src3'                  =>  '',
                'alt3'                  =>  '',
                'title3'                  =>  '',
                'description3'                  =>  '',
                'url3'                  =>  '',
                'text3'                  =>  '',


            ], $atts);

        extract($attributes);

        $output  = '<div class="small-12 large-8 columns">';
        $output  .= '<div class="row">';
        $output  .= '<div class="small-12 medium-6 large-6 columns">';
        $output  .= '<div class="one-section section">';
        $output  .= '<div class="section__header">';
        $output .= '<h2 class="section__title section__title--big">'.$title.'</h2>';
        $output .= '<img src="'.$src.'" alt="'.$alt.'">';
        $output .= '</div>';
        $output .= '<p class="section__description">'.$description.'<p>';
        $output .= '<a href="'.$url.'" class="button button--plus button--plus--gray">';
        $output .= '<i class="icon-plus"></i>'.$text.'</a>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';

        $output .= '<div class="small-12 medium-6 large-6 text-center columns section">';
        $output .= '<img src="'.$src2.'" alt="'.$alt2.'">';
        $output .= '</div>';

        $output .= '<div class="small-12 columns section"
                    style="background: url('.$bg.');
                    background-size: cover;"
                    >';
        $output .= '<div class="section__header">';
        $output .= '<h2 class="section__title section__title--white">'.$imc.'</h2>';            
        $output .= '</div>';
        $output .= '<p class="section__description section__description--white">'.$description2.'</p>';
        $output .= '</div>';

       $output .= ' <div class="small-12 large-4 columns section section--align-bottom section--padding-left"
            style="background: url('.$bg2.');
            background-size: cover;"> ';
        $output .=   '<div class="section__header">' ;
        $output .=   '<img src="'.$src3.'" alt="'.$alt3.'">';
        $output .=   '<h2 class="section__title section__title--white  section__title--big" >'.$title3.'</h2>';
        $output .=   '</div>' ;

        $output .=   '<p class="section__description section__description--white">'.$description3.'</p>';
        $output .=    '<a class="button button--plus" href="'.$url3.'">';
        $output .=    '<i class="icon-plus"></i>'.$text3.'</a>';
        $output .= '</div><!-- . /END COLUMN-->';


        return $output;

    }

}
