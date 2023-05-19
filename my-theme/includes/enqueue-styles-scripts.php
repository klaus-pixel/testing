<?php

/**
 * Enqueue scripts and styles.
 */
function enqueue_styles_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css', array(), $theme_version, 'all' );
    wp_enqueue_style( 'slick-styles', get_template_directory_uri() . '/assets/css/slick.css', array(), $theme_version, 'all' );
    wp_enqueue_style( 'slick-theme-styles', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), $theme_version, 'all' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_version );
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', $theme_version, true );
    wp_enqueue_script( 'barba-js', get_template_directory_uri() . '/assets/js/barba.js', $theme_version, true );
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts' );
