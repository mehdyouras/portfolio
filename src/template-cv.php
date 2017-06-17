<?php
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
        <a class="cta cta_lines cta_light" href="portfolio.html">Portfolio</a>
    </section>
    <div class="card-wrapper">
        <div class="card">
            <h3 class="u-hidden-visually">Mon CV</h3>
            <ol class="o-list-bare">
                <li>
                    <p class="cv__title cv__title_right no-margin-top icons icons_edu"><time datetime="2015">2015</time> - <time datetime="2018">2018</time></p>
                    <p class="cv__content">
                        Bachelier en infographie orientation web
                    </p>
                </li>
                <li>
                    <p class="cv__title cv__title_right icons icons_edu"><time datetime="2015">2009</time> - <time datetime="2018">2015</time></p>
                    <p class="cv__content">
                        Humanités générales orientation sciences et sciences économiques
                    </p>
                </li>
            </ol>
            <dl>
                <dt class="cv__title icons icons_globe">Langues parlées</dt>
                <dd class="cv__content">Français et anglais</dd>

                <dt class="cv__title icons icons_code">Langages</dt>
                <dd class="cv__content">HTML5</dd>
                <dd class="cv__content">CSS3</dd>
                <dd class="cv__content">Javascript</dd>
                <dd class="cv__content">PHP</dd>
            </dl>

            <div>
                <p class="cv__title icons icons_game">Hobbies</p>
                <p class="cv__content">Les technologies (nouvelles ou non), les jeux vidéos, la photographie, boire des coups avec les copains</p>
            </div>

            <dl class="no-margin-bottom">
                <dt class="cv__title icons icons_plus">Extras</dt>
                <dd class="cv__content icons icons_car">Permis B</dd>
                <dd class="cv__content icons icons_smile">Un sourire</dd>
                <dd class="cv__content icons icons_battery">De l'énergie à revendre</dd>
            </dl>
        </div>
    </div>
</section>
<?php
get_footer();
?>
