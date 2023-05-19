<?php //get_header(); 

if (have_posts()) {
    while (have_posts()) {
        the_post(); 
		 include( 'templates/flexible-fields.php' );

    }
}

// Dont show footer based on body class
if ( !in_array( 'team', get_body_class() ) && !in_array( 'contact', get_body_class() ) ) {
    get_footer();
  }