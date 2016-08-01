<?php
/**
 * Template for the home page product category section.
 *
 * @package _s
 */
?>

<section class="home-section home-section--pcats">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <?php /* Product Categories */
        if ( have_rows( 'product_categories' ) ) { ?>
          <div class="pcats-section home-pcats-section mxn3-lg">

            <?php // loop through categories
            while ( have_rows( 'product_categories' ) ): the_row(); ?>

              <div class="section-category pcats-section__category center">
                <?php
                /* Image */
                if ( get_sub_field( 'category_icon' ) ) {
                  $c_ico = get_sub_field( 'category_icon' ); ?>

                  <img class="category-icon section-category__icon mb2" src="<?php echo $c_ico['sizes']['medium']; ?>" alt="<?php echo $c_ico['alt']; ?>" />
                <?php }

                /* Title */
                if ( get_sub_field( 'category_title' ) ) { ?>
                  <h3 class="category-title section-category__title h4 mb0 fnt--body bold"><?php the_sub_field( 'category_title' ); ?></h3>
                <?php }

                /* Text */
                if ( get_sub_field( 'category_text' ) ) { ?>
                  <div class="category-text section-category__text">
                    <?php echo wpautop( get_sub_field( 'category_text' ) ); ?>
                  </div>
                <?php }

                /* Button */
                if ( get_sub_field( 'category_link' ) ) {
                  // field returns page ID
                  $pid = get_sub_field( 'category_link' );

                  // check for button text
                  if ( get_sub_field( 'button_text' ) ) {
                    $b_txt = get_sub_field( 'button_text' );
                  } else {
                    $b_txt = 'Click here';
                  } ?>

                  <a class="category-button section-category__button button button-color" href="<?php the_permalink( $pid ); ?>"><?php echo $b_txt; ?></a>
                <?php } ?>
              </div>

            <?php endwhile; ?>

          </div>
        <?php } ?>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>