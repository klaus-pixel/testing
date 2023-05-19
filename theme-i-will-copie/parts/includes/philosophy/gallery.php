<?php if( have_rows('gallery') ) { ?>
<section class="bg-light-grey">
    <div class="medium-container">
        <div class="slider gallery">
            <?php   if( have_rows('gallery') ):
                while( have_rows('gallery') ): the_row(); ?>
                    <div class="gallery-image" style="background: url(<?php the_sub_field('gallery_image') ?>);"></div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php } ?>