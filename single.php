<?php get_header(); ?>
<section role="main" class="sp-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( has_post_thumbnail() ):?>
            <header class="sp-page__header" data-page-featured-image="<?php echo get_the_post_thumbnail_url() ?>">
                <h1 class="sp-page__title"><?php the_title(); ?></h1>
            </header>
        <?php else: ?>
            <header class="sp-page__header bg-color">
                <h1 class="sp-page__title"><?php the_title(); ?></h1>
            </header>
        <?php endif; ?>

        <div class="sp-page__content">
            <?php the_content(); ?>
        </div><!--./ END CONTENT-->

        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>

    <?php get_template_part( 'partials/nav', 'below-single' ); ?>

    </div>
</section>
<?php get_footer(); ?>
