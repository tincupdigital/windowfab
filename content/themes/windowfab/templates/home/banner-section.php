<?php
/**
 * Template for the home page banner section.
 *
 * @package _s
 */
?>

<section class="home-section home-section--banner">

  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12">

        <div class="banner-section home-banner-section">
          <?php
          /* Link */
          $b_lnk = get_sub_field( 'banner_link' );

          /* Icon */
          if ( get_sub_field( 'banner_icon' ) ) {
            // set icon to variable
            $b_ico = get_sub_field( 'banner_icon' );

            // check for link
            if ( $b_lnk ) { ?>
              <a href="<?php echo get_permalink( $b_lnk ); ?>">
                <img class="section-icon banner-section__icon block mx-auto mb2" src="<?php echo $b_ico['sizes']['thumbnail']; ?>" />
              </a>
            <?php } else { ?>
              <img class="section-icon banner-section__icon block mx-auto mb2" src="<?php echo $b_ico['sizes']['thumbnail']; ?>" />
            <?php }
          }

          /* Headline */
          if ( get_sub_field( 'banner_headline' ) ) {
            // check for link
            if ( $b_lnk ) { ?>
              <a href="<?php echo get_permalink( $b_lnk ); ?>">
                <h2 class="section-headline banner-section__headline h1 bold"><?php the_sub_field( 'banner_headline' ); ?></h2>
              </a>
            <?php } else { ?>
              <h2 class="section-headline banner-section__headline h1 bold"><?php the_sub_field( 'banner_headline' ); ?></h2>
            <?php }
          } ?>
        </div>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>
