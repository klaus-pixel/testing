<div class="medium-container">
    <div class="grid-x">
        <div class="column medium-4 small-12">
            <div class="contact-card">
                <?php switch(pll_current_language()){
                    case 'eng':
                        $contact_dk = get_field('kontakt_danmark_en', 'options');
                        $contact_se = get_field('kontakt_sverige_en', 'options');
                        $contact_se2 = get_field('kontakt_sverige2_en', 'options');
                        break;
                    case 'dk':
                        $contact_dk = get_field('kontakt_danmark_dk', 'options');
                        $contact_se = get_field('kontakt_sverige_dk', 'options');
                        $contact_se2 = get_field('kontakt_sverige2_dk', 'options');
                        break;
                    case 'se':
                        $contact_dk = get_field('kontakt_danmark_se', 'options');
                        $contact_se = get_field('kontakt_sverige_se', 'options');
                        $contact_se2 = get_field('kontakt_sverige2_se', 'options');
                        break;
                } ?>
                <h1><?= $contact_dk['contact_country']; ?></h1>
                <?= $contact_dk['contact_address']; ?>
                <p>&nbsp;</p>
                <p><a href="mailto:<?= $contact_dk['contact_email']; ?>" class="animsition-link footer-underline"><?= $contact_dk['contact_email']; ?></a></p>
                <p>Tel.: <a href="tel:<?= $contact_dk['contact_phone']; ?>" class="footer-underline"><?= $contact_dk['contact_phone']; ?></a></p>
                <?php $map_link1 = $contact_dk['contact_button_url'];
                    $link_target1 = $map_link1['target'] ? $map_link1['target'] : '_blank'; ?>
                <a target="<?php echo esc_attr( $link_target1 ); ?>" href="<?= $map_link1['url']; ?>" class="contact-button button-light" >
                    <span><?= $contact_dk['contact_button_title'] ?></span>
                </a>
            </div>
        </div>
        <div class="column medium-8 small-12">
            <div class="contact-card">
                <h1><?= $contact_se['contact_country']; ?></h1>
				<div class="swedish-addresses">
					<div class="sv-adr-column">
                        <?= $contact_se['contact_address']; ?>
                        <p>&nbsp;</p>
                        <p><a href="mailto:<?= $contact_se['contact_email']; ?>" class="animsition-link footer-underline"><?= $contact_se['contact_email']; ?></a></p>
                        <p>Tel.: <a href="tel:<?= $contact_se['contact_phone']; ?>" class="footer-underline"><?= $contact_se['contact_phone']; ?></a></p>
                        <?php $map_link2 = $contact_se['contact_button_url'];
                        $link_target2 = $map_link2['target'] ? $map_link2['target'] : '_blank'; ?>
                        <a target="<?php echo esc_attr( $link_target2 ); ?>" href="<?= $map_link2['url']; ?>" class="contact-button button-light" >
                            <span><?= $contact_se['contact_button_title'] ?></span>
                        </a>
					</div>
					<div class="sv-adr-column">
                        <?= $contact_se2['contact_address']; ?>
                        <p>&nbsp;</p>
                        <p><a href="mailto:<?= $contact_se2['contact_email']; ?>" class="animsition-link footer-underline"><?= $contact_se2['contact_email']; ?></a></p>
                        <p>Tel.: <a href="tel:<?= $contact_se2['contact_phone']; ?>" class="footer-underline"><?= $contact_se2['contact_phone']; ?></a></p>
                        <?php $map_link3 = $contact_se2['contact_button_url'];
                            $link_target3 = $map_link3['target'] ? $map_link3['target'] : '_blank'; ?>
                        <a target="<?php echo esc_attr( $link_target3 ); ?>" href="<?= $map_link3['url']; ?>" class="contact-button button-light" >
                            <span><?= $contact_se2['contact_button_title'] ?></span>
                        </a>
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