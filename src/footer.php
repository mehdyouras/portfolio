<footer itemscope itemtype="http://schema.org/Person" class="footer">
    <div class="footer__content">
        <div class="footer__definitions">
            <dl class="definitions">
                <dt class="definitions__term"><?= __('Ma localisation','pf'); ?></dt>
                <dd itemprop="address" class="definitions__desc icons_pink icons icons_location"><?php the_field('mehdy_location', 'options') ?></dd>
            </dl>
            <dl class="definitions">
                <dt class="definitions__term"><?= __('Informations de contact','pf'); ?></dt>
                <dd itemprop="email" class="definitions__desc icons_pink icons icons_email"><?php the_field('mehdy_email', 'options') ?></dd>
                <?php if(get_field('mehdy_phone', 'options')): ?>
                <dd itemprop="telephone" class="definitions__desc icons_pink icons icons_phone"><?php the_field('mehdy_phone', 'options') ?></dd>
                <?php endif; ?>
            </dl>
        </div>
        <?php if(strcmp(get_permalink(), pf_get_permalink_by_title('contact'))) : ?>
        <a class="cta cta_lines cta_white cta_small" href="<?php pf_the_permalink_by_title('contact'); ?>"><?= __('M\'engager','pf');?></a>
        <?php else : ?>
        <a class="cta cta_lines cta_white cta_small" href="<?php pf_the_permalink_by_title('portfolio'); ?>"><?= __('Portfolio','pf');?></a>
        <?php endif; ?>
    </div>
    <div class="copyright">
        <small><?php the_field('copyright', 'options') ?></small>
    </div>
</footer>
<div class="stars" aria-hidden="true">
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
    <div class="star" aria-hidden="true"></div>
</div>
<script src="<?php pf_asset('js/script.js') ?>"></script>
</body>
</html>