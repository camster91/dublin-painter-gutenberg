<?php
/**
 * Pattern: Before/After Section
 */

return array(
	'title'       => __( 'Before / After Slider', 'dublin-painter' ),
	'description' => __( 'Before/After comparison section (uses custom JS block)', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1000px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:36px;font-weight:800">See the Difference</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:18px">Drag the slider or use arrow keys to reveal the stunning transformation.</p>
<!-- /wp:paragraph -->

<!-- wp:dublin-painter/before-after-slider /-->

</div>
<!-- /wp:group -->',
);