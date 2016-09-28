<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php /* Image */
		if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium', array( 'class' => 'mb3' ) ); ?>
			</a>
		<?php }

		if ( is_single() ) {
			the_title( '<h1 class="entry-title mt0 wbt">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title mt0 wbt"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		} ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>

		<!-- More -->
		<a class="button button-outline--brown-aqua" href="<?php the_permalink(); ?>">Read more</a>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
			'after'  => '</div>',
		) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
