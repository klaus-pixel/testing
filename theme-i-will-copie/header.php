<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<?php $curLang = substr(get_locale(), 0, 2); ?>
		<script id="Cookiebot"  data-culture="<?php echo $curLang?>" src="https://consent.cookiebot.com/uc.js" data-cbid="92795d11-810d-41f3-8c7e-c4c777fdc26d" data-blockingmode="auto" type="text/javascript"></script>

        <!-- <link href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/fontawesome.css" rel="stylesheet" /> -->
        <!-- <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet"  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
        <!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/ScrollMagic/scrollmagic/uncompressed/ScrollMagic.js"></script> -->

        <!-- Icons & Favicons -->
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/solix-icon.ico">
        <!-- jQuery -->
        <?php
        	wp_deregister_script('jquery');
        ?>

		<?php wp_head(); ?>

	<?php if ( is_front_page() ) { ?>
		<script type="application/ld+json">
			{
			 "@context": "http://schema.org",
			 "@type": "Organization",
			 "name": "Solix Group",
			 "logo": "https://solixgroup.com/wpcontent/themes/solix/assets/images/logo/solix-logo.svg",
			 "url": "https://solixgroup.com/"
			}
		</script>
	<?php } ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177084689-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-177084689-1');
	</script>
																			  
	</head>
			
	<body <?php body_class(); ?>>


<div id="cookie-policy" style="display:block;">
	<div id="eu-cookie-bar">
		<div id="eu-cookie-bar-content">
			<div id="eu-cookie-bar-side-left">
				<p id="eu-cookie-bar-line-2" class="pad"><?php echo pll_e('cookie_text'); ?> <a href="<?php echo pll_e('cookie_link'); ?>"><?php echo pll_e('cookie_readmore'); ?></a></p>
			</div>
			<div id="eu-cookie-bar-side-right">
				<div class="pad"><button id="euCookie">OK</button></div>
			</div>
		</div>
	</div>
</div>
