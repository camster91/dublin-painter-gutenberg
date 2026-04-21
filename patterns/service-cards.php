<?php
/**
 * Pattern: Service Cards
 *
 * Alternating image/text feature rows matching the Next.js ServiceFeatures component.
 */

return array(
	'title'       => __( 'Service Features', 'dublin-painter' ),
	'description' => __( 'Alternating large image/text rows with checkmark bullets', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- INTERIOR — Image left, text right -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"50%","className":"dp-service-card"} -->
<div class="wp-block-column dp-service-card" style="flex-basis:50%">
<!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="/wp-content/themes/dublin-painter/assets/images/interior_hero.jpg" alt="Interior painting service" style="border-radius:2rem;overflow:hidden"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.875rem,4vw,3rem)","fontWeight":"800","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(1.875rem,4vw,3rem);font-weight:800;line-height:1.1">Expert Interior Decorating</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"18px","lineHeight":"1.6"}}} -->
<p style="color:var(--wp--preset--color--text-secondary);font-size:18px;line-height:1.6">Flawless luxury finishes for your home with our signature 99% dustless sanding technology. We transform living spaces with minimal disruption.</p>
<!-- /wp:paragraph -->
<!-- wp:list {"style":{"color":{"text":"var:preset|color|text-primary)"},"typography":{"fontSize":"18px","fontWeight":"600"}}} -->
<ul style="font-size:18px;font-weight:600">
<li>✅ Dustless Sanding Technology</li>
<li>✅ Premium Farrow &amp; Ball Finishes</li>
<li>✅ Expert Color Consultation</li>
</ul>
<!-- /wp:list -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--5)">
<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"16px"},"typography":{"fontSize":"16px","fontWeight":"600"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-green-background-color has-text-color has-background wp-element-button" href="/interior-painting/" style="border-radius:16px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">View Interior Services →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- SPACER -->
<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- EXTERIOR — Image right, text left -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.875rem,4vw,3rem)","fontWeight":"800","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(1.875rem,4vw,3rem);font-weight:800;line-height:1.1">10-Year Exterior Protection</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"18px","lineHeight":"1.6"}}} -->
<p style="color:var(--wp--preset--color--text-secondary);font-size:18px;line-height:1.6">Protect your home against the harsh Dublin elements. We use advanced breathable masonry coatings guaranteed for a decade.</p>
<!-- /wp:paragraph -->
<!-- wp:list {"style":{"typography":{"fontSize":"18px","fontWeight":"600"}}} -->
<ul style="font-size:18px;font-weight:600">
<li>✅ Weatherproof Masonry Coatings</li>
<li>✅ Professional Power Washing</li>
<li>✅ 10-Year Written Guarantee</li>
</ul>
<!-- /wp:list -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--5)">
<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"16px"},"typography":{"fontSize":"16px","fontWeight":"600"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-green-background-color has-text-color has-background wp-element-button" href="/exterior-painting/" style="border-radius:16px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">View Exterior Services →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","className":"dp-service-card"} -->
<div class="wp-block-column dp-service-card" style="flex-basis:50%">
<!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="/wp-content/themes/dublin-painter/assets/images/exterior_hero.jpg" alt="Exterior painting service" style="border-radius:2rem;overflow:hidden"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- SPACER -->
<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- COMMERCIAL — Image left, text right -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"50%","className":"dp-service-card"} -->
<div class="wp-block-column dp-service-card" style="flex-basis:50%">
<!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="/wp-content/themes/dublin-painter/assets/images/commercial_hero.jpg" alt="Commercial painting service" style="border-radius:2rem;overflow:hidden"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.875rem,4vw,3rem)","fontWeight":"800","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(1.875rem,4vw,3rem);font-weight:800;line-height:1.1">Zero-Downtime Commercial</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"18px","lineHeight":"1.6"}}} -->
<p style="color:var(--wp--preset--color--text-secondary);font-size:18px;line-height:1.6">Keep your business running. We offer night and weekend scheduling for offices, retail, and industrial painting across Dublin.</p>
<!-- /wp:paragraph -->
<!-- wp:list {"style":{"typography":{"fontSize":"18px","fontWeight":"600"}}} -->
<ul style="font-size:18px;font-weight:600">
<li>✅ Night &amp; Weekend Scheduling</li>
<li>✅ Fully Insured &amp; Safe Pass</li>
<li>✅ Strict Fixed-Price Tenders</li>
</ul>
<!-- /wp:list -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--5)">
<!-- wp:button {"backgroundColor":"brand-blue","textColor":"white","style":{"border":{"radius":"16px"},"typography":{"fontSize":"16px","fontWeight":"600"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-brand-green-background-color has-text-color has-background wp-element-button" href="/commercial-painting/" style="border-radius:16px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-size:18px;font-weight:700">View Commercial Services →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);