<?php
/*
        Template Name: Portfolio
*/
get_header();
?>
<section class="main-wrapper">
    <h2 class="u-hidden-visually">Contenu principal</h2>
    <section class="introBlock">
        <img src="img/portrait.jpg" alt="Portrait de Mehdy Ouras">
        <h3 class="introBlock__title">Mehdy Ouras</h3>
        <address class="contactInfos">
            <span class="contactInfos__item icons_pink icons icons_email">mehdy@ouras.be</span>
            <span class="contactInfos__item icons_pink icons icons_phone">0471 79 85 15</span>
        </address>
        <a class="cta cta_lines cta_light" href="cv.html">CV</a>
    </section>
    <section>
        <h3 class="u-hidden-visually">Liste de mes travaux</h3>
        <ol class="o-list-bare card-wrapper">
            <li class="card card_no-padding">
                <header class="card__header">
                    <div class="tags">
                        <span class="tags__item">HTML</span>
                        <span class="tags__item">Front-end</span>
                        <span class="tags__item">CSS</span>
                    </div>
                    <a href="artiste.html" class="card__title">Site de Larry Burrows</a>
                    <time datetime="2017-09-12">12/09/2017</time>
                </header>
                <img class="card__image" src="img/works/artiste.jpg" alt="Site de l'artiste">
                <div  class="u-center-text">
                    <a class="cta cta_lines cta_dark cta_small" href="artiste.html">En savoir plus<span class="u-hidden-visually"> sur le site de Larry Burrows</span></a>
                </div>
                <div class="card__links">
                    <a href="#" class="card__link icons icons_link icons_blue"><span class="u-hidden-visually">Vers le site</span></a>
                    <a href="#" class="card__link icons icons_github icons_blue"><span class="u-hidden-visually">Vers le repo GitHub</span></a>
                </div>
            </li>
        </ol>
    </section>
</section>
<?php
get_footer();
?>
