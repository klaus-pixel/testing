<?php /* Template Name: Contact */ ?>


<?php get_template_part('parts/includes/contact/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>


<main class="bg-red positioning-for-z-index">
    <div class="container">

        <?php get_template_part('parts/includes/contact/nav') ?>

    </div>
    <div class="page-content-to-remove">
        <section class="contact-section">

            <?php get_template_part('parts/includes/contact/cards') ?>

        </section>
    </div>
</main>

<style>
	@media(max-width:1220px){
		body .hamburger{top:29px!important;}
		body .hamburger.is-active{top:19px!important;}
	}
</style>

<?php wp_footer(); ?>

<?php get_template_part('parts/includes/contact/after', 'footer') ?>
