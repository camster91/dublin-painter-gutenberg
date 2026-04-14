<?php
/**
 * Pattern: Hero Section
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Hero Section', 'dublin-painter' ),
	'description' => __( 'Full-width hero with headline, subheading, and dual CTAs', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:cover {"url":"/wp-content/themes/dublin-painter/assets/images/main_hero.jpg","dimRatio":70,"overlayColor":"brand-dark","minHeight":85,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","right":"var:preset|spacing|5","bottom":"var:preset|spacing|8","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--5);min-height:85vh"><img class="wp-block-cover__image-background" alt="" src="/wp-content/themes/dublin-painter/assets/images/main_hero.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-brand-dark-background-color has-background" style="opacity:70"></span><div class="wp-block-cover__inner-container">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--5)">
	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f8fafc"},"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|2","right":"var:preset|spacing|4","bottom":"var:preset|spacing|2","left":"var:preset|spacing|4"}}},"backgroundColor":"brand-blue","fontSize":"small"} -->
	<p class="has-text-align-center has-brand-blue-background-color has-background has-small-font-size" style="border-radius:9999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--4);color:#f8fafc">⭐ 4.9/5 Average Rating &bull; 10+ Years Experience</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"64px","lineHeight":"1.1","fontWeight":"800","fontStyle":"normal","letterSpacing":"-2px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:64px;font-weight:800;line-height:1.1;letter-spacing:-2px;font-style:normal">Top-Rated Painters in Dublin —<br><span style="color:var(--wp--preset--color--brand-blue)">Quotes in 24 Hours</span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"20px","lineHeight":"1.6"}},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|6"}}} -->
<p class="has-text-align-center" style="color:#94a3b8;font-size:20px;line-height:1.6;margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--6)">Transform your home with premium paints and meticulous prep work. Fully insured and trusted by Dublin homeowners for over 10 years.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|3","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-buttons">

<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-blue-background-color has-text-color has-background wp-element-button" href="#quote-section" style="border-radius:16px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px;font-size:18px;font-style:normal;font-weight:700">Get Free Online Quote</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"border":{"radius":"16px","color":"#ffffff","width":"2px"},"spacing":{"padding":{"top":"16px","right":"32px","bottom":"16px","left":"32px"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button" href="tel:012345678" style="border-radius:16px;border-color:#ffffff;border-width:2px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px;font-size:18px;font-style:normal;font-weight:700">📞 Call 01 234 5678</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->',
);