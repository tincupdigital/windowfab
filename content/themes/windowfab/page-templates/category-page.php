<?php
/**
 * Template Name: Category Page
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

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="container">
              <div class="row center-xs">

                <div class="col-xs-12 col-lg-10">
                  <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                  </header><!-- .entry-header -->

                  <div class="entry-content">
                    <?php the_content(); ?>
                  </div><!-- .entry-content -->
                </div><!-- .col-# -->

                <div class="col-xs-12 left-align">
                  <?php /* Gallery */
                  $images = get_field( 'category_gallery' );

                  // check for images
                  if ( $images ) { ?>

                    <div class="product-section page-products-section mt3">
                      <div class="section-inner product-section__inner" data-columns>
                        <?php // loop through images
                        foreach ( $images as $image ) { ?>

                          <div class="product-item product-section__item column">
                            <a href="<?php echo $image['url']; ?>" data-lightbox="products" data-title="<?php echo $image['title']; ?>">
                              <img class="product-item__img block" src="<?php echo $image['sizes']['product-thumb']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                          </div>

                        <?php } ?>
                      </div>
                    </div>

                  <?php } ?>

                  <?php
                    wp_link_pages( array(
                      'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                      'after'  => '</div>',
                    ) );
                  ?>
                </div><!-- .col-# -->

              </div><!-- .row -->
            </div><!-- .container -->

          </article><!-- #post-## -->

        <?php
  			endwhile; // End of the loop. ?>

  		</main><!-- #main -->
  	</div><!-- #primary -->

  </div><!-- #content -->

<?php
get_footer();
