<?php
/**
 * Pattern: Testimonials
 *
 * Glassmorphic testimonial cards with hover lift and star ratings.
 */

return array(
	'title'       => __( 'Testimonials', 'dublin-painter' ),
	'description' => __( '3-column glassmorphic testimonial cards with star ratings', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-light","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull has-brand-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(2rem,5vw,3rem)","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem,5vw,3rem);font-weight:800">What Your Neighbors Are Saying</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--7)">

<!-- wp:column {"className":"dp-testimonial-card"} -->
<div class="wp-block-column dp-testimonial-card">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1"},"color":{"text":"#f59e0b"}}} -->
<p style="color:#f59e0b;font-size:13px;line-height:1">⭐⭐⭐⭐⭐</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.6","fontStyle":"italic"},"color":{"text":"#334155"}},"spacing":{"style":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
<p style="color:#334155;font-size:16px;line-height:1.6;font-style:italic;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">The team painted our entire exterior in Blackrock. They were fast, clean, and the fixed price quote was exactly what we paid.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
<h4 style="font-size:16px;font-weight:700">Mark T.</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
<p style="color:var(--wp--preset--color--brand-blue);font-size:13px;font-weight:600">Homeowner, Blackrock</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"dp-testimonial-card"} -->
<div class="wp-block-column dp-testimonial-card">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1"},"color":{"text":"#f59e0b"}}} -->
<p style="color:#f59e0b;font-size:13px;line-height:1">⭐⭐⭐⭐⭐</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.6","fontStyle":"italic"},"color":{"text":"#334155"}},"spacing":{"style":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
<p style="color:#334155;font-size:16px;line-height:1.6;font-style:italic;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">Spotless cleanup every single day. They managed the interior painting of our 3-bed semi without any hassle. Highly recommended.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
<h4 style="font-size:16px;font-weight:700">Sarah M.</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
<p style="color:var(--wp--preset--color--brand-blue);font-size:13px;font-weight:600">Homeowner, Clontarf</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"dp-testimonial-card"} -->
<div class="wp-block-column dp-testimonial-card">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1"},"color":{"text":"#f59e0b"}}} -->
<p style="color:#f59e0b;font-size:13px;line-height:1">⭐⭐⭐⭐⭐</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.6","fontStyle":"italic"},"color":{"text":"#334155"}},"spacing":{"style":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
<p style="color:#334155;font-size:16px;line-height:1.6;font-style:italic;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">Fantastic job on our hallway and stairs woodwork. It looks brand new. Very professional and polite crew.</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
<h4 style="font-size:16px;font-weight:700">David K.</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
<p style="color:var(--wp--preset--color--brand-blue);font-size:13px;font-weight:600">Homeowner</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);