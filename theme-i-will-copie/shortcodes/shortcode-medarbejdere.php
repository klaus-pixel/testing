<?php 

function call_medarbejdere_list_shortcode() {
	
	$posts_counter = 1;
	$people_output = "";
	
	$person_position = "";
	if (pll_current_language() == "dk") { $person_position = "person_position_dk";}
	if (pll_current_language() == "se") { $person_position = "person_position_se";}
	if (pll_current_language() == "eng") { $person_position = "person_position";}

    $recent_posts = wp_get_recent_posts(array('post_type'=>'people','posts_per_page'=>-1));
    foreach( $recent_posts as $recent ){
		
		$people_output .= "<li class=\"people-card\">";
		
		$people_output .= "<div class=\"people-image\"><img src=\"" . get_stylesheet_directory_uri() . "/assets/images/people-pixel.gif\" class=\"pixel-image\" alt=\"" . $recent["post_title"] . "\" /><img src=\"" . get_field('person_image',$recent["ID"]) . "\" class=\"main-image\" alt=\"" . $recent["post_title"] . "\" /></div>";
		
		$people_output .= "<div class=\"people-name\"><h5>" . $recent["post_title"] . "</h5></div>";

		$people_output .= "<p class=\"people-position\">" . get_field($person_position,$recent["ID"]) . "</p>";
		$people_output .= "<p class=\"people-mail\"><a href=\"mailto:" . get_field('person_email',$recent["ID"]) . "\" class=\"mail-link\">" . get_field('person_email',$recent["ID"]) . "</a></p>";
		
		
		$people_output .= "</li>";

		$posts_counter ++;
    }
	
	return "<div id=\"people-list\"><ul class=\"people-array\">" . $people_output . "</ul></div>";
}
?>