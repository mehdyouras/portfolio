<?php get_header(); ?>
    <section class="main-wrapper">
        <h2 class="u-hidden-visually"><?php the_title(); ?></h2>
        <div class="o-list-bare card-wrapper">
            <div class="card card_no-padding">
                <header class="card__header">
                    <?php if(get_field('post_themes')) : ?>
                        <div class="tags">
                            <?php foreach(get_field('post_themes') as $theme) : ?>
                                <span class="tags__item"><?= $theme->name ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" class="card__title"><?php the_title(); ?></a>
                    <time datetime="2017-09-12"><?php the_field('post_date'); ?></time>
                </header>
            </div>
        </div>
        <?php if(have_rows('flexible')) : ?>
            <article class="card-wrapper">
                <?php get_template_part('part','flexible'); ?>
            </article>
        <?php endif; ?>
    </section>
<?php get_footer(); ?>