<?php
/**
 * Pattern: About Intro
 *
 * About page hero section with company values grid.
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'About Intro', 'dublin-painter' ),
	'description' => __( 'About page hero with values grid', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-dark","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull has-brand-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"48px","fontWeight":"800","lineHeight":"1.1"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:48px;font-weight:800;line-height:1.1">About <span style="color:var(--wp--preset--color--brand-blue)">Painters Dublin</span></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"18px","lineHeight":"1.7"}}} -->
		<p class="has-text-align-center" style="color:#94a3b8;font-size:18px;line-height:1.7">Irish-owned, Dublin-based painting contractors with over 10 years of experience. C2 registered, fully insured, and committed to quality craftsmanship across Dublin city and county.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:image {"align":"center","width":800,"sizeSlug":"full","style":{"border":{"radius":"24px"}}} -->
	<figure class="wp-block-image aligncenter size-full is-resized" style="border-radius:24px"><img src="/wp-content/themes/dublin-painter/assets/images/about_team.jpg" alt="Our painting team at work" style="border-radius:24px"/></figure>
	<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"36px","fontWeight":"800"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:36px;font-weight:800">Our Values</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--7)">

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:var(--wp--preset--spacing--6)">
			<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"32px"}}} -->
			<h3 style="color:var(--wp--preset--color--brand-blue);font-size:32px">🎨</h3>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
			<h4 style="font-size:18px;font-weight:700">Quality Craftsmanship</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"15px","lineHeight":"1.7"}}} -->
			<p style="color:var(--wp--preset--color--text-secondary);font-size:15px;line-height:1.7">We never cut corners. Every surface is properly prepared, every coat is applied with precision, and every project is finished to the highest standard.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:var(--wp--preset--spacing--6)">
			<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"32px"}}} -->
			<h3 style="color:var(--wp--preset--color--brand-blue);font-size:32px">🛡️</h3>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
			<h4 style="font-size:18px;font-weight:700">Transparency &amp; Honesty</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"15px","lineHeight":"1.7"}}} -->
			<p style="color:var(--wp--preset--color--text-secondary);font-size:15px;line-height:1.7">Fixed-price quotes with no hidden fees. We tell you exactly what the job entails, how long it will take, and what it will cost before we pick up a brush.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:var(--wp--preset--spacing--6)">
			<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"32px"}}} -->
			<h3 style="color:var(--wp--preset--color--brand-blue);font-size:32px">🏠</h3>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
			<h4 style="font-size:18px;font-weight:700">Respect for Your Home</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"15px","lineHeight":"1.7"}}} -->
			<p style="color:var(--wp--preset--color--text-secondary);font-size:15px;line-height:1.7">Dustless sanding technology, full furniture protection, and daily clean-ups mean your home stays livable throughout the project. We leave nothing behind but beautiful walls.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:var(--wp--preset--spacing--6)">
			<!-- wp:heading {"level":3,"style":{"color":{"text":"var:preset|color|brand-blue)"},"typography":{"fontSize":"32px"}}} -->
			<h3 style="color:var(--wp--preset--color--brand-blue);font-size:32px">🌿</h3>
			<!-- /wp:heading -->
			<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
			<h4 style="font-size:18px;font-weight:700">Environmental Responsibility</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"15px","lineHeight":"1.7"}}} -->
			<p style="color:var(--wp--preset--color--text-secondary);font-size:15px;line-height:1.7">Low-VOC and water-based paints wherever possible, proper waste disposal, and sustainable materials. Our commitment to the environment matches our commitment to our clients.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);
