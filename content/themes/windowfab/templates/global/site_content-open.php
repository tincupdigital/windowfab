<?php
/**
 * Template used for the opening "site-content"
 * div on pages with the background image field.
 *
 * @package _s
 */

// set up background field
if ( get_field( 'page_background' ) ) {
  $p_bkg = get_field( 'page_background' );
}

if ( $p_bkg ) { ?>
  <div id="content" class="site-content site-content--bg" style="background-image: url('<?php echo $p_bkg['sizes']['hero']; ?>');">
<?php } else { ?>
  <div id="content" class="site-content">
<?php }