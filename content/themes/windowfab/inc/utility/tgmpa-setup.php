<?php
/**
 * tgmpa-setup.php
 *
 * @package _s
 */

/**
 * Register the required plugins for this theme.
 */
function my_theme_register_required_plugins() {
  /**
   * Local plugins
   */
  $plugins = array(
    array(
      'name' => 'Advanced Custom Fields',
      'slug' => 'advanced-custom-fields',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'Advanced Custom Fields: Repeater Field',
      'slug' => 'acf-repeater',
      'source' => 'http://www.ecm-design.com/assets/plugins/acf-repeater.zip',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'Force Regenerate Thumbnails',
      'slug' => 'force-regenerate-thumbnails',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'Imsanity',
      'slug' => 'imsanity',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'Simple Page Sidebars',
      'slug' => 'simple-page-sidebars',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'Soil',
      'slug' => 'soil',
      'source' => 'https://github.com/roots/soil/archive/master.zip',
      'required' => true,
      'force_activation' => true,
      'external_url' => 'https://github.com/roots/soil.git'
    )
  );

  /**
   * Remote plugins
   */
  $plugins_remote = array(
    array(
      'name' => 'Akismet',
      'slug' => 'akismet',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'Brute Force Login Protection',
      'slug' => 'brute-force-login-protection',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'WP Super Cache',
      'slug' => 'wp-super-cache',
      'required' => true,
      'force_activation' => true
    ),
    array(
      'name' => 'Yoast SEO',
      'slug' => 'wordpress-seo',
      'required' => true,
      'force_activation' => true
    )
  );

  // merge the local and remote plugin
  // arrays if we're not in dev environment
	if ( !WP_LOCAL_DEV ) {
		$plugins = array_merge( $plugins, $plugins_remote );
	}

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
