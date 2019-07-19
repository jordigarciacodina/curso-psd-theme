<?php
/**
 * Genesis Sample.
 *
 * This file adds the landing page template to the Genesis Corporativo Theme.
 *
 * Template Name: Página estrecha
 *
 * @package Corporativo
 * @author  Jordi Garcia Codina
 * @license GPL-2.0+
 * @link    boluda.com
 */

// Add Narrow Page Body Class
add_filter( 'body_class', 'genesis_sample_add_body_class' );
function genesis_sample_add_body_class( $classes ) {

	$classes[] = 'narrow-page';
	return $classes;

}

// Runs the Genesis loop.
genesis();
?>
