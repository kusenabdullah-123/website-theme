<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Header -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">DevPortfolio.</a>
            
            <nav class="nav-menu" id="nav-menu">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
                <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
                
                <!-- Dark Mode Toggle -->
                <button id="theme-toggle" class="btn btn-outline" style="padding: 8px;" aria-label="Toggle Theme">
                    <i data-lucide="moon" class="theme-icon"></i>
                </button>
            </nav>
            
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </header>
