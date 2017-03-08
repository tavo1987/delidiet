<?php get_header(); ?>
<section class="sp-content sp-page" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="sp-page__header">
                <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
                <h1 class="sp-page__title"><?php the_title(); ?></h1>
            </header>
            <section class="sp-page__content">
                <?php the_content(); ?>
            </section>
        </article>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
