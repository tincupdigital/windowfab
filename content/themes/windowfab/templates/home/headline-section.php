<?php
/**
 * Template for the home page headline section.
 *
 * @package _s
 */
?>

<section class="home-section home-section--headline">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-lg-10">

        <div class="headline-section home-headline-section">
          <?php
          /* Headline */
          if ( get_sub_field( 'section_headline' ) ) { ?>
            <h2 class="section-title headline-section__title h1"><?php the_sub_field( 'section_headline' ); ?></h2>
          <?php }

          /* Text */
          if ( get_sub_field( 'section_text' ) ) { ?>
            <div class="section-text headline-section__text">
              <?php echo wpautop( get_sub_field( 'section_text' ) ); ?>
            </div>
          <?php } ?>
        </div>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>