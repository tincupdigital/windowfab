<?php
/**
 * Template used for the opening "site-content"
 * div on pages with the background image field.
 *
 * @package _s
 */

// make sure this is a page and
// that featured image is present
if ( is_page() && has_post_thumbnail() ) { ?>
  <div id="content" class="site-content site-content--bg" style="background-image: url('<?php echo _s_get_feat_img_url('hero'); ?>');">
<?php } else { ?>
  <div id="content" class="site-content">
<?php }