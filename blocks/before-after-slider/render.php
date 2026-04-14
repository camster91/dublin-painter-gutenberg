<?php
/**
 * Render callback for Before/After Slider block.
 *
 * @package Dublin_Painter
 */

$before_image   = ! empty( $attributes['beforeImage'] ) ? esc_url( $attributes['beforeImage'] ) : '';
$after_image    = ! empty( $attributes['afterImage'] ) ? esc_url( $attributes['afterImage'] ) : '';
$before_alt     = ! empty( $attributes['beforeAlt'] ) ? esc_attr( $attributes['beforeAlt'] ) : 'Before';
$after_alt      = ! empty( $attributes['afterAlt'] ) ? esc_attr( $attributes['afterAlt'] ) : 'After';
$initial_pos    = isset( $attributes['initialPosition'] ) ? intval( $attributes['initialPosition'] ) : 50;
$aspect_ratio   = ! empty( $attributes['aspectRatio'] ) ? esc_attr( $attributes['aspectRatio'] ) : '21/9';
$border_radius  = ! empty( $attributes['borderRadius'] ) ? esc_attr( $attributes['borderRadius'] ) : '24px';
$wrapper_attr   = get_block_wrapper_attributes(
	array(
		'class' => 'dp-before-after',
		'style' => "--dp-ba-pos: {$initial_pos}%; --dp-ba-radius: {$border_radius}; --dp-ba-ratio: {$aspect_ratio};",
	)
);
?>
<div <?php echo $wrapper_attr; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="dp-ba-container" data-initial="<?php echo esc_attr( $initial_pos ); ?>">
		<div class="dp-ba-after-wrap">
			<img class="dp-ba-after" src="<?php echo $after_image; ?>" alt="<?php echo $after_alt; ?>" loading="lazy" />
			<span class="dp-ba-label dp-ba-label-after" aria-hidden="true">AFTER</span>
		</div>
		<div class="dp-ba-before-wrap" style="clip-path: inset(0 <?php echo 100 - $initial_pos; ?>% 0 0);">
			<img class="dp-ba-before" src="<?php echo $before_image; ?>" alt="<?php echo $before_alt; ?>" loading="lazy" />
			<span class="dp-ba-label dp-ba-label-before" aria-hidden="true">BEFORE</span>
		</div>
		<div class="dp-ba-handle" role="slider" tabindex="0" aria-label="Compare before and after images" aria-valuenow="<?php echo esc_attr( $initial_pos ); ?>" aria-valuemin="0" aria-valuemax="100">
			<div class="dp-ba-handle-circle">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
			</div>
		</div>
	</div>
</div>