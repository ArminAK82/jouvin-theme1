<?php
/**
 * Register navigation menus
 *
 * @package Jouvin
 */

function jouvin_register_nav_menu() {
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'jouvin' ),
        )
    );
}
add_action( 'after_setup_theme', 'jouvin_register_nav_menu' );

/**
 * Add mega menu checkbox to menu items.
 */
function jouvin_add_custom_nav_fields( $menu_item ) {
    $menu_item->mega_menu = get_post_meta( $menu_item->ID, '_menu_item_mega_menu', true );
    ?>
    <p class="field-mega-menu description description-wide">
        <label for="edit-menu-item-mega-menu-<?php echo $menu_item->ID; ?>">
            <input type="checkbox" id="edit-menu-item-mega-menu-<?php echo $menu_item->ID; ?>" class="widefat code edit-menu-item-mega-menu" name="menu-item-mega-menu[<?php echo $menu_item->ID; ?>]" value="1" <?php checked( $menu_item->mega_menu, 1 ); ?> />
            <?php _e( 'Enable Mega Menu', 'jouvin' ); ?>
        </label>
    </p>
    <?php
}
add_action( 'wp_nav_menu_item_custom_fields', 'jouvin_add_custom_nav_fields', 10, 1 );

/**
 * Save mega menu checkbox value.
 */
function jouvin_update_custom_nav_fields( $menu_id, $menu_item_db_id, $args ) {
    if ( isset( $_REQUEST['menu-item-mega-menu'][ $menu_item_db_id ] ) ) {
        update_post_meta( $menu_item_db_id, '_menu_item_mega_menu', 1 );
    } else {
        delete_post_meta( $menu_item_db_id, '_menu_item_mega_menu' );
    }
}
add_action( 'wp_update_nav_menu_item', 'jouvin_update_custom_nav_fields', 10, 3 );

/**
 * Add custom fields to the menu item object.
 */
function jouvin_nav_menu_item_objects( $items, $args ) {
    foreach ( $items as &$item ) {
        $item->mega_menu = get_post_meta( $item->ID, '_menu_item_mega_menu', true );
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'jouvin_nav_menu_item_objects', 10, 2 );
