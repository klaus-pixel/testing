<section class="bg-light-grey">
    <?php if( get_field('button_url_second') ) { ?>
        <div class="medium-container">
            <div class="grid-x">
                <div class="column medium-6">
                    <?php if( get_field('button_url') ) { ?>
                        <div class="random-button amazing" <?php if( get_field('button_url_second') ) { ?> style="padding-bottom: 50px; text-align: right;" <?php } ?>>
                            <a href="<?php the_field('button_url'); ?>" class="button-red" target="_blank"><?php the_field('button_text'); ?></a>
                        </div>
                    <?php } ?>
                </div>
                <div class="column medium-6">
                    <?php if( get_field('button_url_second') ) { ?>
                        <div class="random-button" style="text-align: left;">
                            <a href="<?php the_field('button_url_second'); ?>" class="button-red" target="_blank"><?php the_field('button2_text'); ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php }else{ ?>
        <div class="medium-container">
            <div class="grid-x">
                <div class="column small-12">
                    <?php if( get_field('button_url') ) { ?>
                        <div class="random-button amazing" <?php if( get_field('button_url_second') ) { ?> style="padding-bottom: 50px;" <?php } ?>>
                            <a href="<?php the_field('button_url'); ?>" class="button-red" target="_blank"><?php the_field('button_text'); ?></a>
							
							<a onclick="openInNewTab('<?php the_field('button_url'); ?>');" class="button-red"><?php the_field('button_text'); ?></a>
							
							
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</section>