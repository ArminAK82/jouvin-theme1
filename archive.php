<?php get_header(); ?>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <header class="woocommerce-products-header">
                <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                <?php woocommerce_taxonomy_archive_description(); ?>
            </header>

            <div class="archive-layout">
                <div class="archive-content">
                    <?php
                    if ( woocommerce_product_loop() ) {
                        woocommerce_product_loop_start();

                        if ( wc_get_loop_prop( 'total' ) ) {
                            while ( have_posts() ) {
                                the_post();
                                wc_get_template_part( 'content', 'product' );
                            }
                        }

                        woocommerce_product_loop_end();
                        woocommerce_pagination();
                    } else {
                        wc_get_template( 'loop/no-products-found.php' );
                    }
                    ?>
                </div>
                <div class="archive-sidebar">
                    <?php dynamic_sidebar( 'shop-sidebar' ); ?>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->
</div>

<?php get_footer(); ?>
