<?php
/**
 * Pattern: Quote CTA Section
 */

return array(
	'title'       => __( 'Quote CTA', 'dublin-painter' ),
	'description' => __( 'Dark section with quote form call-to-action', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-dark","layout":{"type":"constrained","contentSize":"700px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"anchor":"quote-section"} -->
<div class="wp-block-group alignfull has-brand-dark-background-color has-background" id="quote-section" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:36px;font-weight:800">Get Your Quote in 60 Seconds</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="color:#94a3b8;font-size:18px">Tell us a bit about your project for an instant rough estimate.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":{"left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">

<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"16px"},"typography":{"fontWeight":"700","fontSize":"18px"},"spacing":{"padding":{"top":"16px","right":"40px","bottom":"16px","left":"40px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-blue-background-color has-text-color has-background wp-element-button" href="/get-a-quote/" style="border-radius:16px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">Get Free Quote →</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"border":{"radius":"16px","color":"#ffffff","width":"2px"},"typography":{"fontWeight":"700","fontSize":"18px"},"spacing":{"padding":{"top":"16px","right":"40px","bottom":"16px","left":"40px"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button" href="tel:012345678" style="border-radius:16px;border-color:#ffffff;border-width:2px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">📞 Call 01 234 5678</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->',
);