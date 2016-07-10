<?php
/**
 * Template Name: Category Page
 *
 * @package _s
 */

get_header(); ?>

  <!-- #content -->
  <?php get_template_part( 'templates/global/site_content', 'open' ); ?>

  	<div id="primary" class="content-area">
  		<main id="main" class="site-main" role="main">

  			<?php
  			while ( have_posts() ) : the_post(); ?>

          <div class="container">
            <div class="row">
              <div class="col-xs-12">

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'left-align' ); ?>>
                  <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title srt">', '</h1>' ); ?>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php
                      the_content();

                      /* Products */
                      if ( have_rows( 'product_categories' ) ) { ?>

                        <div class="page-category-section category-area">

                          <?php // loop through categories
                          while ( have_rows( 'product_categories' ) ): the_row(); ?>

                            <div class="category-section category-area__section">
                              <?php
                              /* Image Tile */
                              // set fields to variables
                              $c_img = get_sub_field( 'category_photo' );
                              $c_ttl = get_sub_field( 'category_title' );

                              if ( $c_img && $c_ttl ) { ?>
                                <section class="category-tile category-tile--img category-area__tile center" style="background-image: url('<?php echo $c_img['sizes']['large']; ?>');">
                                  <!-- Title -->
                                  <h2 class="tile-title category-tile__title h1"><?php echo $c_ttl; ?></h2>
                                </section>
                              <?php }

                              /* Testimonial */
                              $posts = get_sub_field( 'category_testimonial' );

                              // check for testimonial
                              if ( $posts ) { ?>
                                <section class="category-tile category-tile--txt category-area__tile center">
                                  <?php // loop through testimonials
                                  foreach ( $posts as $post ) {
                                    setup_postdata( $post ); ?>

                                    <!-- Text -->
                                    <div class="tile-text category-tile__text">
                                      <?php the_content(); ?>
                                    </div>

                                    <!-- Author -->
                                    <div class="tile-credits category-tile__author">
                                      <?php echo _s_get_tst_author_text( get_the_title(), $post->ID ); ?>
                                    </div>
                                  <?php }
                                  wp_reset_postdata(); ?>
                                </section>
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
