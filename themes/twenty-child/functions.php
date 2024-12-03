<?php
/**
 * Twenty-Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty-Child
 * @since Twenty-Child 1.0
 */

function twenty_enqueue_scripts() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'twenty_enqueue_scripts');

function theme_register_nav_menu() {
    register_nav_menus(array(
        'primary-menu' => __( 'Primary Menu' ),
    ));
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );