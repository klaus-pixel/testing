<?php /* Template Name: Bestyrelse */ ?>

<?php get_template_part('parts/includes/bestyrelse/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>

<main class="bg-dark positioning-for-z-index bestyrelse">
	<div class="container">

        <?php get_template_part('parts/includes/medarbejdere/nav'); ?>

    </div>
	<div class="page-content-to-remove">
		<section>
			<div class="container">
				<div class="grid-x">
					<div class="column medium-12 small-12 text-center">
						<div class="bestyrelse-page-title">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <h1><?php the_title(); ?></h1>
                            <?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bestyrelse-desktop">

            <?php get_template_part('parts/includes/bestyrelse/desktop/members'); ?>

        </section>
	</div>

</main>

<?php wp_footer(); ?>

<?php get_template_part('parts/includes/bestyrelse/after', 'footer'); ?>

