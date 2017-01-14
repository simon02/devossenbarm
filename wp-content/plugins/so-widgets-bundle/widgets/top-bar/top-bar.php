<?php
/*
Widget Name: Top Bar
Description: A widget that shows a top bar with a title and optional title on an image background.
Author: Simon Buelens
*/

class Top_Bar_Widget extends SiteOrigin_Widget {
  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'dvb-top-bar-widget',

        // The name of the widget for display purposes.
        __('Top Bar Widget', 'dvb-widgets-bundle'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
            'description' => __('A widget that shows a top bar with a title and optional title on an image background.', 'dvb-widgets-bundle'),
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
          'dvb-top-bar-widget-base',
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
      'subtitle' => array(
        'type' => 'text',
        'label' => __('Subtitle', 'so-widgets-bundle'),
      ),
      'background_image' => array(
        'type' => 'media',
        'library' => 'image',
        'label' => __('Background image', 'so-widgets-bundle'),
        'description' => __('Select an image to be used in the background', 'so-widgets-bundle'),
      ),

    );
  }

  function get_style_name($instance) {
    return '';
  }

}

siteorigin_widget_register('dvb-top-bar-widget', __FILE__, 'Top_Bar_Widget');
