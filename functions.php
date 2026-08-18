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

// ===================================================
// 🔹 POST VIEW COUNTER
// ===================================================

function wt_set_post_views($postID) {
    if ( ! current_user_can('administrator') ) { // Exclude admin visits
        $count_key = '_post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 1;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '1');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
}

function wt_get_post_views($postID){
    $count_key = '_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Views";
    }
    
    // Formatting numbers (e.g. 1.2K)
    if ($count >= 1000 && $count < 1000000) {
        $count = round($count / 1000, 1) . 'K';
    } elseif ($count >= 1000000) {
        $count = round($count / 1000000, 1) . 'M';
    }
    
    return $count . ' Views';
}

// Add Views column to Admin Post List
function wt_posts_column_views($columns) {
    $columns['post_views'] = 'Views';
    return $columns;
}
add_filter('manage_posts_columns', 'wt_posts_column_views');

// Show the views data in the custom column
function wt_posts_custom_column_views($column_name, $post_id) {
    if ($column_name === 'post_views') {
        $count = get_post_meta($post_id, '_post_views_count', true);
        echo ($count == '') ? '0' : $count;
    }
}
add_action('manage_posts_custom_column', 'wt_posts_custom_column_views', 10, 2);
