<div class="medium-container">
    <div class="grid-x">
        <div class="column medium-4 small-12">
            <div class="contact-card">
                <h1><?php the_field('contact_country_dk') ?></h1>
                <?php the_field('contact_address_dk') ?>
                <a href="<?php the_field('contact_button_url_dk') ?>" class="contact-button button-light" target="_blank"><span><?php the_field('contact_button_title_dk') ?></span></a>
            </div>
        </div>
        <div class="column medium-8 small-12">
            <div class="contact-card">
                <h1><?php the_field('contact_country_se') ?></h1>
				<div class="swedish-addresses">
					<div class="sv-adr-column">
					<?php the_field('contact_address_se') ?>
                <a href="<?php the_field('contact_button_url_se') ?>" class="contact-button button-light right" target="_blank"><span><?php the_field('contact_button_title_se') ?></span></a>
					</div>
					<div class="sv-adr-column">
					<?php the_field('contact_address_se2') ?>
                <a href="<?php the_field('contact_button_url_se2') ?>" class="contact-button button-light right" target="_blank"><span><?php the_field('contact_button_title_se') ?></span></a>
					</div>
				</div>
     
            </div>
        </div>
    </div>
</div>

<style>
.swedish-addresses {display:flex;flex-wrap:wrap;justify-content:center;}
.swedish-addresses .sv-adr-column:first-child{margin-right:40px;}
	
	@media(max-width:560px){
		.swedish-addresses .sv-adr-column{width:100%;}
		.swedish-addresses .sv-adr-column:first-child{margin-right:0;margin-bottom:42px;}
		.contact-card .contact-button{margin-top:60px;}
	}
</style>