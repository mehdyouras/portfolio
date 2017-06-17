<?php
get_header();
?>
<section class="main-wrapper">
    <h2 class="u-hidden-visually">Contenu principal</h2>
    <section class="introBlock">
        <?php pf_the_image(get_field('mehdy_photo', 'options'), 'pf_content_thin', false, false); ?>
        <h3 class="introBlock__title"><?php the_field('mehdy_name', 'options'); ?></h3>
        <address class="contactInfos">
            <span class="contactInfos__item icons_pink icons icons_email"><?php the_field('mehdy_email', 'options'); ?></span>
            <?php if(get_field('mehdy_phone', 'options')): ?>
            <span class="contactInfos__item icons_pink icons icons_phone"><?php the_field('mehdy_phone', 'options'); ?></span>
            <?php endif; ?>
        </address>
        <a class="cta cta_lines cta_light" href="cv.html">CV</a>
    </section>
    <div class="card-wrapper">
        <div class="card">
            <div class="u-center-text">
                <a class="cta cta_dark cta_lines" href="contact.html">M'engager</a>
            </div>
            <p class="blue">
                Je suis un jeune dévelopeur web de Huy en Belgique. Je suis un passioné du dévelopement backend propre, clair et documenté.
            </p>
            <p class="u-blue">
                <strong>Prêt à sauter dans votre prochain projet !</strong>
            </p>
        </div>
        <div class="card">
            <div class="u-center-text">
                <a class="cta cta_dark cta_lines" href="portfolio.html">Portfolio</a>
            </div>
            <p class="u-blue">
                J'entretiens une liste de tous mes travaux réalisés ainsi qu'une description de chacun de leurs points forts. C'est le meilleur moyen d'en apprendre plus sur ma façon de travailler.
            </p>
        </div>
    </div>
</section>
<?php
get_footer();
?>
