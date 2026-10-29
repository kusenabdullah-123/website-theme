<?php
/**
 * Website Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

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
	wp_enqueue_style( 'remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css', array(), '4.5.0' );
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
// 🔹 DISABLE GUTENBERG (CLASSIC EDITOR) UNTUK POST & PORTFOLIO
// ===================================================
add_filter('use_block_editor_for_post_type', function($use_block_editor, $post_type) {
    if ( in_array( $post_type, array( 'post', 'portfolio' ), true ) ) {
        return false; // Gunakan Classic Editor untuk Artikel/Post & Portofolio
    }
    return $use_block_editor; // Gunakan Gutenberg untuk Pages dan tipe lainnya
}, 10, 2);

add_filter('use_block_editor_for_post', function($use_block_editor, $post) {
    $post_type = is_object($post) ? $post->post_type : (string)$post;
    if ( in_array( $post_type, array( 'post', 'portfolio' ), true ) ) {
        return false;
    }
    return $use_block_editor;
}, 10, 2);

// ===================================================
// 🔹 POST VIEW COUNTER
// ===================================================

function wt_set_post_views($postID) {
    $postID = absint( $postID );
    if ( ! $postID || current_user_can( 'administrator' ) || is_robots() || is_preview() || wp_doing_ajax() || wp_doing_cron() ) {
        return;
    }

    // Ignore prefetch requests to prevent artificial inflation & unnecessary DB writes
    if ( isset( $_SERVER['HTTP_X_MOZ'] ) && 'prefetch' === strtolower( $_SERVER['HTTP_X_MOZ'] ) ) {
        return;
    }

    $count_key = '_post_views_count';
    $count     = get_post_meta( $postID, $count_key, true );
    $new_count = ( '' === $count ) ? 1 : ( absint( $count ) + 1 );
    update_post_meta( $postID, $count_key, $new_count );
}

function wt_get_post_views($postID){
    $postID    = absint( $postID );
    $count_key = '_post_views_count';
    $count     = absint( get_post_meta( $postID, $count_key, true ) );
    
    // Formatting numbers (e.g. 1.2K)
    if ( $count >= 1000 && $count < 1000000 ) {
        $formatted = round( $count / 1000, 1 ) . 'K';
    } elseif ( $count >= 1000000 ) {
        $formatted = round( $count / 1000000, 1 ) . 'M';
    } else {
        $formatted = (string) $count;
    }
    
    return esc_html( $formatted . ' Views' );
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
        echo esc_html( ( '' === $count ) ? '0' : absint( $count ) );
    }
}
add_action('manage_posts_custom_column', 'wt_posts_custom_column_views', 10, 2);

// ===================================================
// 🔹 REGISTER CUSTOM POST TYPE: PORTFOLIO
// ===================================================
function website_theme_register_portfolio_cpt() {
    $labels = array(
        'name'                  => _x( 'Portofolio', 'Post type general name', 'website-theme' ),
        'singular_name'         => _x( 'Portofolio', 'Post type singular name', 'website-theme' ),
        'menu_name'             => _x( 'Portofolio', 'Admin Menu text', 'website-theme' ),
        'name_admin_bar'        => _x( 'Portofolio', 'Add New on Toolbar', 'website-theme' ),
        'add_new'               => __( 'Tambah Baru', 'website-theme' ),
        'add_new_item'          => __( 'Tambah Portofolio Baru', 'website-theme' ),
        'new_item'              => __( 'Portofolio Baru', 'website-theme' ),
        'edit_item'             => __( 'Edit Portofolio', 'website-theme' ),
        'view_item'             => __( 'Lihat Portofolio', 'website-theme' ),
        'all_items'             => __( 'Semua Portofolio', 'website-theme' ),
        'search_items'          => __( 'Cari Portofolio', 'website-theme' ),
        'parent_item_colon'     => __( 'Portofolio Induk:', 'website-theme' ),
        'not_found'             => __( 'Tidak ada portofolio ditemukan.', 'website-theme' ),
        'not_found_in_trash'    => __( 'Tidak ada portofolio di kotak sampah.', 'website-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portofolio', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => 'portofolio',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'       => false,
    );

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'website_theme_register_portfolio_cpt' );

// Redirect single portfolio ke halaman daftar portofolio (belum memerlukan halaman detail)
add_action( 'template_redirect', function() {
    if ( is_singular( 'portfolio' ) ) {
        wp_safe_redirect( home_url( '/portofolio/' ), 301 );
        exit;
    }
} );

// ===================================================
// 🔹 SOCIAL MEDIA HELPER (CENTRALIZED)
// ===================================================
function wt_get_social_links() {
    return array(
        'github' => array(
            'label'  => 'GitHub',
            'url'    => 'https://github.com/kusenabdullah-123',
            'icon'   => 'ri-github-fill',
            'handle' => '@kusenabdullah-123',
        ),
        'youtube' => array(
            'label'  => 'YouTube',
            'url'    => 'https://www.youtube.com/@kusenadev1867',
            'icon'   => 'ri-youtube-fill',
            'handle' => 'Kusen Abdullah',
        ),
        'facebook' => array(
            'label'  => 'Facebook',
            'url'    => 'https://web.facebook.com/kusenadev',
            'icon'   => 'ri-facebook-fill',
            'handle' => '@kusenadev',
        ),
        'instagram' => array(
            'label'  => 'Instagram',
            'url'    => 'https://www.instagram.com/kusenadev01/',
            'icon'   => 'ri-instagram-line',
            'handle' => '@kusenadev01',
        ),
        'email' => array(
            'label'  => 'Email',
            'url'    => 'mailto:kusena322@gmail.com',
            'icon'   => 'ri-mail-line',
            'handle' => 'kusena322@gmail.com',
        ),
    );
}

function wt_render_social_links( $style = 'icons', $class = '' ) {
    $links = wt_get_social_links();
    if ( empty( $links ) ) {
        return;
    }

    if ( $style === 'cards' ) {
        echo '<div class="social-cards-grid ' . esc_attr( $class ) . '">';
        foreach ( $links as $key => $item ) {
            if ( empty( $item['url'] ) || $item['url'] === '#' ) continue;
            ?>
            <a href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="social-card-item">
                <div class="social-card-icon">
                    <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
                </div>
                <div class="social-card-info">
                    <span class="social-card-label"><?php echo esc_html( $item['label'] ); ?></span>
                    <span class="social-card-handle"><?php echo esc_html( $item['handle'] ); ?></span>
                </div>
                <i class="ri-external-link-line social-card-arrow"></i>
            </a>
            <?php
        }
        echo '</div>';
    } else {
        echo '<div class="social-links-wrapper ' . esc_attr( $class ) . '">';
        foreach ( $links as $key => $item ) {
            if ( empty( $item['url'] ) || $item['url'] === '#' ) continue;
            ?>
            <a href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="<?php echo esc_attr( $item['label'] ); ?>" title="<?php echo esc_attr( $item['label'] ); ?>">
                <i class="<?php echo esc_attr( $item['icon'] ); ?>"></i>
            </a>
            <?php
        }
        echo '</div>';
    }
}

// ===================================================
// 🔹 SECURITY HARDENING
// ===================================================

// 1. Sembunyikan versi WordPress dari <head> dan RSS feeds
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );

// 2. Nonaktifkan XML-RPC untuk mencegah brute-force & DDoS pingback
add_filter( 'xmlrpc_enabled', '__return_false' );

// 3. Tambahkan HTTP Security Headers dasar pada response frontend
add_action( 'send_headers', function() {
    if ( ! is_admin() ) {
        header( 'X-Content-Type-Options: nosniff' );
        header( 'X-Frame-Options: SAMEORIGIN' );
        header( 'Referrer-Policy: strict-origin-when-cross-origin' );
    }
} );


