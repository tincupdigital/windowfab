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

                  <img class="category-icon section-category__icon mb1" src="<?php echo $c_ico['sizes']['medium']; ?>" alt="<?php echo $c_ico['alt']; ?>" />
                <?php }

                /* Title */
                if ( get_sub_field( 'category_title' ) ) { ?>
                  <h3 class="category-title section-category__title h4 mb0 font-body bold"><?php the_sub_field( 'category_title' ); ?></h3>
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
                  $pid = get_sub_field( 'category_link' ); ?>

                  <a class="category-button section-category__button" href="<?php the_permalink( $pid ); ?>"><?php _s_sub_button_text( 'See more' ); ?></a>
                <?php } ?>
              </div>

            <?php endwhile; ?>

          </div>
        <?php } ?>

      </div><!-- .col-# -->
    </div><!-- .row -->
  </div><!-- .container -->

</section>