<?php
/**
 * Page Link Widget
 *
 * @package _s
 */

class Page_Link_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'widget-page-link',
      'description' => __( 'Page link widget with headline and URL.', '_s' )
    );
    parent::__construct( 'page_link_widget', __( 'WF Page Link Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget wf-page-link">
      <?php // set up widget variables
      $w_hdl = get_field( 'widget_headline', $wid );
      $w_pid = get_field( 'widget_link', $wid );
      $w_lnk = get_permalink( $w_pid );
      $w_ico = get_field( 'widget_icon', $wid );
      $w_ico = $w_ico['sizes']['medium'];

      /* Icon */
      if ( $w_ico ) { ?>
        <img class="widget-icon wf-page-link__icon block" src="<?php echo $w_ico; ?>" />
      <?php }

      /* Headline */
      if ( $w_hdl ) {
        // check for link
        if ( $w_lnk ) { ?>
          <h2 class="widget-title wf-page-link__title wbt">
            <a href="<?php echo $w_lnk; ?>"><?php echo $w_hdl; ?></a>
          </h2>
        <?php } else { ?>
          <h2 class="widget-title wf-page-link__title wbt"><?php echo $w_hdl; ?></h2>
        <?php }
      } ?>
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
function _s_register_page_link_widget() {
  register_widget( 'Page_Link_Widget' );
}
add_action( 'widgets_init', '_s_register_page_link_widget' );