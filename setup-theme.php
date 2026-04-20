<?php
/**
 * Theme Setup Script - runs via web request
 */
define('WP_USE_THEMES', false);
require __DIR__ . '/wp-load.php';

// Delete theme cache
delete_option('_transient_theme_roots');
delete_option('_transient_timeout_theme_roots');
wp_cache_flush();

// Switch away and back to force template re-registration
switch_theme('twentytwentyfour');
switch_theme('dublin-painter');

// Set page templates
$pages = array(
    12 => 'home',     // Home
    5  => 'interior',  // Interior Painting
    6  => 'exterior',  // Exterior Painting
    7  => 'commercial',// Commercial Painting
    8  => 'about',     // About Us
    9  => 'gallery',   // Gallery
    10 => 'pricing',   // Pricing
    11 => 'contact',   // Contact
);

foreach ($pages as $id => $template) {
    update_post_meta($id, '_wp_page_template', 'templates/' . $template . '.html');
    echo "Set page $id template to: templates/$template.html<br>\n";
}

// Set homepage
update_option('show_on_front', 'page');
update_option('page_on_front', 12);
update_option('blogname', 'Dublin Painter');
update_option('blogdescription', 'Professional Painting Services in Dublin');
update_option('permalink_structure', '/%postname%/');
flush_rewrite_rules(true);

echo "<br><strong>Done!</strong> Templates set, homepage configured.";

// List available templates
echo "<br><br>Available templates:<br>";
$templates = get_page_templates();
foreach ($templates as $file => $name) {
    echo "  $file => $name<br>\n";
}
