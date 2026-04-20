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

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:36px;font-weight:800">Loved by Dublin Homeowners &amp; Businesses</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--7)">

<!-- wp:column {"className":"dp-testimonial-card"} -->
<div class="wp-block-column dp-testimonial-card">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1"},"color":{"text":"#f59e0b"}}} -->
<p style="color:#f59e0b;font-size:13px;line-height:1">⭐⭐⭐⭐⭐</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.6","fontStyle":"italic"},"color":{"text":"#334155"}},"spacing":{"style":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|5"}}}} -->
<p style="color:#334155;font-size:16px;line-height:1.6;font-style:italic;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">"Their dustless sanding system is pure magic. Not a single spec of dust on my sofa. Perfect finish on our living room."</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
<h4 style="font-size:16px;font-weight:700">Emma Walsh</h4>
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
<p style="color:#334155;font-size:16px;line-height:1.6;font-style:italic;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">"The elastomeric paint they used repels the Dublin rain completely. Our house looks brand new after 2 years."</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
<h4 style="font-size:16px;font-weight:700">Niall O\'Shea</h4>
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
<p style="color:#334155;font-size:16px;line-height:1.6;font-style:italic;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--5)">"They painted our 4-story office building over the weekend. Our staff returned Monday to a brand new space with zero fumes."</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
<h4 style="font-size:16px;font-weight:700">Sarah Jenkins</h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"13px","fontWeight":"600"}}} -->
<p style="color:var(--wp--preset--color--brand-blue);font-size:13px;font-weight:600">Facilities Manager</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);