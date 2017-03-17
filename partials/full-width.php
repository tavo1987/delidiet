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
                    <header class="sp-page__header bg-color">
                        <h1 class="sp-page__title"><?php the_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <div class="sp-page__content sp-page__content--full-width">
                    <?php the_content(); ?>
                </div><!--./ END CONTENT-->
            </article>
        <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>

