<?php
/**
 * @var array $rows
 */


?>

<h2 class='text-center m30'>
  <?php echo esc_attr($instance['title']); ?>
</h3>
<div class="vossenbarm-feature-list">
  <?php foreach ($instance['features'] as $feature) : ?>
    <div class="vossenbarm-feature">
      <div class="image-container">
        <?php echo wp_get_attachment_image($feature['image'], nil); ?>
      </div>
      <div class="content">
        <?php echo wp_kses_post($feature['content']) ?>
      </div>
    </div>
  <?php endforeach ?>
</div>