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
 * Customizer Fields
 */
require get_template_directory() . '/inc/utility/customizer-fields.php';

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
 * Custom Widgets
 */
require get_template_directory() . '/inc/widgets/bio_image-widget.php';
require get_template_directory() . '/inc/widgets/cta_link-widget.php';
require get_template_directory() . '/inc/widgets/recent_posts-widget.php';
require get_template_directory() . '/inc/widgets/categories-widget.php';
require get_template_directory() . '/inc/widgets/business_info-widget.php';
