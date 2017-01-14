<?php
/**
 * Template Name: Full Width Template
 *
 * A full width template
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <?php
      the_content();
    ?>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
?>
