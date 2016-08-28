<?php
/**
 * Template for the home page testimonial section.
 *
 * @package _s
 */
?>

<section class="home-section home-section--testimonials">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-lg-10">

        <?php /* Testimonials */
        // swap the slider plugin used below.
        $posts = get_sub_field( 'testimonials' );

        if ( $posts ) { ?>

          <!-- Slider -->
          <div class="testimonial-section home-testimonial-section">
            <ul class="testimonial-slider lightslider">

              <?php // loop through posts
              foreach ( $posts as $post ) {
                setup_postdata( $post ); ?>

                <li class="testimonial-slide">
                  <div class="testimonial-slide__text font-heading bold">
                    <?php the_content(); ?>
                  </div>

                  <div class="testimonial-slide__author">
                    <?php echo _s_get_tst_author_text( $post->post_title, $post->ID ); ?>
                  </div>
                </li>

              <?php }
              wp_reset_postdata(); ?>

            </ul><!-- .lightslider -->
          </div>

        <?php } ?>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>