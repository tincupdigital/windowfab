<?php
/**
 * Template Name: Category Page
 *
 * @package _s
 */

get_header(); ?>

  <div id="content" class="site-content">

  	<div id="primary" class="content-area">
  		<main id="main" class="site-main" role="main">

  			<?php
  			while ( have_posts() ) : the_post(); ?>

          <div class="container">
            <div class="row center-xs">
              <div class="col-xs-12 col-sm-11">

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'txt--left' ); ?>>
                  <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title sr-only">', '</h1>' ); ?>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php
                      the_content();

                      /* Products */
                      if ( have_rows( 'product_categories' ) ) { ?>

                        <div class="category-section page-category-section">

                          <?php // loop through categories
                          while ( have_rows( 'product_categories' ) ): the_row(); ?>

                            <div class="category-area category-section__area">
                              <?php
                              /* Image Tile */
                              // set fields to variables
                              $c_img = get_sub_field( 'category_photo' );
                              $c_ttl = get_sub_field( 'category_title' );

                              if ( $c_img && $c_ttl ) { ?>
                                <div class="image-tile category-area__tile" style="background-image: url('<?php echo $c_img['sizes']['large']; ?>');">
                                  <div class="tile-inner image-tile__inner">
                                    <!-- Title -->
                                    <h2 class="tile-title image-tile__title h1"><?php echo $c_ttl; ?></h2>
                                  </div>
                                </div>
                              <?php }

                              /* Testimonial */
                              $posts = get_sub_field( 'category_testimonial' );

                              // check for testimonial
                              if ( $posts ) { ?>
                                <div class="testimonial-tile category-area__tile">
                                  <div class="tile-inner testimonial-tile__inner">
                                    <?php // loop through testimonials
                                    foreach ( $posts as $post ) {
                                      setup_postdata( $post ); ?>

                                      <!-- Text -->
                                      <div class="tile-text testimonial-tile__text">
                                        <?php the_content(); ?>
                                      </div>

                                      <!-- Author -->
                                      <div class="tile-credits testimonial-tile__author">
                                        <span class="tile-author tile-credits__author"><?php the_title(); ?>

                                        <?php // check for testimonial location
                                        if ( get_field( 'author_location' ) ) { ?>
                                          <span class="tile-credits__sep">|</span>
                                          <span class="tile-locale tile-credits__locale"><?php the_field( 'author_location' ); ?></span>
                                        <?php } ?>
                                      </div>
                                    <?php }
                                    wp_reset_postdata(); ?>
                                  </div>
                                </div>
                              <?php } ?>
                            </div>

                          <?php endwhile; ?>

                        </div>

                      <?php }

                      wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                        'after'  => '</div>',
                      ) );
                    ?>
                  </div><!-- .entry-content -->
                </article><!-- #post-## -->

              </div><!-- .col-# -->
            </div><!-- .row -->
          </div><!-- .container -->

        <?php
  			endwhile; // End of the loop. ?>

  		</main><!-- #main -->
  	</div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
