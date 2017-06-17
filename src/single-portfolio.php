<?php
get_header();
?>
<article class="main-wrapper">
    <h2 class="u-hidden-visually">Site de Larry Burrows</h2>
    <div class="card-wrapper">
        <div class="card card_no-padding card_thin">
            <header class="card__header">
                <?php if(get_field('work_themes')) : ?>
                <div class="tags">
                    <?php foreach(get_field('work_themes') as $theme) : ?>
                    <span class="tags__item"><?= $theme->name ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>" class="card__title"><?php the_title(); ?></a>
                <time datetime="2017-09-12"><?php the_field('work_end'); ?></time>
            </header>
            <?php pf_the_image(get_field('work_thumbnail'), 'pf_content_thin', 'card__image', false, false) ?>
            <div class="u-center-text">
                <a class="cta cta_dark cta_small icons icons_link" href="<?php the_field('work_site') ?>"><?= __('Vers le site', 'pf') ?></a>
            </div>
            <div class="u-center-text">
                <a class="cta cta_dark cta_small cta_no-border icons icons_github" href="<?php the_field('work_git') ?>"><?= __('Vers le repo GitHub', 'pf') ?></a>
            </div>
        </div>
    </div>
    <?php if(have_rows('flexible')) : ?>
    <div class="card-wrapper">
        <?php get_template_part('part','flexible'); ?>
    </div>
    <?php endif; ?>
</article>
<?php
get_footer();
?>
