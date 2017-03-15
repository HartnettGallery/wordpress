      <!-- <footer role="contentinfo" style="background-color:black;">

        <div id="inner-footer" class="clearfix">

              <div id="widget-footer" class="clearfix row">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
                <?php endif; ?>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
                <?php endif; ?>
              </div>

          <nav class="clearfix">
            <?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
          </nav>

          <p class="pull-right"><a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a></p>

          <p class="attribution">&copy; <?php bloginfo('name'); ?></p>

        </div>

      </footer> -->


      <footer class="bd-footer text-muted" style='padding: 4rem 0;
                                                  margin-top: 4rem;
                                                  font-size: 85%;
                                                  background-color: black;'>
        <p>HARNETT</p>
        <div class="container">
          <p><a>Facebook</a></p>
          <p><a>Instagtam</a></p>
          <p><a>CCC</a></p>
        </div>
      </footer>

    </div> <!-- end #container -->

    <!--[if lt IE 7 ]>
        <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

    <?php wp_footer(); // js scripts are inserted using this function ?>

    <!-- remove this for production -->

    <script src="//localhost:35729/livereload.js"></script>

  </body>

</html>