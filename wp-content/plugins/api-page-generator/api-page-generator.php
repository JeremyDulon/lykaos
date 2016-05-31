<?php
/*
 * Plugin Name: api_page_generator
 * Version: 1.0
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Jeremy Dulon
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: api-page-generator
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-api-page-generator.php' );
require_once( 'includes/class-api-page-generator-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-api-page-generator-admin-api.php' );
require_once( 'includes/lib/class-api-page-generator-post-type.php' );
require_once( 'includes/lib/class-api-page-generator-taxonomy.php' );

/**
 * Returns the main instance of api_page_generator to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object api_page_generator
 */
function api_page_generator () {
	$instance = api_page_generator::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = api_page_generator_Settings::instance( $instance );
	}

	return $instance;
}

api_page_generator();