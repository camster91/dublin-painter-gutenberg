<?php
/**
 * Pattern: Hero Section
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Hero Section', 'dublin-painter' ),
	'description' => __( 'Split hero with animated mesh background, gradient text, and side-by-side image', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}},"backgroundColor":"brand-light","className":"dp-hero-mesh"} -->
<div class="wp-block-group alignfull dp-hero-mesh has-brand-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- Animated mesh gradient orbs (decorative, via CSS) -->
<div class="dp-orb dp-orb-blue" aria-hidden="true"></div>
<div class="dp-orb dp-orb-green" aria-hidden="true"></div>

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}},"className":"dp-reveal"} -->
<div class="wp-block-group dp-reveal" style="margin-bottom:var(--wp--preset--spacing--5)">
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f8fafc"},"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|2","right":"var:preset|spacing|4","bottom":"var:preset|spacing|2","left":"var:preset|spacing|4"}}},"backgroundColor":"brand-blue","fontSize":"small"} -->
	<p class="has-text-align-center has-brand-blue-background-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--4);color:#f8fafc">⭐ 4.9/5 Average Rating &bull; 10+ Years Experience</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"className":"dp-hero-split"} -->
<div class="wp-block-columns dp-hero-split">

<!-- Text Column -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem,5vw,4rem)","fontWeight":"800","lineHeight":"1.1","letterSpacing":"-2px"}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;line-height:1.1;letter-spacing:-2px">Top-Rated Painters in Dublin —<br><span class="dp-gradient-text">Quotes in 24 Hours</span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#64748b"},"typography":{"fontSize":"20px","lineHeight":"1.6"}}} -->
<p style="color:#64748b;font-size:20px;line-height:1.6">Transform your home with premium paints and meticulous prep work. Fully insured and trusted by Dublin homeowners for over 10 years.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">

<!-- wp:button {"backgroundColor":"brand-green","textColor":"white","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-green-background-color has-text-color has-background wp-element-button" href="tel:012345678" style="border-radius:16px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px;font-size:18px;font-weight:700">📞 Call 01 234 5678</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"16px","color":"#e2e8f0","width":"2px"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"typography":{"fontSize":"18px","fontWeight":"700"},"color":{"text":"brand-dark"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-brand-dark-color has-text-color wp-element-button" href="#quote-section" style="border-radius:16px;border-color:#e2e8f0;border-width:2px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px;font-size:18px;font-weight:700">Get Free Online Quote</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->

<!-- Image Column -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:image {"sizeSlug":"full","className":"dp-hero-image-frame"} -->
<figure class="wp-block-image dp-hero-image-frame size-full"><img src="/wp-content/themes/dublin-painter/assets/images/bg-hero.jpg" alt="Professional painters working on a beautiful classic Georgian door in Dublin"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);