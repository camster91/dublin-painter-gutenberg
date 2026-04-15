<?php
/**
 * Render callback for Service Areas block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$areas = array(
  'Donnybrook', 'Rathmines', 'Dundrum', 'Blackrock', 'Foxrock',
  'Sandymount', 'Ballsbridge', 'Clontarf', 'Howth', 'Malahide',
  'Dun Laoghaire', 'Killiney', 'Sutton', 'Terenure', 'Templeogue',
  'Rathgar', 'Milltown', 'Stillorgan', 'Kilmainham', 'South Dublin',
  'North Dublin', 'City Centre', 'Docklands', 'South County'
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div style="text-align:center;margin-bottom:40px;">
		<h2 style="font-size:32px;font-weight:800;color:var(--wp--preset--color--white);margin:0 0 16px;">Areas We Cover</h2>
		<p style="color:var(--wp--preset--color--text-light);font-size:17px;margin:0;">Serving all Dublin and surrounding areas</p>
	</div>
	<div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;max-width:900px;margin:0 auto;">
		<?php foreach ( $areas as $area ) : ?>
		<span style="padding:8px 20px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);border-radius:8px;color:var(--wp--preset--color--text-light);font-size:15px;font-weight:500;"><?php echo esc_html( $area ); ?></span>
		<?php endforeach; ?>
	</div>
</div>
