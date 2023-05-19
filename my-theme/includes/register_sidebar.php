<?php

/**
* Register Sidebar.
 */

add_action( 'widgets_init', function(){
    register_sidebar([
        'name'          => 'Title Sidebar',
        'id'            => 'title-sidebar',
        'description'   => 'description',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ]);
} );