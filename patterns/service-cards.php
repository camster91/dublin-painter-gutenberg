<?php
/**
 * Pattern: Service Cards
 */

return array(
	'title'       => __( 'Service Cards', 'dublin-painter' ),
	'description' => __( 'Three service cards: Interior, Exterior, Commercial', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:36px;font-weight:800">Our Painting Services</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:18px">From single rooms to full commercial fit-outs, we deliver perfection every time.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--7)">

<!-- INTERIOR -->
<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:0">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="/interior-painting/"><img src="/wp-content/themes/dublin-painter/assets/images/interior_hero.jpg" alt="Interior painting service" style="border-radius:16px 16px 0 0"/></a></figure>
<!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:22px;font-weight:700">🏠 Interior Painting</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"15px","lineHeight":"1.6"}}} -->
<p class="stroke-secondary" style="color:var(--wp--preset--color--text-secondary);font-size:15px;line-height:1.6">Walls, ceilings, woodwork & kitchens. Dustless sanding, premium brands, flawless finish.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"8px"},"typography":{"fontWeight":"600","fontSize":"14px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-blue-background-color has-text-color has-background wp-element-button" href="/interior-painting/" style="border-radius:8px;font-weight:600;font-size:14px">View Interior Services →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- EXTERIOR -->
<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:0">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="/exterior-painting/"><img src="/wp-content/themes/dublin-painter/assets/images/exterior_hero.jpg" alt="Exterior painting service" style="border-radius:16px 16px 0 0"/></a></figure>
<!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:22px;font-weight:700">🏡 Exterior Painting</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"15px","lineHeight":"1.6"}}} -->
<p style="color:var(--wp--preset--color--text-secondary);font-size:15px;line-height:1.6">Masonry, pebble dash, woodwork & weatherproofing. 10-year written guarantee.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"8px"},"typography":{"fontWeight":"600","fontSize":"14px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-blue-background-color has-text-color has-background wp-element-button" href="/exterior-painting/" style="border-radius:8px;font-weight:600;font-size:14px">View Exterior Services →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- COMMERCIAL -->
<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:0">
<!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="/commercial-painting/"><img src="/wp-content/themes/dublin-painter/assets/images/commercial_hero.jpg" alt="Commercial painting service" style="border-radius:16px 16px 0 0"/></a></figure>
<!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading" style="font-size:22px;font-weight:700">🏢 Commercial Painting</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"15px","lineHeight":"1.6"}}} -->
<p style="color:var(--wp--preset--color--text-secondary);font-size:15px;line-height:1.6">Offices, hotels, restaurants & retail. Weekend work, zero disruption.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"8px"},"typography":{"fontWeight":"600","fontSize":"14px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-blue-background-color has-text-color has-background wp-element-button" href="/commercial-painting/" style="border-radius:8px;font-weight:600;font-size:14px">View Commercial Services →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);