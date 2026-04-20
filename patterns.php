<?php
/**
 * Dublin Painter — Block Patterns Registration
 *
 * @package Dublin_Painter
 */

/**
 * Register all block patterns.
 */
function dublin_painter_register_patterns(): void {
	$patterns = array(
		'hero',
		'trust-badges',
		'service-cards',
		'process-timeline',
		'before-after',
		'testimonials',
		'pricing',
		'service-areas',
		'faq',
		'quote-cta',
		'service-hero',
		'contact-section',
		'gallery-grid',
		'about-intro',
		'stats-bar',
		'why-choose-us',
		'awards',
	);

	foreach ( $patterns as $pattern ) {
		$file = get_stylesheet_directory() . "/patterns/{$pattern}.php";
		if ( file_exists( $file ) ) {
			register_block_pattern(
				"dublin-painter/{$pattern}",
				require $file
			);
		}
	}
}
add_action( 'init', 'dublin_painter_register_patterns' );