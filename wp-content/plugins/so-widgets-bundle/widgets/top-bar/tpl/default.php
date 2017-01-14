<?php
/**
 * @var array $classes
 */
?>

<header>
  <?php
    if( !empty($instance['background_image']) ) {
      $attachment = wp_get_attachment_image_src( $instance['background_image'], $size );
      if(!empty($attachment)) {
        $background_style = 'background-image: url(' . sow_esc_url($attachment[0]) . ')';
      }
    }
  ?>
  <div id="header" style="<?php echo $background_style; ?>">
      <div class="h1">
            <h1><span><?php echo $instance['title']; ?></span>
            <span class="tagline"><?php echo $instance['subtitle']; ?></span></h1>
        </div>
    </div>
</header>