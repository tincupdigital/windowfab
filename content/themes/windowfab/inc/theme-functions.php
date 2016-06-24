<?php
/**
 * theme-functions.php
 *
 * @package _s
 */

/**
 * Flush rewrite rules on theme activation
 */
function _s_flush_rewrite_rules() {
  flush_rewrite_rules();
}
add_action( 'after_switch_theme', '_s_flush_rewrite_rules' );

/**
 * Yoast SEO meta box priority
 */
function _s_move_yoast_seo_meta() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', '_s_move_yoast_seo_meta' );

/**
 * Hide update notices for all but me
 */
function _s_hide_update_notices_all() {
  global $wp_version;
  return(object) array( 'last_checked' => time(), 'version_checked' => $wp_version );
}
if ( wp_get_current_user()->user_login !== 'sean' ) {
  add_filter( 'pre_site_transient_update_core', '_s_hide_update_notices_all' );
  add_filter( 'pre_site_transient_update_plugins', '_s_hide_update_notices_all' );
  add_filter( 'pre_site_transient_update_themes', '_s_hide_update_notices_all' );
}

/**
 * Remove dashboard widgets
 */
function _s_remove_dash_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
}
add_action( 'wp_dashboard_setup', '_s_remove_dash_widgets' );

/**
 * Custom welcome panel
 */
function _s_custom_welcome_panel() {
  $html =  '<div class="welcome-panel-content" style="padding-bottom: 23px;">';
  $html .= '<h2 style="margin-bottom: 5px;">Welcome to your site!</h2>';
  $html .= '<p style="font-size: 16px; margin: 0;">Click anywhere on the left-hand side to get started.</p>';
  $html .= '</div>';
  echo $html;
}
remove_action( 'welcome_panel', 'wp_welcome_panel' );
add_action( 'welcome_panel', '_s_custom_welcome_panel' );

/**
 * Strip &nbsp; from end of posts
 */
function _s_trim_trailing_whitespace( $content ) {
  $content = preg_replace( "/&nbsp;/", "☺", $content );
  $content = rtrim( $content, "☺" . " \t\n\r\0\x0B" );
  $content = preg_replace( "/☺/", "&nbsp;", $content );
  return $content;
}
add_filter( 'the_content', '_s_trim_trailing_whitespace', 0 );

/**
 * Remove double space after period
 */
function _s_remove_double_space( $data ) {
  $data['post_content'] = preg_replace(
    "~( \x{C2}\x{A0}|\x{C2}\x{A0} )~m", " ", $data['post_content']
  );
  return $data;
}
add_filter( 'wp_insert_post_data', '_s_remove_double_space', 20 );

/**
 * Get featured image URL
 */
function _s_get_feat_img_url( $size ) {
  // hat tip: http://goo.gl/fzHOaB
  $img_id = get_post_thumbnail_id();
  $img_array = wp_get_attachment_image_src( $img_id, $size );
  $img_url = $img_array[0];
  return $img_url;
}

/**
 * Add brand logo at end of nav
 *
 * @param used by wp_nav_menu() function
 */
function _s_nav_logo_end() {
  if ( get_theme_mod( 'brand_logo' ) ) {
    $img = get_theme_mod( 'brand_logo' );
    $lnk = esc_url( home_url( '/' ) );
    $alt = get_bloginfo( 'name' );

    // set up the nav wrapper
    $wrap = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '<li class="site-logo"><a class="site-logo--img" href="'. $lnk .'">';
    $wrap .= '<img src="' . $img . '" alt="'. $alt .'" />';
    $wrap .= '</a></li>';
    $wrap .= '</ul>';
  } else {
    $wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>';
  }
  return $wrap;
}
