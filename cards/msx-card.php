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
    'name'                  => _x( 'Cards', 'post type general name', MSX_TEXT_DOMAIN ),
    'singular_name'         => _x( 'Card', 'post type singular name', MSX_TEXT_DOMAIN ),
    'menu_name'             => __( 'Cards', MSX_TEXT_DOMAIN ),
    'name_admin_bar'        => __( 'Cards', MSX_TEXT_DOMAIN ),
    'add_new'               => __( 'Add New', MSX_TEXT_DOMAIN ),
    'add_new_item'          => __( 'Add New Card', MSX_TEXT_DOMAIN ),
    'edit_item'             => __( 'Edit Card', MSX_TEXT_DOMAIN ),
    'new_item'              => __( 'New Card', MSX_TEXT_DOMAIN ),
    'view_item'             => __( 'View Card', MSX_TEXT_DOMAIN ),
    'update_item'           => __( 'Update', MSX_TEXT_DOMAIN ),
    'search_items'          => __( 'Search Cards', MSX_TEXT_DOMAIN ),
    'not_found'             => __( 'No cards found.', MSX_TEXT_DOMAIN ),
    'not_found_in_trash'    => __( 'No cards found in Trash.', MSX_TEXT_DOMAIN ),
    'all_items'             => __( 'All Cards', MSX_TEXT_DOMAIN ),
    'archives'              => __( 'Card Archives', MSX_TEXT_DOMAIN ),
    'insert_into_item'      => __( 'Insert into card', MSX_TEXT_DOMAIN ),
    'uploaded_to_this_item' => __( 'Uploaded to this card', MSX_TEXT_DOMAIN ),
    'featured_image'        => __( 'Featured Image', MSX_TEXT_DOMAIN ),
    'set_featured_image'    => __( 'Set featured image', MSX_TEXT_DOMAIN ),
    'remove_featured_image' => __( 'Remove featured image', MSX_TEXT_DOMAIN ),
    'use_featured_image'    => __( 'Use as featured image', MSX_TEXT_DOMAIN ),
    'filter_items_list'     => __( 'Filter cards list', MSX_TEXT_DOMAIN ),
    'items_list_navigation' => __( 'Cards list navigation', MSX_TEXT_DOMAIN ),
    'items_list'            => __( 'Cards list', MSX_TEXT_DOMAIN ),
  );
  $args = array(
    'label'               => __( 'msx_card', MSX_TEXT_DOMAIN ),
    'description'         => __( 'A card', MSX_TEXT_DOMAIN ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'author', 'thumbnail', 'post-formats' ),
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

