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
            <div class="row center-xs">
              <div class="col-xs-12 col-sm-10 col-md-9">

  				      <?php get_template_part( 'templates/content', 'page' ); ?>

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
