<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php if (get_option('facebook_pixel_code') != ''): ?>
        <?php get_template_part( 'partials/code', 'facebook' ); ?>
    <?php endif; ?>

    <?php if (get_option('universal_analytics') != ''): ?>
        <?php get_template_part( 'partials/code', 'analytics' ); ?>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header" role="banner"  id="sp-header">
        <section class="branding">
            <div class="logo">
                <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1><span class="hide-text">'.get_bloginfo('name').'</span>'; } ?>
                    <?php if (function_exists('get_custom_logo')): ?>
                        <?php echo get_custom_logo(); ?>
                    <?php else: ?>
                        <a href="<?php site_url(); ?>"><?php bloginfo('name'); ?></a>
                    <?php endif; ?>
                <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
            </div>
        </section><!--END SECTION-->

        <span id="toggle-menu" class="icon-menu" role="button"></span>

        <nav role="navigation" class="navigation" id="main-navigation">
            <?php wp_nav_menu([
                'theme_location' => 'main',
                'menu_class'     => 'sp-menu',
                'container'      => ''
            ])?>
        </nav><!--END NAV-->

        <?php get_sidebar('header'); ?>

    </header><!-- ./END HEADER-->

    <div class="container">
