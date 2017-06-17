<?php
/*
        Template Name: Blog
*/
get_header();
?>
<section class="main-wrapper">
    <h2 class="u-hidden-visually"><?= __('Liste de mes publications', 'pf'); ?></h2>
    <section class="introBlock">
        <?php get_template_part('part', 'mehdy'); ?>
        <a class="cta cta_lines cta_light" href="<?php the_field('cta_link'); ?>"><?php the_field('cta_title'); ?></a>
    </section>
    <section>
        <h3 class="u-hidden-visually"><?= __('Liste de mes publications', 'pf') ?></h3>
        <ol class="o-list-bare card-wrapper">
            <?php
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => -1,
                'meta_key'			=> 'post_date',
                'orderby'			=> 'meta_value',
                'order'				=> 'DESC');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                ?>
            <li class="card card_no-padding">
                <header class="card__header">
                    <div class="tags">
                        <?php foreach(get_field('post_themes') as $theme) : ?>
                            <span class="tags__item"><?= $theme->name ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="card__title"><?php the_title(); ?></a>
                    <time datetime="2017-09-12"><?php the_field('post_date'); ?></time>
                </header>
                <div class="wysiwyg card__text">
                    <?php the_field('post_excerpt'); ?>
                </div>
                <div class="u-center-text">
                    <a class="cta cta_lines cta_dark cta_small" href="<?php the_permalink(); ?>"><?= __('Lire plus', 'pf') ?><span class="u-hidden-visually"><?= __(' sur ', 'pf') ?><?php the_title(); ?></span></a>
                </div>
            </li>
            <?php endwhile; ?>
        </ol>
    </section>
</section>
<?php
get_footer();
?>
