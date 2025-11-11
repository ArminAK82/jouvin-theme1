<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50 min-h-screen flex flex-col'); ?>>
    <header class="header-gradient sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <?php
                    if ( has_custom_logo() ) {
                        the_custom_logo();
                    } else {
                        ?>
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center">
                            <i class="fas fa-shopping-bag text-white text-sm"></i>
                        </div>
                        <h1 class="text-xl font-bold text-gray-800"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                    }
                    ?>
                </div>

                <!-- Search Bar -->
                <div class="flex-1 max-w-lg mx-8 hidden md:block">
                    <?php get_search_form(); ?>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center space-x-6">
                    <button id="mobile-search-button" class="text-gray-600 hover:text-primary focus:outline-none">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-primary focus:outline-none">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>

                <!-- Main Navigation -->
                <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'jouvin-theme' ); ?>">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'main-menu flex space-x-4',
                            'container'      => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'walker'         => new Jouvin_Walker_Nav_Menu(),
                            'fallback_cb'    => 'wp_page_menu',
                        )
                    );
                    ?>
                </nav>

                <!-- Navigation Icons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="text-gray-600 hover:text-primary transition-colors relative">
                        <i class="fas fa-shopping-cart text-lg"></i>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </a>
                    <?php if ( ! is_user_logged_in() ) : ?>
                        <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="text-gray-600 hover:text-primary transition-colors">
                            <i class="fas fa-user text-lg"></i>
                        </a>
                    <?php endif; ?>
                    <?php if ( is_user_logged_in() ) : ?>
                        <?php $current_user = wp_get_current_user(); ?>
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white font-semibold text-sm">
                            <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">
                                <?php echo esc_html( strtoupper( substr( $current_user->display_name, 0, 1 ) ) ); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Search Bar (Mobile) -->
            <div id="mobile-search-bar" class="py-2 md:hidden hidden">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
    <div id="mobile-menu" class="hidden md:hidden">
        <div class="container mx-auto px-4 py-4">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
            <!-- Navigation Icons -->
            <div class="flex items-center space-x-4 mt-4">
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="text-gray-600 hover:text-primary transition-colors relative">
                    <i class="fas fa-shopping-cart text-lg"></i>
                    <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </a>
                <?php if ( ! is_user_logged_in() ) : ?>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="text-gray-600 hover:text-primary transition-colors">
                        <i class="fas fa-user text-lg"></i>
                    </a>
                <?php endif; ?>
                <?php if ( is_user_logged_in() ) : ?>
                    <?php $current_user = wp_get_current_user(); ?>
                    <div class="w-8 h-8 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center text-white font-semibold text-sm">
                        <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>">
                            <?php echo esc_html( strtoupper( substr( $current_user->display_name, 0, 1 ) ) ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="search-overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center">
        <div class="bg-white p-8 rounded-lg w-1/2">
            <?php get_search_form(); ?>
            <button id="close-search" class="absolute top-4 right-4 text-gray-600 hover:text-primary">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>
    </div>
<div id="page" class="site">
    <div id="content" class="site-content">