<?php
/**
 * Template for the home page image CTA section.
 *
 * @package _s
 */
?>

<section class="home-section home-section--imgcta">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <?php /* Image CTAs */
        if ( have_rows( 'cta_items' ) ) { ?>
          <div class="imgcta-section home-imgcta-section">

            <?php // loop through categories
            while ( have_rows( 'cta_items' ) ): the_row(); ?>

              <div class="section-cta cta-section__cta">
                <?php // set up the CTA background image
                $img = get_sub_field( 'cta_image' ); ?>

                <section class="section-cta__inner cta-section--img bg--cover" style="background-image: url('<?php echo $img['sizes']['medium']; ?>');">
                </section>

                <section class="section-cta__inner cta-section--txt center">
                  <?php
                  /* Headline */
                  if ( get_sub_field( 'cta_headline' ) ) { ?>
                    <h3 class="cta-title section-cta__title wbt mt0"><?php the_sub_field( 'cta_headline' ); ?></h3>
                  <?php }

                  /* Text */
                  if ( get_sub_field( 'cta_text' ) ) { ?>
                    <div class="cta-text section-cta__text white">
                      <?php echo wpautop( get_sub_field( 'cta_text' ) ); ?>
                    </div>
                  <?php }

                  /* Button */
                  if ( get_sub_field( 'cta_link' ) ) {
                    // field returns page ID
                    $pid = get_sub_field( 'cta_link' );

                    // check for button text
                    if ( get_sub_field( 'button_text' ) ) {
                      $b_txt = get_sub_field( 'button_text' );
                    } else {
                      $b_txt = 'Click here';
                    } ?>

                    <a class="cta-button section-cta__button button bo--bw" href="<?php the_permalink( $pid ); ?>"><?php echo $b_txt; ?></a>
                  <?php } ?>
                </section>
              </div>

            <?php endwhile; ?>

          </div>
        <?php } ?>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>