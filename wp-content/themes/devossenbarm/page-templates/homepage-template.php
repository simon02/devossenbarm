<?php
/**
 * Template Name: Homepage Template
 *
 * A full width template
 *
 */

get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>

<header id="home-image-header">
  <a href="#met4inbed" style='position: absolute; top: -10px; right: 50px;'>
    <img src="wp-content/themes/devossenbarm/images/met4inbed_logo.png">
  </a>
  <img class="image-header" src="<?php echo $thumb_url; ?>">
  <h1 class="main-title text-center">
    <?php echo get_secondary_title(); ?>
  </h1>
  <div class="reservation-box-wrapper homepage">
    <div class="reservation-box">
      <div class="content">
      <h4 class="title">
        <i class="fa fa-lock"></i>
        <?php esc_html_e('Make a reservation', 'devossenbarm'); ?>
      </h4>
        <!-- replace this with a template part - can't figure it out though -->
        <form action="https://reservations.cubilis.eu/b-and-b-de-vossenbarm-snellegem/Rooms/Select">
          <input type="hidden" value="<?php echo __('Cubilis Taal Code', 'devossenbarm'); ?>" id="language" name="language">
          <input rel="datepicker" data-alt-field="#arrival_hidden" id="arrival" type="text" placeholder="<?php esc_html_e('Aankomstdatum', 'devossenbarm'); ?>">
          <input type="hidden" name="arrival" id="arrival_hidden">
          <input rel="datepicker" data-alt-field="#departure_hidden" id="departure" type="text" placeholder="<?php esc_html_e('Vertrekdatum', 'devossenbarm'); ?>">
          <input type="hidden" name="departure" id="departure_hidden">
          <input type="submit" name="" value="<?php esc_html_e('Bekijk Beschikbaarheid', 'devossenbarm'); ?>">
        </form>
        <div class="advantages">
          <ul>
            <li>
              <i class="fa fa-check"></i> <?php esc_html_e('Best Rate Guaranteed', 'devossenbarm'); ?>
            </li>
            <li>
              <i class="fa fa-check"></i> <?php esc_html_e('Book fast &amp; simple', 'devossenbarm'); ?>
            </li>
            <li>
              <i class="fa fa-check"></i> <?php esc_html_e('Breakfast is included', 'devossenbarm'); ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="centre">
      <?php
        the_content();
      ?>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

    <?php
    get_footer();
    ?>