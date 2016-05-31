<?php
/**
 * Matchstix Card (custom post type)
 *
 * @package MSX\Cards
 *
 * @since 0.2.0
 */

/**
 * Return arguments for registering msx_deck
 */
function msx_card_post_type_args() {
  $labels = array(
    'name'                => _x( 'Cards', 'Post Type General Name', MSX_TEXT_DOMAIN ),
    'singular_name'       => _x( 'Card', 'Post Type Singular Name', MSX_TEXT_DOMAIN ),
    'menu_name'           => __( 'Cards', MSX_TEXT_DOMAIN ),
    'all_items'           => __( 'All cards', MSX_TEXT_DOMAIN ),
    'view_item'           => __( 'View', MSX_TEXT_DOMAIN ),
    'add_new_item'        => __( 'Add New', MSX_TEXT_DOMAIN ),
    'add_new'             => __( 'New', MSX_TEXT_DOMAIN ),
    'edit_item'           => __( 'Edit', MSX_TEXT_DOMAIN ),
    'update_item'         => __( 'Update', MSX_TEXT_DOMAIN ),
    'search_items'        => __( 'Search cards', MSX_TEXT_DOMAIN ),
    'not_found'           => __( 'No cards found', MSX_TEXT_DOMAIN ),
    'not_found_in_trash'  => __( 'No cards found in Trash. Did you check recycling?', MSX_TEXT_DOMAIN ),
  );
  $args = array(
    'label'               => __( 'msx_card', MSX_TEXT_DOMAIN ),
    'description'         => __( 'A card', MSX_TEXT_DOMAIN ),
    'labels'              => $labels,
    'supports'            => array( 'title' ),
    'hierarchical'        => false,
    'public'              => false,
    'show_ui'             => true,
    'show_in_menu'        => false,
    'show_in_nav_menus'   => false,
    'show_in_admin_bar'   => false,
    'menu_position'       => 15,
    'menu_icon'           => 'dashicons-slides',
    'can_export'          => false,
    'has_archive'         => false,
    'exclude_from_search' => true,
    'publicly_queryable'  => true,
    'rewrite'             => true,
    'capability_type'     => 'post',
  );
  return $args;
}

