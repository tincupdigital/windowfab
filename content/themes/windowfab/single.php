<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

	<div id="content" class="site-content">

		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-lg-8">
					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'templates/content', 'single' );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

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