<?php
/**
 * Matchstix Set of Cards (custom taxonomy)
 *
 * @package MSX\Cards
 *
 * @since 0.2.0
 */

/**
 * Return arguments for registering msx_card_set
 */
function msx_card_set_taxonomy_args() {

  $labels = array(
    'name'                       => _x( 'Card Sets', 'taxonomy general name', 'MSX_TEXT_DOMAIN' ),
    'singular_name'              => _x( 'Card Set', 'taxonomy singular name', 'MSX_TEXT_DOMAIN' ),
    'menu_name'                  => __( 'Sets', 'MSX_TEXT_DOMAIN' ),
    'search_items'               => __( 'Search Sets', 'MSX_TEXT_DOMAIN' ),
    'popular_items'              => __( 'Popular Sets', 'MSX_TEXT_DOMAIN' ),
    'all_items'                  => __( 'All Sets', 'MSX_TEXT_DOMAIN' ),
    'edit_item'                  => __( 'Edit Set', 'MSX_TEXT_DOMAIN' ),
    'view_item'                  => __( 'View Set', 'MSX_TEXT_DOMAIN' ),
    'update_item'                => __( 'Update Set', 'MSX_TEXT_DOMAIN' ),
    'add_new_item'               => __( 'Add New Set', 'MSX_TEXT_DOMAIN' ),
    'new_item_name'              => __( 'New Set Name', 'MSX_TEXT_DOMAIN' ),
    'separate_items_with_commas' => __( 'Separate sets with commas' ),
    'add_or_remove_items'        => __( 'Add or remove sets' ),
    'choose_from_most_used'      => __( 'Choose from the most used sets' ),
    'not_found'                  => __( 'No sets found.', 'MSX_TEXT_DOMAIN' ),
    'no_terms'                   => __( 'No sets', 'MSX_TEXT_DOMAIN' ),
    'items_list_navigation'      => __( 'Sets list navigation', 'MSX_TEXT_DOMAIN' ),
    'items_list'                 => __( 'Sets list', 'MSX_TEXT_DOMAIN' ),
  );

  $rewrite = array(
    'slug'                       => 'card-set',
    'with_front'                 => true,
    'hierarchical'               => false,
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    'rewrite'                    => $rewrite,
  );

  return $args;
}

