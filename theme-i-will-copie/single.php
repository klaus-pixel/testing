<?php
/**
 * The template for displaying all single posts and attachments
 */

?>

<?php get_template_part('parts/includes/single/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>

<main class="bg-light-grey">
    <section id="mobile-slider-posts" class="bg-light-grey grey-nav">
        <div class="container">
            <?php get_template_part('parts/includes/nav/main', 'nav') ?>
        </div>
    </section>
    <div class="gruppeselskaber-desktop">

        <?php get_template_part('parts/includes/single/desktop/header'); ?>

        <?php get_template_part('parts/includes/single/desktop/title'); ?>

        <?php get_template_part('parts/includes/single/desktop/content'); ?>

        <?php get_template_part('parts/includes/single/desktop/gallery'); ?>

        <?php get_template_part('parts/includes/single/desktop/buttons'); ?>


    </div>
    <div class="page-content-to-remove">
        <div class="gruppeselskaber-mobile">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="gruppeselskaber-mobile-slider slider gruppeselskaber-mobile-page-bg-image-for-slider" style="background: url(<?php the_post_thumbnail_url(); ?>)">
                <?php endwhile; endif; ?>

                <?php get_template_part('parts/includes/single/mobile/slides/slide', '1'); ?>

                <?php get_template_part('parts/includes/single/mobile/slides/slide', '2'); ?>

                <?php get_template_part('parts/includes/single/mobile/slides/slide', '3'); ?>

                <?php get_template_part('parts/includes/single/mobile/slides/slide', '4'); ?>

            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>

<?php get_template_part('parts/includes/single/after', 'footer'); ?>

<script>
function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
</script>