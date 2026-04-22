<?php
/**
 * Dublin Painter — Block Theme Functions
 *
 * @package Dublin_Painter
 */

if ( ! defined( 'DUBLIN_PAINTER_VERSION' ) ) {
	define( 'DUBLIN_PAINTER_VERSION', '2.5.0' );
}

/**
 * Theme setup — register features, patterns, block styles.
 */
function dublin_painter_setup(): void {
	// Add editor and front-end styles
	add_editor_style( array( 'style.css', 'assets/css/global.css' ) );

	// Register block patterns category
	register_block_pattern_category(
		'dublin-painter',
		array( 'label' => __( 'Dublin Painter', 'dublin-painter' ) )
	);

	// Register custom block styles for core blocks
	register_block_style( 'core/button', array( 'name' => 'dp-cta', 'label' => __( 'Primary CTA', 'dublin-painter' ) ) );
	register_block_style( 'core/button', array( 'name' => 'dp-outline', 'label' => __( 'Outline CTA', 'dublin-painter' ) ) );
	register_block_style( 'core/group', array( 'name' => 'dp-glass', 'label' => __( 'Glass Card', 'dublin-painter' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'dp-gradient', 'label' => __( 'Blue Gradient', 'dublin-painter' ) ) );
	register_block_style( 'core/cover', array( 'name' => 'dp-hero', 'label' => __( 'Hero Section', 'dublin-painter' ) ) );

	// Allow SVG uploads for logo
	add_filter( 'upload_mimes', static function ( array $mimes ): array {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	} );
}
add_action( 'after_setup_theme', 'dublin_painter_setup' );

/**
 * Enqueue front-end assets.
 */
function dublin_painter_scripts(): void {
	// Theme stylesheet
	wp_enqueue_style( 'dublin-painter-style', get_stylesheet_uri(), array(), DUBLIN_PAINTER_VERSION );

	// Global CSS
	wp_enqueue_style( 'dublin-painter-global', get_stylesheet_directory_uri() . '/assets/css/global.css', array( 'dublin-painter-style' ), DUBLIN_PAINTER_VERSION );

	// Main JS (dark mode toggle, scroll animations, mobile nav)
	wp_enqueue_script(
		'dublin-painter-js',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		DUBLIN_PAINTER_VERSION,
		array( 'strategy' => 'defer' )
	);

	// Inter font from Google Fonts
	wp_enqueue_style( 'dublin-painter-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'dublin_painter_scripts' );

/**
 * Register custom blocks with render_callback + ACF fields.
 * Each block has: block.json, render.php, style.css, acf-register.php
 */
function dublin_painter_register_blocks(): void {
	$blocks_dir = get_stylesheet_directory() . '/blocks/';
	if ( ! is_dir( $blocks_dir ) ) {
		return;
	}

	$block_dirs = glob( $blocks_dir . '*', GLOB_ONLYDIR );
	foreach ( $block_dirs as $block_dir ) {
		$block_json  = $block_dir . '/block.json';
		$render_file = $block_dir . '/render.php';

		if ( ! file_exists( $block_json ) ) {
			continue;
		}

		if ( file_exists( $render_file ) ) {
			register_block_type( $block_dir, array(
				'render_callback' => function( $attributes, $content ) use ( $render_file ) {
					ob_start();
					include $render_file;
					return ob_get_clean();
				},
			) );
		} else {
			register_block_type( $block_dir );
		}
	}
}
add_action( 'init', 'dublin_painter_register_blocks', 20 );

/**
 * Load ACF field groups for blocks that have them.
 */
function dublin_painter_load_acf_fields(): void {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	$blocks_dir = get_stylesheet_directory() . '/blocks/';
	if ( ! is_dir( $blocks_dir ) ) {
		return;
	}

	$block_dirs = glob( $blocks_dir . '*', GLOB_ONLYDIR );
	foreach ( $block_dirs as $block_dir ) {
		$acf_file = $block_dir . '/acf-register.php';
		if ( file_exists( $acf_file ) ) {
			require_once $acf_file;
		}
	}
}
add_action( 'acf/init', 'dublin_painter_load_acf_fields' );

/**
 * Register custom block category.
 */
function dublin_painter_register_category( $categories ) {
	array_unshift( $categories, array(
		'slug'  => 'dublin-painter',
		'title' => __( 'Dublin Painter', 'dublin-painter' ),
	) );
	return $categories;
}
add_filter( 'block_categories_all', 'dublin_painter_register_category' );

/**
 * Register Custom Post Types (Projects & Testimonials).
 */
require get_stylesheet_directory() . '/includes/cpt.php';

/**
 * Register block patterns.
 */
require get_stylesheet_directory() . '/patterns.php';

/**
 * Shortcodes.
 */
function dublin_painter_shortcode_year(): string {
	return (string) gmdate( 'Y' );
}
add_shortcode( 'dp_year', 'dublin_painter_shortcode_year' );

function dublin_painter_shortcode_phone(): string {
	return get_theme_mod( 'dp_phone', '01 234 5678' );
}
add_shortcode( 'dp_phone', 'dublin_painter_shortcode_phone' );

function dublin_painter_shortcode_email(): string {
	return get_theme_mod( 'dp_email', 'info@paintersdublin.ie' );
}
add_shortcode( 'dp_email', 'dublin_painter_shortcode_email' );

/**
 * Customizer — Business info.
 */
function dublin_painter_customize( WP_Customize_Manager $wp_customize ): void {
	$wp_customize->add_section( 'dublin_painter_business', array( 'title' => __( 'Business Info', 'dublin-painter' ), 'priority' => 30 ) );
	$fields = array(
		'dp_phone'      => array( 'label' => 'Phone Number', 'default' => '01 234 5678' ),
		'dp_phone_raw'  => array( 'label' => 'Phone (raw)', 'default' => '012345678' ),
		'dp_email'      => array( 'label' => 'Email', 'default' => 'info@paintersdublin.ie' ),
		'dp_whatsapp'   => array( 'label' => 'WhatsApp Number', 'default' => '353871234567' ),
	);
	foreach ( $fields as $key => $field ) {
		$wp_customize->add_setting( $key, array( 'default' => $field['default'], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( $key, array( 'label' => __( $field['label'], 'dublin-painter' ), 'section' => 'dublin_painter_business', 'type' => 'text' ) );
	}
}
add_action( 'customize_register', 'dublin_painter_customize' );

/**
 * JSON-LD LocalBusiness structured data.
 */
function dublin_painter_local_business_schema(): void {
	$phone = get_theme_mod( 'dp_phone', '01 234 5678' );
	$email = get_theme_mod( 'dp_email', 'info@paintersdublin.ie' );
	$payload = array(
		'@context' => 'https://schema.org', '@type' => 'LocalBusiness',
		'name' => 'Dublin Painter', 'description' => 'Professional Painting Services in Dublin',
		'url' => home_url( '/' ), 'telephone' => $phone, 'email' => $email,
		'address' => array( '@type' => 'PostalAddress', 'addressLocality' => 'Dublin', 'addressCountry' => 'IE' ),
		'areaServed' => array( 'Dublin', 'Wicklow', 'Kildare', 'Meath' ),
		'serviceType' => 'Painting', 'priceRange' => '$$',
		'aggregateRating' => array( '@type' => 'AggregateRating', 'ratingValue' => '4.9', 'reviewCount' => '127' ),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $payload ) . '</script>';
}
add_action( 'wp_head', 'dublin_painter_local_business_schema' );
