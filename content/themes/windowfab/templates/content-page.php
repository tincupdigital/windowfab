<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php echo _s_get_the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* Image */
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'large', array( 'class' => 'aligncenter mb3' ) );
			}

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
