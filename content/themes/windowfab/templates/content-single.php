<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta mb2">
			<?php _s_posted_on(); ?>
		</div><!-- .entry-meta -->

		<h1 class="entry-title mt0 mb3">
			<?php echo _s_page_title(); ?>
		</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* Image */
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'large' );
			}

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

