<?php
/*
        Template Name: Contact
*/
get_header();
?>
<section class="main-wrapper">
    <h2 aria-level=2 class="u-hidden-visually">Contenu principal</h2>
    <section class="introBlock">
        <?php get_template_part('part', 'mehdy'); ?>
        <a class="cta cta_lines cta_light" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_title'); ?></a>
    </section>
    <div class="card-wrapper">
        <div class="card">
            <h3 aria-level=3 class="u-hidden-visually">Formulaire de contact</h3>
            <?php the_field('form'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>
