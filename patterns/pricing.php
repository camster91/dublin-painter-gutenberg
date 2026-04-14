<?php
/**
 * Pattern: Pricing Table
 */

return array(
	'title'       => __( 'Pricing Guide', 'dublin-painter' ),
	'description' => __( 'Transparent pricing ranges table', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"900px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:36px;font-weight:800">Transparent Pricing</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:16px">Indicative price ranges for typical Dublin projects. Every home is different — we provide a fixed-price quote after a free on-site visit.</p>
<!-- /wp:paragraph -->

<!-- wp:table {"className":"is-style-stripes","style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"}}} -->
<figure class="wp-block-table is-style-stripes" style="border-radius:16px"><table style="border-color:var(--wp--preset--color--card-border);border-width:1px"><thead><tr><th>Service</th><th>Typical Range</th><th>Includes</th></tr></thead><tbody><tr><td>Interior — Single Room</td><td>€450 – €900</td><td>Walls, ceiling, woodwork, 2 coats</td></tr><tr><td>Interior — Full 3-Bed House</td><td>€3,500 – €6,500</td><td>All rooms, hall, stairs, landing</td></tr><tr><td>Exterior — Semi-Detached</td><td>€2,800 – €5,500</td><td>Walls, trim, fascias, 2 coats</td></tr><tr><td>Exterior — Detached</td><td>€4,500 – €9,000</td><td>Full masonry, windows, doors</td></tr><tr><td>Commercial — Per Room</td><td>€350 – €800</td><td>Prep, paint, cleanup, off-hours</td></tr><tr><td>Kitchen Respray</td><td>€1,200 – €2,500</td><td>Hand-painted, Farrow &amp; Ball</td></tr></tbody></table></figure>
<!-- /wp:table -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"13px"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:13px">All prices include prep work, materials, and cleanup. Final quote provided after free on-site visit.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->',
);