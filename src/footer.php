<footer class="footer">
    <div class="footer__content">
        <div class="footer__definitions">
            <dl class="definitions">
                <dt class="definitions__term"><?= __('Ma localisation','pf'); ?></dt>
                <dd class="definitions__desc icons_pink icons icons_location"><?php the_field('mehdy_location', 'options') ?></dd>
            </dl>
            <dl class="definitions">
                <dt class="definitions__term"><?= __('Informations de contact','pf'); ?></dt>
                <dd class="definitions__desc icons_pink icons icons_email"><?php the_field('mehdy_email', 'options') ?></dd>
                <?php if(get_field('mehdy_phone', 'options')): ?>
                <dd class="definitions__desc icons_pink icons icons_phone"><?php the_field('mehdy_phone', 'options') ?></dd>
                <?php endif; ?>
            </dl>
        </div>
        <a class="cta cta_lines cta_white cta_small" href="contact.html"><?= __('M\'engager','pf');?></a>
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