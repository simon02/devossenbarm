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

<header id="home-image-header" style="background-image: url(<?php echo $thumb_url; ?>)">
  <div class="centre">
    <h1 class="main-title text-center">
      Welcome to charming B&amp;B De Vossenbarm
    </h1>
      <div class="reservation-box homepage">
        <div class="content">
        <h4 class="title">
          <i class="fa fa-lock"></i>
          Make a reservation
        </h4>
          <!-- replace this with a template part - can't figure it out though -->
          <form action="/base-hotel/restaurant.php#menu" method="post">
            <input type="text" name="arrival" id="arrival" placeholder="Arrival date">
            <input type="text" name="departure" id="departure" placeholder="Departure date">
            <input type="submit" name="" value="Check Availability">
          </form>
          <div class="advantages">
            <ul>
              <li>
                <i class="fa fa-check"></i> Best rate guaranteed
              </li>
              <li>
                <i class="fa fa-check"></i> Book fast &amp; simple
              </li>
              <li>
                <i class="fa fa-check"></i> Breakfast is included
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
