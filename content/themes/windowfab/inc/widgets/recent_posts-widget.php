<?php
/**
 * Recent Posts Widget
 *
 * @package _s
 */

class Recent_Posts_Widget extends WP_Widget {
  /**
   * Constructor
   */
  public function __construct() {
    $widget_args = array(
      'classname' => 'widget-recent-posts',
      'description' => __( 'Recent posts widget with featured image.', '_s' )
    );
    parent::__construct( 'recent_posts_widget', __( 'Recent Posts Widget', '_s' ), $widget_args );
  }

  /**
   * Display
   */
  public function widget( $args, $instance ) {
    // get the widget ID
    // @link https://goo.gl/X1HGhg
    $wid = 'widget_' . $args['widget_id']; ?>

    <section class="widget rposts-widget widget-recent-posts">
      <div class="widget-inner">
        <?php
        /* Headline */
        if ( get_field( 'widget_headline', $wid ) ) { ?>
          <h2 class="widget-title widget-recent-posts__title">
            <?php the_field( 'widget_headline', $wid ); ?>
          </h2>
        <?php }

        /* Posts */
        if ( get_field( 'number_of_posts', $wid ) ) {
          $p_num = get_field( 'number_of_posts', $wid );
        } else {
          $p_num = 3;
        }

        // query args
        $args = array(
          'post_status' => 'publish',
          'post_type' => 'post',
          'posts_per_page' => $p_num,
          'orderby' => 'date',
          'order' => 'DESC'
        );

        // set up posts query
        $my_query = new WP_Query( $args );

        // check for posts
        if ( $my_query->have_posts() ): ?>

          <table class="rposts-table widget-recent-posts__table left-align">
            <?php // loop through posts
            while ( $my_query->have_posts() ) {
              $my_query->the_post(); ?>

              <tr>
                <td class="post-image rposts-table__image"><?php the_post_thumbnail( 'thumbnail' ); ?></td>
                <td class="post-title rposts-table__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
              </tr>

            <?php } ?>
          </table>

        <?php endif;
        wp_reset_postdata(); ?>
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
function _s_register_recent_posts_widget() {
  register_widget( 'Recent_Posts_Widget' );
}
add_action( 'widgets_init', '_s_register_recent_posts_widget' );