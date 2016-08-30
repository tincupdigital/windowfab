<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Web fonts -->
<link href='https://fonts.googleapis.com/css?family=Satisfy|Oxygen:400,300,700' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php /* Mobile Nav */
get_template_part( 'templates/global/mobile', 'nav' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- Top -->
		<div class="site-header__top hidden-xs">
		  <div class="container">
		    <div class="row">
		      <div class="col-xs-12">

						<nav id="top-navigation" class="top-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_id' => 'top-nav__menu', 'container_class' => 'top-nav__container' ) ); ?>
						</nav><!-- #site-navigation -->

		      </div><!-- .col-# -->
		    </div><!-- .row -->
		  </div><!-- .container -->
		</div>

		<!-- Bottom -->
		<div class="site-header__bottom">
		  <div class="container">
		    <div class="row">
		      <div class="col-xs-12">

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="row middle-xs">
								<div class="col-xs-6 col-sm-12">
									<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'menu_class' => 'main-nav__menu', 'container_class' => 'main-nav__container', 'items_wrap' => _s_main_nav_wrap() ) ); ?>
								</div>

								<div class="col-xs-6 visible-xs">
									<button class="menu-toggle right button bo--ba" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', '_s' ); ?></button>
								</div>
							</div>
						</nav><!-- #site-navigation -->

		      </div><!-- .col-# -->
		    </div><!-- .row -->
		  </div><!-- .container -->
		</div>
	</header><!-- #masthead -->
