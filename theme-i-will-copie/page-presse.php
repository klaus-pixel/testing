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

<main class="bg-light-grey press-page">
    <section class="bg-light-grey grey-nav">
        <div class="container">
            <?php get_template_part('parts/includes/nav/main', 'nav') ?>
        </div>
    </section>



    <?php
    while ( have_posts() ) : the_post(); ?>
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


	<section class="releases-data">
		<div class="element-heading"><h3><?php the_field('heading_groupreleases'); ?></h3></div>
		<?php echo do_shortcode( "[group_releases]" ); ?>
	</section>

</main>


<?php get_footer(); ?>

<?php get_template_part('parts/includes/page/after', 'footer'); ?>

<div style="background:skyblue;padding:50px;">PRESS DK TEMPLATE</div>


<script>
function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
</script>