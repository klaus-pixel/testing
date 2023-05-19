<?php

// Post Type Team
function post_type_team() {
    $labels = array(
        'name'                => 'Team',
        'singular_name'		  => 'Team',
        'add_new'			  => 'Add New',
        'add_new_item'		  => 'Add New',
        'edit_item'			  => 'Edit Member',
        'new_item'			  => 'New Member',
        'view_item'			  => 'View Member'
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'Change this',
        'public'              => true,
        'menu_position'       => 21,
        // 'menu_icon'           => 'dashicons-admin-tools',
        'show_in_nav_menus'   => true,
        'has_archive'         => false,
        'rewrite'             => array('with_front' => false, 'slug'=> 'team'),
        'capability_type'     => 'page',
        'supports'            => array('title', 'thumbnail', 'editor', 'custom-fields'),
        'show_in_rest'        => true,
        'taxonomies'          => array('advisory-board')
    );

    register_post_type( 'team', $args );
}
add_action( 'init', 'post_type_team' );

// Add Taxonomy for Advisory Board
function create_advisory_board_taxonomy() {
    $labels = array(
        'name'              => 'Advisory Board',
        'singular_name'     => 'Advisory Board',
        'search_items'      => 'Search Advisory Board',
        'all_items'         => 'All Advisory Board',
        'parent_item'       => 'Parent Advisory Board',
        'parent_item_colon' => 'Parent Advisory Board:',
        'edit_item'         => 'Edit Advisory Board',
        'update_item'       => 'Update Advisory Board',
        'add_new_item'      => 'Add New Advisory Board',
        'new_item_name'     => 'New Advisory Board Name',
        'menu_name'         => 'Advisory Board',
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'advisory-board' ),
    );
    register_taxonomy( 'advisory-board', array( 'team' ), $args );
}
add_action( 'init', 'create_advisory_board_taxonomy', 0 );

// Post Type Press Releases
function post_type_press_releases() {
    $labels = array(
        'name'                => 'Press Releases',
        'singular_name'		  => 'Press Releases',
        'add_new'			  => 'Add New',
        'add_new_item'		  => 'Add New',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'Change this',
        'public'              => true,
        'menu_position'       => 21,
        // 'menu_icon'           => 'dashicons-admin-tools',
        'show_in_nav_menus'   => true,
        'has_archive'         => false,
        'rewrite'             => array('with_front' => false, 'slug'=> 'companyreleases'),
        'capability_type'     => 'page',
        'supports'            => array('title', 'thumbnail', 'editor', 'custom-fields'),
        'show_in_rest'        => true,
    );

    register_post_type( 'companyreleases', $args );
}
add_action( 'init', 'post_type_press_releases' );

