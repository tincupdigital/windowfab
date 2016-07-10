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
              while ( have_posts() ) : the_post();

                get_template_part( 'templates/content', 'page' );

                get_template_part( 'templates/pages/page', 'footer' );

              endwhile; // End of the loop.
              ?>

        		</main><!-- #main -->
        	</div><!-- #primary -->
        </div><!-- .col-# -->

      </div><!-- .row -->
    </div><!-- .container -->

  </div><!-- #content -->

<?php
get_footer();
