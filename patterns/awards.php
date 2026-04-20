<?php
/**
 * Pattern: Awards Section
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Awards & Recognitions', 'dublin-painter' ),
	'description' => __( '3-column award cards showcasing industry recognition', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"white","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}},"border":{"top":{"color":"var:preset|color|card-border","width":"1px"}}}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="border-top-color:var(--wp--preset--color--card-border);border-top-width:1px;padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem,5vw,3rem);font-weight:800">Our Awards &amp; Recognitions</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--7)">

<!-- wp:column {"className":"dp-award-card"} -->
<div class="wp-block-column dp-award-card">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
<div class="dp-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg></div>
</div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:20px;font-weight:700">Best Painting Contractor 2025</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="color:#64748b;font-size:14px">Awarded by Dublin Homeowners Association</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"dp-award-card"} -->
<div class="wp-block-column dp-award-card">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
<div class="dp-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5C7 4 6 9 6 9Z"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5C17 4 18 9 18 9Z"/><path d="M4 22h16"/><path d="M10 22V2h4v20"/></svg></div>
</div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:20px;font-weight:700">Eco-Friendly Paint Specialist</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="color:#64748b;font-size:14px">Recognised for Low-VOC practices</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"className":"dp-award-card"} -->
<div class="wp-block-column dp-award-card">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
<div class="dp-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
</div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:20px;font-weight:700">5-Star Customer Rating</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="color:#64748b;font-size:14px">Over 500 verified reviews</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);