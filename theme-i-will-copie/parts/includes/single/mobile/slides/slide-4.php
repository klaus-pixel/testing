<div class="mobile-slide slider-bg-light">
    <div class="grupperselskaber-simple-text">
        <div class="gruppeselskaber-simple-gallery-card">
            <div class="gallery-paragraph">
                <?php $rows = []; ?>
                <?php   if( have_rows('gallery') ):
                    while( have_rows('gallery') ): the_row(); ?>
                        <?php
                        $rows[] = get_row_index();
                        ?>
                        <div class="gruppeselskaber-mobile-gallery-image" style="background: url(<?php the_sub_field('gallery_image'); ?>)"></div>
                    <?php endwhile;
                endif; ?>
                <input hidden id="row-count" value="<?php echo count($rows); ?>">
                <section style="position: relative; z-index: 1;">

                    <?php if( get_field('button_url') ) { ?>
                        <div class="random-button amazing" <?php if( get_field('button_url_second') ) { ?> style="padding-bottom: 50px;" <?php } ?>>
                            <div onclick="openInNewTab('<?php the_field('button_url'); ?>');" class="button-red button-red-clicker"><?php the_field('button_text'); ?></div>
                        </div>
                    <?php } ?>

                    <?php if( get_field('button_url_second') ) { ?>
                        <div class="random-button">
                            <!-- <a href="<?php the_field('button_url_second'); ?>" class="button-red" target="_blank"><?php the_field('button2_text'); ?></a> -->
							<div onclick="openInNewTab('<?php the_field('button_url_second'); ?>');" class="button-red button-red-clicker"><?php the_field('button2_text'); ?></div>
                        </div>
                    <?php } ?>

                </section>
            </div>
        </div>
    </div>
</div>