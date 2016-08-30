<?php
/**
 * Template part for the mobile navigation area
 *
 * @package _s
 */
?>

<div class="mobile-nav-area visible-sm">
  <nav id="mobile-nav" class="mobile-nav" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'mobile-nav__menu', 'container_class' => 'mobile-nav__container' ) ); ?>
  </nav><!-- .mobile-nav-area -->
</div>
