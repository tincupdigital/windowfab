<?php
/**
 * Template for displaying the page footer CTA
 *
 * @package _s
 */

// set CTA post object to variable
$cta_po = get_field( 'page_cta' );

// set button text to variable
if ( get_field( 'button_text' ) ) {
  $b_txt = get_field( 'button_text' );
} else {
  $b_txt = "Read more";
}

// set post ID
$pid = $cta_po->ID; ?>

<div class="page-footer page-footer--cta">
  <div class="cta-area pf-cta-area white">
    <!-- Title -->
    <h3 class="cta-title cta-area__title h1 mt0">
      <?php echo $cta_po->post_title; ?>
    </h3>

    <!-- Text -->
    <div class="cta-text cta-area__text bold">
      <?php echo wpautop( $cta_po->post_content ); ?>
    </div>

    <?php /* Link */
    if ( get_field( 'cta_link', $pid ) ) {
      // CTA link field returns post ID
      $cta_id = get_field( 'cta_link', $pid ); ?>

      <a class="cta-button cta-area__button bo--bw right" href="<?php the_permalink( $cta_id ); ?>"><?php echo $b_txt; ?></a>
    <?php } ?>
  </div>
</div>
