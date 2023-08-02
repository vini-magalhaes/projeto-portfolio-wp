<?php

add_action('wp_ajax_nopriv_load_infinite_scroll', 'ajax_load_infinite_scroll');
add_action('wp_ajax_load_infinite_scroll', 'ajax_load_infinite_scroll');
function ajax_load_infinite_scroll() {
	
	include(get_template_directory().'/lib/project/ajax/ajax_load_infinite_scroll.php');
	exit();
}

