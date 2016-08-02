<?php
/**
 * Template Name: Contact Page
 *
 * @package _s
 */

get_header(); ?>

  <!-- #content -->
  <?php get_template_part( 'templates/global/site_content', 'open' ); ?>

    <div class="container">
      <div class="row">
        <div class="col-xs-12">

        	<div id="primary" class="content-area">
        		<main id="main" class="site-main" role="main">

              <?php
              while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                  <div class="row center-xs">
                    <div class="col-xs-12 col-lg-10">

                      <header class="entry-header">
                        <h1 class="entry-title center"><?php echo _s_get_the_title(); ?></h1>
                      </header><!-- .entry-header -->

                      <div class="entry-content">
                        <?php
                          the_content();

                          wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
                            'after'  => '</div>',
                          ) );
                        ?>
                      </div><!-- .entry-content -->

                    </div>
                  </div><!-- .row -->

                  <?php /* Form */
                  if ( get_field( 'contact_form' ) ) { ?>

                    <div class="row">
                      <div class="col-xs-12 col-lg-10 col-lg-offset-1">

                        <?php // set form to variable
                        $form = get_field( 'contact_form' ); ?>

                        <div class="ninja-form-container contact-page__form">
                          <?php // display the form using ID
                          ninja_forms_display_form( $form[ 'id' ] ); ?>
                        </div>

                      </div>
                    </div><!-- .row -->

                  <?php } ?>

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
