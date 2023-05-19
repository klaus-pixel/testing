<?php

/**
 * Register Menus.
 */
add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'header'  => __( 'Header Menu', 'solix' ),
		'footer-menu'  => __( 'Footer Menu', 'solix' ),
    ] );
} );
