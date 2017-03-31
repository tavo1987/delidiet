<?php get_header(); ?>
<section class="sp-page" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ):?>
            <header class="sp-page__header" data-page-featured-image="<?php echo get_the_post_thumbnail_url() ?>">
                <h1 class="sp-page__title"><?php the_title(); ?></h1>
            </header>
        <?php else: ?>
            <header class="sp-page__header" data-page-featured-image="<?php site_url(); ?>/wp-content/uploads/feature-image-contact.jpg">
                <h1 class="sp-page__title">404</h1>
            </header>
        <?php endif; ?>
		<section class="sp-page__content text-center">
            <p><?php _e( 'Parece que has caído en un error 404 y que la página que buscabas no existe.', 'shiftpress' ); ?></p>
            <a class="button" href="<?php echo site_url(); ?>/">Ir a la página de inicio</a>
		</section>
	</article>
</section>
<?php get_footer(); ?>
