<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div id="content" class="site-content">

		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<div id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

						<?php
						if ( have_posts() ) :

							if ( is_home() && !is_front_page() ) : ?>
								<header>
									<h1 class="page-title txt--center col--text h2 mt0 mb3"><?php bloginfo( 'name' ); ?> Blog</h1>
								</header>

							<?php endif; ?>

							<div class="row center-lg">

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post(); ?>

									<div class="col-xs-12 col-lg-4">

										<?php
										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'templates/content', get_post_format() ); ?>

									</div><!-- .col-# -->

								<?php endwhile; ?>

							</div><!-- .row -->

							<?php
							the_posts_navigation();

						else :

							get_template_part( 'templates/content', 'none' );

						endif; ?>

						</main><!-- #main -->
					</div><!-- #primary -->

				</div><!-- .col-# -->
			</div><!-- .row -->
		</div><!-- .container -->

	</div><!-- #content -->

<?php
get_footer();
