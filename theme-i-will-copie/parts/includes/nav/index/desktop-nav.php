<style>
    .primary-menu-dropdown .sub-menu{
        position: absolute;
        top: 71px;
        z-index: 1;
        display: none;
        min-width: 200px;
        border: none;
        background: none;
        left: 50%;
        transform: translate(-50%, -50%);
        margin-left: 0;
    }
    .primary-menu-dropdown li{
        position: relative;
    }
    .primary-menu-submenu-is-active{
        position: absolute;
        display: block !important;
        background: none;
        top: 100%;
        right: auto;
        left: 0;
    }
    .primary-index-menu-submenu-is-active{
        position: absolute;
        display: block !important;
        background: none;
        top: 100%;
        right: auto;
        left: 0;
    }
    .sub-menu li{
        list-style: none;
        width: 100%;
    }
    .sub-menu{
        text-align: center !important;
    }
</style>
<nav id="main-nav" class="index-navigation">
    <div class="grid-x" style="position: relative;">
        <div class="column medium-4">
            <button id="desktop-group-dropdown" class="button button-light group-dropdown-button" type="button" data-toggle="example-dropdown"><?php pll_e('fadeinbutton'); ?></button>
            <div class="dropdown-pane group-section-dropdown" id="example-dropdown" data-dropdown data-auto-focus="true" data-hover="true" data-hover-pane="true">
                <ul class="menu vertical nested nested-dropdown text-center" style="margin-right: -1px;">
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
            <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo.svg') ?>"></a>
        </div>

        <div class="column medium-4">
            <div class="top-bar custom-dropdown float-right">
                <div class="top-bar-left primary-menu-dropdown">
                    <?php wp_nav_menu(array(
                        'theme_location'  => 'Primary',
                        'container'       => 'ul',
                        'menu_class'      => 'dropdown menu inline-class',
                        'menu_id'         => 'primary_menu_id',
                        'depth'           => 2,
                    )) ?>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function () {
        var dropdown_li_a = $('.dropdown li a');
        dropdown_li_a.addClass('underline');

        var dropdown_li = $('.dropdown li');
        dropdown_li.mouseenter(function () {
            $(this).find('.sub-menu').addClass('primary-menu-submenu-is-active');
        });
        dropdown_li.mouseleave(function () {
            $(this).find('.sub-menu').removeClass('primary-menu-submenu-is-active');
        });

        var dropdown_submenu_li = $('.dropdown li .sub-menu li');
        dropdown_submenu_li.mouseenter(function () {
            $(this).closest('.sub-menu').addClass('primary-menu-submenu-is-active');
        });

        // $("#example-dropdown").mouseover(function() {
        //     $(".button-grey").toggleClass("hover");
        // });
        var sub_menu_li_a = $('.sub-menu li a');
        sub_menu_li_a.removeClass('underline');

    })
</script>