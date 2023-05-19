<?php
function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", array(), '1.11.0', true);
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );
?>