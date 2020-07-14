<?php
/*
Widget Name: Room Reservation 
Description: Shows a form people can use to check if a room is available
Author: Simon Buelens
*/

class Reservation_Room_Widget extends SiteOrigin_Widget {
  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'dvb-reservation-room',

        // The name of the widget for display purposes.
        __('Room Reservation Widget', 'dvb-widgets-bundle'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('A Room Reservation widget', 'dvb-widgets-bundle'),
        ),

        //The $control_options array, which is passed through to WP_Widget
        array(
        ),

        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
        false,

        //The $base_folder path string.
        plugin_dir_path(__FILE__)
    );
  }

  function initialize() {
    $this->register_frontend_styles(
      array(
        array(
          'dvb-reservation-room-base',
          // plugin_dir_url(__FILE__) . 'css/style.css',
          array(),
          SOW_BUNDLE_VERSION
        ),
      )
    );
  }

  function get_widget_form() {
    return array(

      'room_id' => array(
        'type' => 'text',
        'label' => __('Room ID from Cubulis'),
      ),

      'price' => array(
        'type' => 'text',
        'label' => __('Starting price for the room'),
      ),

    );
  }

  function get_style_name($instance) {
    return '';
  }

  function get_template_variables( $instance, $args ){
    return array(
      'room_id' => $instance['room_id'],
      'price' => $instance['price'],
      'lang' => explode('_', pll_current_language('locale'))[0],
    );
  }

}

siteorigin_widget_register('dvb-reservation-room', __FILE__, 'Reservation_Room_Widget');
