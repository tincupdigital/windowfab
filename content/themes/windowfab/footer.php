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

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
