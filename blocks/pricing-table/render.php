<?php
/**
 * Render callback for Pricing Table block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$tiers = array(
  array(
    'name' => 'Interior Painting',
    'price' => 'From €35/m²',
    'note' => '2 coats, premium paint included',
    'items' => array('Wall & ceiling painting', 'Door & window frames', 'Skirting boards', 'Premium Dulux paint', 'Dust sheets & protection', 'Full cleanup included'),
    'featured' => false,
  ),
  array(
    'name' => 'Exterior Painting',
    'price' => 'From €45/m²',
    'note' => 'Weatherproof finish, all surfaces',
    'items' => array('Render & masonry coating', 'Wood windows & doors', 'Gutters & downpipes', 'Weatherproof Teknos paint', 'Power wash prep', '5-year guarantee'),
    'featured' => true,
  ),
  array(
    'name' => 'Commercial Painting',
    'price' => 'Custom Quote',
    'note' => 'Tailored to your business needs',
    'items' => array('Office & retail spaces', 'Full-building projects', 'Out-of-hours scheduling', 'Anti-bacterial coatings', 'Safety-compliant', 'Dedicated project manager'),
    'featured' => false,
  ),
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div class="dp-pricing-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:32px;max-width:1100px;margin:0 auto;">
		<?php foreach ( $tiers as $tier ) : ?>
		<div class="dp-pricing-card<?php echo $tier['featured'] ? ' dp-pricing-card--featured' : ''; ?>" style="background:var(--wp--preset--color--white);border:2px solid<?php echo $tier['featured'] ? 'var(--wp--preset--color--brand-green)' : 'var(--wp--preset--color--card-border)'; ?>;border-radius:16px;padding:40px 32px;text-align:center;position:relative;<?php echo $tier['featured'] ? 'transform:scale(1.02);' : ''; ?>">
			<?php if ( $tier['featured'] ) : ?>
			<div style="position:absolute;top:-14px;left:50%;transform:translateX(-50%);background:var(--wp--preset--color--brand-green);color:white;padding:4px 20px;border-radius:20px;font-size:13px;font-weight:700;letter-spacing:0.5px;">MOST POPULAR</div>
			<?php endif; ?>
			<h3 style="font-size:20px;font-weight:700;color:var(--wp--preset--color--text-primary);margin:0 0 8px;"><?php echo esc_html( $tier['name'] ); ?></h3>
			<div style="font-size:32px;font-weight:900;color:var(--wp--preset--color--brand-green);margin:0 0 8px;"><?php echo esc_html( $tier['price'] ); ?></div>
			<p style="color:var(--wp--preset--color--text-secondary);font-size:14px;margin:0 0 24px;"><?php echo esc_html( $tier['note'] ); ?></p>
			<ul style="list-style:none;padding:0;margin:0 0 32px;text-align:left;">
				<?php foreach ( $tier['items'] as $item ) : ?>
				<li style="padding:8px 0;border-bottom:1px solid var(--wp--preset--color--card-border);color:var(--wp--preset--color--text-primary);font-size:15px;display:flex;gap:12px;align-items:center;">
					<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--wp--preset--color--brand-green)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><polyline points="20 6 9 17 4 12"></polyline></svg>
					<?php echo esc_html( $item ); ?>
				</li>
				<?php endforeach; ?>
			</ul>
			<a href="/contact/" style="display:block;padding:14px 24px;background:<?php echo $tier['featured'] ? 'var(--wp--preset--color--brand-green)' : 'var(--wp--preset--color--brand-dark)'; ?>;color:white;text-decoration:none;border-radius:10px;font-weight:700;font-size:16px">Get a Quote →</a>
		</div>
		<?php endforeach; ?>
	</div>
</div>
