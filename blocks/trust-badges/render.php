<?php
/**
 * Render callback for Trust Badges block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$badges = array(
  array('title' => 'Fully Insured', 'desc' => '€5M Public Liability', 'icon' => '🛡️'),
  array('title' => '5-Star Rated', 'desc' => '200+ Google Reviews', 'icon' => '⭐'),
  array('title' => 'Guaranteed Work', 'desc' => '5-Year Craftsmanship Guarantee', 'icon' => '✅'),
  array('title' => 'Free Quotes', 'desc' => 'No-obligation visits across Dublin', 'icon' => '💰'),
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:32px;max-width:1000px;margin:0 auto;">
		<?php foreach ( $badges as $badge ) : ?>
		<div style="text-align:center;padding:24px;">
			<div style="font-size:40px;margin-bottom:12px;"><?php echo esc_html( $badge['icon'] ); ?></div>
			<h4 style="font-size:18px;font-weight:700;color:var(--wp--preset--color--text-primary);margin:0 0 4px;"><?php echo esc_html( $badge['title'] ); ?></h4>
			<p style="font-size:14px;color:var(--wp--preset--color--text-secondary);margin:0;"><?php echo esc_html( $badge['desc'] ); ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</div>
