<?php get_header(); ?>
    <section class="sp-page" role="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( has_post_thumbnail() ):?>
                    <header class="sp-page__header" data-page-featured-image="<?php echo get_the_post_thumbnail_url() ?>">
                        <h1 class="sp-page__title"><?php the_title(); ?></h1>
                    </header>
                <?php else: ?>
                    <header class="sp-page__header bg-color"">
                        <h1 class="sp-page__title"><?php the_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="sp-page__content">
                    <?php the_content(); ?>
                    <div class="sp-steps">
                        <div class="sp-steps__item">
                            <img class="sp-steps__item__icon" src="http://delidiet.dev/wp-content/uploads/icon-delivery.png" alt="item">
                            <div class="sp-steps__item__number">
                                <span>1</span>
                                <span>PASO</span>
                            </div>
                            <p class="sp-steps__item__description">
                                RECIBE POR 14 DÍAS NUESTRA DIETA EN SU DOMICILIO U OFICINA
                            </p>

                        </div><!--./ END SP STEPS ITEMS-->

                        <div class="sp-steps__item">
                            <img class="sp-steps__item__icon" src="http://delidiet.dev/wp-content/uploads/crockery.png" alt="item">
                            <div class="sp-steps__item__number">
                                <span>2</span>
                                <span>PASO</span>
                            </div>
                            <p class="sp-steps__item__description">
                                DISFRUTE DE UN MENÚ BAJO EN CALORÍAS ALTAMENTE Y PROTÉICO
                            </p>
                        </div><!--./ END SP STEPS ITEMS-->

                        <div class="sp-steps__item">
                            <img class="sp-steps__item__icon" src="http://delidiet.dev/wp-content/uploads/icon-human.png" alt="item">
                            <div class="sp-steps__item__number">
                                <span>3</span>
                                <span>PASO</span>
                            </div>
                            <p class="sp-steps__item__description">
                                BAJE DE PESODE MANERA RÁPIDA Y EFECTIVA
                            </p>
                        </div><!--./ END SP STEPS ITEMS-->
                    </div><!--./ END SP STEPS-->
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

                        <div class="row featured-section__content align-center">
                            <div class="small-12 medium-12 large-12 columns section section--padding-top-none small-text-center">
                                <div class="section__header">
                                    <h2 class="section__title  section__title--green section__title--padding-botom section__title--padding-top" >
                                        ¿Cómo <strong>funciona?</strong>
                                    </h2>
                                </div>
                                <div class="responsive-embed widescreen">
                                    <iframe src="https://www.youtube-nocookie.com/embed/LlzFfE2gvcw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div><!-- . /END COLUMN-->
                        </div><!-- . /END ROW-->

                    </div><!-- . /END FEATURED SECTION-->
                </div><!--./ END CONTENT-->
            </article>
        <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>
