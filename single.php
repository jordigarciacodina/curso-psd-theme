<?php
/**
 * Corporativo.
 *
 * This file adds the single post template to the Genesis Corporativo Theme.
 *
 * @package Corporativo
 * @author 	Jordi Garcia Codina
 * @license GPL-2.0+
 * @link    boluda.com
 */

// Remove Genesis Post Info
remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

// Remove Genesis Post Meta
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

//* Display Featured Image on posts 
add_action( 'genesis_before_entry_content', 'bs_featured_post_image', 2 );
function bs_featured_post_image() {
	the_post_thumbnail();
}

// Runs the Genesis loop.
genesis();
?>