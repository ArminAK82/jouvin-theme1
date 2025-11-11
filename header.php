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
                <div class="flex-1 max-w-lg mx-8">
                    <?php get_search_form(); ?>
                </div>

                <!-- Navigation Icons -->
                <div class="flex items-center space-x-6">
                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="text-gray-600 hover:text-primary transition-colors relative">
                        <i class="fas fa-heart text-lg"></i>
                        <!-- You can make this dynamic with a wishlist plugin -->
                        <span class="cart-count">0</span>
                    </a>
                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="text-gray-600 hover:text-primary transition-colors relative">
                        <i class="fas fa-shopping-cart text-lg"></i>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </a>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ); ?>" class="text-gray-600 hover:text-primary transition-colors">
                        <i class="fas fa-user text-lg"></i>
                    </a>
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
    </header>
<div id="page" class="site">
    <div id="content" class="site-content">