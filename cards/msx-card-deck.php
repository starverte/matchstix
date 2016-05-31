<?php
/**
 * Matchstix Deck of Cards (custom post type)
 *
 * @package MSX\Cards
 *
 * @since 0.2.0
 */

/**
 * Return arguments for registering msx_deck
 */
function msx_card_deck_post_type_args() {
  $labels = array(
    'name'                => _x( 'Decks', 'Post Type General Name', MSX_TEXT_DOMAIN ),
    'singular_name'       => _x( 'Deck', 'Post Type Singular Name', MSX_TEXT_DOMAIN ),
    'menu_name'           => __( 'Cards', MSX_TEXT_DOMAIN ),
    'all_items'           => __( 'All decks', MSX_TEXT_DOMAIN ),
    'view_item'           => __( 'View', MSX_TEXT_DOMAIN ),
    'add_new_item'        => __( 'Add New', MSX_TEXT_DOMAIN ),
    'add_new'             => __( 'New', MSX_TEXT_DOMAIN ),
    'edit_item'           => __( 'Edit', MSX_TEXT_DOMAIN ),
    'update_item'         => __( 'Update', MSX_TEXT_DOMAIN ),
    'search_items'        => __( 'Search decks', MSX_TEXT_DOMAIN ),
    'not_found'           => __( 'No decks found', MSX_TEXT_DOMAIN ),
    'not_found_in_trash'  => __( 'No decks found in Trash. Did you check recycling?', MSX_TEXT_DOMAIN ),
  );
  $args = array(
    'label'               => __( 'msx_card_deck', MSX_TEXT_DOMAIN ),
    'description'         => __( 'A grouping of cards', MSX_TEXT_DOMAIN ),
    'labels'              => $labels,
    'supports'            => array( 'title' ),
    'hierarchical'        => false,
    'public'              => false,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => false,
    'show_in_admin_bar'   => true,
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

/**
 * Display cards on Edit screen
 */
function msx_card_deck_edit() {
  global $post;
  $cards = get_posts( array( 'post_type' => 'msx_card' ) ); ?>

<a href="#" class="button add_card_media" id="btn_above" title="Add card to deck">
  <span class="dashicons dashicons-images-alt"></span> Add Card
</a>
<div id="cards_wrap">
  <div id="cards"><?php
    foreach ( $cards as $card ) {
      if ( ! empty( $card ) && false !== get_post_status( $card->ID ) ) {
        $custom = get_post_custom( $card->ID );

        if ( ! empty( $custom['image/jpeg'] ) ) {
          $image = wp_get_attachment_image_src( $custom['image/jpeg'][0], 'msx-card-thumb' );
        } elseif ( ! empty( $custom['image/png'] ) ) {
          $image = wp_get_attachment_image_src( $custom['image/png'][0], 'msx-card-thumb' );
        } elseif ( ! empty( $custom['image/gif'] ) ) {
          $image = wp_get_attachment_image_src( $custom['image/gif'][0], 'msx-card-thumb' );
        }
?>
    <div class="card" id="<?php echo $card->ID; ?>">
      <div class="card-controls">
        <span id="controls_<?php echo $card->ID; ?>"><?php echo $card->post_title; ?></span>

        <a class="card-delete" href="#" onclick="cardDelete(\'<?php echo $card->ID; ?>\' )" title="Delete card">
          <span class="dashicons dashicons-dismiss" style="float:right"></span>
        </a>
      </div>

      <img id="card_img_<?php echo $card->ID; ?>" src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>">
      <pre><?php print_r( $custom['media'][0] ); ?></pre>

      <p>
        <input type="text" size="32" class="card-title" name="cards_title_<?php echo $card->ID; ?>" id="cards_title_<?php echo $card->ID; ?>" value="<?php echo $card->post_title; ?>" placeholder="Title" /><br>
        <textarea cols="32" name="cards_content_<?php echo $card->ID; ?>" id="cards_content_<?php echo $card->ID; ?>" placeholder="Caption"><?php echo $card->post_content; ?></textarea>
      </p>

      <span class="dashicons dashicons-admin-links" style="float:left;padding:5px;"></span>
      <input type="text" size="28" name="cards_link_<?php echo $card->ID; ?>" id="cards_link_<?php echo $card->ID; ?>" value="<?php echo $custom['target'][0]; ?>" placeholder="Link" />
    </div><?php
    }
  } ?>
  </div>

  <a href="#" class="add_card_media add_new_card" title="Add card to deck">
    <div class="card-new">
      <p><span class="glyphicon glyphicon-plus-sign"></span><br>Add Slide</p>
    </div>
  </a>
</div>

<div style="float:none; clear:both;"></div><?php
}

