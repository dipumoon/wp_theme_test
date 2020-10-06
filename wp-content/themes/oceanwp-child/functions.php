<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function owp_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Footer Top',
        'id'            => 'footer-top-widget',
        'before_widget' => '<div class="footer_top_widget"><div class="container">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h2 class="footer-top-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'Header Top',
        'id'            => 'header-top-widget',
        'before_widget' => '<div class="header_top_widget"><div class="container">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h2 class="header-top-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'owp_widgets_init' );