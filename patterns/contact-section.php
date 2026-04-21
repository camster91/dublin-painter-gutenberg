<?php
/**
 * Pattern: Contact Section
 *
 * Two-column contact form + details.
 *
 * @package Dublin_Painter
 */

return array(
	'title'       => __( 'Contact Section', 'dublin-painter' ),
	'description' => __( 'Two-column contact form and business details', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"800"}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem,5vw,3rem);font-weight:800">Get in <span style="color:var(--wp--preset--color--brand-blue)">Touch</span></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"18px"}}} -->
	<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:18px">Have a project in mind? Reach out for a free, no-obligation quote.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--7)">

		<!-- Contact Form Column -->
		<!-- wp:column {"style":{"border":{"radius":"24px","color":"var:preset|color|card-border","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
		<div class="wp-block-column" style="border-radius:24px;border-color:var(--wp--preset--color--card-border);border-width:1px;padding:var(--wp--preset--spacing--6)">

			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700"}}} -->
			<h3 style="font-size:22px;font-weight:700">Send Us a Message</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px"}}} -->
			<p style="color:var(--wp--preset--color--text-secondary);font-size:14px">Fill out the form below and we\'ll get back to you within 24 hours.</p>
			<!-- /wp:paragraph -->

			<!-- wp:shortcode -->
			[fluentform id="1"]
			<!-- /wp:shortcode -->

		</div>
		<!-- /wp:column -->

		<!-- Contact Details Column -->
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","right":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
		<div class="wp-block-column" style="padding:var(--wp--preset--spacing--6)">

			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontWeight":"700"}}} -->
			<h3 style="font-size:22px;font-weight:700">Contact Details</h3>
			<!-- /wp:heading -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|card-border","width":"1px"}}}}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--card-border);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
				<p style="font-size:20px">📞</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"color":{"text":"var:preset|color|text-secondary)"},"spacing":{"margin":{"bottom":"2px"}}} -->
					<p style="color:var(--wp--preset--color--text-secondary);font-size:12px;font-weight:600;margin-bottom:2px">PHONE</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
					<p style="font-size:16px;font-weight:700">01 234 5678</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|card-border","width":"1px"}}}}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--card-border);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
				<p style="font-size:20px">📱</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"color":{"text":"var:preset|color|text-secondary)"},"spacing":{"margin":{"bottom":"2px"}}} -->
					<p style="color:var(--wp--preset--color--text-secondary);font-size:12px;font-weight:600;margin-bottom:2px">MOBILE</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
					<p style="font-size:16px;font-weight:700">087 123 4567</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|card-border","width":"1px"}}}}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--card-border);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
				<p style="font-size:20px">✉️</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"color":{"text":"var:preset|color|text-secondary)"},"spacing":{"margin":{"bottom":"2px"}}} -->
					<p style="color:var(--wp--preset--color--text-secondary);font-size:12px;font-weight:600;margin-bottom:2px">EMAIL</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
					<p style="font-size:16px;font-weight:700">[dp_email]</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|card-border","width":"1px"}}}}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--card-border);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
				<p style="font-size:20px">📍</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"color":{"text":"var:preset|color|text-secondary)"},"spacing":{"margin":{"bottom":"2px"}}} -->
					<p style="color:var(--wp--preset--color--text-secondary);font-size:12px;font-weight:600;margin-bottom:2px">LOCATION</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
					<p style="font-size:16px;font-weight:700">Dublin, Ireland</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
				<p style="font-size:20px">🕐</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600"},"color":{"text":"var:preset|color|text-secondary)"},"spacing":{"margin":{"bottom":"2px"}}} -->
					<p style="color:var(--wp--preset--color--text-secondary);font-size:12px;font-weight:600;margin-bottom:2px">HOURS</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontWeight":"700"}}} -->
					<p style="font-size:16px;font-weight:700">Mon–Sat 8am–6pm</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->',
);