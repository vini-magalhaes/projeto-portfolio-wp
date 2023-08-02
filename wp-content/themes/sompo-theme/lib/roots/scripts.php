<?php
/**
* Scripts and stylesheets
*
* Enqueue stylesheets in the following order:
* 1. /theme/assets/css/main.css
*
* Enqueue scripts in the following order:
* 1. jquery-1.11.1.min.js via Google CDN
* 2. /theme/assets/js/vendor/modernizr.min.js
* 3. /theme/assets/js/scripts.js
*
* Google Analytics is loaded after enqueued scripts if:
* - An ID has been defined in config.php
* - You're not logged in as an administrator
*/
function roots_scripts()
{
	/**
	* The build task in Grunt renames production assets with a hash
	* Read the asset names from assets-manifest.json
	*/

	$get_assets = file_get_contents( get_template_directory() . '/assets/manifest.json' );
	$assets     = json_decode( $get_assets, true );
	$assets     = array(
		'application' => '/assets/css/application.css',
		'jquery'    => '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
		'swiper'    => '//cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js',
		'bootstrap' => '/assets/js/bootstrap.js',
		'js'        => '/assets/js/scripts.min.js' . $assets['assets/js/scripts.min.js']['hash'],
	);

	// wp_enqueue_style('roots_css', get_template_directory_uri() . $assets['css'], false, null);
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), null, 'all' ); // style.css Default WordPress
	wp_enqueue_style('application', get_template_directory_uri() . $assets['application'], false, null);
	/**
	* jQuery is loaded using the same method from HTML5 Boilerplate:
	* Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
	* It's kept in the header instead of footer to avoid conflicts with plugins.
	*/
	if (!is_admin() && current_theme_supports('jquery-cdn')) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', $assets['jquery'], array(), null, true);
		add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);
	}

	if (is_single() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_script('jquery');
	wp_enqueue_script('swiper', $assets['swiper'], array(), null, true);
	wp_enqueue_script('roots_js', get_template_directory_uri() . $assets['js'], array(), null, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . $assets['bootstrap'], array(), null, true);
	wp_localize_script(
		'roots_js',
		 'ajaxTheme',
		  array( 'url' => admin_url( 'admin-ajax.php' ) )
  );
}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);

// http://wordpress.stackexchange.com/a/12450
function roots_jquery_local_fallback($src, $handle = null) {
	static $add_jquery_fallback = false;

	if ($add_jquery_fallback) {
		//echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js?1.11.1"><\/script>\')</script>' . "\n";
		$add_jquery_fallback = false;
	}

	if ($handle === 'jquery') {
		$add_jquery_fallback = true;
	}

	return $src;
}
add_action('wp_head', 'roots_jquery_local_fallback');


