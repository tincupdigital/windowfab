<?php
/**
 * Template used for the opening "site-content"
 * div on pages with the background image field.
 *
 * @package _s
 */

// make sure this is a page and
// that featured image is present
if ( get_field( 'background_image' ) ) {
  $b_img = get_field( 'background_image' ); ?>

  <div id="content" class="site-content site-content--bg" style="background-image: url('<?php echo $b_img['sizes']['hero']; ?>');">
<?php } else { ?>
  <div id="content" class="site-content">
<?php }