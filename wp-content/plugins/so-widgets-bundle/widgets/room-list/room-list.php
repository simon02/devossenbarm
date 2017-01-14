<?php
/*
Widget Name: Room List
Description: A list of rooms for usage by De Vossenbarm
Author: Simon Buelens
*/

class Room_List_Widget extends SiteOrigin_Widget {
  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'dvb-room-list',

        // The name of the widget for display purposes.
        __('Room List Widget', 'dvb-widgets-bundle'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('A Room List widget', 'dvb-widgets-bundle'),
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
          'dvb-room-list-base',
          plugin_dir_url(__FILE__) . 'css/style.css',
          array(),
          SOW_BUNDLE_VERSION
        ),
      )
    );
  }

  function get_widget_form() {
    return array(

      'rooms' => array(
        'type' => 'repeater',
        'label' => __('Rooms'),
        'item_name' => __('Room', 'so-widgets-bundle'),
        'item_label' => array(
          'selector' => "[id*='room-list-title']",
          'update_event' => 'change',
          'value_method' => 'val'
        ),
        'fields' => array(
          'title' => array(
            'type' => 'text',
            'label' => __('Title', 'so-widgets-bundle'),
          ),
          'subtitle' => array(
            'type' => 'text',
            'label' => __('Subtitle', 'so-widgets-bundle'),
          ),
          'description' => array(
            'type' => 'text',
            'label' => __('Description', 'so-widgets-bundle'),
            'description' => __('Keep it short'),
          ),
          'image' => array(
            'type' => 'media',
            'label' => __('Image', 'so-widgets-bundle'),
          ),
          'url' => array(
            'type' => 'link',
            'label' => __('Link to room', 'so-widgets-bundle'),
          ),
        )
      ),

    );
  }

  function get_style_name($instance) {
    return '';
  }

}

siteorigin_widget_register('dvb-room-list', __FILE__, 'Room_List_Widget');
