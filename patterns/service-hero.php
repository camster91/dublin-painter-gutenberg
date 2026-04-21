<?php
/**
 * Pattern: Service Hero
 *
 * Full-width hero for Interior/Exterior/Commercial service pages.
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Service Hero', 'dublin-painter' ),
	'description' => __( 'Full-width hero with overlay for service pages', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:cover {"url":"/wp-content/themes/dublin-painter/assets/images/interior_hero.jpg","dimRatio":70,"overlayColor":"brand-dark","minHeight":85,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","right":"var:preset|spacing|5","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5);min-height:85vh"><img class="wp-block-cover__image-background" alt="" src="/wp-content/themes/dublin-painter/assets/images/interior_hero.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-brand-dark-background-color has-background" style="opacity:70"></span><div class="wp-block-cover__inner-container">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"64px","fontWeight":"800","lineHeight":"1.1"}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:clamp(2.5rem,6vw,4rem);font-weight:800;line-height:1.1">Professional <span style="color:var(--wp--preset--color--brand-blue)">Interior Painting</span></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#cbd5e1"},"typography":{"fontSize":"20px","lineHeight":"1.7"}}} -->
	<p class="has-text-align-center" style="color:#cbd5e1;font-size:20px;line-height:1.7">Transform your home with premium paints and meticulous prep work. Fully insured and trusted by Dublin homeowners for over 10 years.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":{"left":"var:preset|spacing|4"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">

		<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"16px"},"typography":{"fontWeight":"700","fontSize":"18px"},"spacing":{"padding":{"top":"16px","right":"40px","bottom":"16px","left":"40px"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-green-background-color has-text-color has-background wp-element-button" href="#quote-section" style="border-radius:16px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">Get Free Quote</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"border":{"radius":"16px","color":"#ffffff","width":"2px"},"typography":{"fontWeight":"700","fontSize":"18px"},"spacing":{"padding":{"top":"16px","right":"40px","bottom":"16px","left":"40px"}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button" href="tel:012345678" style="border-radius:16px;border-color:#ffffff;border-width:2px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">📞 Call 01 234 5678</a></div>
		<!-- /wp:button -->

	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->',
);