<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
    <script>
        document.documentElement.setAttribute('data-theme', localStorage.getItem('theme') || 'dark');
    </script>
</head>
<body <?php body_class(); ?>>

    <!-- Header -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">Kusena.Dev</a>
            
            <nav class="nav-menu" id="nav-menu">
                <?php
                if ( has_nav_menu( 'menu-1' ) ) {
                    echo strip_tags( wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'container'      => false,
                        'echo'           => false,
                        'depth'          => 1,
                    ) ), '<a>' );
                } else {
                ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
                    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
                <?php } ?>
                
                <button id="theme-toggle" class="btn btn-outline p-8" aria-label="Toggle Theme">
                    <i data-lucide="moon" class="theme-icon"></i>
                </button>
            </nav>
            
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </header>
