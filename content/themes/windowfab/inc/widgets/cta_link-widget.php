<?php
/**
 * CTA Link Widget
 *
 * @package _s
 */

class CTA_Link_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'widget-cta-link',
      'description' => __( 'CTA widget with title, text and link.', '_s' )
    );
    parent::__construct( 'cta_link_widget', __( 'CTA Link Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget widget-cta-link">
      <div class="widget-inner">
        <?php
        /* Headline */
        if ( get_field( 'widget_headline', $wid ) ) { ?>
          <h2 class="widget-title widget-cta-link__title">
            <?php the_field( 'widget_headline', $wid ); ?>
          </h2>
        <?php }
        ?>
      </div>
    </section>
  <?php }

  /**
   * Form
   */
  public function form( $instance ) {}
}

/**
 * Register
 */
function _s_register_cta_link_widget() {
  register_widget( 'CTA_Link_Widget' );
}
add_action( 'widgets_init', '_s_register_cta_link_widget' );