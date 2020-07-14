<?php
/**
 * Template Name: Contact Page Template
 *
 * Displays the Contact Page Template of the theme.
 *
 */
?>

<?php get_header();

   do_action( 'ample_before_body_content' ); ?>
   <header>
      <div id="header">
         <div class="h1">
                <h1><span><?php esc_html_e('Contact', 'contact') ?></span>
                <span class="tagline"><?php echo get_secondary_title(); ?></span></h1>
            </div>
        </div>
    </header>

   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
      <div class="centre">
            <!-- Contact Form | START -->
         <div id="contact">
          <div class="blocktitle">
          <span><?php esc_html_e('We are happy to help you with any questions', 'devossenbarm'); ?></span>
          </div>

          <?php
              the_content();
            ?>

        </div>
        <!-- Contact Form | END -->
        <div class='text-center'>
          <h3 style="margin:0;"><strong><a href="tel:+32 475 31 45 36">+32 475 31 45 36</a></strong></h3>
          <p class='m20'><a href="mailto:info@devossenbarm.be">info@devossenbarm.be</a><br />
          Hildeghemweg 5, 8490 Snellegem, BELGIUM<br />
          <div>
            <a href="https://www.facebook.com/pg/devossenbarm" target="_blank" style='color: #3B5998 !important; font-size: 130%'>
              <i class="fa fa-facebook-square"></i> <strong><?php echo __('Visit us on Facebook', 'devossenbarm'); ?></strong>
            </a>
          </div>
        </div>
      </div>
      <!-- Google Map | START -->
       <div id="map">
         <iframe width="100%" height="520" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.be/maps?q=Hildeghemweg+5,+Snellegem&amp;ie=UTF8&amp;hq=&amp;hnear=Hildeghemweg+5,+Snellegem+8490+Jabbeke,+West-Vlaanderen,+Vlaams+Gewest&amp;ll=51.160094,3.102003&amp;spn=0.090332,0.154324&amp;t=m&amp;z=11&amp;output=embed"></iframe>
      </div>

      <!-- Google Map | END -->

        <?php
        get_footer();
        ?>
      </main><!-- #main -->
   </div><!-- #primary -->
