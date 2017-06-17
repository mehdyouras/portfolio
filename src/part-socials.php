<?php if(have_rows('socials', 'options')) : ?>
<nav class="socials">
    <h2 class="u-hidden-visually"><?= __('Mes réseaux sociaux', 'pf') ?></h2>
    <?php while(have_rows('socials', 'options')) : the_row(); $social = get_sub_field('socials_name');?>
    <a href="<?php the_sub_field('socials_link'); ?>" class="socials__item socials__item<?= $social['value'] ?>"><span class="u-hidden-visually"><?= $social['label'] ?></span></a>
    <?php endwhile; ?>
</nav>
<?php endif; ?>