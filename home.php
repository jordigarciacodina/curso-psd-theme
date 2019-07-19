<?php
/**
 * Corporativo.
 *
 * This file adds the blog archive template to the Genesis Corporativo Theme.
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

// Reposition Genesis Featured Image
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_entry_header', 'genesis_do_post_image', 1 );

// Runs the Genesis loop.
genesis();
?>