<main>

    <div class="container homepage">
        <?php get_template_part('parts/includes/nav/index/mobile', 'nav') ?>
        <?php get_template_part('parts/includes/nav/index/desktop', 'nav') ?>
    </div>

    <div class="main-page-text text-center">
        <div class="inner-absolute">
            <h1><?php the_field('home_page_title'); ?></h1>

        </div>
        <div class="video-button-wrap" data-toggle="modal" data-target="#exampleModalCenter">
            <a data-open="exampleModal1" class="video-button button-red-white-color" href="#"><?php pll_e('Afspil video'); ?></a>
        </div>
    </div>
	

<div class="privacy-area">
	<ul class="privacy-menu">
		<li><a href="<?php pll_e('privacy_link'); ?>"><?php pll_e('privacy_title'); ?></a></li>
		<li><a href="<?php pll_e('gdpr_link'); ?>"><?php pll_e('gdpr_title'); ?></a></li>
	</ul>
</div>


</main>