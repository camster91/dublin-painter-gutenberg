<?php
/**
 * Render callback for Faq Accordion block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$faqs = array(
  array(
    'q' => 'How long does a typical interior painting project take?',
    'a' => 'Most interior projects complete in 3–5 days for a standard 3-bedroom home. We work room by room so you can keep living in the house during the work.'
  ),
  array(
    'q' => 'Do you provide free quotes?',
    'a' => 'Yes! We offer free, no-obligation quotes. Our estimators visit your property, discuss your requirements, and provide a detailed breakdown of costs.'
  ),
  array(
    'q' => 'What paint brands do you use?',
    'a' => 'We exclusively use premium brands: Dulux, Sadolin, and Teknos. These provide superior coverage, durability, and finish compared to standard trade paints.'
  ),
  array(
    'q' => 'Are you insured?',
    'a' => 'Absolutely. Dublin Painter carries full public liability and employees\' liability insurance. All our work is backed by our 5-year craftsmanship guarantee.'
  ),
  array(
    'q' => 'Can you match a specific colour?',
    'a' => 'Yes — we use professional colour-matching technology to precisely match any shade. We can also advise on trending palettes and create custom colour schemes for your space.'
  ),
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div class="dp-faq-list" style="max-width:800px;margin:0 auto;">
		<?php foreach ( $faqs as $i => $faq ) : ?>
		<details class="dp-faq-item" style="border-bottom:1px solid var(--wp--preset--color--card-border);padding:24px 0;background:transparent;">
			<summary style="cursor:pointer;font-weight:700;font-size:18px;color:var(--wp--preset--color--text-primary);display:flex;justify-content:space-between;align-items:center;list-style:none;gap:16px;">
				<span><?php echo esc_html( $faq['q'] ); ?></span>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;color:var(--wp--preset--color--brand-blue);transition:transform 0.2s;"><polyline points="6 9 12 15 18 9"></polyline></svg>
			</summary>
			<div style="padding-top:16px;color:var(--wp--preset--color--text-secondary);line-height:1.7;font-size:16px;">
				<?php echo esc_html( $faq['a'] ); ?>
			</div>
		</details>
		<?php endforeach; ?>
	</div>
</div>
