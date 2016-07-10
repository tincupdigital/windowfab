<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

  <!-- #content -->
  <?php get_template_part( 'templates/global/site_content', 'open' ); ?>

		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-lg-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'templates/content', 'page' );

								// move this outside into 12 column area
								get_template_part( 'templates/pages/page', 'footer' );

							endwhile; // End of the loop.
							?>

						</main><!-- #main -->
					</div><!-- #primary -->
				</div><!-- .col-# -->

				<div class="col-xs-12 col-lg-4">
					<?php get_sidebar(); ?>
				</div><!-- .col-# -->

			</div><!-- .row -->
		</div><!-- .container -->

	</div><!-- #content -->

<?php
get_footer();
