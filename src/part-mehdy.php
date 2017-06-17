<?php pf_the_image(get_field('mehdy_photo', 'options'), 'pf_content_thin', false, false); ?>
<h3 class="introBlock__title"><?php the_field('mehdy_name', 'options'); ?></h3>
<address class="contactInfos">
    <span class="contactInfos__item icons_pink icons icons_email"><?php the_field('mehdy_email', 'options'); ?></span>
    <?php if(get_field('mehdy_phone', 'options')): ?>
        <span class="contactInfos__item icons_pink icons icons_phone"><?php the_field('mehdy_phone', 'options'); ?></span>
    <?php endif; ?>
</address>