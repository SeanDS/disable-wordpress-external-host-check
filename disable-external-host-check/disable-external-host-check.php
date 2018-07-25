<?php
/*
 * Plugin Name: Disable External Hosts Check
 * Version: 1.0
 * Plugin URI: https://attackllama.com/
 * Description: Disable WordPress's external host check security feature to allow sideloading media etc. from a local machine.
 * Author: Sean Leavey
 * Author URI: https://attackllama.com/
 * Requires at least: 4.9.7
 * Tested up to: 4.9.7
 */
if ( ! defined( 'ABSPATH' ) ) {
	// WordPress not loaded
	exit;
}

if ( ! function_exists( 'http_request_host_is_external' ) ) :
	/**
	 * Adds a hook to disable the external hosts check.
	 */
	function ssl_disable_external_host_check () {
		add_filter( 'http_request_host_is_external', '__return_true' );
	}
endif;

ssl_disable_external_host_check();