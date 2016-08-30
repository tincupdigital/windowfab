<?php
/**
 * Template for displaying the page footer area
 *
 * @package _s
 */

// bail if field is not set
if ( !get_field( 'display_cta_or_testimonials' ) ) {
  return;
}

// cta/testimonial setup is stored in a
// select field, so let's get the values
$cta_tst_setup = get_field( 'display_cta_or_testimonials' );

// check for each CTA/testimonial setup
if ( $cta_tst_setup == 'cta' ) {

	get_template_part( 'templates/pages/page', 'footer_cta' );

} elseif ( $cta_tst_setup == 'testimonial' ) {

	get_template_part( 'templates/pages/page', 'footer_testimonial' );

} elseif ( $cta_tst_setup == 'testimonial_slider' ) {

	get_template_part( 'templates/pages/page', 'footer_slider' );

}