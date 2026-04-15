<?php
/**
 * Pattern: Stats Bar
 *
 * 4-column statistics bar with brand-blue numbers.
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Stats Bar', 'dublin-painter' ),
	'description' => __( '4-column statistics: Years, Projects, Satisfaction, Rating', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-light","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7"}}}} -->
<div class="wp-block-group alignfull has-brand-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"layout":{"type":"constrained"}} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--brand-blue);font-size:40px;font-style:normal;font-weight:800">10+</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-weight:600">Years Experience</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"layout":{"type":"constrained"}} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--brand-blue);font-size:40px;font-style:normal;font-weight:800">500+</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-weight:600">Projects Completed</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"layout":{"type":"constrained"}} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--brand-blue);font-size:40px;font-style:normal;font-weight:800">100%</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-weight:600">Satisfaction Guarantee</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"layout":{"type":"constrained"}} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)">
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"800"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="color:var(--wp--preset--color--brand-blue);font-size:40px;font-style:normal;font-weight:800">4.9⭐</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-weight:600">Average Rating</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);