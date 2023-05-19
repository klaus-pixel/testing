<?php
while ( have_posts() ) : the_post(); ?>
<div class="page-content-to-remove">
    <section>
        <div class="page-bg-image" style="background: url(<?php the_post_thumbnail_url(); ?>);"></div>
    </section>
    <section class="bg-light-grey">
        <div class="small-container">
            <div class="grid-x">
                <div class="column medium-12 text-center">
                    <div class="page-heading">
						<h1><?php the_field('page_title'); ?></h1>
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
                        <?php the_content(); ?> <!-- Page Content -->
                        <?php
                        endwhile; //resetting the page loop
                        wp_reset_query(); //resetting the page query
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>