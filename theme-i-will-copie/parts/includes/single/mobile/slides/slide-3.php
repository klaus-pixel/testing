<div class="mobile-slide slider-bg-light content-slide">
    <div class="grupperselskaber-simple-text">
        <div class="gruppeselskaber-simple-text-card">
            <div class="paragraph">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>