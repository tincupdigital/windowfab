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

    <section class="widget wf-cta-link">
      <?php /* Headline */
      if ( get_field( 'widget_headline', $wid ) ) { ?>
        <h2 class="widget-title wf-cta-link__title wbt">
          <?php the_field( 'widget_headline', $wid ); ?>
        </h2>
      <?php } ?>

      <div class="widget-inner wf-cta-link__inner">
        <?php
        /* Text */
        if ( get_field( 'widget_text', $wid ) ) { ?>
          <div class="widget-text wf-cta-link__text">
            <?php echo wpautop( get_field( 'widget_text', $wid ) ); ?>
          </div>
        <?php }

        /* Link */
        if ( get_field( 'cta_link', $wid ) ) {
          // field returns page ID
          $pid = get_field( 'cta_link', $wid ); ?>

          <a class="wf-cta-link__button button bo--bw" href="<?php the_permalink( $pid ); ?>">Button</a>
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