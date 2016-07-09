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

                <li class="testimonial-slider__text glide__slide fnt--heading bold">
                  <?php the_content(); ?>
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