<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
	'lib/roots/utils.php',                  // Utility functions
	'lib/roots/init.php',                   // Initial theme setup and constants
	'lib/roots/wrapper.php',                // Theme wrapper class
	'lib/roots/sidebar.php',                // Sidebar class
	'lib/roots/config.php',                 // Configuration
	'lib/roots/activation.php',             // Theme activation
	'lib/roots/titles.php',                 // Page titles
	'lib/roots/wp_bootstrap_navwalker.php',  // WP Bootstrap Nav Walker
	'lib/roots/gallery.php',                // Custom [gallery] modifications
	'lib/roots/scripts.php',                // Scripts and stylesheets
	'lib/roots/extras.php',                 // Custom functions
	'lib/project/config-acf.php',                 // ACF
	'lib/project/breadcrumbs.php',                 // Breadcrumbs
	'lib/project/ajax.php',                 // Ajax Requests
	'lib/project/reescrita-url.php',                 // Reescrita URL
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
	trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// Remove versão do WP
function remove_wp_version_strings( $src ) {
	 global $wp_version;
	 parse_str(parse_url($src, PHP_URL_QUERY), $query);
	 if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
		  $src = remove_query_arg('ver', $src);
	 }
	 return $src;
}
add_filter( 'script_loader_src', 'remove_wp_version_strings' );
add_filter( 'style_loader_src', 'remove_wp_version_strings' );

function remove_versao()
{
	return '';
}
add_filter( 'the_generator', 'remove_versao' );


