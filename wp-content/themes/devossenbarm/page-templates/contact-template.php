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
                <span class="tagline"><?php esc_html_e('Get in touch with B&amp;B De Vossenbarm', 'contact') ?></span></h1>
            </div>
        </div>
    </header>

   <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
      <div class="centre">
            <!-- Contact Form | START -->
         <div id="contact">
          <div class="blocktitle">
          <span>We are happy to help you with any questions</span>
          </div>
                <form>
                    <div class="col">
                        <div class="field"><input name="contact-name" type="text" placeholder="Your Name" id="contact-name" /></div>
                    </div>
                    <div class="col">
                        <div class="field"><input name="contact-email" type="text" placeholder="Email Address" id="contact-email" /></div>
                    </div>
                    <div class="col">
                        <div class="field"><input name="contact-phone" type="text" placeholder="Phone Number" id="contact-phone" /></div>
                    </div>
                    <div class="col col-3">
                        <div class="field"><textarea name="contact-message" placeholder="Message" id="contact-message"></textarea></div>
                    </div>
                    <div class="col col-3">
                      <button><span data-hover="Send Booking Request">Send Message</span></button>
                    </div>
                </form>
            </div>
            <!-- Contact Form | END -->
            <div class='text-center'>
              <h2 style="margin:0;"><strong><a href="tel:+32 475 31 45 36">+32 475 31 45 36</a></strong></h2>
              <p style="margin:0;"><a href="mailto:info@devossenbarm.be">info@devossenbarm.be</a><br />
              Hildeghemweg 5, 8490 Snellegem, BELGIUM<br />
              <a href="/tourist-info.html"><i class="fa fa-map-marker"></i> Explore Our Location</a></p>
            </div>
        </div>
        <!-- Google Map | START -->
         <div id="map">
           <iframe width="100%" height="520" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.be/maps?q=Hildeghemweg+5,+Snellegem&amp;ie=UTF8&amp;hq=&amp;hnear=Hildeghemweg+5,+Snellegem+8490+Jabbeke,+West-Vlaanderen,+Vlaams+Gewest&amp;ll=51.160094,3.102003&amp;spn=0.090332,0.154324&amp;t=m&amp;z=11&amp;output=embed"></iframe>
        </div>
        <!-- Google Map | END -->
      </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();
?>