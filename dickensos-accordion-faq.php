<?php

/**
 * Plugin Name:       Faq Creator
 * Description:       Faqs Creator plugin allows you add, manage and display FAQ on your wordpress website. This plugin is created with custom post type.
 * Version:           1.1
 * Author:            Dickens Ayieko
 * Author URI:        http://dickensayieko.co
 * Text Domain:       faq-creator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Skelet Config
 */
$skelet_paths[] = array (
    'prefix'      => 'pafa',
    'dir'         => wp_normalize_path(  plugin_dir_path( __FILE__ ).'/includes/' ),
    'uri'         => plugin_dir_url( __FILE__ ).'includes/skelet',
);

/**
 * Load Skelet Framework
 */
if( ! class_exists( 'Skelet_LoadConfig' ) ) {
        include_once dirname( __FILE__ ) .'/includes/skelet/skelet.php';
}

/**
 * Global Variables
 */
if ( class_exists( 'Skelet' ) && ! isset( $pafa ) ) {
	$pafa = new Skelet( 'pafa' );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dickensos-accordion-faq-activator.php
 */
function activate_dickensos_accordion_faq() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dickensos-accordion-faq-activator.php';
	Dickensos_Accordion_Faq_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dickensos-accordion-faq-deactivator.php
 */
function deactivate_dickensos_accordion_faq() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dickensos-accordion-faq-deactivator.php';
	Dickensos_Accordion_Faq_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dickensos_accordion_faq' );
register_deactivation_hook( __FILE__, 'deactivate_dickensos_accordion_faq' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dickensos-accordion-faq.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dickensos_accordion_faq() {

	$plugin = new Dickensos_Accordion_Faq();
	$plugin->run();

}
run_dickensos_accordion_faq();

