<?php
/**
 * Corporativo.
 *
 * This file adds the Services page template to the Genesis Corporativo Theme.
 *
 * @package Corporativo
 * @author 	Jordi Garcia Codina
 * @license GPL-2.0+
 * @link    boluda.com
 */

// Display Pricing Table
add_action( 'genesis_entry_content', 'jgc_pricing_table' );
function jgc_pricing_table() { 

	?>
	
	<section class="pricing-table">
		
		<div class="one-third first">
			
			<div class="one-third-content">
				
				<p class="one-third-content-title"><?php the_field('titulo_columna_1'); ?></p>
				<p class="one-third-content-amount"><?php the_field('precio_columna_1'); ?></p>
				<?php the_field('destacados_columna_1'); ?>
				<a class="button" href="#"><?php the_field('texto_boton_columna_1'); ?></a>
				
			</div>
			
		</div>

		<div class="one-third">
			
			<div class="one-third-content top">
				
				<p class="one-third-content-title"><?php the_field('titulo_columna_2'); ?></p>
				<p class="one-third-content-amount"><?php the_field('precio_columna_2'); ?></p>
				<?php the_field('destacados_columna_2'); ?>
				<a class="button" href="#"><?php the_field('texto_boton_columna_2'); ?></a>
				
			</div>
			
		</div>

		<div class="one-third ">
			
			<div class="one-third-content">
				
				<p class="one-third-content-title"><?php the_field('titulo_columna_3'); ?></p>
				<p class="one-third-content-amount"><?php the_field('precio_columna_3'); ?></p>
				<?php the_field('destacados_columna_3'); ?>
				<a class="button" href="#"><?php the_field('texto_boton_columna_3'); ?></a>
				
			</div>
			
		</div>
		
	</section>
	
	<?php

}

// Runs the Genesis loop.
genesis();
?>
