<?php
/*
Widget Name: Vossenbarm Testimonial
Description: Display some testimonials.
Author: SiteOrigin
Author URI: https://siteorigin.com
*/

class Vossenbarm_Widgets_Testimonial_Widget extends SiteOrigin_Widget {

  function __construct() {
    parent::__construct(
      'dvb-testimonial',
      __('Vossenbarm Testimonial', 'so-widgets-bundle'),
      array(
        'description' => __('Share your product/service testimonials in a variety of different ways.', 'so-widgets-bundle'),
      ),
      array(

      ),
      false,
      plugin_dir_path( __FILE__ )
    );
  }

  function initialize(){
    $this->register_frontend_styles( array(
      array(
        'dvb-testimonial',
        plugin_dir_url(__FILE__) . 'css/style.css'
      )
    ) );
  }

  function get_widget_form(){
    return array(
      'title' => array(
        'type' => 'text',
        'label' => __('Title', 'so-widgets-bundle'),
      ),
      'testimonials' => array(
        'type' => 'repeater',
        'label' => __( 'Testimonials', 'so-widgets-bundle' ),
        'item_name'  => __( 'Testimonial', 'so-widgets-bundle' ),
        'item_label' => array(
          'selector'     => "[id*='testimonials-name']",
          'update_event' => 'change',
          'value_method' => 'val'
        ),
        'fields' => array(
          'title' => array(
            'type' => 'text',
            'label' => __('Title', 'so-widgets-bundle'),
            'description' => __('Title of the testimional', 'so-widgets-bundle'),
          ),

          'text' => array(
            'type' => 'tinymce',
            'label' => __('Text', 'so-widgets-bundle'),
            'description' => __('What your customer had to say', 'so-widgets-bundle'),
          ),

          'attribution' => array(
            'type' => 'tinymce',
            'label' => __('URL', 'so-widgets-bundle'),
            'description' => __('Author name + extra\'s', 'so-widgets-bundle'),
          ),
        )
      ),
    );
  }

  function get_template_variables( $instance, $args ){
    return array(
      'testimonials' => !empty($instance['testimonials']) ? $instance['testimonials'] : array(),
    );
  }

}

siteorigin_widget_register( 'dvb-testimonial', __FILE__, 'Vossenbarm_Widgets_Testimonial_Widget' );
 