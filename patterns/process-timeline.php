<?php
/**
 * Pattern: Process Timeline
 *
 * 4-step process with animated progress line and scroll-triggered step activation.
 */

return array(
	'title'       => __( 'Process Timeline', 'dublin-painter' ),
	'description' => __( '4-step process with animated progress line', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-light","layout":{"type":"constrained","contentSize":"1200px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}}}} -->
<div class="wp-block-group alignfull has-brand-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(2rem,5vw,3rem)","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem,5vw,3rem);font-weight:800">How It Works</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:18px">A seamless, stress-free experience from start to finish. We handle everything so you don\'t have to lift a finger.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"},"className":"dp-process-line dp-line-step-0","style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}}}} -->
<div class="wp-block-group dp-process-line dp-line-step-0" style="margin-top:var(--wp--preset--spacing--8)">

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|6","left":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns">

<!-- Step 1 -->
<!-- wp:column {"className":"dp-process-step"} -->
<div class="wp-block-column dp-process-step">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|5"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--5)">
<div class="dp-step-circle"><span>01</span></div>
</div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:20px;font-weight:700">Fast Online Quote</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px;line-height:1.6">Fill out our estimator form for an instant rough estimate and priority scheduling.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Step 2 -->
<!-- wp:column {"className":"dp-process-step"} -->
<div class="wp-block-column dp-process-step">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|5"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--5)">
<div class="dp-step-circle"><span>02</span></div>
</div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:20px;font-weight:700">Free Site Visit</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px;line-height:1.6">Our project manager assesses the site to confirm measurements and finalize the exact fixed price.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Step 3 -->
<!-- wp:column {"className":"dp-process-step"} -->
<div class="wp-block-column dp-process-step">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|5"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--5)">
<div class="dp-step-circle"><span>03</span></div>
</div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:20px;font-weight:700">Flawless Execution</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px;line-height:1.6">Our vetted crews arrive on time, use dustless sanders, and apply premium layers with respect to your property.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- Step 4 -->
<!-- wp:column {"className":"dp-process-step"} -->
<div class="wp-block-column dp-process-step">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|5"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--5)">
<div class="dp-step-circle"><span>04</span></div>
</div>
<!-- /wp:group -->
<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"700"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:20px;font-weight:700">Final Walkthrough</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-secondary)"},"typography":{"fontSize":"14px","lineHeight":"1.6"}}} -->
<p class="has-text-align-center" style="color:var(--wp--preset--color--text-secondary);font-size:14px;line-height:1.6">We don\'t leave until you\'re 100% thrilled. Backed by our iron-clad written guarantee.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->',
);