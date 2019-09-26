<?php

// If this file is called directly, abort.
if (!defined( 'WPINC' )) {
	die;
}

function check_cache_is_turned_on() {
	$wp_cache_config_file = WP_CONTENT_DIR . '/wp-cache-config.php';
	include( $wp_cache_config_file );

	if (!$cache_enabled) {
		$to = 'dev@uphotel.agency';
		$subject = 'WARNING: WP SUPER CACHE DISABLED';
		$message = 'WP Super Cache is disabled for website: ' . get_site_url();
		wp_mail( $to, $subject, $message );
	}
}