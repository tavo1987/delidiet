
<?php get_header(); ?>

<section class="sp-slider">
    <?php echo do_shortcode('[smartslider3 slider=1]');?>
</section>

<section role="main" class="content front-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <!--=====================================================
            SECTION ONE
        =====================================================-->
    

    <!--=====================================================
            SECTION TWO
        =====================================================-->
    <div class="section-two bg-color">
        <div class="row">
            <div class="small-12 large-8 columns background-section background-section--hide-small" data-background-src="http://delidiet.dev/wp-content/uploads/background-fruits.png">
                <div class=" section">
                   <div class="section__header">
                        <img src="http://delidiet.dev/wp-content/uploads/logo-scarsdale-1.png" alt="Test">
                        <h2 class="section__title section__title--big">DIETA de <br> <strong>14 días</strong></h2>
                    </div><!-- . /END HEADER-->
                    <div class="section__subtitle">
                        <h3 class="gray-color">
                            PROGRAMA PARA <br>
                            ADELGAZAR DE UNA <br>MANERA SANA Y RÁPIDA
                        </h3>
                    </div><!-- . /END SUBTITLE SECTION4-->
                    <p class="section__description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.
                    </p>
                    <a href="#" class="button button--plus button--plus--gray">
                       <i class="icon-plus"></i>
                       SABER MAS
                   </a>
                </div><!-- . /END SECTION-->
            </div><!-- . /END COLUMN-->

            <div class="small-12 large-4 columns hide-for-small-only">
                <div class="row">
                    <div class="small-12 columns section section--padding-left">
                        <h2 class="section__title section__title--gray section__title--padding-top-large">
                            <strong class="section__title--small">SIN</strong>
                            <br/>PASTILLAS
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt voluptatem soluta obcaecati ex hic, maxime quod voluptates similique iusto nulla. Nesciunt porro maxime nulla dolores, ducimus tenetur, ex molestias.
                        </p>
                    </div>
                    <div class="small-12 columns section section--padding-left section--padding-top-none">
                        <div class="section__header">
                            <h2 class="section__title section__title--gray">
                                <strong class="section__title--small">SERVICIO A</strong>
                                <br>DOMICILIO
                            </h2>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt voluptatem soluta obcaecati ex hic, maxime quod voluptates similique iusto nulla. Nesciunt porro maxime nulla dolores, ducimus tenetur, ex molestias.
                        </p>
                    </div><!-- . /END COLUMN-->
                </div><!-- . /END ROW-->
            </div><!-- . /END COLUMN-->
        </div><!-- . /END ROW-->
    </div><!--./ END SECTION TWO-->

    <!--=====================================================
            FEATURED SECTION
        =====================================================-->
    <div class="featured-section bg-color">
        <div class="featured-section__header">
            <div class="row">
                <div class="columns">
                    <img class="featured-section__image" src="http://delidiet.dev/wp-content/uploads/girl-recomendation.png" alt="Feaured section image">
                </div><!--./ COLUMNS-->
            </div><!--./ FEAURED ROW-->
        </div><!--./ FEAURED IMAGE HEADER-->

        <div class="row featured-section__content">
            <div class="small-12 medium-12 large-4 columns section section--padding-top-none small-text-center">
                <div class="row aling-center">
                    <div class="small-12 medium-6 large-12 columns">
                        <div class="section__header">
                            <h2 class="section__title  section__title--green section__title--padding-botom, section__title--padding-top" >
                                ¿Cómo <br>
                                <strong>funciona?</strong>
                            </h2>
                            <img src="http://delidiet.dev/wp-content/uploads/black-scarsdale-logo.png" alt="Logo">
                        </div>
                    </div><!-- . /END COLUMN-->

                    <div class="small-12 medium-6 large-12 columns  padding-top--medium">
                        <p class="section__description section__description--padding-bottom-none">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.
                        </p>
                        <a class="button button--plus button--plus--gray" href="#">
                             <i class="icon-plus"></i>
                            Saber más
                        </a>
                    </div><!-- . /END COLUMN-->
                </div><!--./ END ROW-->
            </div><!-- . /END COLUMN-->

            <div class="small-12 medium-12 large-8 columns">
                <div class="responsive-embed widescreen">
                    <iframe width="640" height="360" src="https://www.youtube-nocookie.com/embed/LlzFfE2gvcw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div><!-- . /END COLUMN-->
        </div><!-- . /END ROW-->
    </div><!-- . /END FEATURED SECTION-->

    <!--=====================================================
            FOOTER BANNER
        =====================================================-->
    <div class="background-section parallax" data-background-src="http://delidiet.dev/wp-content/uploads/banner.jpg">
        <div class="row align-center">
            <div class="small-12 medium-8 large-7 columns background-section">
                <div class=" section">
                   <div class="section__header">
                        <h2 class="section__title section__title--white">¡TE <br> <strong>VISITAMOS!</strong></h2>
                    </div><!-- . /END HEADER-->
                    <p class="section__description section__description--full-width section__description--white">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.
                    </p>
                    <a href="#" class="button button--plus">
                       <i class="icon-plus"></i>
                       SABER MAS
                   </a>
                </div><!-- . /END SECTION-->
            </div><!-- . /END COLUMN-->
        </div><!-- . /END ROW-->
    </div><!-- ./ BACKGROUND SECTION-->
    <?php endwhile; ?>
    <?php endif; ?>
</section><!-- ./END MAIN-->

<?php get_footer(); ?>

