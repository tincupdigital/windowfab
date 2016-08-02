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
  if ( wp_get_current_user()->user_login !== 'sean' ) {
    global $wp_version;
    return(object) array( 'last_checked' => time(), 'version_checked' => $wp_version );
  }
}
add_filter( 'pre_site_transient_update_core', '_s_hide_update_notices_all' );
add_filter( 'pre_site_transient_update_plugins', '_s_hide_update_notices_all' );
add_filter( 'pre_site_transient_update_themes', '_s_hide_update_notices_all' );

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
 * Add sidebar edit access for editors
 */
function _s_editor_add_sidebar_edit() {
  $role = get_role( 'editor' );
  $role->add_cap( 'edit_theme_options' );
}
add_action( 'after_switch_theme', '_s_editor_add_sidebar_edit' );

function _s_disable_theme_change() {
  if ( wp_get_current_user()->user_login !== 'sean' ) {
    global $submenu;
    unset( $submenu['themes.php'][5] );
    unset( $submenu['themes.php'][15] );
  }
}
add_action( 'admin_init', '_s_disable_theme_change' );

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
 * Main nav wrap to add logo
 */
function _s_main_nav_wrap() {
  if ( get_theme_mod( 'brand_logo' ) ) {
    $img = get_theme_mod( 'brand_logo' );
    $lnk = esc_url( home_url( '/' ) );
    $alt = get_bloginfo( 'name' );

    // set up the nav wrapper
    $wrap = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '<li class="site-logo"><a href="'. $lnk .'">';
    $wrap .= '<img class="site-logo__image" src="' . $img . '" alt="'. $alt .'" />';
    $wrap .= '</a></li>';
    $wrap .= '</ul>';
  } else {
    $wrap = '<ul id="%1$s" class="%2$s">%3$s</ul>';
  }
  return $wrap;
}

/**
 * Footer nav wrap to add site credits
 */
function _s_footer_nav_wrap() {
  // get the site name
  $name = get_bloginfo( 'name' );
  $credits = '&copy;&nbsp;' . date( 'Y' ) . '&nbsp;' . $name . '. All rights reserved.';
  // set up the wrapper
  $wrap = '<ul id="%1$s" class="%2$s">';
  $wrap = '<li class="site-info">' . $credits . '</li>';
  $wrap .= '%3$s';
  return $wrap;
}

/**
 * Require featured image
 */
function _s_require_feat_img( $post_id ) {
  if ( get_post_type( $post_id ) !== 'post' ) {
    return;
  }
  if ( !has_post_thumbnail( $post_id ) ) {
    $link =  wp_get_referer();

    $message = 'You must upload a featured image in order to save the post. ';
    $message .= 'Click <a href="' . $link . '">here</a> to go back.';
    wp_die( $message );
  }
}
add_action( 'pre_post_update', '_s_require_feat_img' );

/**
 * Update excerpt text length
 */
function _s_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', '_s_excerpt_length' );

/**
 * Testimonial author text
 */
function _s_get_tst_author_text( $title, $post_id ) {
  global $post;

  $text = '<span>';
  $text .= $title;

  if ( get_field( 'author_location', $post_id ) ) {
    $text .= ' | ';
    $text .= get_field( 'author_location', $post_id );
  }

  $text .= '</span>';
  // return the span text
  return $text;
}

/**
 * Custom page title display
 */
function _s_get_the_title() {
  if ( get_field( 'custom_page_title' ) ) {
    $title = get_field( 'custom_page_title' );
  } else {
    $title = get_the_title();
  }
  return $title;
}