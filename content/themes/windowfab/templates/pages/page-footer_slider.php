<?php
/**
 * Template for displaying the page footer testimonial slider
 *
 * @package _s
 */

// set relationship field to variable
$tst_posts = get_field( 'page_testimonials' );

// check for testimonials
if ( $tst_posts ) { ?>
  <div class="page-footer page-footer--testimonial mt4">
    <div class="tst-area pf-tst-area center">
      <ul class="lightslider pf-testimonials">

        <?php // loop through posts
        foreach ( $tst_posts as $post ) {
          setup_postdata( $post ); ?>

          <li>
            <!-- Text -->
            <div class="tst-text tst-area__text">
              <?php the_content(); ?>
            </div>

            <!-- Author -->
            <div class="tst-author tst-area__author">
              <?php echo _s_get_tst_author_text( get_the_title(), $pid ); ?>
            </div>
          </li>

        <?php } ?>

      </ul>
    </div>
  </div>
<?php }
