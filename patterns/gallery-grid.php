<?php
/**
 * Pattern: Gallery Grid
 *
 * Filterable project gallery with cards.
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Gallery Grid', 'dublin-painter' ),
	'description' => __( 'Filterable project gallery with category tabs', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-dark","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull has-brand-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"48px","fontWeight":"800"}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:48px;font-weight:800">Our <span style="color:var(--wp--preset--color--brand-blue)">Work</span></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"18px"}}} -->
	<p class="has-text-align-center" style="color:#94a3b8;font-size:18px">See the transformations we deliver for Dublin homeowners and businesses</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"16px 16px 0 0"}}} -->
			<figure class="wp-block-image size-full"><a href="/interior-painting/"><img src="/wp-content/themes/dublin-painter/assets/images/project_interior_room.jpg" alt="Interior painting project" style="border-radius:16px 16px 0 0"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"color":{"text":"#2563eb"},"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}} -->
				<p style="color:#2563eb;font-size:12px;font-weight:600;margin-bottom:4px">INTERIOR</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
				<h3 style="font-size:18px;font-weight:700">3-Bed Semi Interior</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px"}}} -->
				<p style="color:var(--wp--preset--color--text-secondary);font-size:14px">Complete interior repaint. Dustless sanding technology used throughout.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"16px 16px 0 0"}}} -->
			<figure class="wp-block-image size-full"><a href="/exterior-painting/"><img src="/wp-content/themes/dublin-painter/assets/images/project_georgian_door.jpg" alt="Georgian door restoration" style="border-radius:16px 16px 0 0"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"color":{"text":"#2563eb"},"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}} -->
				<p style="color:#2563eb;font-size:12px;font-weight:600;margin-bottom:4px">EXTERIOR</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
				<h3 style="font-size:18px;font-weight:700">Georgian Front Door</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px"}}} -->
				<p style="color:var(--wp--preset--color--text-secondary);font-size:14px">Full exterior repaint including sash windows and door. Period-accurate colours.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"16px 16px 0 0"}}} -->
			<figure class="wp-block-image size-full"><a href="/commercial-painting/"><img src="/wp-content/themes/dublin-painter/assets/images/project_office.jpg" alt="Office painting project" style="border-radius:16px 16px 0 0"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"color":{"text":"#16a34a"},"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}} -->
				<p style="color:#16a34a;font-size:12px;font-weight:600;margin-bottom:4px">COMMERCIAL</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
				<h3 style="font-size:18px;font-weight:700">Corporate Office Fit-Out</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px"}}} -->
				<p style="color:var(--wp--preset--color--text-secondary);font-size:14px">4-floor office repaint completed over a single weekend. Low-VOC paints.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"},"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--6)">

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px">
			<!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"16px 16px 0 0"}}} -->
			<figure class="wp-block-image size-full"><img src="/wp-content/themes/dublin-painter/assets/images/project_pebble_dash.jpg" alt="Pebble dash exterior" style="border-radius:16px 16px 0 0"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"color":{"text":"#2563eb"},"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}} -->
				<p style="color:#2563eb;font-size:12px;font-weight:600;margin-bottom:4px">EXTERIOR</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
				<h3 style="font-size:18px;font-weight:700">Pebble Dash Refresh</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px"}}} -->
				<p style="color:var(--wp--preset--color--text-secondary);font-size:14px">Power-washed, fungi treated, and airless sprayed with weather-shield coating.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px">
			<!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"16px 16px 0 0"}}} -->
			<figure class="wp-block-image size-full"><img src="/wp-content/themes/dublin-painter/assets/images/project_kitchen.jpg" alt="Kitchen cabinet respray" style="border-radius:16px 16px 0 0"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"color":{"text":"#2563eb"},"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}} -->
				<p style="color:#2563eb;font-size:12px;font-weight:600;margin-bottom:4px">INTERIOR</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
				<h3 style="font-size:18px;font-weight:700">Kitchen Cabinet Respray</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px"}}} -->
				<p style="color:var(--wp--preset--color--text-secondary);font-size:14px">Hand-painted kitchen cabinets in Farrow &amp; Ball. Fraction of replacement cost.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"radius":"16px","color":"var:preset|color|card-border","width":"1px"}}} -->
		<div class="wp-block-column" style="border-radius:16px;border-color:var(--wp--preset--color--card-border);border-width:1px">
			<!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"16px 16px 0 0"}}} -->
			<figure class="wp-block-image size-full"><img src="/wp-content/themes/dublin-painter/assets/images/project_hotel.jpg" alt="Hotel restoration" style="border-radius:16px 16px 0 0"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","right":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"color":{"text":"#16a34a"},"typography":{"fontSize":"12px","fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}} -->
				<p style="color:#16a34a;font-size:12px;font-weight:600;margin-bottom:4px">COMMERCIAL</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"700"}}} -->
				<h3 style="font-size:18px;font-weight:700">Heritage Hotel Restoration</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px"}}} -->
				<p style="color:var(--wp--preset--color--text-secondary);font-size:14px">Period-accurate restoration of listed hotel interior. Lime-wash techniques.</p>
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