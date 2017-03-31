
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
                                <h2 class="section__title section__title--big"><?php the_field('section_one_title'); ?></h2>
                                <h3 class="section__subtitle"><?php the_field('section_one_subtitle'); ?></h3>
                            </div><!-- . /END HEADER-->

                            <div class="section__description">
                                <?php the_field('section_one_content'); ?>
                            </div>
                        </div><!--. /END SECTION-->
                    </div><!--. /END COLUMN-->

                    <div class="small-12 medium-6 large-6 text-center columns section">
                        <?php the_field('section_one_content_right'); ?>
                    </div><!-- . /END COLUMN-->

                    <div class="small-12 columns section"
                        style="background: url(<?php the_field('section_one_bottom_background');?>); background-size: cover;">
                        <div class="section__header">
                            <h2 class="section__title section__title--white"> <?php the_field('section_one_bottom_title'); ?> </h2>
                        </div><!-- . /END HEADER-->
                        <div class="section__description section__description--white">
                            <?php the_field('section_one_bottom_content'); ?>
                        </div>
                    </div><!-- . /END COLUMN-->
                </div><!-- . /END ROW-->
            </div><!-- . /END COLUMNS-->

            <div class="small-12 large-4 columns section section--align-bottom section--padding-left"
                style="background: url(<?php the_field('section_two_background');?>); background-size: cover;">
                <div class="section__header">
                    <h3 class="section__subtitle section__subtitle--white section__subtitle--before"><?php the_field('section_two_subtitle'); ?></h3>
                    <h2 class="section__title section__title--white  section__title--big"><?php the_field('section_two_title'); ?></h2>
                </div>

                <div class="section__description section__description--white">
                    <?php the_field('section_two_content'); ?>
                </div>
            </div><!-- . /END COLUMN-->
        </div><!-- . /END ROW-->


    <!--=====================================================
            SECTION THREE
        =====================================================-->
    <div class="section-two bg-color">
        <div class="row">
            <div class="small-12 large-8 columns background-section background-section--hide-small" data-background-src="<?php the_field('section_three_background'); ?>">
                <div class=" section">
                    <div class="section__header">
                        <h3 class="section__subtitle section__subtitle--before"><?php the_field('section_three_subtitle'); ?></h3>
                        <h2 class="section__title section__title--big"><?php the_field('section_three_title'); ?></h2>
                    </div><!-- . /END HEADER-->

                    <div class="section__description">
                        <?php the_field('section_three_content'); ?>
                    </div>
                </div><!-- . /END SECTION-->
            </div><!-- . /END COLUMN-->

            <div class="small-12 large-4 columns hide-for-small-only">
                <?php the_field('section_three_right_content'); ?>
            </div><!-- . /END COLUMN-->
        </div><!-- . /END ROW-->
    </div><!--./ END SECTION TWO-->

    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>
</section><!-- ./END MAIN-->

<?php get_footer(); ?>

