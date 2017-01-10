<?php
/**
 * Template Name: Home Page
 *
 * @package _s
 */

get_header(); ?>

  <!-- #content -->
  <?php get_template_part( 'templates/home/site_content', 'open' ); ?>

  	<div id="primary" class="content-area">
  		<main id="main" class="site-main" role="main">

  			<?php
  			while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
              <?php
                /* Sections */
                if ( have_rows( 'home_sections' ) ):
                  // loop through sections
                  while ( have_rows( 'home_sections' ) ): the_row();

                    /* Headline Section */
                    if ( get_row_layout() == 'headline_section' ) {
                      get_template_part( 'templates/home/headline', 'section' );
                    }

                    /* Product Category Section */
                    if ( get_row_layout() == 'product_category_section' ) {
                      get_template_part( 'templates/home/product_category', 'section' );
                    }

                    /* Testimonial Section */
                    if ( get_row_layout() == 'testimonial_section' ) {
                      get_template_part( 'templates/home/testimonial', 'section' );
                    }

                    /* Image CTA Section */
                    if ( get_row_layout() == 'image_cta_section' ) {
                      get_template_part( 'templates/home/image_cta', 'section' );
                    }

                    /* Text CTA Section */
                    if ( get_row_layout() == 'text_cta_section' ) {
                      get_template_part( 'templates/home/text_cta', 'section' );
                    }

                    /* Banner Section */
                    if ( get_row_layout() == 'banner_section' ) {
                      get_template_part( 'templates/home/banner', 'section' );
                    }

                  // end section loop
                  endwhile;
                endif;

                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div><!-- .entry-content -->
          </article><!-- #post-## -->

  			<?php endwhile; // End of the loop.
  			?>

  		</main><!-- #main -->
  	</div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
