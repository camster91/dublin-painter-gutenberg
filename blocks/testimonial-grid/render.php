<?php
/**
 * Render callback for Testimonial Grid block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$testimonials = array(
  array(
    'rating' => 5,
    'text' => '"Cannot recommend Dublin Painter highly enough. Micheal and his team were professional, punctual, and the finish in our Georgian townhouse is absolutely flawless. Every room looks brand new."',
    'name' => 'Sarah K.',
    'location' => 'Rathmines, Dublin 6',
  ),
  array(
    'rating' => 5,
    'text' => '"We\'ve used them for three office fit-outs now. Always on time, always within budget. They understand that in a workplace, time is money. Top-notch professionals."',
    'name' => 'James M.',
    'location' => 'IFSC, Dublin 1',
  ),
  array(
    'rating' => 5,
    'text' => '"The exterior of our 1930s semi-D was in shocking condition after 15 years. Dublin Painter restored it beautifully — new render, all windows, doors, even the fascia. Remarkable transformation."',
    'name' => 'Aoife R.',
    'location' => 'Donnybrook, Dublin 4',
  ),
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div class="dp-testimonials" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:32px;max-width:1100px;margin:0 auto;">
		<?php foreach ( $testimonials as $t ) : ?>
		<div style="background:var(--wp--preset--color--brand-light);border-radius:16px;padding:32px;border:1px solid var(--wp--preset--color--card-border);">
			<div style="display:flex;gap:4px;margin-bottom:16px;">
				<?php for ( $i = 0; $i < 5; $i++ ) : ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="<?php echo $i < $t['rating'] ? 'var(--wp--preset--color--brand-blue)' : 'var(--wp--preset--color--card-border)'; ?>" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
				<?php endfor; ?>
			</div>
			<p style="font-size:16px;line-height:1.7;color:var(--wp--preset--color--text-primary);margin:0 0 20px;font-style:italic;"><?php echo esc_html( $t['text'] ); ?></p>
			<div>
				<strong style="font-size:16px;color:var(--wp--preset--color--text-primary);"><?php echo esc_html( $t['name'] ); ?></strong>
				<span style="color:var(--wp--preset--color--text-secondary);font-size:14px;display:block;"><?php echo esc_html( $t['location'] ); ?></span>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
