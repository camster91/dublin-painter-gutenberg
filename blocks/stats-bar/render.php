<?php
/**
 * Render callback for Stats Bar block.
 */
$wrapper_attr = get_block_wrapper_attributes();
$stats = array(
  array('value' => '500+', 'label' => 'Projects Completed'),
  array('value' => '10+', 'label' => 'Years Experience'),
  array('value' => '100%', 'label' => 'Satisfaction Rate'),
  array('value' => '5★', 'label' => 'Average Rating'),
);
?>
<div <?php echo $wrapper_attr; ?>>
	<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:40px;max-width:1000px;margin:0 auto;text-align:center;">
		<?php foreach ( $stats as $stat ) : ?>
		<div>
			<div style="font-size:48px;font-weight:900;color:var(--wp--preset--color--brand-blue);line-height:1;margin-bottom:8px;"><?php echo esc_html( $stat['value'] ); ?></div>
			<div style="font-size:15px;font-weight:600;color:var(--wp--preset--color--text-secondary);text-transform:uppercase;letter-spacing:1px;"><?php echo esc_html( $stat['label'] ); ?></div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
