<?php
/**
 * Business Info Widget
 *
 * @package _s
 */

class Business_Info_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'widget-business-info',
      'description' => __( 'Business info widget (hours and contact info).', '_s' )
    );
    parent::__construct( 'business_info_widget', __( 'WF Business Info Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget wf-business-info">
      <?php /* Headline */
      if ( get_field( 'widget_headline', $wid ) ) { ?>
        <h2 class="widget-title wf-business-info__title wbt">
          <?php the_field( 'widget_headline', $wid ); ?>
        </h2>
      <?php } ?>

      <div class="widget-inner wf-business-info__inner">
        <?php
        /* Text */
        if ( get_field( 'widget_text', $wid ) ) { ?>
          <div class="widget-text wf-business-info__text">
            <?php echo wpautop( get_field( 'widget_text', $wid ) ); ?>
          </div>
        <?php }

        /* Link */
        if ( get_field( 'cta_link', $wid ) ) {
          // field returns page ID
          $pid = get_field( 'cta_link', $wid ); ?>

          <a class="wf-business-info__button button bo--bw" href="<?php the_permalink( $pid ); ?>">Button</a>
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
function _s_register_business_info_widget() {
  register_widget( 'Business_Info_Widget' );
}
add_action( 'widgets_init', '_s_register_business_info_widget' );