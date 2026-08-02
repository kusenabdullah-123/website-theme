<?php
/**
 * Website Theme functions and definitions
 */

if ( ! function_exists( 'website_theme_setup' ) ) :
	function website_theme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'website-theme' ),
			)
		);

		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	}
endif;
add_action( 'after_setup_theme', 'website_theme_setup' );

function website_theme_scripts() {
	wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'website-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0' );
	wp_enqueue_script( 'lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'website_theme_scripts' );
