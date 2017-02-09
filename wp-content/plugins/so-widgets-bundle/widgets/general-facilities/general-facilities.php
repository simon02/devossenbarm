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
          'selector' => "[name*='text']",
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

      'options' => array(
        'type' => 'section',
        'label' => __('Extra Options', 'so-widgets-bundle'),
        'hide' => true,
        'fields' => array(
          'horizontal' => array(
            'type' => 'checkbox',
            'label' => __('Show horizontal', 'so-widgets-bundle'),
          ),
          'my_icon_size' => array(
            'type' => 'text',
            'label' => __('Icon size in pixels (optional)', 'so-widgets-bundle'),
          ),
        ),
      )

    );
  }

  function get_style_name($instance) {
    return '';
  }

}

siteorigin_widget_register('dvb-general-facilities', __FILE__, 'General_Facilities_Widget');

function hotel_icon_set_1( $icon_families ) {
    $icon_families['icon_set_1_icon'] = array(
        'name' => __( 'Hotel Icon Set 1', 'example-text-domain' ),
        'style_uri' => plugin_dir_url( __FILE__ ) . 'css/icon_set_1.css',
        'icons' => array(
          'icon_set_1_icon-1' => '!',
          'icon_set_1_icon-2' => '&quot;',
          'icon_set_1_icon-3' => '#',
          'icon_set_1_icon-4' => '$',
          'icon_set_1_icon-5' => '%',
          'icon_set_1_icon-6' => '&amp;',
          'icon_set_1_icon-7' => '',
          'icon_set_1_icon-8' => '(',
          'icon_set_1_icon-9' => ')',
          'icon_set_1_icon-10' => '*',
          'icon_set_1_icon-11' => '+',
          'icon_set_1_icon-12' => ',',
          'icon_set_1_icon-13' => '-',
          'icon_set_1_icon-14' => '.',
          'icon_set_1_icon-15' => '/',
          'icon_set_1_icon-16' => '0',
          'icon_set_1_icon-17' => '1',
          'icon_set_1_icon-18' => '2',
          'icon_set_1_icon-19' => '3',
          'icon_set_1_icon-20' => '4',
          'icon_set_1_icon-21' => '5',
          'icon_set_1_icon-22' => '5',
          'icon_set_1_icon-23' => '6',
          'icon_set_1_icon-24' => '7',
          'icon_set_1_icon-25' => '8',
          'icon_set_1_icon-26' => '9',
          'icon_set_1_icon-27' => ':',
          'icon_set_1_icon-27' => ';',
          'icon_set_1_icon-28' => '&lt;',
          'icon_set_1_icon-29' => '=',
          'icon_set_1_icon-30' => '&gt;',
          'icon_set_1_icon-31' => '?',
          'icon_set_1_icon-32' => '@',
          'icon_set_1_icon-33' => 'A',
          'icon_set_1_icon-34' => 'B',
          'icon_set_1_icon-35' => 'C',
          'icon_set_1_icon-36' => 'D',
          'icon_set_1_icon-37' => 'E',
          'icon_set_1_icon-38' => 'F',
          'icon_set_1_icon-39' => 'G',
          'icon_set_1_icon-40' => 'H',
          'icon_set_1_icon-41' => 'I',
          'icon_set_1_icon-42' => 'J',
          'icon_set_1_icon-43' => 'K',
          'icon_set_1_icon-44' => 'L',
          'icon_set_1_icon-45' => 'M',
          'icon_set_1_icon-46' => 'N',
          'icon_set_1_icon-47' => 'O',
          'icon_set_1_icon-48' => 'P',
          'icon_set_1_icon-49' => 'Q',
          'icon_set_1_icon-50' => 'R',
          'icon_set_1_icon-51' => 'S',
          'icon_set_1_icon-52' => 'T',
          'icon_set_1_icon-53' => 'U',
          'icon_set_1_icon-54' => 'V',
          'icon_set_1_icon-55' => 'W',
          'icon_set_1_icon-56' => 'X',
          'icon_set_1_icon-57' => 'Y',
          'icon_set_1_icon-58' => 'Z',
          'icon_set_1_icon-59' => '[',
          'icon_set_1_icon-60' => '\\',
          'icon_set_1_icon-61' => ']',
          'icon_set_1_icon-62' => '^',
          'icon_set_1_icon-63' => '_',
          'icon_set_1_icon-64' => '`',
          'icon_set_1_icon-65' => 'a',
          'icon_set_1_icon-66' => 'b',
          'icon_set_1_icon-67' => 'c',
          'icon_set_1_icon-68' => 'd',
          'icon_set_1_icon-69' => 'e',
          'icon_set_1_icon-70' => 'f',
          'icon_set_1_icon-71' => 'g',
          'icon_set_1_icon-72' => 'h',
          'icon_set_1_icon-73' => 'i',
          'icon_set_1_icon-74' => 'j',
          'icon_set_1_icon-75' => 'k',
          'icon_set_1_icon-76' => 'l',
          'icon_set_1_icon-77' => 'm',
          'icon_set_1_icon-78' => 'n',
          'icon_set_1_icon-79' => 'o',
          'icon_set_1_icon-80' => 'p',
          'icon_set_1_icon-81' => 'q',
          'icon_set_1_icon-82' => 'r',
          'icon_set_1_icon-83' => 's',
          'icon_set_1_icon-84' => 't',
          'icon_set_1_icon-85' => 'u',
          'icon_set_1_icon-86' => 'v',
          'icon_set_1_icon-87' => 'w',
          'icon_set_1_icon-88' => 'x',
          'icon_set_1_icon-89' => 'y',
          'icon_set_1_icon-90' => 'z',
          'icon_set_1_icon-91' => '{',
          'icon_set_1_icon-92' => '|',
          'icon_set_1_icon-93' => '}',
          'icon_set_1_icon-94' => '~',
        ),
    );
    return $icon_families;
}
function hotel_icon_set_2( $icon_families ) {
  $icon_families['icon_set_2_icon'] = array(
    'name' => __( 'Hotel Icon Set 2', 'example-text-domain' ),
    'style_uri' => plugin_dir_url( __FILE__ ) . 'css/icon_set_2.css',
    'icons' => array(
      'icon_set_2_icon-102' => '󨀃',
      'icon_set_2_icon-103' => '󨀓',
      'icon_set_2_icon-105' => '󨀳',
      'icon_set_2_icon-106' => '󨁃',
      'icon_set_2_icon-107' => '󨁓',
      'icon_set_2_icon-108' => '󨁣',
      'icon_set_2_icon-109' => '󨁳',
      'icon_set_2_icon-110' => '󨂃',
      'icon_set_2_icon-111' => '󨂓',
      'icon_set_2_icon-112' => '󨂣',
      'icon_set_2_icon-104' => '󨂳',
      'icon_set_2_icon-114' => '󨃃',
      'icon_set_2_icon-115' => '󨃓',
      'icon_set_2_icon-116' => '󨃣',
      'icon_set_2_icon-117' => '󨃳',
      'icon_set_2_icon-118' => '󨄃',
    )
  );
  return $icon_families;
}
add_filter( 'siteorigin_widgets_icon_families', 'hotel_icon_set_1' );
add_filter( 'siteorigin_widgets_icon_families', 'hotel_icon_set_2' );