<?php
/**
 * Categories Widget
 *
 * @package _s
 */

class Categories_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'widget-categories',
      'description' => __( 'Custom category list widget.', '_s' )
    );
    parent::__construct( 'category_widget', __( 'WF Category Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget widget-categories wf-categories">
      <?php /* Headline */
      if ( get_field( 'widget_headline', $wid ) ) { ?>
        <h2 class="widget-title wf-categories__title wbt">
          <?php the_field( 'widget_headline', $wid ); ?>
        </h2>
      <?php } ?>

      <div class="widget-inner wf-categories__inner">
        <?php /* Categories */
        // set up array arguments
        $args = array(
          'show_count' => 0,
          'hide_empty' => 1,
          'title_li' => '',
          'depth' => 0,
        );
        wp_list_categories( $args ); ?>
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
function _s_register_category_widget() {
  register_widget( 'Categories_Widget' );
}
add_action( 'widgets_init', '_s_register_category_widget' );