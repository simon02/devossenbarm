<?php
/**
 * @var array $classes
 */


?>

<section id="rooms" class="list">
  <?php foreach( $instance['rooms'] as $i => $room ) : ?>
    <div class="item">
      <div class="container">
            <div class="imgcontainer" style='max-height: 400px;'>
              <?php echo wp_get_attachment_image($room['image'], nil); ?>
            </div>
            <div class="details">
              <?php
                $url_attributes['href'] = sow_esc_url($room['url']);
                $url_attributes['title'] = esc_attr($room['title']);
              ?>
              <a <?php foreach($url_attributes as $name => $val) echo $name . '="' . $val . '" ' ?>>
                <h3 class="title"><?php echo $room['title'] ?><br />
                <span><?php echo $room['subtitle'] ?></span></h3>
                <p><?php echo $room['description'] ?></p>
                <div class="button"><span data-hover="View Room">View Room</span></div>
              </a>
            </div>
        </div>
    </div>
  <?php endforeach ?>
</section>