<?php
/**
 * Template Name: Full-Width Page
 *
 * @package _s
 */

get_header(); ?>

  <!-- #content -->
  <?php get_template_part( 'templates/global/site_content', 'open' ); ?>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">

        	<div id="primary" class="content-area">
        		<main id="main" class="site-main" role="main">

              <?php
              while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  <header class="entry-header">
                    <h1 class="entry-title center mb3"><?php echo _s_get_the_title(); ?></h1>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php
                      /* Image */
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large', array( 'class' => 'aligncenter mb3' ) );
                      }

                      the_content();

                      wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                        'after'  => '</div>',
                      ) );
                    ?>
                  </div><!-- .entry-content -->
                </article><!-- #post-## -->

                <?php
                get_template_part( 'templates/pages/page', 'footer' );

              endwhile; // End of the loop.
              ?>

        		</main><!-- #main -->
        	</div><!-- #primary -->

        </div>
      </div><!-- .row -->
    </div><!-- .container -->

  </div><!-- #content -->

<?php
get_footer();
