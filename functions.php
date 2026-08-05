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
	wp_enqueue_script( 'lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true );
	wp_enqueue_script( 'website-theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'website_theme_scripts' );

// Defer Google Fonts
function defer_google_fonts( $html, $handle ) {
    if ( 'google-fonts-inter' === $handle ) {
        return str_replace( 'media=\'all\'', 'media="print" onload="this.media=\'all\'"', $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', 'defer_google_fonts', 10, 2 );
// Inline style.css
function inline_theme_css() {
    $css_file = get_template_directory() . '/assets/css/style.css';
    if ( file_exists( $css_file ) ) {
        echo '<style id="website-theme-style-inline">' . file_get_contents( $css_file ) . '</style>';
    }
}
add_action( 'wp_head', 'inline_theme_css', 10 );

// ===================================================
// 🔹 DISABLE GUTENBERG (CLASSIC EDITOR)
// ===================================================
add_filter('use_block_editor_for_post', '__return_false', 10);
