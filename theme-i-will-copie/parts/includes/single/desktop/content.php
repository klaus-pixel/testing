<section class="bg-light-grey">
    <div class="small-container">
        <div class="grid-x">
            <br class="column medium-12 text-center">
            <div class="page-content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>