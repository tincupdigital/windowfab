<?php
/**
 * Template Name: Sitemap Page
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
                  <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php
                      the_content();

                      /* Sitemap */
                      // set up args array
                      $args = array(
                        'echo' => true,
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'title_li' => ''
                      ); ?>

                      <div class="sitemap-area mt2">
                        <?php wp_list_pages( $args ); ?>
                      </div>

                      <?php
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
