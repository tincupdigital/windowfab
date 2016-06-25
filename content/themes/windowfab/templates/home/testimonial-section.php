<?php
/**
 * Template for the home page testimonial section.
 *
 * @package _s
 */
?>

<section class="home-section testimonial-section home-section--testimonials">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-10 col-md-9">

        <?php /* Testimonials */
        // swap the slider plugin used below.
        $posts = get_sub_field( 'testimonials' );

        if ( $posts ) { ?>

          <!-- Slider -->
          <div class="testimonial-slider section-slider testimonial-section__slider glide">
            <!-- Wrapper -->
            <div class="glide__wrapper">
              <ul class="glide__track p0 m0">
                <?php // loop through posts
                foreach ( $posts as $post ) {
                  setup_postdata( $post ); ?>

                  <li class="testimonial-slider__text glide__slide f--heading fw--700">
                    <?php the_content(); ?>
                  </li>

                <?php }
                wp_reset_postdata(); ?>
              </ul>
            </div>

            <!-- Bullets -->
            <div class="testimonial-slider__bullets glide__bullets mt1"></div>
          </div>

        <?php } ?>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>