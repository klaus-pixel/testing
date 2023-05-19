
<nav id="mobile-nav">
    <nav id="mobile-nav-section" class="slideInUp collapsed-hamburger"  style="background: scroll #b71234; height: 101%; position: fixed; width: 100%;top:25px; z-index: 0; margin-top: -25px; margin-left:-15px;overflow: scroll;">
        <div class="fadeInUp delayed">
            <div class="mobile-nav-content">
                <div class="grid-x">
                    <div class="column medium-4 small-4"></div>
                    <div class="column medium-4 small-4 text-center">
                        <a href="<?php echo home_url(); ?>"><img class="mobile-logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo-white.svg') ?>" style="margin-bottom: 10px;"></a>
                    </div>
                    <div class="column medium-4 small-4 text-right">
                        <button id="active-hamburger" class="hamburger hamburger--collapse margin-for-red-heading is-active medbestyr" type="button" style="margin-top: 18px !important;">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <?php
            $navigation = new Navigation;
            foreach ($navigation->getAllItems() as $item){
                if($item->menu_item_parent == 0 && $item->type_label == 'Sprog skifter' || $item->menu_item_parent == 0 && $item->type_label == 'Språkväljare' || $item->menu_item_parent == 0 && $item->type_label == 'Language switcher'){
                    ?>
                    <div class="row">
                        <div class="columns text-center" style="width: 100%;">
                            <ul class="accordion languages-accordion" data-accordion data-allow-all-closed="true">
                                <li class="accordion-item" data-accordion-item>
                                    <a href="<?php echo $item->url; ?>" style="text-transform: uppercase;font-weight: 100 !important; color: #fff !important;" class="accordion-title <?php if(!$navigation->hasChildren($item->ID)){echo 'remove-chevron-from-accordion';}else{echo '';} ?>" ><?php echo $item->title; ?></a>
                                    <?php foreach ($navigation->hasChildren($item->ID) as $child) {
                                        if($child){
                                            ?>
                                            <div class="accordion-content" data-tab-content >
                                                <p><a href="<?php echo $child->url; ?>" style="color: #fff !important;"><?php echo $child->title;?></a></p>

                                            </div>
                                            <?php
                                        }
                                    } ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <?php
            $navigation = new Navigation;
            foreach ($navigation->getAllItems() as $i => $item){
                if($item->menu_item_parent == 0 && $item->type_label != 'Sprog skifter' && $item->type_label != 'Språkväljare' && $item->type_label != 'Language switcher'){
//                if($item->menu_item_parent == 0 && $item->type_label != 'Language switcher'){
                    ?>
                    <div class="row">
                        <div class="columns text-center" style="width: 100%;">
                            <ul class="accordion primary-accordion primary-accordion-<?php echo $i; ?>" data-accordion data-allow-all-closed="true">
                                <li class="accordion-item" data-accordion-item>
                                    <a href="<?php echo $item->url; ?>" class="accordion-title <?php if(!$navigation->hasChildren($item->ID)){echo 'remove-chevron-from-accordion';}else{echo '';} ?>" style="color: #fff !important;"><?php pll_e($item->title); ?></a>
                                    <?php foreach ($navigation->hasChildren($item->ID) as $child) {
                                        if($child){
                                            ?>
                                            <div class="accordion-content" data-tab-content >
                                                <p><a href="<?php echo $child->url; ?>" style="color: #fff !important;"><?php pll_e($child->title);?></a></p>
                                            </div>
                                            <?php
                                        }
                                    } ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

            <div class="accordion-row">
                <div class="columns text-center">
                    <button id="mobile-group-dropdown-button" class="button group-dropdown-button mobile-group-button" type="button" data-toggle="mobile-group-dropdown"><?php pll_e('fadeinbutton'); ?></button>
                    <div class="dropdown-pane group-section-dropdown" id="mobile-group-dropdown" data-dropdown data-auto-focus="true" data-v-offset="unset">
                        <ul class="menu vertical nested nested-dropdown text-center">
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
            </div>
        </div>
    </nav>
    <div class="grid-x">
        <div class="column medium-4 small-4"></div>
        <div class="column medium-4 small-4 text-center">
            <a href="<?php echo home_url(); ?>"><img class="mobile-logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo.svg') ?>"></a>
        </div>
        <div class="column medium-4 small-4 text-right">
            <button id="hamburger" class="hamburger hamburger--collapse light-hamburger" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</nav>

