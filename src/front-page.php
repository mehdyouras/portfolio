<?php
get_header();
?>
<section class="main-wrapper">
    <h2 class="u-hidden-visually"><?= __('Contenu principal', 'pf') ?></h2>
    <section class="introBlock">
        <?php pf_the_image(get_field('mehdy_photo', 'options'), 'pf_content_thin', false, false); ?>
        <h3 class="introBlock__title"><?php the_field('mehdy_name', 'options'); ?></h3>
        <address class="contactInfos">
            <span class="contactInfos__item icons_pink icons icons_email"><?php the_field('mehdy_email', 'options'); ?></span>
            <?php if(get_field('mehdy_phone', 'options')): ?>
            <span class="contactInfos__item icons_pink icons icons_phone"><?php the_field('mehdy_phone', 'options'); ?></span>
            <?php endif; ?>
        </address>
        <a class="cta cta_lines cta_light" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_title'); ?></a>
    </section>
    <?php if(have_rows('cards')) : ?>
    <div class="card-wrapper">
        <?php while(have_rows('cards')) : the_row() ?>
        <div class="card">
            <div class="u-center-text">
                <a class="cta cta_dark cta_lines" href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_title'); ?></a>
            </div>
            <div class="wysiwyg">
                <?php the_sub_field('text'); ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</section>
<?php
get_footer();
?>
