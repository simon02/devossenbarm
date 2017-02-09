<?php
/**
 * @var array $classes
 */


if( !empty($instance['design']['hover']) ) $classes[] = 'ow-button-hover';
?>


<div class="<?php echo $instance['options']['horizontal'] ? "horizontal" : "" ?> box_style_3" id="general_facilities">
  <h3><?php echo $instance['title'] ?></h3>
  <ul class="">
    <?php 
      $icon_styles = array();
      if(!empty($instance['options']['my_icon_size'])) $icon_styles[] = 'font-size: '.intval($instance['options']['my_icon_size']).'px';
    ?>
    <?php foreach( $instance['facilities'] as $i => $facility ) : ?>
      <li>
        <?php echo siteorigin_widget_get_icon($facility['icon'], $icon_styles); 
        ?>
        <?php echo $facility['text']; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
