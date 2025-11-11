<?php
defined( 'ABSPATH' ) || exit;

global $product;
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <div class="single-product-layout">
        <div class="product-gallery">
            <?php woocommerce_show_product_images(); ?>
        </div>

        <div class="product-summary">
            <?php
            woocommerce_template_single_title();
            woocommerce_template_single_rating();
            woocommerce_template_single_price();
            woocommerce_template_single_excerpt();
            woocommerce_template_single_add_to_cart();
            woocommerce_template_single_meta();
            ?>
        </div>
    </div>

    <?php
    woocommerce_output_product_data_tabs();
    woocommerce_upsell_display();
    woocommerce_related_products( array(
        'posts_per_page' => 4,
        'columns'        => 4,
        'orderby'        => 'rand',
    ) );
    ?>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
