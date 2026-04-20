<?php
/**
 * Dublin Painter — Block Theme Functions
 *
 * @package Dublin_Painter
 */

if ( ! defined( 'DUBLIN_PAINTER_VERSION' ) ) {
	define( 'DUBLIN_PAINTER_VERSION', '1.0.0' );
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
	register_block_style(
		'core/button',
		array(
			'name'  => 'dp-cta',
			'label' => __( 'Primary CTA', 'dublin-painter' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'dp-outline',
			'label' => __( 'Outline CTA', 'dublin-painter' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'dp-glass',
			'label' => __( 'Glass Card', 'dublin-painter' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'dp-gradient',
			'label' => __( 'Blue Gradient', 'dublin-painter' ),
		)
	);

	register_block_style(
		'core/cover',
		array(
			'name'  => 'dp-hero',
			'label' => __( 'Hero Section', 'dublin-painter' ),
		)
	);

	// Allow SVG uploads for logo
	add_filter(
		'upload_mimes',
		static function ( array $mimes ): array {
			$mimes['svg'] = 'image/svg+xml';
			return $mimes;
		}
	);
}
add_action( 'after_setup_theme', 'dublin_painter_setup' );

/**
 * Enqueue front-end assets.
 */
function dublin_painter_scripts(): void {
	// Theme stylesheet
	wp_enqueue_style(
		'dublin-painter-style',
		get_stylesheet_uri(),
		array(),
		DUBLIN_PAINTER_VERSION
	);

	// Global CSS
	wp_enqueue_style(
		'dublin-painter-global',
		get_stylesheet_directory_uri() . '/assets/css/global.css',
		array( 'dublin-painter-style' ),
		DUBLIN_PAINTER_VERSION
	);

	// Main JS (before/after slider, smooth scroll, mobile CTA)
	wp_enqueue_script(
		'dublin-painter-js',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		DUBLIN_PAINTER_VERSION,
		array( 'strategy' => 'defer' )
	);

	// Inter font from Google Fonts
	wp_enqueue_style(
		'dublin-painter-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
		array(),
		null
	);
}
add_action( 'wp_enqueue_scripts', 'dublin_painter_scripts' );

/**
 * Register custom blocks.
 */
function dublin_painter_register_blocks(): void {
	$blocks = array(
		'before-after-slider',
		'quote-form',
		'process-timeline',
		'service-features',
		'service-areas',
		'trust-badges',
		'pricing-table',
		'faq-accordion',
		'testimonial-grid',
		'stats-bar',
	);

	foreach ( $blocks as $block ) {
		$dir = get_stylesheet_directory() . "/blocks/{$block}";
		if ( file_exists( "{$dir}/block.json" ) ) {
			register_block_type( $dir );
		}
	}
}
add_action( 'init', 'dublin_painter_register_blocks' );

/**
 * Customizer — Business info (phone, email, WhatsApp).
 */
function dublin_painter_customize( WP_Customize_Manager $wp_customize ): void {
	// Business Info Section
	$wp_customize->add_section(
		'dublin_painter_business',
		array(
			'title'    => __( 'Business Info', 'dublin-painter' ),
			'priority' => 30,
		)
	);

	$fields = array(
		'dp_phone'          => array( 'label' => 'Phone Number', 'default' => '01 234 5678' ),
		'dp_phone_raw'      => array( 'label' => 'Phone (raw, for tel: links)', 'default' => '012345678' ),
		'dp_mobile'          => array( 'label' => 'Mobile Display', 'default' => '087 123 4567' ),
		'dp_email'          => array( 'label' => 'Email', 'default' => 'info@paintersdublin.ie' ),
		'dp_whatsapp'       => array( 'label' => 'WhatsApp Number (with country code)', 'default' => '353871234567' ),
		'dp_form_endpoint'  => array( 'label' => 'Form Endpoint URL', 'default' => 'https://formspree.io/f/placeholder' ),
	);

	foreach ( $fields as $key => $field ) {
		$wp_customize->add_setting(
			$key,
			array( 'default' => $field['default'], 'sanitize_callback' => 'sanitize_text_field' )
		);
		$wp_customize->add_control(
			$key,
			array(
				'label'   => __( $field['label'], 'dublin-painter' ),
				'section' => 'dublin_painter_business',
				'type'    => 'text',
			)
		);
	}
}
add_action( 'customize_register', 'dublin_painter_customize' );

/**
 * Shortcodes for business info (used in block patterns).
 */
function dublin_painter_shortcode_phone(): string {
	return get_theme_mod( 'dp_phone', '01 234 5678' );
}

function dublin_painter_shortcode_email(): string {
	return get_theme_mod( 'dp_email', 'info@paintersdublin.ie' );
}

function dublin_painter_shortcode_whatsapp(): string {
	return get_theme_mod( 'dp_whatsapp', '353871234567' );
}

/**
 * Year shortcode for footer copyright.
 */
function dublin_painter_shortcode_year(): string {
	return (string) gmdate( 'Y' );
}

add_shortcode( 'dp_phone', 'dublin_painter_shortcode_phone' );
add_shortcode( 'dp_email', 'dublin_painter_shortcode_email' );
add_shortcode( 'dp_whatsapp', 'dublin_painter_shortcode_whatsapp' );
add_shortcode( 'dp_year', 'dublin_painter_shortcode_year' );

/**
 * JSON-LD LocalBusiness structured data.
 */
function dublin_painter_local_business_schema(): void {
	$phone   = get_theme_mod( 'dp_phone', '01 234 5678' );
	$email   = get_theme_mod( 'dp_email', 'info@paintersdublin.ie' );
	$payload = array(
		'@context'       => 'https://schema.org',
		'@type'          => 'LocalBusiness',
		'name'           => 'Dublin Painter',
		'description'    => 'Professional Painting Services in Dublin',
		'url'            => home_url( '/' ),
		'telephone'      => $phone,
		'email'          => $email,
		'address'        => array(
			'@type'           => 'PostalAddress',
			'addressLocality' => 'Dublin',
			'addressCountry'  => 'IE',
		),
		'areaServed'     => array( 'Dublin', 'Wicklow', 'Kildare', 'Meath' ),
		'serviceType'    => 'Painting',
		'priceRange'     => '$$',
		'aggregateRating' => array(
			'@type'       => 'AggregateRating',
			'ratingValue' => '4.9',
			'reviewCount' => '127',
		),
	);

	echo '<script type="application/ld+json">' . wp_json_encode( $payload ) . '</script>';
}
add_action( 'wp_head', 'dublin_painter_local_business_schema' );

/**
 * Plausible Analytics (if configured).
 */
function dublin_painter_analytics(): void {
	$domain = get_theme_mod( 'dp_plausible_domain', '' );
	if ( $domain ) {
		echo '<script defer data-domain="' . esc_attr( $domain ) . '" src="https://plausible.io/js/script.js"></script>';
	}
}
add_action( 'wp_head', 'dublin_painter_analytics' );
/**
 * Register block patterns.
 */
require get_stylesheet_directory() . '/patterns.php';
