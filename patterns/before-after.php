<?php
/**
 * Pattern: Multiple Before/After comparisons (Easy to edit in WordPress)
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Before / After Gallery', 'dublin-painter' ),
	'description' => __( 'Responsive grid of before/after sliders. Click each image in the editor to swap before/after photos.', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}},"className":"dp-before-after-section"} -->
<div class="wp-block-group alignfull dp-before-after-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(2rem,5vw,3rem)","fontWeight":"900","lineHeight":"1.2","letterSpacing":"-0.02em"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem,5vw,3rem);font-weight:900;line-height:1.2;letter-spacing:-0.02em">See the Difference</h2>
<!-- /wp:heading -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary"},"typography":{"fontSize":"18px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--8);color:var(--wp--preset--color--text-secondary);font-size:18px;line-height:1.6">Real transformations — drag the slider across each project to reveal the stunning before-and-after results.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"className":"dp-ba-grid"} -->
<div class="wp-block-columns dp-ba-grid" style="gap:var(--wp--preset--spacing--8)">

<!-- Before/After 1 : Georgian Door Restoration -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:dublin-painter/before-after-slider {"beforeImage":"/wp-content/themes/dublin-painter/assets/images/project_georgian_door.jpg","afterImage":"/wp-content/themes/dublin-painter/assets/images/project_georgian_door.jpg","beforeAlt":"Before — Faded Georgian Door","afterAlt":"After — Freshly Restored Georgian Door","initialPosition":45,"aspectRatio":"4/3","borderRadius":"24px"} /-->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--3);font-size:16px;font-weight:700">Georgian Door Restoration</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|text-secondary"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px">Drag ← → to reveal</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Before/After 2 : Interior Living Room -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:dublin-painter/before-after-slider {"beforeImage":"/wp-content/themes/dublin-painter/assets/images/project_interior_green.jpg","afterImage":"/wp-content/themes/dublin-painter/assets/images/project_interior_room.jpg","beforeAlt":"Before — Dated Interior","afterAlt":"After — Bright Modern Room","initialPosition":50,"aspectRatio":"4/3","borderRadius":"24px"} /-->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--3);font-size:16px;font-weight:700">Interior Transformation</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|text-secondary"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px">Drag ← → to reveal</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}},"margin":{"top":"var:preset|spacing|9"}},"className":"dp-ba-grid"} -->
<div class="wp-block-columns dp-ba-grid" style="gap:var(--wp--preset--spacing--8);margin-top:var(--wp--preset--spacing--9)">

<!-- Before/After 3 : Exterior Pebble Dash -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:dublin-painter/before-after-slider {"beforeImage":"/wp-content/themes/dublin-painter/assets/images/project_exterior_1.jpg","afterImage":"/wp-content/themes/dublin-painter/assets/images/project_exterior_3.jpg","beforeAlt":"Before — Weathered Exterior","afterAlt":"After — Freshly Painted Facade","initialPosition":50,"aspectRatio":"4/3","borderRadius":"24px"} /-->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--3);font-size:16px;font-weight:700">Exterior Restoration</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|text-secondary"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px">Drag ← → to reveal</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Before/After 4 : Commercial Office -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:dublin-painter/before-after-slider {"beforeImage":"/wp-content/themes/dublin-painter/assets/images/project_office.jpg","afterImage":"/wp-content/themes/dublin-painter/assets/images/project_staircase.jpg","beforeAlt":"Before — Tired Office Space","afterAlt":"After — Professional Refit","initialPosition":50,"aspectRatio":"4/3","borderRadius":"24px"} /-->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--3);font-size:16px;font-weight:700">Commercial Makeover</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"},"color":{"text":"var:preset|color|text-secondary"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px">Drag ← → to reveal</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);