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
        <a class="cta cta_lines cta_light" href="cv.html">CV</a>
    </section>
    <div class="card-wrapper">
        <div class="card">
            <h3 class="u-hidden-visually">Formulaire de contact</h3>
            <form class="contact__form" action="#">
                <label for="name" class="contact__label">Votre nom</label>
                <input class="contact__input" id="name" type="text" name="name">

                <label for="email" class="contact__label">Votre adresse email</label>
                <input class="contact__input" id="email" type="email" name="email">

                <label for="subject" class="contact__label">Le sujet</label>
                <input class="contact__input" id="subject" type="text" name="subject">

                <label class="contact__label" for="description">Votre message</label>
                <textarea class="contact__input" name="description" id="description" cols="30" rows="10"></textarea>

                <input class="contact__submit cta cta_dark no-margin-bottom" type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</section>
<?php
get_footer();
?>
