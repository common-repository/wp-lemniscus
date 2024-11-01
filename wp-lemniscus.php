<?php
/*
 * Plugin Name: WP Lemniscus
 * Version: 1.0.9
 * Plugin URI: 
 * Description: Adding Lemniscus Code via WP Shortcode
 * Author: Marian Heddesheimer
 * Author URI: https://heddesheimer.de
 * Requires at least: 4.0
 * Tested up to: 5.0
 *
 * Text Domain: wp-lemniscus
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Marian Heddesheimer
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-lemniscus.php' );
require_once( 'includes/class-lemniscus-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-lemniscus-admin-api.php' );
// require_once( 'includes/lib/class-lemniscus-post-type.php' );
// require_once( 'includes/lib/class-lemniscus-taxonomy.php' );

/**
 * Returns the main instance of Lemniscus to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Lemniscus
 */
function Lemniscus () {
	$instance = Lemniscus::instance( __FILE__, '1.0.9' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Lemniscus_Settings::instance( $instance );
	}

	return $instance;
}

Lemniscus();