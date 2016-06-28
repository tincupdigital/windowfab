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
            <div class="row">

              <?php // loop through categories
              while ( have_rows( 'cta_items' ) ): the_row(); ?>
                <div class="col-xs-12 col-md-6">
                  <div class="section-cta cta-section__cta">
                    <?php
                    /* Image */
                    if ( get_sub_field( 'cta_image' ) ) {
                      $c_ico = get_sub_field( 'cta_image' ); ?>

                      <img class="cta-image section-cta__image" src="<?php echo $c_ico['sizes']['medium']; ?>" alt="<?php echo $c_ico['alt']; ?>" />
                    <?php }

                    /* Headline */
                    if ( get_sub_field( 'cta_headline' ) ) { ?>
                      <h3 class="cta-title section-cta__title h4 f--body fw--700"><?php the_sub_field( 'cta_headline' ); ?></h3>
                    <?php }

                    /* Text */
                    if ( get_sub_field( 'cta_text' ) ) { ?>
                      <div class="cta-text section-cta__text">
                        <?php echo wpautop( get_sub_field( 'cta_text' ) ); ?>
                      </div>
                    <?php }

                    /* Button */
                    if ( get_sub_field( 'cta_link' ) ) {
                      // field returns page ID
                      $pid = get_sub_field( 'cta_link' ); ?>

                      <a class="cta-button section-cta__button button button-outline" href="<?php the_permalink( $pid ); ?>">Click here</a>
                    <?php } ?>
                  </div>
                </div>
              <?php endwhile; ?>

            </div><!-- .row -->
          </div>
        <?php } ?>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>