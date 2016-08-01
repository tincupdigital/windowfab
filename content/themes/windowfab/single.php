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

							get_template_part( 'templates/content', 'single' ); ?>

							<div class="single-content-bottom mt2">
								<div class="single-content-social">
									<?php get_template_part( 'templates/global/social', 'nav' ); ?>
								</div>

								<?php the_post_navigation(); ?>
							</div>

						<?php endwhile; // End of the loop.
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