<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

      <div id="content" class="clearfix row" style="margin-top:10vh; margin-bottom:10vh">

        <div id="main" class="clearfix" role="main" style="padding-right:20rem;padding-left:10rem; border:0px red solid">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <!-- <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article"> -->

            <!-- <section class="post_content"> -->
            <section class="post_content">
                          <h1><strong>About</strong></h1>
            <p>&nbsp;</p>
            <p>The University of Rochester’s Hartnett Gallery is a student-supported, professional art gallery.  Named for alumnus John B. Hartnett, this unique gallery space was designed by the renowned architects of I.M. Pei and Associates in 1972.  Hartnett schedules and presents 5 to 7 exhibitions each academic year.  These vary from solo shows to group exhibitions featuring local, state, national, and international artists, with an undergraduate juried exhibition held each year.  A wide variety of media and genres are shown, including sculpture, photography, painting, video, and installation work, as well as curatorial and community projects.  On occasion, Hartnett Gallery also plans exhibitions in conjunction with local institutions such as the Memorial Art Gallery and the Visual Studies Workshop. </p>
            <p>Admission to the gallery, receptions, and presentations is free and the gallery is open to the public. </p>

            <p> &nbsp <p>
            <h4><strong>Gallery Hours</strong></h4>
            <p>Tuesday to Friday, 11:00am to 7:00pm</p>
            <p>Saturday and Sunday, 12 Noon to 5:00pm</p>
            <p>Closed Monday</p>
            <p>&nbsp;<br>
            The gallery is located on the 2nd Floor of Wilson Commons on the University of Rochester’s River Campus
            <p>&nbsp;<br>

            <div style="background-color:rgb(202,58,21); color:white; padding-left:2vw; padding-right:2vw; padding-top:2vh;padding-bottom:2vh; display: inline-block;">
            The Hartnett Gallery<br>
            201 Wilson Commons<br>
            University of Rochester<br>
            Rochester, NY 14627<br>
            (585) 275-4188</p>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            </section>

            <!-- </section> -->

            <footer>

              <p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>

            </footer>

          <!-- </article> -->

          <?php endwhile; ?>


          <!-- <?php else : ?>

          <article id="post-not-found">
              <header>
                <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
              </header>
              <section class="post_content">
                <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
              </section>
              <footer>
              </footer>
          </article>

          <?php endif; ?> -->

        </div>

      </div>
<style>
body{
  background-image: url('/wp-content/themes/wordpress-bootstrap-master/hartnett/proposal_old.svg');
  height:100vh;
  background-size: 100%;
  background-attachment: fixed;
}
</style>

<?php get_footer(); ?>