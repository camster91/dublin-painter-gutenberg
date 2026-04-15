<?php
/**
 * Render callback for Process Timeline block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$steps = array(
  array('num' => '01', 'title' => 'Free Consultation', 'desc' => 'Book online or call us. We\'ll arrange a visit to assess your project and listen to your vision.'),
  array('num' => '02', 'title' => 'Detailed Quote', 'desc' => 'Get a written, fixed-price quote within 24 hours. No hidden costs — exactly what you see is what you pay.'),
  array('num' => '03', 'title' => 'Scheduling', 'desc' => 'We book your project dates upfront. Most jobs start within 5–10 working days of confirmation.'),
  array('num' => '04', 'title' => 'The Work', 'desc' => 'Our team arrives on time, works cleanly, and keeps you updated daily. We treat your home like ours.'),
  array('num' => '05', 'title' => 'Final & Inspection', 'desc' => 'We walk through every room together before final payment. Not happy? We make it right, guaranteed.'),
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div class="dp-timeline" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:40px;max-width:1100px;margin:0 auto;position:relative;">
		<?php foreach ( $steps as $i => $step ) : ?>
		<div class="dp-timeline-step" style="position:relative;padding-top:16px;">
			<div style="display:flex;align-items:center;gap:12px;margin-bottom:12px;">
				<span style="font-size:36px;font-weight:900;color:var(--wp--preset--color--brand-blue);opacity:0.2;line-height:1;"><?php echo esc_html( $step['num'] ); ?></span>
				<div style="flex:1;height:3px;background:var(--wp--preset--color--card-border);"></div>
			</div>
			<h4 style="font-size:18px;font-weight:700;color:var(--wp--preset--color--text-primary);margin:0 0 8px;"><?php echo esc_html( $step['title'] ); ?></h4>
			<p style="font-size:15px;color:var(--wp--preset--color--text-secondary);line-height:1.6;margin:0;"><?php echo esc_html( $step['desc'] ); ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</div>
