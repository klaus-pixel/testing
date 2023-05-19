<?php /* Template Name: filosofi & strategi*/ ?>

<?php get_template_part('parts/includes/philosophy/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>

<main class="bg-light-grey Filosofi_tpl">
    <section class="bg-light-grey grey-nav">
        <div class="container">
            <?php get_template_part('parts/includes/nav/main', 'nav') ?>
        </div>
    </section>

    <?php get_template_part('parts/includes/philosophy/content') ?>

    <?php get_template_part('parts/includes/philosophy/gallery') ?>

    <?php get_template_part('parts/includes/philosophy/after', 'gallery') ?>

</main>


<?php get_footer(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'footer') ?>
