<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <!-- Top -->
    <div class="footer-top site-footer__top mb4">
      <div class="container">

        <?php /* Divider */
        // only display if page has no footer and isn't home
        if ( !is_front_page() && !get_field( 'display_cta_or_testimonials' ) ) { ?>
          <div class="row">
            <div class="col-xs-12">
              <div class="footer-divider"></div>
            </div>
          </div>
        <?php } ?>

        <div class="row center-xs">
          <div class="col-xs-12 col-sm-6 site-footer__column">
            <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
          </div>

          <div class="col-xs-12 col-sm-6 site-footer__column">
            <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom -->
    <div class="footer-bottom site-footer__bottom">
      <div class="container">
        <div class="row center-xs">

          <div class="col-xs-12">
            <!-- Nav -->
            <nav id="footer-navigation" class="footer-navigation site-footer__nav py1" role="navigation">
              <?php wp_nav_menu( array( 'theme_location' => 'footer-nav', 'menu_id' => 'footer-nav__menu', 'container_class' => 'footer-nav__container', 'items_wrap' => _s_footer_nav_wrap() ) ); ?>
            </nav><!-- #site-navigation -->

          </div><!-- .col-# -->

        </div><!-- .row -->
      </div><!-- .container -->
    </div>

  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
