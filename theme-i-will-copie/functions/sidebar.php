<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'one-column',
		'name' => __('One column', 'jointswp'),
		'description' => __('One column', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widgettitle">',
		'after_title' => '</h1>',
	));

	register_sidebar(array(
		'id' => 'three-columns',
		'name' => __('Three columns', 'jointswp'),
		'description' => __('Three columns', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s column medium-4 text-center three-columns">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	));
    register_sidebar(array(
        'id' => 'copyrights',
        'name' => __('Copyrights', 'jointswp'),
        'description' => __('Copyrights', 'jointswp'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));

} /* end register sidebars */

add_action( 'widgets_init', 'joints_register_sidebars' );