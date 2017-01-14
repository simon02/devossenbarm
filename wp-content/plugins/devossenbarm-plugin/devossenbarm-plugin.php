<?php
/*
Plugin Name: Site Plugin for devossenbarm.be
*/
/* Start Adding Functions Below this Line */

// Register and load the widget
function wpb_load_widget() {
  register_widget( 'DeVossenbarm_Widget_Room' );
  register_widget( 'DeVossenbarm_Widget_General_Facilities' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
/* Stop Adding Functions Below this Line */

// Creating the widget 
class DeVossenbarm_Widget_Room extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'dvb_room_widget', 

    // Widget name will appear in UI
    __('DeVossenbarm Room Widget', 'dvb_room_widget_domain'), 

    // Widget description
    array( 'description' => __( 'Eenvoudige widget die een kleine preview van een kamer voorstelt', 'dvb_room_widget_domain' ), ) 
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $room_subtitle = $instance['room_subtitle'];
    $room_description = $instance['room_description'];
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    ?>

      <div class="item">
        <div class="imgcontainer"><img alt="" src="http://dummyimage.com/1200x400" width="1200" height="400" /></div>
          <div class="details">
              <a href="room.html">
                  <h3 class="title"><?php echo $title ?><br />
                  <span><?php echo $room_subtitle ?></span></h3>
                  <p><?php echo nl2br($room_description) ?></p>
                  <div class="btn"><span data-hover="View Room">View Room</span></div>
              </a>
          </div>
      </div>

    <?php
    echo $args['after_widget'];
  }
      
  // Widget Backend 
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'New title', 'dvb_room_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'room_subtitle' ); ?>"><?php _e('Ondertitel:', 'Stay from $XXX per night'); ?></label>
      <input id="<?php echo $this->get_field_id( 'room_subtitle' ); ?>" name="<?php echo $this->get_field_name( 'room_subtitle' ); ?>" value="<?php echo $instance['room_subtitle']; ?>" placeholder="Stay from $XXX per night" style="width:100%;" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'room_description' ); ?>"><?php _e('Your room_description:', 'example'); ?></label>
      <textarea rows="6" id="<?php echo $this->get_field_id( 'room_description' ); ?>" name="<?php echo $this->get_field_name( 'room_description' ); ?>" style="width:100%;"><?php echo $instance['room_description']; ?></textarea>
  </p>
    <?php 
  }
    
  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['room_subtitle'] = strip_tags( $new_instance['room_subtitle'] );
    $instance['room_description'] = strip_tags( $new_instance['room_description'] );
    return $instance;
  }
} // Class dvb_room_widget ends here

// Creating the widget 
class DeVossenbarm_Widget_General_Facilities extends WP_Widget {

  function __construct() {
    parent::__construct(
    // Base ID of your widget
    'dvb_general_facilities_widget', 

    // Widget name will appear in UI
    __('DeVossenbarm General Facilities Widget', 'dvb_general_facilities_widget_domain'), 

    // Widget description
    array( 'description' => __( 'Eenvoudige widget die de algemene faciliteiten opsomt', 'dvb_general_facilities_widget_domain' ), ) 
    );
  }

  // Creating widget front-end
  // This is where the action happens
  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $room_subtitle = $instance['room_subtitle'];
    $room_description = $instance['room_description'];
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title']; ?>

      <div class="item">
        <div class="imgcontainer"><img alt="" src="http://dummyimage.com/1200x400" width="1200" height="400" /></div>
          <div class="details">
              <a href="room.html">
                  <h3 class="title"><?php echo $title ?><br />
                  <span><?php echo $room_subtitle ?></span></h3>
                  <p><?php echo nl2br($room_description) ?></p>
                  <div class="btn"><span data-hover="View Room">View Room</span></div>
              </a>
          </div>
      </div>

    <?php
    echo $args['after_widget'];
  }
      
  // Widget Backend 
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'New title', 'dvb_general_facilities_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'room_subtitle' ); ?>"><?php _e('Ondertitel:', 'Stay from $XXX per night'); ?></label>
      <input id="<?php echo $this->get_field_id( 'room_subtitle' ); ?>" name="<?php echo $this->get_field_name( 'room_subtitle' ); ?>" value="<?php echo $instance['room_subtitle']; ?>" placeholder="Stay from $XXX per night" style="width:100%;" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'room_description' ); ?>"><?php _e('Your room_description:', 'example'); ?></label>
      <textarea rows="6" id="<?php echo $this->get_field_id( 'room_description' ); ?>" name="<?php echo $this->get_field_name( 'room_description' ); ?>" style="width:100%;"><?php echo $instance['room_description']; ?></textarea>
  </p>
    <?php 
  }
    
  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['room_subtitle'] = strip_tags( $new_instance['room_subtitle'] );
    $instance['room_description'] = strip_tags( $new_instance['room_description'] );
    return $instance;
  }
} // Class dvb_general_facilities_widget ends here
?>
