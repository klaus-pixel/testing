<section>
    <div class="grupperselskaber-logo">
        <img src="<?php the_field('gruppeselskaber_logo'); ?>">
    </div>
    <div class="main-image-slider slider">
        <?php   if( have_rows('gruppeselskaber_main_slider') ):
            while( have_rows('gruppeselskaber_main_slider') ): the_row(); ?>
                <div class="page-bg-image gruppeselskaber-image" style="background: url(<?php the_sub_field('image'); ?>)"></div>
            <?php endwhile;
        endif; ?>
    </div>
</section>