<?php

/**
 * General theme settings
 */

 if ( ! function_exists( 'solix_setup_theme' ) ) :
    function solix_setup_theme() {
        add_theme_support( 'menus' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

    }
    add_action( 'after_setup_theme', 'solix_setup_theme' );
endif;


// Enqueue styles and scripts
$enqueue_styles = get_template_directory() . '/includes/enqueue-styles-scripts.php';
if ( is_readable( $enqueue_styles ) ) {
    require_once $enqueue_styles;
}

// Disable Gutenberg
$disable_gutenberg = get_template_directory() . '/includes/disable-gutenberg.php';
if ( is_readable( $disable_gutenberg ) ) {
    require_once $disable_gutenberg;
}

//Disable comments
$disable_comments = get_template_directory() . '/includes/disable-comments.php';
if ( is_readable( $disable_comments ) ) {
    require_once $disable_comments;
}

//Disable emojis
$disable_emojis = get_template_directory() . '/includes/disable-emojis.php';
if ( is_readable( $disable_emojis ) ) {
    require_once $disable_emojis;
}

// SVG Support
$svg_support = get_template_directory() . '/includes/svg-support.php';
if ( is_readable( $svg_support ) ) {
    require_once $svg_support;
}

// JSON Support
$json_support = get_template_directory() . '/includes/json-support.php';
if ( is_readable( $json_support ) ) {
    require_once $json_support;
}

// Image sizes.
$images_sizes = get_template_directory() . '/includes/images-sizes.php';
if ( is_readable( $images_sizes ) ) {
    require_once $images_sizes;
}

// Custom Post Types.
$custom_post_type = get_template_directory() . '/includes/custom-post-types.php';
if ( is_readable( $custom_post_type ) ) {
    require_once $custom_post_type;
}

// Clear wp meta
$clear_wp_meta = get_template_directory() . '/includes/clear_wp_meta.php';
if ( is_readable( $clear_wp_meta ) ) {
    require_once $clear_wp_meta;
}

// Register Menu
$register_menu = get_template_directory() . '/includes/register_menu.php';
if ( is_readable( $register_menu ) ) {
    require_once $register_menu;
}

// Register Sidebar
$register_sidebar = get_template_directory() . '/includes/register_sidebar.php';
if ( is_readable( $register_sidebar ) ) {
    require_once $register_sidebar;
}

/**
 * Hide admin bar
 */
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    show_admin_bar(false);
}


if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
function add_additional_class_on_a($classes, $item, $args){
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
