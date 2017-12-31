<?php
/**
 * Templates related to msx_profile (custom post type)
 *
 * @package MSX\Templates
 */

/**
 * Display team profile metadata
 */
function msx_profile_entry_meta() {
	$title = msx_profile_meta( 'title' );
	$email = msx_profile_meta( 'email' );
	$phone = msx_profile_phone();

	$output  = '';
	$output .= ! empty( $title ) ? '<h4>' . $title . '</h4>' : '';
	$output .= ! empty( $email ) | ! empty( $phone ) ? '<p>' : '';
	$output .= ! empty( $email ) ? $email : '';
	$output .= ! empty( $email ) && ! empty( $phone ) ? '<br>' : '';
	$output .= ! empty( $phone ) ? $phone : '';
	$output .= ! empty( $email ) | ! empty( $phone ) ? '</p>' : '';
	echo $output;
}
