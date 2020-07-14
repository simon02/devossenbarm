<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devossenbarm
 */

?>

	</div><!-- #content -->

    <!-- Footer | START -->
    <footer id="colophon" class="site-footer" role="contentinfo">
      <div id='footer'>
        <div class="centre">
          <!-- Subscribe / Social | START -->
          <!-- <div class="news">
            <div class="title"><span>News &amp; Offers</span></div>
              <div class="subscribe">
                  <form>
                      <input name="email" type="text" placeholder="Your email address" />
                      <button><span data-hover="Sign Up">Sign Up</span></button>
                  </form>
              </div>
              <div class="social">
                <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
              </div>
          </div> -->
          <!-- Subscribe / Social | END -->
          <!-- Contact Details | START -->
          <div class="contact">
            <div>
              <strong class="phone"><a href="tel:+32 475 31 45 36">+32 475 31 45 36</a></strong><br />
              <a href="mailto:info@devossenbarm.be">info@devossenbarm.be</a><br />
              <a href="https://www.facebook.com/pg/devossenbarm" target="_blank"><i class="fa fa-facebook-square"></i> <strong><?php echo __('Visit us on Facebook', 'devossenbarm'); ?></strong></a>
            </div>
            <div>
              <i class="fa fa-map-marker"></i>Hildeghemweg 5<br /> 8490 Snellegem<br />BELGIUM<br />
            </div>
            <div class="clear"></div>
          </div>
          <!-- Contact Details | END -->
          <div class="dark"></div>
        </div>
      </div>
      <!-- Footer Links | START -->
      <div id="footerlinks">
          <div class="centre">
              <span>Copyright &copy; <script>var d = new Date(); document.write(d.getFullYear());</script> <strong>De Vossenbarm</strong></span>
            </div>
        </div>
        <!-- Footer Links | END -->
    </footer>
    <!-- Footer | END -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
