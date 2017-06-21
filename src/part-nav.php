<nav class="nav">
    <h2 aria-level=2 class="u-hidden-visually"><?= __('Navigation principale', 'pf') ?></h2>
    <?php $current_url = get_permalink();?>
    <?php foreach(pf_get_nav_items('header') as $item) : $is_active = pf_is_active($item->link, $current_url); ?>
    <a href="<?= $item->link ?>" class="nav__item<?php if($is_active): ?> active<?php endif; ?>"><?= $item->label ?></a>
    <?php endforeach; ?>
</nav>