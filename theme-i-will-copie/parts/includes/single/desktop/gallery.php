<?php   if( have_rows('gallery') ): ?>
<section class="bg-light-grey">
    <div class="medium-container">
        <div class="slider gallery">
            <?php
                while( have_rows('gallery') ): the_row(); ?>
                    <div class="gallery-image" style="background: url(<?php the_sub_field('gallery_image') ?>)"></div>
            <?php endwhile; ?>
            
        </div>
    </div>
</section>
<?php endif; ?>