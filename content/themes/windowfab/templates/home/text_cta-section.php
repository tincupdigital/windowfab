<?php
/**
 * Template for the home page text CTA section.
 *
 * @package _s
 */
?>

<section class="home-section txtcta-section home-section--txtctas">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-10 col-md-9">

        <?php
        /* Headline */
        if ( get_sub_field( 'section_headline' ) ) { ?>
          <h2 class="section-title txtcta-section__title h1"><?php the_sub_field( 'section_headline' ); ?></h2>
        <?php }

        /* Text */
        if ( get_sub_field( 'section_text' ) ) { ?>
          <div class="section-text txtcta-section__text">
            <?php echo wpautop( get_sub_field( 'section_text' ) ); ?>
          </div>
        <?php }

        /* Button */
        if ( get_sub_field( 'cta_link' ) ) {
          // field returns page ID
          $pid = get_sub_field( 'cta_link' ); ?>

          <a class="cta-button txtcta-section__button button button-outline" href="<?php the_permalink( $pid ); ?>">Click here</a>
        <?php } ?>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>