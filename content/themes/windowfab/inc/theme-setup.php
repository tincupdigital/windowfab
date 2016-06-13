<?php
/**
 * theme-setup.php
 *
 * @package _s
 */

 /**
  * Soil Setup
  */
 require get_template_directory() . '/inc/utility/soil-setup.php';

/**
 * TGM Plugin Activation
 */
require get_template_directory() . '/inc/utility/tgmpa-setup.php';

/**
 * WP CPT Class
 */
require get_template_directory() . '/inc/utility/wpcpt-setup.php';

/**
 * Advanced Custom Fields
 */
if ( !WP_LOCAL_DEV ) {
  include get_template_directory() . '/inc/utility/acf-fields.php';

  if ( wp_get_current_user()->user_login !== 'sean' ) {
    define( 'ACF_LITE' , true );
  }
}

/**
 * Add custom image sizes
 *
 * @link http://codex.wordpress.org/Function_Reference/add_image_size
 */
// add_image_size( 'hero', 1600, 640, true );
