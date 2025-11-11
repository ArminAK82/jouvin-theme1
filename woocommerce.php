<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if ( function_exists( 'woocommerce_content' ) ) {
            woocommerce_content();
        }
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
if ( is_active_sidebar( 'shop-sidebar' ) ) {
    dynamic_sidebar( 'shop-sidebar' );
} else {
    get_sidebar();
}

get_footer();
