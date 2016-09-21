<?php
/**
 * Template Name: Products Page
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

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  <div class="row center-xs">
                    <div class="col-xs-12 col-lg-10">

                      <header class="entry-header">
                        <h1 class="entry-title center"><?php echo _s_get_the_title(); ?></h1>
                      </header><!-- .entry-header -->

                      <div class="entry-content">
                        <?php
                          the_content();

                          wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                            'after'  => '</div>',
                          ) );
                        ?>
                      </div><!-- .entry-content -->

                    </div>
                  </div><!-- .row -->

                  <?php /* Products */
                  if ( have_rows( 'product_categories' ) ) { ?>

                    <div class="row">
                      <div class="col-xs-12">

                        <div class="page-category-section category-area mt3">
                          <?php // loop through categories
                          while ( have_rows( 'product_categories' ) ): the_row(); ?>

                            <div class="category-section category-area__section">
                              <?php
                              /* Image Tile */
                              // set fields to variables
                              $c_img = get_sub_field( 'category_photo' );
                              $c_ttl = get_sub_field( 'category_title' );
                              $c_pid = get_sub_field( 'category_link' ); // field returns $post_id

                              if ( $c_img && $c_ttl ) { ?>
                                <section class="category-tile category-tile--img category-area__tile center" style="background-image: url('<?php echo $c_img['sizes']['large']; ?>');">
                                  <?php /* Title */
                                  // check for URL and display if it exists
                                  if ( $c_pid ) { ?>
                                    <h2 class="tile-title category-tile__title h1">
                                      <a href="<?php the_permalink( $c_pid ); ?>">
                                        <?php echo $c_ttl; ?>
                                      </a>
                                    </h2>
                                  <?php } else { ?>
                                    <h2 class="tile-title category-tile__title h1"><?php echo $c_ttl; ?></h2>
                                  <?php } ?>
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
                                    <div class="tile-credits category-tile__author button-text">
                                      <?php echo _s_get_tst_author_text( get_the_title(), $post->ID ); ?>
                                    </div>
                                  <?php }
                                  wp_reset_postdata(); ?>
                                </section>
                              <?php } ?>
                            </div>

                          <?php endwhile; ?>
                        </div>

                      </div>
                    </div><!-- .row -->

                  <?php } ?>

                </article><!-- #post-## -->

                <?php /* Page footer */
                get_template_part( 'templates/pages/page', 'footer' ); ?>

              </div>
            </div><!-- .row -->
          </div><!-- .container -->

        <?php
  			endwhile; // End of the loop. ?>

  		</main><!-- #main -->
  	</div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
