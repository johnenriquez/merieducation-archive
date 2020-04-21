<?php

/**
 * Registers the announcements widget
 *
 * @link       http://merieducation.com
 * @since      1.0.0
 *
 * @package    meri-plugin
 * @subpackage meri-plugin/includes
 */


add_action( 'widgets_init', 'meri2015_load_announcement_widget' );

// Creating the widget
class meri_announcement_widget extends WP_Widget {

  function __construct() {
    parent::__construct(
      // Base ID of your widget
      'meri_announcements_widget',

      // Widget name will appear in UI
      __( 'Announcements Widget' , 'meri2015'),

      // Widget description
      array( 'description' => __( 'Widget to update the homepage announcements', 'meri2015' ), )
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    extract( $args );
    $title = apply_filters( 'widget_title', $instance['title'] );
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];

    if ( ! empty( $title ) )
      echo $args['before_title'] . $title . $args['after_title'];

    // This is where you run the code and display the output
    ////////////////////////////
    //      FILL THIS IN      //
    ////////////////////////////
    echo "Homepage Announcement Widget goes here!";
    //echo __( 'Hello, World!', 'wpb_widget_domain' );

    echo $args['after_widget'];
  }

  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    } else {
      $title = __( 'New title', 'wpb_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    // process the vars
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';


    return $instance;
  }
} // Class wpb_widget ends here

// Register and load the widget
function meri2015_load_announcement_widget() {
  register_widget( 'meri_announcement_widget' );
}