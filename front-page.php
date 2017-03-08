
<?php get_header(); ?>

<section class="sp-slider">
    <?php echo do_shortcode('[smartslider3 slider=1]');?>
</section>

<div class="row">
    <section id="content" role="main" class="small-12 medium-12 large-9 columns">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'partials/entry' ); ?>
            <?php comments_template(); ?>
        <?php endwhile;?>
            <!-- post navigation -->
            <div class="pagination">
                <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
            </div>
        <?php endif; ?>
    </section>
</div>
<?php get_footer(); ?>

