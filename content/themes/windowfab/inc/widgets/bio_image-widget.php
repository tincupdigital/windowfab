<?php
/**
 * Bio Image Widget
 *
 * @package _s
 */

class Bio_Image_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'widget-bio-image',
      'description' => __( 'Bio image widget with text.', '_s' )
    );
    parent::__construct( 'bio_image_widget', __( 'WF Bio Image Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget wf-bio-image">
      <?php
      /* Image */
      if ( get_field( 'bio_image', $wid ) ) {
        $b_img = get_field( 'bio_image', $wid ); ?>

        <img class="widget-image wf-bio-image__image" src="<?php echo $b_img['sizes']['thumbnail']; ?>" alt="" />
      <?php }

      /* Headline */
      if ( get_field( 'widget_headline', $wid ) ) { ?>
        <h2 class="widget-title wf-bio-image__title">
          <?php the_field( 'widget_headline', $wid ); ?>
        </h2>
      <?php }

      /* Text */
      if ( get_field( 'widget_text', $wid ) ) { ?>
        <div class="widget-text wf-bio-image__text">
          <?php echo wpautop( get_field( 'widget_text', $wid ) ); ?>
        </div>
      <?php }
      ?>
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
function _s_register_bio_image_widget() {
  register_widget( 'Bio_Image_Widget' );
}
add_action( 'widgets_init', '_s_register_bio_image_widget' );