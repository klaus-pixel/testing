<?php /* Template Name: Home */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */
?>

<?php get_template_part('parts/includes/index/header/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/index/header/after', 'header'); ?>


    <div class="dark-overlay"></div>

    <?php get_template_part('parts/includes/index/video'); ?>

    <?php get_template_part('parts/includes/index/main'); ?>

    <?php get_template_part('parts/includes/index/modal'); ?>


<?php get_template_part('parts/includes/index/footer/before', 'footer'); ?>

<?php wp_footer(); ?>

<?php get_template_part('parts/includes/index/footer/after', 'footer'); ?>






