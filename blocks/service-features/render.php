<?php
/**
 * Render callback for Service Features block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$features = array(
  array('icon' => '🖌️', 'title' => 'Premium Paint Only', 'desc' => 'We use Dulux, Sadolin & Teknos — not contractor-grade paint from a hardware store.'),
  array('icon' => '🏠', 'title' => 'Clean & Tidy', 'desc' => 'We lay dust sheets, cover floors, and clean up every day before we leave.'),
  array('icon' => '📐', 'title' => 'Precision Detail', 'desc' => 'Cut-in lines sharp as a razor. No paint on your floors, fixtures, or trim.'),
  array('icon' => '⏰', 'title' => 'On-Time Delivery', 'desc' => 'We finish when we say we will. We value your time as much as ours.'),
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div class="dp-features-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:32px;max-width:1100px;margin:0 auto;">
		<?php foreach ( $features as $f ) : ?>
		<div style="padding:32px;border-radius:16px;background:var(--wp--preset--color--brand-light);border:1px solid var(--wp--preset--color--card-border);">
			<div style="font-size:40px;margin-bottom:16px;line-height:1;"><?php echo esc_html( $f['icon'] ); ?></div>
			<h3 style="font-size:20px;font-weight:700;color:var(--wp--preset--color--text-primary);margin:0 0 8px;"><?php echo esc_html( $f['title'] ); ?></h3>
			<p style="font-size:16px;color:var(--wp--preset--color--text-secondary);line-height:1.6;margin:0;"><?php echo esc_html( $f['desc'] ); ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</div>
