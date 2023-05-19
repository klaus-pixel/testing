<?php
/**
 * The template for displaying the footer
 */
?>
</main>
 <footer class="footer">
    <!-- First Block -->
    <?php
    $logo = get_field('footer_logo', 'options');
    $footer_desc = get_field('footer_description', 'options');

    ?>
    <div class="medium-container">
        <div class="block-container">
            <div class="logo-column">
                <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/solix-logo-white.svg"></a>
                <p class="block-desc"><?= $footer_desc ?></p>
            </div>
            <div class="row">
                <div class="column">
                    <a class="column-title">
                        <?php echo get_field('button_name', 'options');?></a>
                            <div class="posts">
                              <?php $posts = get_field('group_holdings', 'options');
                                if( $posts ): ?>
                                 <?php foreach( $posts as $post): ?>
                                 <?php setup_postdata($post); ?>
                                 <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                 <?php endforeach; ?>
                                 <?php wp_reset_postdata(); ?>
                              <?php endif; ?>
                            </div>
                </div>
                <div class="column">  
                    <ul class="footer-menu">
                    <?php
                        wp_nav_menu(
                            array(
                            'container' => '',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'footer-menu',
                            )
                            );
                        ?>
                    </ul>
                </div>
                <div class="column">

                    <?php 
                    if( have_rows('contact_info', 'options') ):
                        ?>
                        <a class="row-title"><?= get_field('column_title', 'options'); ?></a> 
                        <?php
                        while( have_rows('contact_info', 'options') ) : the_row();

                            $contact_item = get_sub_field('contact_item');

                            if( $contact_item ): ?>
                                <div class="text-p">
                                    <p><?php echo $contact_item['address']; ?></p>
                                    <p><?php echo $contact_item['country']; ?></p>
                                    <p>Tel.: <a class="item_link underline" href="<?= $contact_item['phone'] ?>"><?= $contact_item['phone'] ?></a></p>
                                </div>
                            <?php endif;

                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="copyright">
                    <div class="copyright-text">
                        <p>
                            <?= get_field('copyright', 'options');?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </footer>

</div><!-- End of .warpper -->
</div><!-- End of #body -->

 <?php wp_footer(); ?>

 </body>

 </html>
 