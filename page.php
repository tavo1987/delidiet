<?php get_header(); ?>
<section class="sp-content sp-page" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="sp-page__header">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <h1 class="sp-page__title"><?php //the_title(); ?></h1>
        </header>
        <div class="row">
            <div class="small-12 medium-6 large-9 columns">
                <h1 class="sp-what-is">¿Qué <strong>es</strong>?</h1>
            </div>
        </div>
        <section class="sp-page__content">
            <div class="what-content">
                <div class="row">
                    <div class="small-12 medium-6 large-5 columns">
                        <p class="sp-what-text">LA DIETA ES UN PROGRAMA DE 14 DÍAS
                            <br> CON 14 DESAYUNOS, <br>14 ALMUERZOS
                        Y 14 CENAS, PARA <br> ADELGAZAR SANA Y RÁPIDAMENTE</p>
                    </div>
                    <div class="small-12 medium-6 large-7 columns">
                        <p>Es una dieta americana, médica, reconocida desde hace décadas por sis rápidos resultados. Tiene una duración de 14 días corridos, dentro de los cuales puede bajar un promedio de 5 a 12kg. (11 a 26 libras), resultados
                            que dependen de variables como sexo, edad, nivel de obesidad, metabolismo y más que nada la disciplina con la que se sigue la dieta.
                            <img src="http://delidiet.dev/wp-content/uploads/salad-bowl-1.jpg" alt="Bowl">
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-6 large-4 columns">
                    <div class="icono">
                        <img src="http://delidiet.dev/wp-content/uploads/icon-delivery.png">
                    </div>
                    <div class="steps">
                        <h3>1 <br> PASO</h3>
                    </div>
                    <div class="descriptions">
                        <p>RECIBE POR 14 DÍAS <br>
                            NUESTRA DIETA EN <br>
                        SU DOMICILIO U OIFINA</p>
                    </div>
                </div>
                <div class="small-12 medium-3 large-4 columns">
                    <div class="icono">
                        <img src="http://delidiet.dev/wp-content/uploads/crockery.png">
                    </div>
                    <div class="steps">
                        <h3>2 <br> PASO</h3>
                    </div>
                    <div class="descriptions">
                        <p>RECIBE POR 14 DÍAS <br>
                            NUESTRA DIETA EN <br>
                        SU DOMICILIO U OIFINA</p>
                    </div>
                </div>
                <div class="small-12 medium-6 large-4 columns">
                    <div class="icono">
                        <img src="http://delidiet.dev/wp-content/uploads/icon-human.png">
                    </div>
                    <div class="steps">
                        <h3>3 <br> PASO</h3>
                    </div>
                    <div class="descriptions">
                        <p>RECIBE POR 14 DÍAS <br>
                            NUESTRA DIETA EN <br>
                        SU DOMICILIO U OIFINA</p>
                    </div>
                </div>
            </div>
            <div class="video-bryan">
                <img class="girl-video" src="http://delidiet.dev/wp-content/uploads/girl-recomendation.png">
                <div class="sp-video">
                    <iframe class="info-video" width="600" height="300" src="https://www.youtube.com/embed/apcUhQREnJ4" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php the_content(); ?>
        </section>
    </article>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>