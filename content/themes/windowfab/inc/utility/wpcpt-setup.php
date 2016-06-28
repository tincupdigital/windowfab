<?php
/**
 * wpcpt-setup.php
 *
 * @package _s
 */

// Dashicons for 'menu_icon' value can be found here:
// https://developer.wordpress.org/resource/dashicons

/**
 * CPT: Testimonials
 */
$testimonial_labels = array(
  'post_type_name' => 'testimonial',
  'singular' => 'Testimonial',
  'plural' => 'Testimonials',
  'slug' => 'testimonials'
);
$testimonial_options = array(
  'public' => true,
  'has_archive' => false,
  'rewrite' => false,
  'supports' => array( 'editor', 'revisions', 'title' ),
  'menu_icon' => 'dashicons-testimonial'
);
$testimonial = new CPT( $testimonial_labels, $testimonial_options );

/**
 * CPT: CTAs
 */
$cta_labels = array(
  'post_type_name' => 'cta',
  'singular' => 'CTA',
  'plural' => 'CTAs',
  'slug' => 'cta'
);
$cta_options = array(
  'public' => true,
  'has_archive' => false,
  'rewrite' => false,
  'supports' => array( 'editor', 'title' ),
  'menu_icon' => 'dashicons-megaphone'
);
$cta = new CPT( $cta_labels, $cta_options );

/**
 * Featured image column
 */
$cpts = array();

// add column to each $cpt setup variable
if ( $cpts ) {
  foreach ( $cpts as $cpt ) {
    $cpt->columns( array(
      'cb' => '<input type="checkbox" />',
      'title' => __( 'Title' ),
      'feat_img' => __( 'Featured Image' ),
      'p_cat' => __( 'Category' ),
      'author' => __( 'Author' ),
      'date' => __( 'Date' )
    ) );
    $cpt->populate_column( 'feat_img', function( $column, $post ) {
      if ( has_post_thumbnail() ) {
        the_post_thumbnail( array( 64, 64 ) );
      }
    } );
  }
}
