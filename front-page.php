
<?php get_header(); ?>

<section class="sp-slider">
    <?php echo do_shortcode('[smartslider3 slider=1]');?>
</section>

<section role="main" class="content front-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!--=====================================================
                SECTION ONE
            =====================================================-->
        <div class="row">
            <div class="small-12 large-8 columns">
                <div class="row">
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="one-section section">
                            <div class="section__header">
                                <h2 class="section__title section__title--big"><?php the_field('titulo'); ?></h2>
                                <?php
									$image = get_field('imagen_logo');
									if( !empty($image) ): ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
                            </div><!-- . /END HEADER-->
                            <p class="section__description">
                                <?php the_field('descripcion'); ?>
                            </p>
                            <a href="<?php the_field('url_saber_mas'); ?>" class="button button--plus button--plus--gray">
                                <i class="icon-plus"></i>
                                <?php the_field('texto_boton'); ?>
                            </a>
                        </div><!-- . /END SECTION-->
                    </div><!-- . /END COLUMN-->

                    <div class="small-12 medium-6 large-6 text-center columns section">
						<?php
							$image = get_field('image');
							if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
                    </div><!-- . /END COLUMN-->

                    <div class="small-12 columns section"
                        style="background: url('http://delidiet.dev/wp-content/uploads/background-imc-section.jpg');
                        background-size: cover;">
                        <div class="section__header">
                            <h2 class="section__title section__title--white"> <?php the_field('titulo_2'); ?> </h2>
                        </div><!-- . /END HEADER-->
                        <p class="section__description section__description--white">
                        <?php the_field('descripcion_2'); ?>
                        </p>
                    </div><!-- . /END COLUMN-->
                </div><!-- . /END ROW-->
            </div><!-- . /END COLUMNS-->

            <div class="small-12 large-4 columns section section--align-bottom section--padding-left"
                style="background: url('http://delidiet.dev/wp-content/uploads/background-almuerzo-light.jpg');
                background-size: cover;"
                >
                <div class="section__header">
                    <img src="http://delidiet.dev/wp-content/uploads/almuerzo.png" alt="Logo">
                    <h2 class="section__title section__title--white  section__title--big" >
                     <?php the_field('titulo3'); ?>
                     </h2>
                </div>

                <p class="section__description section__description--white">
                    <?php the_field('descripcion_3'); ?>
                </p>
                <a class="button button--plus" href="<?php the_field('url_tres'); ?>">
                     <i class="icon-plus"></i>
                    <?php the_field('texto_boton_2'); ?>
                </a>
            </div><!-- . /END COLUMN-->
        </div><!-- . /END ROW-->


    <!--=====================================================
            SECTION TWO
        =====================================================-->
    <div class="section-two bg-color">
        <div class="row">
            <div class="small-12 large-8 columns background-section background-section--hide-small" data-background-src="http://delidiet.dev/wp-content/uploads/background-fruits.png">
                <div class=" section">
                   <div class="section__header">
                   <?php
						$image = get_field('imagen_logo');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
                        <h2 class="section__title section__title--big">
                        	<?php the_field('titulo_4'); ?>
                        </h2>
                    </div><!-- . /END HEADER-->
                    <div class="section__subtitle">
                        <h3 class="gray-color">
                            <?php the_field('subtitulo'); ?>
                        </h3>
                    </div><!-- . /END SUBTITLE SECTION4-->
                    <p class="section__description">
                        <?php the_field('descripcion_4'); ?>
                    </p>
                    <a href="<?php the_field('url_4'); ?>" class="button button--plus button--plus--gray">
                       <i class="icon-plus"></i>
                       <?php the_field('texto_boton_4'); ?>
                   </a>
                </div><!-- . /END SECTION-->
            </div><!-- . /END COLUMN-->

            <div class="small-12 large-4 columns hide-for-small-only">
                <div class="row">
                    <div class="small-12 columns section section--padding-left">
                        <h2 class="section__title section__title--gray section__title--padding-top-large">
                            <strong class="section__title--small"><?php the_field('titulo_4_columna_derecha_small'); ?></strong>
                            <br/><?php the_field('titulo_4_columna_derecha_big'); ?>
                        </h2>
                        <p>
                            <?php the_field('descripcion_4_derecha'); ?>
                        </p>
                    </div>
                    <div class="small-12 columns section section--padding-left section--padding-top-none">
                        <div class="section__header">
                            <h2 class="section__title section__title--gray">
                                <strong class="section__title--small">
                                <?php the_field('titulo_4_columna_derecha_2_small'); ?></strong>
                                <br><?php the_field('titulo_4_columna_derecha_2_big'); ?>
                            </h2>
                        </div>

                        <p>
                            <?php the_field('descripcion_4_derecha_3'); ?>
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
                                <?php the_field('como_funciona'); ?>
                            </h2>
                            <?php
						$imagee = get_field('imagen_logo_');
						if( !empty($image) ): ?>
							<img src="<?php echo $imagee['url']; ?>" alt="<?php echo $imagee['alt']; ?>" />
						<?php endif; ?>
                        </div>
                    </div><!-- . /END COLUMN-->

                    <div class="small-12 medium-6 large-12 columns  padding-top--medium">
                        <p class="section__description section__description--padding-bottom-none">
                            <?php the_field('descripcion_video'); ?>
                        </p>
                        <a class="button button--plus button--plus--gray" href="<?php the_field('url_video'); ?>">
                             <i class="icon-plus"></i>
                            <?php the_field('texto_boton_video'); ?>
                        </a>
                    </div><!-- . /END COLUMN-->
                </div><!--./ END ROW-->
            </div><!-- . /END COLUMN-->

            <div class="small-12 medium-12 large-8 columns">
                <div class="responsive-embed widescreen">
                    <iframe width="640" height="360" src="<?php the_field('src_iframe'); ?>" frameborder="0" allowfullscreen></iframe>
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
                        <h2 class="section__title section__title--white">
                        <?php the_field('title_footer'); ?>
                        </h2>
                    </div><!-- . /END HEADER-->
                    <p class="section__description section__description--full-width section__description--white">
                        <?php the_field('description_footer'); ?>
                    </p>
                    <a href="<?php the_field('url_footer'); ?>" class="button button--plus">
                       <i class="icon-plus"></i>
                       <?php the_field('texto_boton_footer'); ?>
                   </a>
                </div><!-- . /END SECTION-->
            </div><!-- . /END COLUMN-->
        </div><!-- . /END ROW-->
    </div><!-- ./ BACKGROUND SECTION-->
    <?php endwhile; ?>
    <?php endif; ?>
</section><!-- ./END MAIN-->

<?php get_footer(); ?>

