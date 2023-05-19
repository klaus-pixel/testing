<?php get_template_part('parts/includes/contact/inc', 'contact'); ?>

<nav id="main-nav" class="index-navigation">
    <div class="grid-x" style="position: relative;">
        <div class="column medium-4">
            <button id="desktop-group-dropdown" class="button button-light group-dropdown-button" type="button" data-toggle="example-dropdown"><?php pll_e('fadeinbutton'); ?></button>
            <div class="dropdown-pane group-section-dropdown" id="example-dropdown" data-dropdown data-auto-focus="true" data-hover="true" data-hover-pane="true">
                <ul class="menu vertical nested nested-dropdown text-center" style="margin-right: -7px;">
                    <?php

                    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'order' => 'ASC')); ?>

                    <?php if ( $wpb_all_query->have_posts() ) : ?>

                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

                            <li><a href="<?php echo get_permalink($post->ID); ?>"><?php echo the_title(); ?></a></li>
                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="column medium-4 text-center">
            <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo-white.svg') ?>"></a>
        </div>
        <div class="column medium-4">
            <div class="top-bar custom-dropdown float-right">
                <div class="top-bar-left primary-menu-dropdown">
                    <?php wp_nav_menu(array(
                        'theme_location'  => 'Primary',
                        'container'       => 'ul',
                        'menu_class'      => 'dropdown menu',
                        'menu_id'         => 'primary_menu_id',
                        'depth'           => 2,
                    )) ?>
                </div>

            </div>
        </div>
    </div>
</nav>
<?php get_template_part('parts/includes/contact/inc', 'script'); ?>
