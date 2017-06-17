<?php
/*
        Template Name: CV
*/
get_header();
?>
<section class="main-wrapper">
    <h2 class="u-hidden-visually"><?= __('Contenu principal', 'pf'); ?></h2>
    <section class="introBlock">
        <?php get_template_part('part', 'mehdy'); ?>
        <a class="cta cta_lines cta_light" href="<?php the_field('cta_link') ?>"><?php the_field('cta_title') ?></a>
    </section>
    <div class="card-wrapper">
        <div class="card">
            <h3 class="u-hidden-visually"><?= __('Mon CV', 'pf'); ?></h3>
            <?php if( have_rows('cv_edu') ): ?>
            <ol class="o-list-bare">
                <?php while(have_rows('cv_edu')) : the_row();?>
                <li>
                    <p class="cv__title cv__title_right no-margin-top icons icons_edu">
                        <time datetime="<?php the_sub_field('edu_from') ?>"><?php the_sub_field('edu_from') ?></time><?php __(' - ', 'pf'); ?>
                        <?php if(get_sub_field('edu_to')) : ?>
                        <time datetime="<?php the_sub_field('edu_to') ?>"><?php the_sub_field('edu_to') ?></time>
                        <?php endif; ?>
                    </p>
                    <p class="cv__content">
                        <?php the_sub_field('edu_desc') ?>
                    </p>
                </li>
                <?php endwhile; ?>
            </ol>
            <?php endif; ?>
            <dl>
                <dt class="cv__title icons icons_globe"><?= __('Langues parlées', 'pf'); ?></dt>
                <dd class="cv__content"><?php the_field('cv_language') ?></dd>

                <dt class="cv__title icons icons_code"><?= __('Langages', 'pf'); ?></dt>
                <?php foreach(get_field('cv_code') as $code) : ?>
                <dd class="cv__content"><?= $code; ?></dd>
                <?php endforeach; ?>
            </dl>

            <div>
                <p class="cv__title icons icons_game"><?= __('Hobbies', 'pf'); ?></p>
                <p class="cv__content"><?php the_field('cv_hobbies') ?></p>
            </div>

            <dl class="no-margin-bottom">
                <dt class="cv__title icons icons_plus"><?= __('Extras', 'pf'); ?></dt>
                <dd class="cv__content icons icons_car"><?= __('Permis B', 'pf'); ?></dd>
                <dd class="cv__content icons icons_smile"><?= __('Un sourire', 'pf'); ?></dd>
                <dd class="cv__content icons icons_battery"><?= __('De l\'énrgie à revendre', 'pf'); ?></dd>
            </dl>
        </div>
    </div>
</section>
<?php
get_footer();
?>
