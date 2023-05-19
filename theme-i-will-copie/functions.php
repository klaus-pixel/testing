<?php

/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

require_once(get_template_directory().'/app/Navigation.php');
require_once(get_template_directory().'/app/Post.php');

include(get_template_directory().'/parts/shortcodes/gallery.php');
include(get_template_directory().'/functions/widget-text.php');
include(get_template_directory().'/functions/custom-order.php');
include(get_template_directory().'/functions/translation.php');


add_shortcode('solix_gallery', 'solix_gallery');

//
//function current_location()
//{
//    if (isset($_SERVER['HTTPS']) &&
//        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
//        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
//        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
//        $protocol = 'https://';
//    } else {
//        $protocol = 'http://';
//    }
//    return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//}
//
//
//
//
//if(pll_current_language() == 'eng'){
//    if(home_url().'/eng/' == current_location()){
//        function index_scripts(){
//            wp_enqueue_script( 'desktop-js', get_template_directory_uri() . '/assets/scripts/desktop.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );
//        }
//        add_action('wp_enqueue_scripts', 'index_scripts', 999);
//    }
//}else if(pll_current_language() == 'se'){
//    if(home_url().'/se/' == current_location()){
//        function index_scripts(){
//            wp_enqueue_script( 'desktop-js', get_template_directory_uri() . '/assets/scripts/desktop.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );
//        }
//        add_action('wp_enqueue_scripts', 'index_scripts', 999);
//    }
//}else{
//    if(home_url().'/' == current_location()){
//        function index_scripts(){
//            wp_enqueue_script( 'desktop-js', get_template_directory_uri() . '/assets/scripts/desktop.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );
//        }
//        add_action('wp_enqueue_scripts', 'index_scripts', 999);
//    }
//}
//
//function single_scripts(){
//    wp_enqueue_script( 'single-js', get_template_directory_uri() . '/assets/scripts/single.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );
//}
//add_action('wp_enqueue_scripts', 'single_scripts', 999);



function enqueue_cookies(){
    wp_enqueue_style('cookiepolicy-styles', get_template_directory_uri() . '/cookies/cookiepolicy.css', array(), '1.0.0', false);
    wp_enqueue_script( 'cookiepolicy-js', get_template_directory_uri() . '/cookies/cookiepolicy.js', array( 'jquery' ), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'enqueue_cookies');




// Our custom post type function
function create_posttype() {
 
    register_post_type( 'groupreleases',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Articles' ),
                'singular_name' => __( 'Article' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'group-releases'),
            'show_in_rest' => true,
        )
    );
	
    register_post_type( 'companyreleases',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Press Releases' ),
                'singular_name' => __( 'Press Release' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'releases'),
            'show_in_rest' => true,
        )
    );
	
	
    register_post_type( 'people',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Medarbejdere' ),
                'singular_name' => __( 'Medarbejderer' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'medarbeidere'),
            'show_in_rest' => true,
        )
    );

    register_post_type( 'bestyrelse',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Bestyrelse' ),
                'singular_name' => __( 'Bestyrelse' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'bestyrelse'),
            'show_in_rest' => true,
        )
    );
	
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



/* ShortCodes */
	
	include( get_stylesheet_directory() . '/shortcodes/shortcode-group-releases.php' );
	add_shortcode( 'group_releases', 'call_group_releases_shortcode' );
	
	include( get_stylesheet_directory() . '/shortcodes/shortcode-company-releases.php' );
	add_shortcode( 'company_releases', 'call_company_releases_shortcode' );

	include( get_stylesheet_directory() . '/shortcodes/shortcode-medarbejdere.php' );
	add_shortcode( 'medarbejdere_list', 'call_medarbejdere_list_shortcode' );

    include( get_stylesheet_directory() . '/shortcodes/shortcode-bestyrelse.php' );
    add_shortcode( 'bestyrelse_list', 'call_bestyrelse_list_shortcode' );
	
	
pll_register_string('Læs pressemeddelelse', 'Læs pressemeddelelse');
pll_register_string('LÆS ARTIKEL PÅ', 'LÆS ARTIKEL PÅ');
pll_register_string('Indlæs flere', 'Indlæs flere');
pll_register_string('cookie_text', 'cookie_text');
pll_register_string('cookie_readmore', 'cookie_readmore');
pll_register_string('cookie_link', 'cookie_link');
pll_register_string('privacy_title', 'privacy_title');
pll_register_string('privacy_link', 'privacy_link');
pll_register_string('gdpr_title', 'gdpr_title');
pll_register_string('gdpr_link', 'gdpr_link');


add_action( 'wp_print_styles', 'tn_dequeue_font_awesome_style' );
function tn_dequeue_font_awesome_style() {
      wp_dequeue_style( 'fontawesome' );
      wp_deregister_style( 'fontawesome' );
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'SOLIX Settings',
		'menu_title'	=> 'SOLIX Settings',
		'menu_slug' 	=> 'solix-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// Hide ACF Field in Backend to prevent users changing it
add_filter('acf/settings/show_admin', '__return_false');

/* HIDE SITE HEALTH WIDGET */
add_action('wp_dashboard_setup', 'remove_site_health_dashboard_widget');
function remove_site_health_dashboard_widget()
{
    remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
}

//HIDE MENUES

$adm = get_role('administrator');
$adm_cap= array_keys( $adm->capabilities ); //get administator capabilities
add_role('site_admin', 'Admin');
$new_role = get_role('site_admin');
foreach ( $adm_cap as $cap ) {
$new_role->add_cap( $cap ); //clone administrator capabilities to new role
}

function hide_siteadmin() {
  
    if (current_user_can('site_admin')) {
    
       /* DASHBOARD */	
       remove_submenu_page( 'index.php', 'update-core.php');  // Update
 
       /* REMOVE DEFAULT MENUS */
        remove_menu_page( 'edit-comments.php' ); //Comments
        remove_menu_page( 'plugins.php' ); //Plugins
        remove_menu_page( 'tools.php' ); //Tools
        remove_menu_page( 'users.php' ); //Users
        remove_menu_page( 'site-health.php' ); //Site health
        remove_menu_page( 'themes.php' ); // Appearance
        remove_menu_page( 'options-general.php' ); //Settings
        remove_menu_page( 'edit.php?post_type=acf-field-group' ); //AFC
        remove_menu_page( 'Wordfence' ); //Wordfence
        remove_menu_page( 'duplicator' ); //Duplicator
        remove_menu_page( 'wp-2fa-policies' ); //2FA

        }
    }
    add_action('admin_head', 'hide_siteadmin');
