<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */


 /* Template Name: Philosophy & strategy */ ?>

<?php get_template_part('parts/includes/page/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>

<main class="bg-light-grey">
    <section class="bg-light-grey grey-nav">
        <div class="container">
            <?php get_template_part('parts/includes/nav/main', 'nav') ?>
        </div>
    </section>


    <?php
    while ( have_posts() ) : the_post(); ?>
    <section>
        <div class="page-bg-image" style="background: url(<?php the_post_thumbnail_url(); ?>);"></div>
    </section>
    <section class="bg-light-grey">
        <div class="small-container">
            <div class="grid-x">
                <div class="column medium-12 text-center">
                    <div class="page-heading">
                        <h2><?php the_field('page_title'); ?></h2>
                        <p><?php the_field('page_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-grey">
        <div class="small-container">
            <div class="grid-x">
                <div class="column medium-12">
                    <div class="page-content">
                        <?php the_content(); ?>
                        <?php
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light-grey">
        <div class="medium-container">
            <div class="slider gallery">
                <?php   if( have_rows('gallery') ):
                    while( have_rows('gallery') ): the_row(); ?>
                        <div class="gallery-image" style="background: url(<?php the_sub_field('gallery_image') ?>)"></div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>

    <section class="bg-light-grey">
        <div class="small-container">
            <div class="grid-x">
                <br class="column medium-12 text-center">
                <div class="page-content after-gallery-content">
                    <?php the_field('after_gallery_content'); ?>
                </div>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>

<?php get_template_part('parts/includes/page/after', 'footer'); ?>




