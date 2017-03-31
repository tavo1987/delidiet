
<?php get_header(); ?>

    <section role="main" class="sp-page sp-single">
        <div class="featured-image">
            <?php if ( get_the_post_thumbnail(422) ) { echo get_the_post_thumbnail(422); } ?>
        </div>

        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="smal-12 medium-6 large-4 columns">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="sp-thumbnail">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            }  ?>
                        </div>
                        <h3 class="text-left">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <?php the_excerpt(); ?>
                    </article>
                </div><!--./ END COLUMNS-->
            <?php endwhile;?>
                <!-- post navigation -->
                <div class="pagination">
                    <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
                </div>
            <?php endif; ?>
        </div><!--./ END ROW-->
    </section><!--./ END SECTION-->
<?php get_footer(); ?>
