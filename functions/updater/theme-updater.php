<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Halftype', // Name of theme
		'theme_slug'     => 'halftype', // Theme slug
		'version'        => '1.0.1', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'halftype' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'halftype' ),
		'license-key'               => __( 'License Key', 'halftype' ),
		'license-action'            => __( 'License Action', 'halftype' ),
		'deactivate-license'        => __( 'Deactivate License', 'halftype' ),
		'activate-license'          => __( 'Activate License', 'halftype' ),
		'status-unknown'            => __( 'License status is unknown.', 'halftype' ),
		'renew'                     => __( 'Renew?', 'halftype' ),
		'unlimited'                 => __( 'unlimited', 'halftype' ),
		'license-key-is-active'     => __( 'License key is active.', 'halftype' ),
		'expires%s'                 => __( 'Expires %s.', 'halftype' ),
		'expires-never'             => __( 'Lifetime License.', 'halftype' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'halftype' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'halftype' ),
		'license-key-expired'       => __( 'License key has expired.', 'halftype' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'halftype' ),
		'license-is-inactive'       => __( 'License is inactive.', 'halftype' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'halftype' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'halftype' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'halftype' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'halftype' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'halftype' ),
	)

);
