<?php /* Template Name: People */ ?>

<?php get_template_part('parts/includes/medarbejdere/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>

<main class="bg-dark positioning-for-z-index Medarbejdere">

    <div class="container">
        <?php get_template_part('parts/includes/medarbejdere/nav'); ?>
    </div>

    <?php get_template_part('parts/includes/medarbejdere/title'); ?>

    <section class="medarbejdere-list-area">
        <div class="container">
            <?php echo do_shortcode( "[medarbejdere_list]" ); ?>
        </div>
    </section>
	
</main>

<?php get_template_part('parts/includes/medarbejdere/before', 'footer'); ?>

<?php wp_footer(); ?>

<?php get_template_part('parts/includes/medarbejdere/after', 'footer'); ?>
