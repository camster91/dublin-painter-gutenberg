<?php
/**
 * Render callback for Multi-Step Quote Form block.
 *
 * @package Dublin_Painter
 */

$endpoint = ! empty( $attributes['formEndpoint'] ) ? esc_url( $attributes['formEndpoint'] ) : '';
$wrapper_attr = get_block_wrapper_attributes( array( 'class' => 'dp-quote-form-wrapper' ) );
$phone = get_theme_mod( 'dp_phone', '01 234 5678' );
?>
<div <?php echo $wrapper_attr; // phpcs:ignore ?>>
	<div class="dp-quote-form" data-endpoint="<?php echo esc_attr( $endpoint ); ?>">
		<!-- Step indicators -->
		<div class="dp-quote-steps">
			<div class="dp-quote-step dp-quote-step--active" data-step="1">
				<span class="dp-quote-step-num">1</span>
				<span class="dp-quote-step-label">Service</span>
			</div>
			<div class="dp-quote-step" data-step="2">
				<span class="dp-quote-step-num">2</span>
				<span class="dp-quote-step-label">Size</span>
			</div>
			<div class="dp-quote-step" data-step="3">
				<span class="dp-quote-step-num">3</span>
				<span class="dp-quote-step-label">Condition</span>
			</div>
			<div class="dp-quote-step" data-step="4">
				<span class="dp-quote-step-num">4</span>
				<span class="dp-quote-step-label">Rooms</span>
			</div>
			<div class="dp-quote-step" data-step="5">
				<span class="dp-quote-step-num">5</span>
				<span class="dp-quote-step-label">Estimate</span>
			</div>
			<div class="dp-quote-step" data-step="6">
				<span class="dp-quote-step-num">6</span>
				<span class="dp-quote-step-label">Details</span>
			</div>
			<div class="dp-quote-step" data-step="7">
				<span class="dp-quote-step-num">7</span>
				<span class="dp-quote-step-label">Done</span>
			</div>
		</div>

		<!-- Form panels (handled by JS) -->
		<div class="dp-quote-panels">
			<div class="dp-quote-panel dp-quote-panel--active" data-panel="1">
				<h3 class="dp-quote-panel-title">What service do you need?</h3>
				<div class="dp-quote-options">
					<label class="dp-quote-option"><input type="radio" name="service" value="interior" required><span>🏠 Interior Painting</span></label>
					<label class="dp-quote-option"><input type="radio" name="service" value="exterior"><span>🏡 Exterior Painting</span></label>
					<label class="dp-quote-option"><input type="radio" name="service" value="commercial"><span>🏢 Commercial</span></label>
				</div>
				<button type="button" class="dp-quote-next dp-quote-btn" disabled>Next →</button>
			</div>
			<div class="dp-quote-panel" data-panel="2">
				<h3 class="dp-quote-panel-title">Property size</h3>
				<div class="dp-quote-options">
					<label class="dp-quote-option"><input type="radio" name="size" value="1bed"><span>1-Bed Apartment</span></label>
					<label class="dp-quote-option"><input type="radio" name="size" value="2bed"><span>2-3 Bed Semi</span></label>
					<label class="dp-quote-option"><input type="radio" name="size" value="4bed"><span>4+ Bed Detached</span></label>
				</div>
				<button type="button" class="dp-quote-back dp-quote-btn-secondary">← Back</button>
				<button type="button" class="dp-quote-next dp-quote-btn" disabled>Next →</button>
			</div>
			<div class="dp-quote-panel" data-panel="3">
				<h3 class="dp-quote-panel-title">Current condition of walls</h3>
				<div class="dp-quote-options">
					<label class="dp-quote-option"><input type="radio" name="condition" value="good"><span>✅ Good — Minor touch-ups</span></label>
					<label class="dp-quote-option"><input type="radio" name="condition" value="fair"><span>🔧 Fair — Some cracks/stains</span></label>
					<label class="dp-quote-option"><input type="radio" name="condition" value="poor"><span>🚨 Poor — Major prep needed</span></label>
				</div>
				<button type="button" class="dp-quote-back dp-quote-btn-secondary">← Back</button>
				<button type="button" class="dp-quote-next dp-quote-btn" disabled>Next →</button>
			</div>
			<div class="dp-quote-panel" data-panel="4">
				<h3 class="dp-quote-panel-title">How many rooms?</h3>
				<div class="dp-quote-number-input">
					<button type="button" class="dp-quote-minus" aria-label="Decrease">−</button>
					<input type="number" name="rooms" min="1" max="20" value="3" class="dp-quote-room-count">
					<button type="button" class="dp-quote-plus" aria-label="Increase">+</button>
				</div>
				<button type="button" class="dp-quote-back dp-quote-btn-secondary">← Back</button>
				<button type="button" class="dp-quote-next dp-quote-btn">View Estimate →</button>
			</div>
			<div class="dp-quote-panel" data-panel="5">
				<h3 class="dp-quote-panel-title">Your Estimate</h3>
				<div class="dp-quote-estimate">
					<div class="dp-quote-estimate-amount">€<span class="dp-quote-price">0</span></div>
					<p class="dp-quote-estimate-note">Indicative range. Final quote provided after free on-site visit.</p>
				</div>
				<button type="button" class="dp-quote-back dp-quote-btn-secondary">← Back</button>
				<button type="button" class="dp-quote-next dp-quote-btn">Get My Estimate →</button>
			</div>
			<div class="dp-quote-panel" data-panel="6">
				<h3 class="dp-quote-panel-title">Almost there! Where should we send it?</h3>
				<form class="dp-quote-contact-form" method="POST" action="<?php echo esc_attr( $endpoint ); ?>">
					<input type="text" name="name" placeholder="Your Name" required class="dp-quote-input" aria-label="Your name">
					<input type="email" name="email" placeholder="Email Address" required class="dp-quote-input" aria-label="Email address">
					<input type="tel" name="phone" placeholder="Phone Number" required class="dp-quote-input" aria-label="Phone number">
					<input type="hidden" name="service" class="dp-quote-hidden-service">
					<input type="hidden" name="estimate" class="dp-quote-hidden-estimate">
					<button type="submit" class="dp-quote-submit dp-quote-btn">Get My Estimate ✓</button>
				</form>
				<button type="button" class="dp-quote-back dp-quote-btn-secondary">← Back</button>
			</div>
			<div class="dp-quote-panel" data-panel="7">
				<div class="dp-quote-success">
					<span class="dp-quote-success-icon">✓</span>
					<h3 class="dp-quote-panel-title">Got it! You're on the list.</h3>
					<p>We'll email your estimate within the hour. A team member will call to arrange your free site visit.</p>
					<div class="dp-quote-success-actions">
						<a href="tel:<?php echo esc_attr( $phone ); ?>" class="dp-quote-btn">📞 Call <?php echo esc_html( $phone ); ?></a>
						<a href="/contact/" class="dp-quote-btn-secondary">Email Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
