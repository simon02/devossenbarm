<?php
/*
Widget Name: General Facilities
Description: A simple general facilities widget.
Author: Simon Buelens
*/

class General_Facilities_Widget extends SiteOrigin_Widget {
  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'dvb-general-facilities',

        // The name of the widget for display purposes.
        __('General Facilities Widget', 'dvb-widgets-bundle'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('A general facilities widget', 'dvb-widgets-bundle'),
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
          'dvb-general-facilities-base',
          plugin_dir_url(__FILE__) . 'css/style.css',
          array(),
          SOW_BUNDLE_VERSION
        ),
      )
    );
  }

  function get_widget_form() {
    return array(
      'title' => array(
        'type' => 'text',
        'label' => __('Title', 'so-widgets-bundle'),
      ),

      'facilities' => array(
        'type' => 'repeater',
        'label' => __('Facilities'),
        'item_label' => array(
          'selector' => "[id*='general-facilities-title']",
          'update_event' => 'change',
          'value_method' => 'val'
        ),
        'fields' => array(
          // The Icon

          'icon' => array(
            'type' => 'icon',
            'label' => __('Icon', 'so-widgets-bundle'),
          ),

          // The text next to the icon

          'text' => array(
            'type' => 'text',
            'label' => __('Title text', 'so-widgets-bundle'),
          ),
        )
      ),

    );
  }

  function get_style_name($instance) {
    return '';
  }

}

siteorigin_widget_register('dvb-general-facilities', __FILE__, 'General_Facilities_Widget');
