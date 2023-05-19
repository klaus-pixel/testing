<section class="header-nav-block grey-nav">
    <div class="container">

		<?php get_template_part('parts/includes/desktop/before', 'desktop'); ?>

		<nav id="main-nav" class="grey-navigation">
		    <div class="grid-x" style="position: relative;">
		        <div class="column medium-4"></div>
		        <div class="column medium-4 text-center">
		            <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo.svg') ?>"></a>
		        </div>
		        <div class="column medium-4"></div>
		    </div>
		</nav>
		<?php get_template_part('parts/includes/desktop/after', 'desktop'); ?>



		<nav id="mobile-nav">
		    <div class="grid-x">
		        <div class="column medium-4 small-4"></div>
		        <div class="column medium-4 small-4 text-center">
		            <a href="<?php echo home_url(); ?>" class="animsition-link"><img class="mobile-logo" src="<?php echo home_url('wp-content/themes/solix/assets/images/logo/solix-logo.svg') ?>"></a>
		        </div>
		        <div class="column medium-4 small-4 text-right"></div>
		    </div>
		</nav>



    </div>
</section>