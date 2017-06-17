<?php
/*
        Template Name: Blog
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
        <h3 class="u-hidden-visually">Liste de mes publications</h3>
        <ol class="o-list-bare card-wrapper">
            <li class="card card_no-padding">
                <header class="card__header">
                    <div class="tags">
                        <span class="tags__item">Front-end</span>
                        <span class="tags__item">HTML</span>
                        <span class="tags__item">CSS</span>
                        <span class="tags__item">JS</span>
                    </div>
                    <a href="post.html" class="card__title">à la découverte de ReactJS</a>
                    <time datetime="2017-09-12">12/09/2017</time>
                </header>
                <p class="card__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At deserunt id laudantium pariatur? Aliquid consequuntur, dignissimos error est labore provident quas. Autem culpa doloremque, dolorum facere nemo non perspiciatis unde.
                </p>
                <div class="u-center-text">
                    <a class="cta cta_lines cta_dark cta_small" href="post.html">Lire plus<span class="u-hidden-visually"> sur à la découverte de reactjs</span></a>
                </div>
            </li>
        </ol>
    </section>
</section>
<?php
get_footer();
?>
