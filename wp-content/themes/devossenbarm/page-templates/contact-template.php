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
               <img src="http://dummyimage.com/1200x400" width="1200" height="400" alt="" />
                <form>
                    <div class="col">
                        <div class="field"><input name="contact-name" type="text" placeholder="Your Name" id="contact-name" /></div>
                        <div class="field"><input name="contact-email" type="text" placeholder="Email Address" id="contact-email" /></div>
                        <div class="field"><input name="contact-phone" type="text" placeholder="Phone Number" id="contact-phone" /></div>
                    </div>
                    <div class="col">
                        <div class="field calendar"><input name="contact-arrival" type="text" placeholder="Arrival Date" id="contact-arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                        <div class="field calendar"><input name="contact-departure" type="text" placeholder="Departure Date" id="contact-departure" readonly /><i class="fa fa-calendar-o"></i></div>
                        <div class="select">
                           <select name="contact-rooms" id="contact-rooms" class="infants">
                                <option value="1" selected="selected">1 Room</option>
                                <option value="2" >2 Rooms</option>
                                <option value="3" >3 Rooms</option>
                            </select>
                            <select name="contact-adults" id="contact-adults" class="adults">
                                <option value="1" >1 Adult</option>
                                <option value="2" selected="selected">2 Adults</option>
                                <option value="3" >3 Adults</option>
                                <option value="4" >4 Adults</option>
                                <option value="5" >5 Adults</option>
                            </select>
                            <select name="contact-children" id="contact-children" class="children">
                                <option value="0" selected="selected">0 Children</option>
                                <option value="1" >1 Children</option>
                                <option value="2" >2 Children</option>
                                <option value="3" >3 Children</option>
                                <option value="4" >4 Children</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="field"><textarea name="contact-message" placeholder="Message" id="contact-message"></textarea></div>
                    </div>
                    <button><span data-hover="Send Booking Request">Send Booking Request</span></button>
                </form>
            </div>
            <!-- Contact Form | END -->
            <h2 style="margin:0;"><strong><a href="tel:+32 475 31 45 36">+32 475 31 45 36</a></strong></h2>
            <p style="margin:0;"><a href="mailto:info@devossenbarm.be">info@devossenbarm.be</a><br />
            Hildeghemweg 5, 8490 Snellegem, BELGIUM<br />
            <a href="location.html"><i class="fa fa-map-marker"></i> Explore Our Location</a></p>
        </div>
        <!-- Google Map | START -->
         <div id="map">
           <iframe width="100%" height="520" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.be/maps?q=Hildeghemweg+5,+Snellegem&amp;ie=UTF8&amp;hq=&amp;hnear=Hildeghemweg+5,+Snellegem+8490+Jabbeke,+West-Vlaanderen,+Vlaams+Gewest&amp;ll=51.160094,3.102003&amp;spn=0.090332,0.154324&amp;t=m&amp;z=12&amp;output=embed"></iframe>
        </div>
        <!-- Google Map | END -->
      </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>