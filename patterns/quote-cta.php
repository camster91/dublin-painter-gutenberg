<?php
/**
 * Pattern: Quote CTA Section
 */

return array(
	'title'       => __( 'Quote CTA', 'dublin-painter' ),
	'description' => __( 'Dark section with prominent quote form call-to-action', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-dark","layout":{"type":"constrained","contentSize":"800px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"anchor":"quote-section"} -->
<div class="wp-block-group alignfull has-brand-dark-background-color has-background" id="quote-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"clamp(2rem,5vw,3rem)","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:clamp(2rem,5vw,3rem);font-weight:800">Get Your Quote in 60 Seconds</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"18px","lineHeight":"1.6"}}} -->
<p class="has-text-align-center" style="color:#94a3b8;font-size:18px;line-height:1.6">Tell us a bit about your project for an instant rough estimate. No obligation, no hidden fees.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">

<!-- wp:button {"backgroundColor":"brand-green","textColor":"white","style":{"border":{"radius":"16px"},"typography":{"fontWeight":"700","fontSize":"18px"},"spacing":{"padding":{"top":"16px","right":"40px","bottom":"16px","left":"40px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-green-background-color has-text-color has-background wp-element-button" href="/get-a-quote/" style="border-radius:16px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">Get Free Quote →</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"16px","color":"#64748b","width":"2px"},"typography":{"fontWeight":"700","fontSize":"18px"},"spacing":{"padding":{"top":"16px","right":"40px","bottom":"16px","left":"40px"}},"color":{"text":"#f8fafc"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color wp-element-button" href="tel:012345678" style="border-radius:16px;border-color:var(--wp--preset--color--text-secondary);border-width:2px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700;color:#f8fafc">📞 Call 01 234 5678</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px"}},"spacing":{"margin":{"top":"var:preset|spacing|5"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px;margin-top:var(--wp--preset--spacing--5)">No spam. No hidden fees. Just a straight-talking quote from a real Dublin painter.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->',
);