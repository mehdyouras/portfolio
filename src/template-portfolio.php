<?php
/*
        Template Name: Portfolio
*/
get_header();
?>
<section class="main-wrapper">
    <h2 aria-level=2 class="u-hidden-visually"><?= __('Contenu principal', 'pf') ?></h2>
    <section class="introBlock">
        <?php get_template_part('part',"mehdy"); ?>
        <a class="cta cta_lines cta_light" href="<?php the_field('cta_link') ?>"><?php the_field('cta_title') ?></a>
    </section>
    <section>
        <h3 aria-level=3 class="u-hidden-visually"><?= __('Liste de mes travaux','pf') ?></h3>
        <ol class="o-list-bare card-wrapper">
            <?php
                $args = array(
                        'post_type'         => 'portfolio',
                        'posts_per_page'    => -1,
                        'meta_key'			=> 'work_end',
                        'orderby'			=> 'meta_value',
                        'order'				=> 'DESC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <li class="card card_no-padding">
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
                <?php pf_the_image(get_field('work_thumbnail'), 'pf_content', 'card__image', false, false) ?>
                <div  class="u-center-text">
                    <a class="cta cta_lines cta_dark cta_small" href="<?php the_permalink(); ?>"><?= __('En savoir plus', 'pf') ?><span class="u-hidden-visually"><?= __(' sur ', 'pf') ?><?php the_title(); ?></span></a>
                </div>
                <div class="card__links">
                    <a href="<?php the_field('work_site') ?>" class="card__link icons icons_link icons_blue"><span class="u-hidden-visually"><?= __('Vers le site ', 'pf') ?><?php the_title(); ?></span></a>
                    <a href="<?php the_field('work_git') ?>" class="card__link icons icons_github icons_blue"><span class="u-hidden-visually"><?= __('Vers le repo GitHub', 'pf') ?></span></a>
                </div>
            </li>
            <?php endwhile; ?>
        </ol>
    </section>
</section>
<?php
get_footer();
?>
