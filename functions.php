<?php
function jouvin_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Add support for core custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'jouvin_setup' );

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/menu-functions.php';
require get_template_directory() . '/inc/class-jouvin-walker-nav-menu.php';

function jouvin_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'jouvin' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'jouvin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'jouvin' ),
        'id'            => 'shop-sidebar',
        'description'   => esc_html__( 'Add widgets here to appear in your shop.', 'jouvin' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'jouvin_widgets_init' );

function jouvin_scripts() {
    // Tailwind CSS
    wp_enqueue_script( 'tailwind-css', 'https://cdn.tailwindcss.com', array(), null, false );

    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

    // Custom Styles
    wp_enqueue_style( 'jouvin-tailwind-custom', get_template_directory_uri() . '/assets/css/tailwind-custom.css', array(), '1.0.0' );
    
    // Main JS
    wp_enqueue_script( 'jouvin-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

    wp_localize_script( 'jouvin-main-js', 'jouvin_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ) );
}
add_action( 'wp_enqueue_scripts', 'jouvin_scripts' );

function jouvin_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#7c3aed',
                        accent: '#059669',
                        special: '#dc2626'
                    }
                }
            }
        }
    </script>
    <?php
}
add_action( 'wp_head', 'jouvin_tailwind_config' );

// WooCommerce Support
function jouvin_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'jouvin_add_woocommerce_support' );

// WooCommerce Wrappers
function jouvin_woocommerce_wrapper_start() {
    echo '<div id="primary" class="content-area"><main id="main" class="site-main" role="main">';
}
add_action( 'woocommerce_before_main_content', 'jouvin_woocommerce_wrapper_start', 10 );

function jouvin_woocommerce_wrapper_end() {
    echo '</main></div>';
}
add_action( 'woocommerce_after_main_content', 'jouvin_woocommerce_wrapper_end', 10 );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// Elementor Support
function jouvin_add_elementor_support() {
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'jouvin_add_elementor_support' );

// AJAX update cart contents count
function jouvin_update_cart_count() {
    echo WC()->cart->get_cart_contents_count();
    wp_die();
}
add_action( 'wp_ajax_update_cart_count', 'jouvin_update_cart_count' );
add_action( 'wp_ajax_nopriv_update_cart_count', 'jouvin_update_cart_count' );

// Custom search form for WooCommerce
function jouvin_woocommerce_product_search_form( $form ) {
    $form = '<form role="search" method="get" class="woocommerce-product-search" action="' . esc_url( home_url( '/' ) ) . '">
        <label class="screen-reader-text" for="woocommerce-product-search-field-' . uniqid() . '">' . esc_html__( 'Search for:', 'jouvin' ) . '</label>
        <input type="search" id="woocommerce-product-search-field-' . uniqid() . '" class="search-field" placeholder="' . esc_attr__( 'Search products&hellip;', 'jouvin' ) . '" value="' . get_search_query() . '" name="s" />
        <button type="submit" value="' . esc_attr_x( 'Search', 'submit button', 'jouvin' ) . '"><i class="fas fa-search"></i></button>
        <input type="hidden" name="post_type" value="product" />
    </form>';
    return $form;
}
add_filter( 'get_product_search_form', 'jouvin_woocommerce_product_search_form' );
