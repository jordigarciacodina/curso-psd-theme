<?php
/**
 * Corporativo.
 *
 * This file adds the home page template to the Genesis Corporativo Theme.
 *
 * @package Corporativo
 * @author 	Jordi Garcia Codina
 * @license GPL-2.0+
 * @link    boluda.com
 */

// Display Hero Widget Area
add_action( 'genesis_after_header', 'jgc_add_genesis_hero_widget_area' );
function jgc_add_genesis_hero_widget_area() {
                genesis_widget_area( 'hero-widget-area', array(
		'before' => '<section class="hero">',
		'after'  => '</section>',
    ) );

}

// Display Services Widget Area
add_action( 'genesis_before_content', 'jgc_add_genesis_services_widget_area' );
function jgc_add_genesis_services_widget_area() {
                genesis_widget_area( 'services-widget-area', array(
		'before' => '<section class="home-services">',
		'after'  => '</section>',
    ) );

}

// Genesis Custom Loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'jgc_genesis_custom_loop' );
function jgc_genesis_custom_loop() {

	global $post;

		$args = array( 
		'posts_per_page' => 6, 
		'post_type' => 'post', 
		'post_status' => 'publish'
	);

	$myposts = get_posts( $args );

	foreach ( $myposts as $post ) : setup_postdata( $post ); ?> 
		<article class="home-post">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
			<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
			<p class="home-excerpt"><?php the_excerpt(); ?></a></p>
		</article>
	<?php endforeach; 
		
	wp_reset_postdata();
	
	?>
	
	<div class="home-cta">
		
		<a class="button">Ver más</a>
		
	</div>
	
	<?php
}

// Runs the Genesis loop.
genesis();
?>