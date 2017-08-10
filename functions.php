<?php

show_admin_bar(false);

if(!defined('THEME_URL'))
	define('THEME_URL', get_bloginfo('template_directory'));

//	fix db after server move
//require_once( TEMPLATEPATH.'/library/includes/mysql-replace.php' );
//MySQL_Replace::replace('old', 'new');

//	dependicies
require_once( TEMPLATEPATH.'/library/includes/wp-header-remove.php' );

//	post thumbnails
add_theme_support( 'post-thumbnails' );

//	menus
register_nav_menus(array(
	'main-nav' => 'Main Navigation'
));

#	Scripts
########################################################

add_action( 'wp_print_scripts', 'spry_print_scripts' );

function spry_print_scripts() {
	
	if( is_admin() )
		return false;
	
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'lib', THEME_URL.'/library/js/lib.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'lib' );

	wp_localize_script('lib', 'SPRYLOCALIZE', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'siteurl' => get_option('siteurl')
	));

}

function spry_custom_excerpt( $limit ) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    } 

    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

// allow gravtiy forms to show the option to hide labels and sub labels
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );