<?php

function solix_theme_menus(){
    register_nav_menus(
        array(
            'Primary' => __('Primary Menu', 'solix'),
        )
    );
}
add_action('after_setup_theme', 'solix_theme_menus');