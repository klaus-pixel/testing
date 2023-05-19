<?php
/**
 * The template for displaying all single posts and attachments
 */

?>

<?php get_template_part('parts/includes/single/before', 'header'); ?>

<?php get_header(); ?>

<?php get_template_part('parts/includes/philosophy/after', 'header'); ?>

<main class="bg-light-grey press-release-description">
    <section id="mobile-slider-posts" class="bg-light-grey grey-nav">
        <div class="container">
            <?php get_template_part('parts/includes/nav/main', 'nav') ?>
        </div>
    </section>
    <div class="gruppeselskaber-desktop">

        <section>
			<div class="main-image-slider">
				<div class="page-bg-image gruppeselskaber-image" style="background: url(<?php the_field('release_image'); ?>)"></div>
			</div>
		</section>
		
		<?php if (get_locale() == 'en_GB') { ?> <section class="bg-light-grey back-button"><a href="/eng/press/">Back to all history</a></section> <?php } ?>
		<?php if (get_locale() == 'da_DK') { ?> <section class="bg-light-grey back-button"><a href="/presse/">Tilbage til alle historier</a></section> <?php } ?>
		<?php if (get_locale() == 'sv_SE') { ?> <section class="bg-light-grey back-button"><a href="/se/pressmeddelanden/">Tilbage til alle historier SV</a></section> <?php } ?>

        <section class="bg-light-grey" style="z-index: 0;">
			<div class="small-container">
				<div class="grid-x">
					<div class="column medium-12 text-center">
						<div class="page-heading">
							<h2><?php the_title(); ?></h2>
							<p><?php the_field('release_description'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>

        <?php get_template_part('parts/includes/single/desktop/content'); ?>

        <?php get_template_part('parts/includes/single/desktop/gallery'); ?>
		
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

        <?php get_template_part('parts/includes/single/desktop/buttons'); ?>
		
		
		<section class="bg-light-grey">
			<div class="page-content">
				<?php 

				$companyrelease_output = "";

				$recent_posts = wp_get_recent_posts(array('post_type'=>'companyreleases'));
				foreach( $recent_posts as $recent ){
		
					$companyrelease_output .= "<li class=\"release-card\">";
		
					$companyrelease_output .= "<div class=\"release-image\" style=\"background-image:url('" . get_field('release_image',$recent["ID"]) . "')\"><a href=\"" . get_permalink($recent["ID"]) . "\"><img src=\"" . get_stylesheet_directory_uri() . "/assets/images/release-image.gif\" alt=\"" . $recent["post_title"] . "\" /></a></div>";
		
					$companyrelease_output .= "<div class=\"release-title\"><a href=\"" . get_permalink($recent["ID"]) . "\"><h4>" . $recent["post_title"] . "</h4></a></div>";

					if( get_field('release_description',$recent["ID"]) ) { $companyrelease_output .= "<p class=\"release-decsription\">" . get_field('release_description',$recent["ID"]) . "</p>"; }
		
					$companyrelease_output .= "<div class=\"release-link\"> <a href=\"" . get_permalink($recent["ID"]) . "\">" . pll__('Læs pressemeddelelse') . "</a></div>";
		
					$companyrelease_output .= "</li>";
				}
	
				echo "<div id=\"company-release\" class=\"releases-list\"><ul class=\"releases-array releases-slider\">" . $companyrelease_output . "</ul></div>";

				?>
			</div>
		</section>


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