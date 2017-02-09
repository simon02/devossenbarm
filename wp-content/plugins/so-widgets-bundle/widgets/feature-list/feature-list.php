<?php
/*
Widget Name: Vossenbarm Feature List
Description: A widget that shows an overview of multiple things to do in a table, each with their own row. A little image comes first, then an explanation.
Author: Simon Buelens
*/

class Vossenbarm_Widget_Feature_List extends SiteOrigin_Widget {
  function __construct() {
    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

    //Call the parent constructor with the required arguments.
    parent::__construct(
        // The unique id for your widget.
        'dvb-feature-list-widget',

        // The name of the widget for display purposes.
        __('Vossenbarm Feature List Widget', 'dvb-widgets-bundle'),

        // The $widget_options array, which is passed through to WP_Widget.
        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
        array(
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
          'dvb-feature-list-widget-base',
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

      'features' => array(
        'type' => 'repeater',
        'label' => __('Features'),
        'item_label' => array(
          'selector' => "[id*='features-title']",
          'update_event' => 'change',
          'value_method' => 'val'
        ),
        'fields' => array(
          // The Icon

          'image' => array(
            'type' => 'media',
            'label' => __('Image', 'so-widgets-bundle'),
          ),

          // The text next to the icon

          'content' => array(
            'type' => 'tinymce',
            'label' => __('Feature text', 'so-widgets-bundle'),
          ),
        )
      ),

      'options' => array(
        'type' => 'section',
        'label' => __('Extra Options', 'so-widgets-bundle'),
        'hide' => true,
        'fields' => array(
          'horizontal' => array(
            'type' => 'checkbox',
            'label' => __('Show horizontal', 'so-widgets-bundle'),
          ),
        ),
      )

    );
  }

  function get_style_name($instance) {
    return '';
  }

}

siteorigin_widget_register('dvb-feature-list-widget', __FILE__, 'Vossenbarm_Widget_Feature_List');
