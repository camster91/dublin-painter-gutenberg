<?php
/**
 * Pattern: Service Areas
 *
 * @package Dublin_Painter
 */

$areas = array(
	'South Dublin', 'Blackrock', 'Dalkey', 'Killiney',
	'Rathmines', 'Ranelagh', 'Ballsbridge', 'Donnybrook',
	'North Dublin', 'Howth', 'Malahide', 'Clontarf',
	'Greystones', 'Bray', 'Sandyford', 'Dundrum',
	'Drumcondra', 'Phibsborough', 'Castleknock', 'Blanchardstown',
	'Tallaght', 'Rathfarnham', 'Churchtown', 'Wicklow',
);

$pills = '';
foreach ( $areas as $area ) {
	$pills .= '<!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"border":{"radius":"9999px","color":"#475569","width":"1px"},"spacing":{"padding":{"top":"8px","right":"16px","bottom":"8px","left":"16px"}}},"backgroundColor":"dark-card","fontSize":"small"} -->
<p class="has-dark-card-background-color has-background has-small-font-size" style="border-radius:9999px;border-color:#475569;border-width:1px;padding-top:8px;padding-right:16px;padding-bottom:8px;padding-left:16px;color:#ffffff">📍 ' . $area . '</p>
<!-- /wp:paragraph -->

';
}

return array(
	'title'       => __( 'Service Areas', 'dublin-painter' ),
	'description' => __( 'Dark section with 24 Dublin area pill tags', 'dublin-painter' ),
	'categories'  => array( 'dublin-painter' ),
	'content'     => '<!-- wp:group {"align":"full","backgroundColor":"brand-dark","layout":{"type":"constrained","contentSize":"800px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9"}},"border":{"top":{"color":"#334155","width":"1px"}}}} -->
<div class="wp-block-group alignfull has-brand-dark-background-color has-background" style="border-top-color:#334155;border-top-width:1px;padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--9)">

<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"},"typography":{"fontSize":"clamp(2rem,5vw,3rem)","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:clamp(2rem,5vw,3rem);font-weight:800">Proudly Serving Dublin &amp; Beyond</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#94a3b8"},"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="color:#94a3b8;font-size:18px">From historic city-centre terraces to coastal county homes, our painters are available across Dublin, Wicklow, Kildare, and Meath.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|3"}}} -->
<div class="wp-block-group dp-service-areas" style="margin-top:var(--wp--preset--spacing--7)">

' . $pills . '
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#64748b"},"typography":{"fontSize":"14px"}},"spacing":{"margin":{"top":"var:preset|spacing|5"}}} -->
<p class="has-text-align-center" style="color:#64748b;font-size:14px;margin-top:var(--wp--preset--spacing--5)">Don\'t see your area? Give us a call — we regularly take on projects across the wider Leinster region.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->',
);