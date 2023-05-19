<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

<?php get_template_part('parts/includes/footer/before', 'footer'); ?>

<footer class="footer" role="contentinfo">
   <section class="desktop-footer">
       <div class="medium-container">
           <div class="grid-x">
               <div class="column medium-3"></div>
               <div class="column medium-6 text-center">
                   <div class="footer-heading">
                       <h1><a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo-white.svg') ?>"></a></h1>
                       <?php if(is_active_sidebar('one-column')){
                           dynamic_sidebar('one-column');
                       }
                       ?>
                   </div>
               </div>
               <div class="column medium-3"></div>
           </div>

            <div class="grid-x">
               <div id="text-5" class="widget widget_text column medium-4 text-center three-columns">
                   <h5 class="widgettitle">
                       <?php switch(pll_current_language()){
                           case 'eng':
                               echo get_field('groups_title_en', 'options');
                               break;
                           case 'dk':
                               echo get_field('groups_title_dk', 'options');
                               break;
                           case 'se':
                               echo get_field('groups_title_se', 'options');
                               break;
                       } ?>
                   </h5>
                   <div class="textwidget">
                       <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'order' => 'ASC')); ?>
                       <?php if ( $wpb_all_query->have_posts() ) : ?>
                           <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                               <p><a href="<?php echo get_permalink($post->ID); ?>"><?php echo the_title(); ?></a></p>
                           <?php endwhile; ?>
                           <?php wp_reset_postdata(); ?>
                       <?php else : ?>
                           <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                       <?php endif; ?>
                   </div>
               </div>
               <div id="text-8" class="widget widget_text column medium-4 text-center three-columns">
                   <div class="textwidget">
                       <div class="column medium-4 text-center">
                           <?php wp_nav_menu(array(
                               'theme_location'  => 'Primary',
                               'container'       => 'ul',
                               'menu_class'      => 'inline-class',
                               'menu_id'         => 'footer_menu',
                               'depth'           => 2,
                           )) ?>
                       </div>
                   </div>
               </div>
               <div id="text-6" class="widget widget_text column medium-4 text-center three-columns">
                   <h5 class="widgettitle">
                       <?php switch(pll_current_language()){
                           case 'eng':
                               echo get_field('contacts_title_en', 'options');
                               break;
                           case 'dk':
                               echo get_field('contacts_title_dk', 'options');
                               break;
                           case 'se':
                               echo get_field('contacts_title_se', 'options');
                               break;
                       } ?>
                   </h5>
                   <div class="textwidget">
                       <?php switch(pll_current_language()){
                           case 'eng':
                               $contact_dk = get_field('kontakt_danmark_en', 'options');
                               $contact_se = get_field('kontakt_sverige_en', 'options');
                               $contact_se2 = get_field('kontakt_sverige2_en', 'options');
                               break;
                           case 'dk':
                               $contact_dk = get_field('kontakt_danmark_dk', 'options');
                               $contact_se = get_field('kontakt_sverige_dk', 'options');
                               $contact_se2 = get_field('kontakt_sverige2_dk', 'options');
                               break;
                           case 'se':
                               $contact_dk = get_field('kontakt_danmark_se', 'options');
                               $contact_se = get_field('kontakt_sverige_se', 'options');
                               $contact_se2 = get_field('kontakt_sverige2_se', 'options');
                               break;
                       }

                       echo $contact_dk['contact_address'];
                       echo "<p>{$contact_dk['contact_country']}</p>";
                       echo "<p>Tel.: <a style='text-transform: none;' href='tel:{$contact_dk['contact_phone']}' class='footer-underline'>{$contact_dk['contact_phone']}</a></p>";
                       echo "<p>&nbsp;</p><p>&nbsp;</p>";

                       echo $contact_se['contact_address'];
                       echo "<p>{$contact_se['contact_country']}</p>";
                       echo "<p>Tel.: <a style='text-transform: none;' href='tel:{$contact_se['contact_phone']}' class='footer-underline'>{$contact_se['contact_phone']}</a></p>";
                       echo "<p>&nbsp;</p><p>&nbsp;</p>";

                       echo $contact_se2['contact_address'];
                       echo "<p>{$contact_se2['contact_country']}</p>";
                       echo "<p>Tel.: <a style='text-transform: none;' href='tel:{$contact_se2['contact_phone']}' class='footer-underline'>{$contact_se2['contact_phone']}</a></p>"; ?>
                   </div>
               </div>

           </div>
       </div>
       <div class="grid-x">
           <div class="column medium-12 text-center">
               <div class="copyrights">
                   <?php if(is_active_sidebar('copyrights')){
                       dynamic_sidebar('copyrights');
                   }
                   ?>

               </div>
           </div>
       </div>
   </section>
    <section class="mobile-footer">
        <div class="grid-x">
            <div class="column medium-4 small-4"></div>
            <div class="column medium-4 small-12 text-center">
                <div class="footer-heading">
                    <h1><a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo-white.svg') ?>"></a></h1>
                    <?php if(is_active_sidebar('one-column')){
                        dynamic_sidebar('one-column');
                    }
                    ?>
                </div>
            </div>
            <div class="column medium-4 small-4"></div>
        </div>
        <div class="row">
            <div class="columns text-center">
                <ul class="accordion primary-accordion primary-accordion-1" data-accordion data-allow-all-closed="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" onClick="return false;" class="accordion-title"><?php pll_e('fadeinbutton'); ?></a>
                        <div id="gruppeselskaber-mobile-footer" class="accordion-content" data-tab-content >
                            <?php

                            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'order' => 'ASC')); ?>

                            <?php if ( $wpb_all_query->have_posts() ) : ?>

                            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

                            <p><a href="<?php echo get_permalink($post->ID); ?>"><?php echo the_title(); ?></a></p>

                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <?php
        $navigation = new Navigation;
        foreach ($navigation->getAllItems() as $i => $item){
            if($item->menu_item_parent == 0 && $item->type_label != 'Sprog skifter' && $item->type_label != 'Språkväljare' && $item->type_label != 'Language switcher' && $item->title != 'Kontakt'){
                ?>
                <div class="row">
                    <div class="columns text-center" style="width: 100%;">
                        <ul class="accordion primary-accordion primary-accordion-<?php echo $i; ?>" data-accordion data-allow-all-closed="true">
                            <li class="accordion-item" data-accordion-item>
                                <a onClick="return false;" href="<?php pll_e($item->url); ?>" class="accordion-title <?php if(!$navigation->hasChildren($item->ID)){echo 'remove-chevron-from-accordion';}else{echo '';} ?>" style="color: #fff !important;"><?php pll_e($item->title); ?></a>
                                <?php foreach ($navigation->hasChildren($item->ID) as $child) {
                                    if($child){
                                        ?>
                                        <div class="accordion-content" style="padding: 10px;" data-tab-content >
                                            <p><a href="<?php pll_e($child->url); ?>" style="color: #fff !important;"><?php pll_e($child->title);?></a></p>
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

        <div class="row">
            <div class="columns text-center">
                <ul class="accordion primary-accordion primary-accordion-4" data-accordion data-allow-all-closed="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" onClick="return false;" class="accordion-title"><?php pll_e('footer-kontakt');?></a>
                        <div class="accordion-content" data-tab-content >
							<div class="mobile-addresses">
							<?php 
							if(is_active_sidebar('three-columns')){
                   			dynamic_sidebar('three-columns');
               				}
               				?>
							</div>
							
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid-x">
            <div class="column medium-12 text-center">
                <div class="copyrights">
					<p><span class="copyright_mobile"> copyright &#169 2014-2021 solix group ab. </span><span class="copyright_mobile">all rights reserved</span></p>
                </div>
            </div>
        </div>
    </section>

</footer> <!-- end .footer -->


		<?php wp_footer(); ?>
</div>

	</body>

</html> <!-- end page -->


<?php get_template_part('parts/includes/footer/after', 'footer'); ?>

<style>
	.mobile-addresses>.widget,.mobile-addresses>.widget>h5{display:none;}
	.mobile-addresses>.widget:last-child{display:block;}
</style>

		<?php 
		//flush_rewrite_rules(); 
		?>