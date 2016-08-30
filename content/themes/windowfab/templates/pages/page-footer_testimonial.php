<?php
/**
 * Template for displaying the page footer testimonial
 *
 * @package _s
 */

// set testimonial post object to variable
$tst_po = get_field( 'page_testimonial' );

// set post ID
$pid = $tst_po->ID; ?>

<div class="page-footer page-footer--testimonial">
  <div class="tst-area pf-tst-area center">
    <!-- Text -->
    <div class="tst-text tst-area__text">
      <?php echo wpautop( $tst_po->post_content ); ?>
    </div>

    <!-- Author -->
    <div class="tst-author tst-area__author">
      <?php echo _s_get_tst_author_text( $tst_po->post_title, $pid ); ?>
    </div>
  </div>
</div>
