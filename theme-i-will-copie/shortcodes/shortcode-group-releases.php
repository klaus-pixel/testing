<?php 

function call_group_releases_shortcode() {
	
	$posts_counter = 1;
	$grouprelease_output = "";
	

    $recent_posts = wp_get_recent_posts(array('post_type'=>'groupreleases'));
    foreach( $recent_posts as $recent ){
		
		if ( $posts_counter <= 6 ) { $grouprelease_output .= "<li class=\"release-card\">"; } else { $grouprelease_output .= "<li class=\"release-card extra\">"; }	
		
		//$grouprelease_output .= "<div class=\"release-image\" style=\"background-image:url('" . get_field('release_image',$recent["ID"]) . "')\"><a href=\"" . get_field('source_url',$recent["ID"]) . "\" target=\"_blank\"><img src=\"" . get_stylesheet_directory_uri() . "/assets/images/release-image.gif\" alt=\"" . $recent["post_title"] . "\" /></a></div>";
		$grouprelease_output .= "<div class=\"release-image\" style=\"background-image:url('" . get_field('release_image',$recent["ID"]) . "')\"><div onclick=\"openInNewTab('" . get_field('source_url',$recent["ID"]) . "');\" class=\"link_pointer\"><img src=\"" . get_stylesheet_directory_uri() . "/assets/images/release-image.gif\" alt=\"" . $recent["post_title"] . "\" /></div></div>";
		
		$grouprelease_output .= "<div class=\"release-title\"><div onclick=\"openInNewTab('" . get_field('source_url',$recent["ID"]) . "');\" class=\"link_pointer\"><h4>" . $recent["post_title"] . "</h4></div></div>";

		$grouprelease_output .= "<p class=\"release-decsription\">" . get_field('release_description',$recent["ID"]) . "</p>";
		
		//$grouprelease_output .= "<div class=\"release-link\"> <a href=\"" . get_field('source_url',$recent["ID"]) . "\" ');">" . get_field('source_name',$recent["ID"]) ."</a></div>";
		$grouprelease_output .= "<div class=\"release-link\" onclick=\"openInNewTab('" . get_field('source_url',$recent["ID"]) . "');\" > <div class=\"link_area\">" . get_field('source_name',$recent["ID"]) ."</div></div>";
		
		$grouprelease_output .= "</li>";
		
		$posts_counter ++;
    }
	
	return "<div id=\"group-release\" class=\"releases-list\"><ul class=\"releases-array\">" . $grouprelease_output . "</ul><div id=\"load-more\"><div class=\"load-button\" onclick=\"document.getElementById('group-release').className='releases-list see';\"><span>" . pll__('Indlæs flere') . "</span></div></div></div>";
}
?>