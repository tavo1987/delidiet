<?php
/**
 * Template Name: Full Width
 */
?>
<?php get_header(); ?>
    <section class="sp-page full-width" role="main">
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

                <div class="sp-page__content sp-page__content--full-width">
                    <?php the_content(); ?>

                    <!--=====================================================
                            STEPS
                        =====================================================-->
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
                        <div class="row anpanded featured-section__content align-center">
                            <div class="small-12 medium-12 large-12 columns section section--padding-top-none small-text-center">
                                <div class="section__header">
                                    <h2 class="section__title  section__title--green section__title--padding-botom section__title--padding-top" >
                                        ¿Cómo <strong>funciona?</strong>
                                    </h2>
                                </div>
                                <div class="responsive-embed widescreen">
                                    <iframe src="https://www.youtube-nocookie.com/embed/LlzFfE2gvcw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="row align-justify row--padding-top row--padding-bottom">
                                    <div class="small-12 medium-12 large-4 columns padding-right--large border-right-dashed">
                                        <h3>Dieta de <br> <strong>14 días</strong></h3>
                                        <h4>
                                            QUE INCLUYE 14 DESAYUNOS, 14 ALMUERZOS Y 14 CENAS DELICIOSAS Y NUTRITIVAS
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque dis parturient montes.
                                        </p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odio atque sit eum eveniet consequuntur iure id, facere nesciunt tempore in, possimus ipsum et quia repudiandae cupiditate vel excepturi ratione!</p>
                                    </div><!-- . /END COLUMN-->
                                    <div class="small-12 medium-12 large-4 columns padding-left--large padding-right--large border-right-dashed">
                                        <h3>Baja de <br> <strong>13 a 26 libs</strong></h3>
                                        <h4>
                                            CONSUMES 1.000 CALORÍAS POR DÍA, 43% PROTEINAS, 22% GRASAS Y 35% CARBOHIDRATOS
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque dis parturient montes.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam necessitatibus nesciunt laboriosam molestias impedit ducimus corrupti soluta dolorem perspiciatis reprehenderit. Fuga, facilis nihil dolorem voluptatem aut exercitationem numquam ad sunt.
                                        </p>
                                    </div><!-- . /END COLUMN-->
                                    <div class="small-12 medium-12 large-4 columns padding-left--large">
                                        <h3>Servicio <br> <strong>a domicilio</strong></h3>
                                        <h4>
                                            SU PEDIDO ES DESPACHADO POR NUESTROS REPARTIDOSRES A SU OFICINA O CASA
                                        </h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque dis parturient montes.
                                        </p>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque cupiditate architecto quibusdam excepturi! Ipsa ut fugit consectetur ea id recusandae non. Itaque corrupti suscipit ducimus asperiores facilis, quibusdam repudiandae temporibus.
                                        </p>
                                    </div><!-- . /END COLUMN-->
                                </div><!-- . /END ROW-->
                            </div><!-- . /END COLUMN-->
                        </div><!-- . /END ROW-->
                    </div><!-- . /END FEATURED SECTION-->

                </div><!--./ END CONTENT-->
            </article>
        <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>

