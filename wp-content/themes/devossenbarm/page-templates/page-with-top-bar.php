<?php
/**
 * Template Name: Page With Top Bar
 *
 * A full width template
 *
 */

get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>

 <header>
    <div id="header">
       <div class="h1">
              <h1><span><?php echo get_the_title(); ?></span>
              <span class="tagline"><?php echo get_secondary_title(); ?></span></h1>
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