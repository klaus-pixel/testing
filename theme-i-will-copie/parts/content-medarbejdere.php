<?php /* Template Name: Medarbejdere */ ?>

<?php get_template_part('parts/includes/medarbejdere/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>

<main class="bg-dark positioning-for-z-index Medarbejdere">

    <div class="container">
        <?php get_template_part('parts/includes/medarbejdere/nav'); ?>
    </div>

    <?php get_template_part('parts/includes/medarbejdere/title'); ?>

    <section class="medarbejdere-desktop">
        <div class="container">
            <?php get_template_part('parts/includes/medarbejdere/desktop/members'); ?>
        </div>
    </section>

    <div class="page-content-to-remove">
        <section class="medarbejdere-mobile">
            <?php get_template_part('parts/includes/medarbejdere/mobile/members'); ?>
        </section>
    </div>

</main>

<?php get_template_part('parts/includes/medarbejdere/before', 'footer'); ?>

<?php wp_footer(); ?>

<?php get_template_part('parts/includes/medarbejdere/after', 'footer'); ?>
