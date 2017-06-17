<nav class="nav">
    <h2 class="u-hidden-visually"><?= __('Navigation principale', 'pf') ?></h2>
    <?php foreach(pf_get_nav_items('header') as $item) : ?>
    <a href="<?= $item->link ?>" class="nav__item"><?= $item->label ?></a>
    <?php endforeach; ?>
</nav>