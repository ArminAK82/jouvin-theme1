<?php
/**
 * Custom Walker class for navigation menus.
 *
 * @package Jouvin
 */

class Jouvin_Walker_Nav_Menu extends Walker_Nav_Menu {
    /**
     * Starts the element output.
     *
     * @param string $output            Passed by reference. Used to append additional content.
     * @param WP_Post $item             Menu item data object.
     * @param int $depth                Depth of menu item. Used for padding.
     * @param stdClass $args            An object of wp_nav_menu() arguments.
     * @param int $id                   Current item ID.
     */
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10\">\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        if ( is_array( $args ) ) {
            $args = (object) $args;
        }
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $li_classes = 'relative';
        $item_classes = (array) $item->classes;
        if ( in_array( 'menu-item-has-children', $item_classes ) ) {
            $li_classes .= ' has-children';
        }
        $output .= $indent . '<li class="' . esc_attr( $li_classes ) . '">';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';
        $atts['class']  = 'text-gray-600 hover:text-primary transition-colors duration-300 group';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        if ( in_array( 'menu-item-has-children', $item_classes ) ) {
            $item_output .= '<i class="fas fa-chevron-down text-xs ml-1"></i>';
        }
        $item_output .= '<span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}
