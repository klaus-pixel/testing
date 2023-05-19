<?php 

function call_medarbejdere_list_shortcode() {
	
	$posts_counter = 1;
	$people_output = "";

    $recent_posts = wp_get_recent_posts(array('post_type'=>'people','posts_per_page'=>-1));
    foreach( $recent_posts as $recent ){
		
		$people_output .= "<li class=\"people-card\">";
		
		$people_output .= "<div class=\"people-image\"><img src=\"" . get_stylesheet_directory_uri() . "/assets/images/people-pixel.gif\" class=\"pixel-image\" alt=\"" . $recent["post_title"] . "\" /><img src=\"" . get_field('person_image',$recent["ID"]) . "\" class=\"main-image\" alt=\"" . $recent["post_title"] . "\" /></div>";
		
		$people_output .= "<div class=\"people-name\"><h5>" . $recent["post_title"] . "</h5></div>";

		$people_output .= "<p class=\"people-position\">" . get_field('person_position',$recent["ID"]) . "</p>";
		$people_output .= "<p class=\"people-mail\">" . get_field('person_email',$recent["ID"]) . "</p>";
		
		
		$people_output .= "</li>";

		$posts_counter ++;
    }
	
	return "<div id=\"people-list\"><ul class=\"people-array\">" . $people_output . "</ul></div>";
}
?>