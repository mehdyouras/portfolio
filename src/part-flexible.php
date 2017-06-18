<?php while(have_rows('flexible')) : the_row(); ?>
    <?php if( get_row_layout() == 'card' ): ?>
        <div class="card">
            <?php while( have_rows('card_content') ): the_row(); ?>
                <?php if(get_sub_field('wysiwyg_content')): ?>
                    <div class="wysiwyg">
                        <?php the_sub_field('wysiwyg_content'); ?>
                    </div>
                <?php endif; ?>
                <?php if(get_sub_field('figure_image')): ?>
                    <figure class="figure">
                        <?php pf_the_image(get_sub_field('figure_image'), 'pf_content', 'figure__image', true, false) ?>
                    </figure>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
<?php endwhile; ?>