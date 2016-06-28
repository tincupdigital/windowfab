<?php
/**
 * Template Name: Full-Width Page
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
            <div class="row">
              <div class="col-xs-12">

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'txt--left' ); ?>>
                  <header class="entry-header">
                    <h1 class="entry-title txt--center">
                      <?php echo _s_page_title(); ?>
                    </h1>
                  </header><!-- .entry-header -->

                  <div class="entry-content mt3">
                    <?php
                      /* Image */
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large' );
                      }

                      the_content();

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
