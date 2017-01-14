<?php
/**
 * @var array $classes
 */


if( !empty($instance['design']['hover']) ) $classes[] = 'ow-button-hover';
?>


<div class="box_style_3" id="general_facilities">
  <h3><?php echo $instance['title'] ?></h3>
  <ul>
    <?php foreach( $instance['facilities'] as $i => $facility ) : ?>
      <li>
        <?php echo siteorigin_widget_get_icon($facility['icon']); ?>
        <?php echo $facility['text']; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
