<?php 

function call_company_releases_shortcode() {
	
	$posts_counter = 1;
	$companyrelease_output = "";

    $recent_posts = wp_get_recent_posts(array('post_type'=>'companyreleases'));
    foreach( $recent_posts as $recent ){
		
		if ( $posts_counter <= 6 ) { $companyrelease_output .= "<li class=\"release-card\">"; } else { $companyrelease_output .= "<li class=\"release-card extra\">"; }
		
		$companyrelease_output .= "<div class=\"release-image\" style=\"background-image:url('" . get_field('release_image',$recent["ID"]) . "')\"><a href=\"" . get_permalink($recent["ID"]) . "\"><img src=\"" . get_stylesheet_directory_uri() . "/assets/images/release-image.gif\" alt=\"" . $recent["post_title"] . "\" /></a></div>";
		
		$companyrelease_output .= "<div class=\"release-title\"><a href=\"" . get_permalink($recent["ID"]) . "\"><h4>" . $recent["post_title"] . "</h4></a></div>";

		if( get_field('release_description',$recent["ID"]) ) { $companyrelease_output .= "<p class=\"release-decsription\">" . get_field('release_description',$recent["ID"]) . "</p>"; }
		
		$companyrelease_output .= "<div class=\"release-link\"> <a href=\"" . get_permalink($recent["ID"]) . "\">" . pll__('Læs pressemeddelelse') . "</a></div>";
		
		$companyrelease_output .= "</li>";

		$posts_counter ++;
    }
	
	return "<div id=\"company-release\" class=\"releases-list\"><ul class=\"releases-array\">" . $companyrelease_output . "</ul><div id=\"load-more\"><div class=\"load-button\" onclick=\"document.getElementById('company-release').className='releases-list see';\"><span>" . pll__('Indlæs flere') . "</span></div></div></div>";
}
?>