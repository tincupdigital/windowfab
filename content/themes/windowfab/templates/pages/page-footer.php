<?php
/**
 * Template for displaying the page footer area
 *
 * @package _s
 */

// check for footer content field
if ( !get_field( 'cta_or_testimonial' ) ) {
	return;
}

// check the content to display (CTA vs. testimonial)
$pf_content = get_field( 'cta_or_testimonial' );

if ( $pf_content == 'cta' ) {

	// set CTA post object to variable
	$cta_po = get_field( 'page_cta' );

	// set post ID
	$pid = $cta_po->ID; ?>

	<div class="page-footer page-footer--cta mt4">
		<div class="cta-area pf-cta-area white">
			<!-- Title -->
			<h3 class="cta-title cta-area__title h1 mt0">
				<?php echo $cta_po->post_title; ?>
			</h3>

			<!-- Text -->
			<div class="cta-text cta-area__text bold">
				<?php echo wpautop( $cta_po->post_content ); ?>
			</div>

			<?php /* Link */
			if ( get_field( 'cta_link', $pid ) ) {
				// CTA link field returns post ID
				$cta_id = get_field( 'cta_link', $pid ); ?>

				<a class="cta-button cta-area__button bo--bw right" href="<?php the_permalink( $cta_id ); ?>">Button</a>
			<?php } ?>
		</div>
	</div>

<?php } else {

	// set testimonial post object to variable
	$tst_po = get_field( 'page_testimonial' );

	// set post ID
	$pid = $tst_po->ID; ?>

	<div class="page-footer page-footer--testimonial mt4">
		<div class="tst-area pf-tst-area">
			<!-- Text -->
			<div class="tst-text tst-area__text">
				<?php echo wpautop( $tst_po->post_content ); ?>
			</div>

			<!-- Author -->
			<div class="tst-author tst-area__author">
				<?php echo _s_get_tst_author_text( $tst_po->post_title, $pid ); ?>
			</div>
		</div>
	</div>

<?php }